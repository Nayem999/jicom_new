<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfers extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
            redirect('login');            
        }

        if(!$this->site->permission('transfers'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');
        
        $this->load->model('purchases_model');
        $this->load->model('transfers_model');
        
        $this->allowed_types = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|zip';
              
		$ses_unset=array('error'=>'error','success'=>'success','message'=>'message');
		$this->session->unset_userdata($ses_unset);
        
    } 

    function index() { 
        
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
        
        $this->data['page_title'] = lang('purchases');
        
        $bc = array(
            array(
                'link' => '#',
                'page' => lang('Transfers')
            )
        );
        
        $meta = array(
            'page_title' => lang('Transfers'),
            'bc' => $bc
        );
        $this->data['transfer_list'] = $this->transfers_model->getAllTransfers();
        
        $this->page_construct('transfers/index', $this->data, $meta); 
        
    }     

    function get_transfers($today = NULL) { 

        $this->load->library('datatables');
        
        $this->datatables->select($this->db->dbprefix('transfers') . ".id as id, " . 
            $this->db->dbprefix('transfers') . ".date as date,to_warehouse_name, from_warehouse_name, total, note, attachment", FALSE); 

        $this->datatables->from('transfers');
        
        $this->datatables->group_by('transfers.id'); 
        $actdata =''; 
        if($data = $this->session->userdata('group_id')==1){         

        //  $actdata = "<a href='" . site_url('transfers/edit/$1') . "' title='View' class='tip btn btn-warning btn-xs'><i class='fa fa-file-text-o'></i></a>";
        
        $actdata .= "<a href='" . site_url('transfers/delete/$1') . "' onClick=\"return confirm('" . lang('alert_x_purchase') . "')\" title='" . lang("delete_purchase") . "' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a>";
        }  

         $this->datatables->add_column("Actions", "
        <div class='text-center'>
        <div class='btn-group'>".$actdata."</div></div>", "id");
        
        if ($today != NULL) {
            
            $this->datatables->like('date', $today);
            
        }
        
        $this->datatables->unset_column('id')->unset_column('supplier_id');
        
        echo $this->datatables->generate();
        
    }

    function add() {
        if(!$this->site->route_permission('transfers_add'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        if(!$this->session->userdata('from_warehouse')){
            $this->form_validation->set_rules('warehouse', lang('warehouse'), 'required');
            if ($this->form_validation->run() == true) {

                $fromwarehouse = array(
                    'from_warehouse'  => $this->input->post('warehouse'),
                );

                $this->session->set_userdata($fromwarehouse);  
                 redirect('transfers/add');
            }
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));       
            $this->data['page_title'] = lang('Products Transfers');
            $this->data['warehouses'] = $this->site->getAllStores(); 
            $this->data['warehouses'] = $this->site->getAllFactoryStores();
            $this->load->view($this->theme.'transfers/fromWarehouse', $this->data, $meta); 
        } else {
        $this->form_validation->set_rules('date', lang('date'), 'required');
        if ($this->form_validation->run() == true) {
            
            $total = 0;            
            $i = isset($_POST['product_id']) ? sizeof($_POST['product_id']) : 0;     

            $from_store_info = $this->site->findeNameByID('stores', 'id',$this->session->userdata('from_warehouse'));       
            $to_store_info = $this->site->findeNameByID('stores', 'id',$this->input->post('towarehouse'));       
            
            for ($r = 0; $r < $i; $r++) {
                
                $item_id = $_POST['product_id'][$r];  
                $towarehouseID = $this->input->post('towarehouse');
                $fromwarehouseID = $this->session->userdata('from_warehouse') ;

                $item_qty = $_POST['quantity'][$r];                
                $item_cost = $_POST['cost'][$r]; 
                $display_item_cost = $_POST['display_cost'][$r]; 
                
                if ($item_id && $item_qty>0) { 
                    
                    /* if (!$this->site->getProductByID($item_id)) {
                        $this->session->set_flashdata('error', $this->lang->line("product_not_found") . " ( " . $item_id . " ).");
                        $this->add();                        
                    } */
                    $store_stock=$this->transfers_model->getProductStock($item_id,$from_store_info->store_type);
                    
                    if($store_stock>0)
                    {
                        $products[] = array(                    
                            'product_id' => $item_id,                    
                            'cost' => $item_cost,                    
                            'quantity' => $item_qty,                   
                            'display_cost' => $display_item_cost,                   
                            'subtotal' => ($item_cost * $item_qty),                    
                        );  
                        $total += ($item_cost * $item_qty);                    
                    }
                }
                
            }
                        
            
            if (!isset($products) || empty($products)) {                
                $this->form_validation->set_rules('product', lang("order_items"), 'required');                
            } else {                
                krsort($products);                
            }

            $fromwarehouse = $this->transfers_model->getSroteByID($this->session->userdata('from_warehouse'));
            $towarehouse = $this->transfers_model->getSroteByID($this->input->post('towarehouse')); 
            
            $data = array(                
                'date' => $this->input->post('date'),                 
                'note' => $this->input->post('note', TRUE),                
                'from_warehouse_id' => $this->session->userdata('from_warehouse'),
                'to_warehouse_id' => $this->input->post('towarehouse'), 
                'from_warehouse_name' =>$fromwarehouse->name,
                'to_warehouse_name' => $towarehouse->name,                
                'total' => $total,
                'status' => 'Pending',
                'reference' =>  $this->input->post('reference'), 
                'created_by' => $this->session->userdata('user_id'), 
            ); 
                                 
        }

        if ($this->form_validation->run() == true && $this->transfers_model->addtransfers($data, $products, $towarehouseID, $fromwarehouseID, $from_store_info->store_type)) { 
            $this->session->set_userdata('remove_spo', 1);
            $this->session->set_flashdata('message', lang('transfer_added'));            
            redirect("transfers"); 
            // $this->index();           
        }
            
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
            
            $this->data['suppliers'] = $this->site->getAllSuppliers();
            $this->data['warehouses'] = $this->site->getAllStores();             
            $this->data['page_title'] = lang('Add Transfers');
            
            $bc = array(
                array(
                    'link' => site_url('transfers'),
                    'page' => lang('Add Transfers')
                ),
                array(
                    'link' => '#',
                    'page' => lang('Add_transfers')
                )
            );
            
            $meta = array(
                'page_title' => lang('Add_transfers'),
                'bc' => $bc
            ); 
            $this->page_construct('transfers/add', $this->data, $meta); 
        }
        
    } 

    function edit($id){
        if(!$this->site->route_permission('transfers_edit'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }

        $this->form_validation->set_rules('date', lang('date'), 'required');

        if ($this->form_validation->run() == true) {

            $total = 0;
            $i = isset($_POST['product_id']) ? sizeof($_POST['product_id']) : 0;            
            
            for ($r = 0; $r < $i; $r++) {
                
                $item_id = $_POST['product_id'][$r]; 
                $item_qty = $_POST['quantity'][$r];                
                $item_cost = $_POST['cost'][$r]; 
                $display_item_cost = $_POST['display_cost'][$r]; 
                
                if ($item_id && $item_qty) { 

                    $products[] = array(                    
                        'product_id' => $item_id,                    
                        'cost' => $item_cost,                    
                        'quantity' => $item_qty,    
                        'transfers_id' =>  $id ,               
                        'display_cost' => $display_item_cost,                   
                        'subtotal' => ($item_cost * $item_qty),                    
                    );  
                    $total += ($item_cost * $item_qty);  
                    
                }
                
            }                        
            
            if (!isset($products) || empty($products)) {                
                $this->form_validation->set_rules('product', lang("order_items"), 'required');                
            } else {                
                krsort($products);                
            }

            $fromwarehouse = $this->input->post('from_warehouse_id');
            $towarehouse = $this->input->post('to_warehouse_id'); 
            
            $data = array(                
                'date' => $this->input->post('date'),                 
                'note' => $this->input->post('note', TRUE),               
                'total' => $total,
                'reference' =>  $this->input->post('reference'),
            ); 
            
        }
        if ($this->form_validation->run() == true && $this->transfers_model->UpdateTransfers($id,$data, $products, $fromwarehouse,$towarehouse)) { 
            $this->session->set_userdata('remove_spo', 1);
            $this->session->set_flashdata('message', lang('Product Transfer Successfully Updated'));            
            redirect("transfers");        
        }

        $this->data['transfer'] = $this->transfers_model->getTransfersByID($id);        
        $inv_items = $this->transfers_model->getAllTransfersItems($id); 

        $c = rand(100000, 9999999);
        
        foreach ($inv_items as $item) {

            $row = $this->site->getProductByID($item->product_id); 
            $row->id = $item->product_id;
            $row->qty = $item->quantity;            
            $row->cost = $item->cost;
            $row->store_qty = $item->store_qty;
            $row->display_cost = $item->display_cost;
            $ri = $this->Settings->item_addition ? $row->id : $c;
        
            $pr[$ri] = array(
                'id' => $ri,
                'item_id' => $item->product_id,
                'label' => $row->name . " (" . $row->code . ")",
                'row' => $row
            );            
            $c++;
            
        }            
        
        $this->data['items'] = json_encode($pr);
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));            
        $this->data['page_title'] = lang('edit_purchase');
        
        $bc = array(
            array(
                'link' => site_url('purchases'),
                'page' => lang('purchases')
            ),
            array(
                'link' => '#',
                'page' => lang('edit_purchase')
            )
        );
            
      
        $meta = array(
                'page_title' => 'Update transfers',
                'bc' => $bc
            ); 
        $this->page_construct('transfers/edit', $this->data, $meta); 

    }

    public function delete($id){
        if(!$this->site->route_permission('transfers_delete'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        if($this->transfers_model->Delete($id))
        {
            $this->session->set_flashdata('message', lang('Product Transfer Successfully Deleted'));            
        }
        else
        {
            $this->session->set_flashdata('error', lang('Product Transfer Failed Delete'));            
        }
        redirect("transfers");
    }

    function suggestions($id = NULL) {
          
        if ($id) {
            
            $row = $this->site->getProductByID($id);
            
            $row->qty = 1;
            $row->display_cost = $row->cost;
            
            $pr = array(
                'id' => str_replace(".", "", microtime(true)),
                'item_id' => $row->id,
                'label' => $row->name . " (" . $row->code . ")",
                'row' => $row
            );
            
            echo json_encode($pr);
            
            die();
            
        }
        
        $term = $this->input->get('term', TRUE);
        
        $rows = $this->transfers_model->getProductNames($term);

        if ($rows) {
            
            foreach ($rows as $row) {
                /* $rowSequence = $this->transfers_model->getSequenceByPrpID($row->id);
                    if( $rowSequence !=FALSE){
                     $sequence = '';
                     foreach ($rowSequence as $key => $value) {
                       
                         $sequence .= $value->sequence.','; 
                    }

                    $sequence = rtrim($sequence,",");
                    $row->SeqAll = $sequence ;

                    $row->SeqCount = sizeof($rowSequence) ;

                }else{
                     $row->SeqAll = '' ;
                     $row->SeqCount = 0 ;
                } */
                $row->SeqAll = '' ;
                $row->SeqCount = 0 ;
                $row->qty = 1;
                $row->display_cost = $row->cost;
                
                $pr[] = array(
                    'id' => str_replace(".", "", microtime(true)),
                    'item_id' => $row->id,
                    'label' => $row->name . " (" . $row->code . ") Qty".$row->store_qty,
                    'row' => $row
                );
                
            }
            
            echo json_encode($pr);
            
        } else {
            
            echo json_encode(array(
                array(
                    'id' => 0,
                    'label' => lang('no_match_found'),
                    'value' => $term
                )
            ));
            
        }
        
    } 

    function selectFromWarehouse(){
        $this->form_validation->set_rules('warehouse', lang('warehouse'), 'required');
        if ($this->form_validation->run() == true) {

            $fromwarehouse = array(
               'from_warehouse'  => $this->input->post('warehouse'),
            );

            $this->session->set_userdata($fromwarehouse);  
            redirect('transfers/add');
        }
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));       
        $this->data['page_title'] = lang('Products Transfers');
        // $this->data['warehouses'] = $this->site->getAllStores();
        $this->data['warehouses'] = $this->site->getAllFactoryStores();
        $this->load->view($this->theme.'transfers/fromWarehouse', $this->data, $meta); 
    }

    public function approve_transfer($id){
        $this->data['title'] = 'Approve Transfer';
        $this->data['id'] = $id;
        $this->load->view($this->theme.'transfers/approve', $this->data,$id);	
    }

    public function approve($id){


        $transfer_mst = $this->transfers_model->getTransfersByID($id);  
        $transfer_dtls = $this->transfers_model->getAllTransfersItems($id); 

        $total=0;
        foreach($transfer_dtls as $key=>$val){
            $products[] = array(                        
                'product_id' => $val->product_id,                
                'cost' => $val->cost,                
                'quantity' => $val->quantity,    
                'subtotal' => ($val->cost * $val->quantity),                
            );                          
            $total += ($val->cost * $val->quantity);
        }

        $data = array(
            'date' => date('Y-m-d H:i:s'),            
            'reference' => $transfer_mst->reference,             
            'note' =>$transfer_mst->note,             
            'supplier_id' => $transfer_mst->from_warehouse_id ,            
            'received' => 1,            
            'total' => $total,
            'deu' => $total,
            'purchase_type' => 2,
            'transfer_id' => $id,
            'created_by' => $this->session->userdata('user_id'),  
            'store_id' => $transfer_mst->to_warehouse_id ,   
        );  
        $dataAppr = array( 'status' => $this->input->post('status') );  
        
        if($this->transfers_model->updateStatusApprove($id,$dataAppr,$data,$products))
        {
            $this->session->set_flashdata('message', lang('Updated successfully'));        
            $this->index();
        }
        else
        {
            $this->session->set_flashdata('error', lang('Failed Updated'));        
            $this->index();
        }
                
    
    }

    function view($id = NULL) { 
        if(!$this->site->route_permission('transfers_view'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }

        $this->data['transfers_mst'] = $this->transfers_model->getTransfersByID($id);
        $this->data['transfers_dtls'] = $this->transfers_model->getAllTransfersItems($id);
               
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
        $this->data['page_title'] = lang('View Production');
        
        $this->load->view($this->theme . 'transfers/view', $this->data);
        
    }

    function chalan($id = NULL) { 

        $this->data['transfers_mst'] = $this->transfers_model->getTransfersByID($id);
        $this->data['transfers_dtls'] = $this->transfers_model->getAllTransfersItems($id);
               
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
        $this->data['page_title'] = lang('Chalan Production');
        
        $this->load->view($this->theme . 'transfers/chalan', $this->data);
        
    }
}