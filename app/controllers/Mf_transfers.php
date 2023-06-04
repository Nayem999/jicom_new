<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf_transfers extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
            redirect('login');            
        }

        if(!$this->site->permission('mf_transfers'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');
        
        $this->load->model('purchases_model');
        $this->load->model('transfers_model');
        
        $this->allowed_types = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|zip';

        
    } 

    function index() { 
        $this->session->set_userdata('remove_spo', 1);
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
        
        $this->data['page_title'] = lang('purchases');
        
        $bc = array(
            array(
                'link' => '#',
                'page' => lang('Raw Material Transfers')
            )
        );
        
        $meta = array(
            'page_title' => lang('Raw Material Transfers'),
            'bc' => $bc
        );
        
        // transfer log query here
        $this->db->select(" mf_material_adjust.created_at as date, mf_material_adjust.id as id, mf_material_adjust.adjust_qty as qty, mf_material_adjust.from_factory as from,mf_material_adjust.to_factory as to, from_stores.name as from_factory_name, to_stores.name as to_factory_name,mf_material.name as material_name, mf_unit.name as unit_name");
        $this->db->from("mf_material_adjust");
        $this->db->join("stores as from_stores","from_stores.id=mf_material_adjust.from_factory");
        $this->db->join("stores as to_stores","to_stores.id=mf_material_adjust.to_factory");
        $this->db->join("mf_material","mf_material.id=mf_material_adjust.material_id");
        $this->db->join("mf_unit","mf_material.uom_id=mf_unit.id", 'left');
        $this->db->group_by('mf_material_adjust.created_at');
        $this->db->order_by("mf_material_adjust.id",'desc');

        $this->data['transfer_list'] = $this->db->get()->result();

        // echo "<pre>";
        // print_r($this->data['transfer_list']);
        // die;
        
        $this->page_construct('mf_transfers/index', $this->data, $meta); 
        
    }     

    function get_transfers($today = NULL) { 

        $this->load->library('datatables');
        
        $this->datatables->select($this->db->dbprefix('transfers') . ".id as id, " . 
            $this->db->dbprefix('transfers') . ".date as date,to_warehouse_name, from_warehouse_name, total, note, attachment", FALSE); 

        $this->datatables->from('transfers');
        
        $this->datatables->group_by('transfers.id'); 
        $actdata =''; 
        if($data = $this->session->userdata('group_id')==1){         

        //  $actdata = "<a href='" . site_url('mf_transfers/edit/$1') . "' title='View' class='tip btn btn-warning btn-xs'><i class='fa fa-file-text-o'></i></a>";
        
        $actdata .= "<a href='" . site_url('mf_transfers/delete/$1') . "' onClick=\"return confirm('" . lang('alert_x_purchase') . "')\" title='" . lang("delete_purchase") . "' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a>";
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
        if(!$this->site->route_permission('mf_transfers_add'))
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
                 redirect('mf_transfers/add');
            }
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));       
            $this->data['page_title'] = lang('Raw Material Transfers');
            // $this->data['warehouses'] = $this->site->getAllStores(); 
            $this->data['warehouses'] = $this->site->getAllFactoryStores();
            $this->load->view($this->theme.'mf_transfers/fromWarehouse', $this->data, $meta); 
        } else {
        $this->form_validation->set_rules('date', lang('date'), 'required');
        if ($this->form_validation->run() == true) {
            
          

            $total = 0;            
            // $i = isset($_POST['product_id']) ? sizeof($_POST['product_id']) : 0;     

            $from_store_info = $this->site->findeNameByID('stores', 'id',$this->session->userdata('from_warehouse'));       
            $to_store_info = $this->site->findeNameByID('stores', 'id',$this->input->post('towarehouse'));       
            
            // for ($r = 0; $r < $i; $r++) {
                
                // $item_id = $_POST['product_id'];  
                // $towarehouseID = $this->input->post('towarehouse');
                // $fromwarehouseID = $this->session->userdata('from_warehouse') ;

                // $item_qty = $_POST['quantity'][$r];                
                // $item_cost = $_POST['cost'][$r]; 
                // $display_item_cost = $_POST['display_cost'][$r]; 
                
                
                if ($this->input->server('REQUEST_METHOD') == 'POST') {

                    $i=0;
                    $this->db->trans_start();

                    $allMaterialsArr = $_POST["product_id"];
                    $allQtyArr = $_POST["quantity"];
                    $toFactory = $_POST["towarehouse"];
                    $displayCostArr = $_POST["display_cost"];
                    $from_warehouseID =  $this->session->userdata('from_warehouse');

                    $from_warehouseInfo =  $this->site->findeNameByID('stores', 'id', $from_warehouseID);

                    $supplierId = $_POST["supplier_id"];

                    $customerId = $_POST["customer_id"];

                    $grandTotal = number_format((float) $_POST["gtotal"], 2, '.', '');

                    $mf_tr_data = [
                        "note"=>$_POST["note"],
                        "created_at"=>date("Y-m-d H:i:s")
                    ];
                    
                    if($this->db->insert("mf_transfer", $mf_tr_data)){
                        $mfTrId = $this->db->insert_id();
                    }

                  /*   if($mfTrId){
                        // material ids
                        $materialIds = $_POST["packaging_material"];
                        // material qty
                        $materialQts = $_POST["pk_quantity"];
                        if(is_array($materialIds) && count($materialIds) > 0){
                            
                            foreach ($materialIds as $key => $value) {
                                
                                $findPkMaterial = $this->db->select("*")->from("mf_material_packaging_store_qty")->where('id',$value)->get()->row();

                                if($findPkMaterial){
                                    $currentQty = $findPkMaterial->quantity;

                                    if($materialQts[$key] > 0){
                                        $newQty = $currentQty - $materialQts[$key];
    
                                        // decrease pk material qty
                                        $decreaseQty = $this->db->where('id',$value)->update('mf_material_packaging_store_qty',['quantity'=>$newQty]);

                                        // insert data into material adjust log
                                        $adjustDetails = [
                                            "material_id"=>$value,
                                            "material_stock_id"=>$value,
                                            "adjust_type"=>2,
                                            "adjust_qty"=>$materialQts[$key],
                                            "from_qty"=>$currentQty,
                                            "new_qty"=>$newQty,
                                            "adjust_reason"=>"Raw material transfer",
                                            "created_by"=>$this->session->userdata('user_id'),
                                            "from_factory"=>$from_warehouseID,
                                            "to_factory"=>$toFactory,
                                            "transfers_id"=>$mfTrId,
                                        ];

                                        $insertIntoMaterialAdjust = $this->db->insert("mf_material_packaging_adjust",$adjustDetails);
                                    }
                                    
                                }

                            }
                            
                        }
                    } */

                    // insert into mf_purchases ****its a purchase for new factory 
                    // mf_transfer
                    $purchaseData = [               
                        'date' => $_POST['date']?$_POST['date']:date("Y-m-d H:i:s"),                                             
                        "supplier_id"=>$supplierId,        
                        'transport_cost' => $_POST["transport_cost"]?$_POST["transport_cost"]:0,
                        'total' => $grandTotal,                                                             
                        'deu' => $grandTotal,
                        'created_by' => $this->session->userdata('user_id'),               
                        'store_id' => $toFactory,
                        'created_at' =>  date('Y-m-d H:i:s'),
                        'mf_tr_id' => $mfTrId,         
                    ];

                    if($this->db->insert("mf_purchases", $purchaseData)){
                        $mfPurchaseId = $this->db->insert_id();
                    }
                    $materialArrCount = count($allMaterialsArr);
                   

                    //get customer details
                    $getCustomerDetails = $this->db->select('*')->from("customers")->where('id',$customerId)->get()->row();

                    $sales_data = array(
                        'date' => date('Y-m-d H:i:s'),
                        'customer_id' => $customerId,
                        'customer_name' => $getCustomerDetails->name,
                        'total' => $grandTotal,
                        'grand_total' => $grandTotal,
                        'total_items' => $materialArrCount,
                        'total_quantity' => array_sum($allQtyArr),
                        'paid' => 0,
                        'paid_by' => 'Credit',
                        'created_by' => $this->session->userdata('user_id'),
                        'store_id' => $from_warehouseInfo->id,
                        'collection_id' => 0,
                        'delivery_date' => date('Y-m-d'),
                        'payment_status' => 3,
                        'status' => 'due',
                        'sale_type'=> 3,
                        'mf_tr_id' => $mfTrId,
                    );

                    $this->db->insert("sales", $sales_data);

                    // inserted sales id here
                    $mfSalesId = $this->db->insert_id();

                   
                    if($mfPurchaseId):

                        foreach ($allMaterialsArr as $key => $value) {
                            
                            $i++;
                            $currentMaterialId = $allMaterialsArr[$key];

                            $findMaterialOnQty = $this->db->select("*")->from("mf_material_store_qty")->where(["material_id"=>$currentMaterialId, 'store_id'=> $from_warehouseInfo->id])->get()->row();

                            // decrease from stock
                            if($findMaterialOnQty){
                                $updatedQty = $findMaterialOnQty->quantity - $allQtyArr[$key];
                                $updateStockQty = $this->db->where('id', $findMaterialOnQty->id)->update('mf_material_store_qty', ["quantity"=>$updatedQty]);
                                
                            }else{
                                $this->session->set_flashdata('message', lang('Please purchase first to transfer item.'));
                                redirect("mf_transfers/add"); 
                                // $this->add();
                            }
                            // find if new factory stock is there
                            $findStock = $this->db->select("*")->from("mf_material_store_qty")->where(["material_id"=>$currentMaterialId, 'store_id'=> $toFactory])->get()->row();

                            if($findStock){
                                // update stock for new factory
                                $updatedQtyForNewFactory = $findStock->quantity + $allQtyArr[$key];
                                $updateStockQtyForNewStore = $this->db->where('id', $findStock->id)->update('mf_material_store_qty', ["quantity"=>$updatedQtyForNewFactory]);
                            }else{
                                $newStockRowData = [
                                    "material_id"=>intval($currentMaterialId),
                                    "brand_id"=>intval($findMaterialOnQty->brand_id),
                                    "store_id"=>intval($toFactory),
                                    "quantity"=>$allQtyArr[$key],
                                    "cost"=> $displayCostArr[$key],
                                ];

                                $insertNewStoreStock = $this->db->insert("mf_material_store_qty", $newStockRowData);
                            }
                            
                            // insert into mf_material_adjust
                            if($updateStockQty):

                                $adjustData = [
                                    "material_id"=>$currentMaterialId,
                                    "material_stock_id"=>$findMaterialOnQty->id,
                                    "adjust_type"=>2, //decrease
                                    "adjust_qty"=>$allQtyArr[$key],
                                    "from_qty"=>$findMaterialOnQty->quantity,
                                    "new_qty"=>$updatedQty,
                                    "adjust_reason"=>"Material transfer",
                                    "created_by"=>$this->session->userdata('user_id'), 
                                    "from_factory"=>$from_warehouseInfo->id,
                                    "to_factory"=>$toFactory,
                                    "created_at"=> $_POST['date']? date("Y-m-d H:i:s", strtotime($_POST['date'])) : date("Y-m-d H:i:s"),
                                    'mf_tr_id' => $mfTrId,
                                ];

                                // echo "<pre>";
                                // print_r($adjustData);
                                // die;

                                $insertIntoMaterialAdjust = 
                                $this->db->insert("mf_material_adjust",$adjustData);
                            endif;

                            if($insertIntoMaterialAdjust):
                                // insert into mf_purchase_material with material details
                                $materialPurchaseData = [
                                    "purchase_id"=>$mfPurchaseId,
                                    "material_id"=>$currentMaterialId,
                                    "brand_id"=>$findMaterialOnQty->brand_id,
                                    "store_id"=>$toFactory,
                                    "quantity"=>$allQtyArr[$key],
                                    "cost"=>$displayCostArr[$key],
                                    "subtotal "=> $allQtyArr[$key] * $displayCostArr[$key],
                                    'mf_tr_id' => $mfTrId,
                                ];

                                $insertIntoMfPurchaseMaterial = $this->db->insert("mf_purchase_material", $materialPurchaseData);

                            endif;
                         
                            // insert tec_sale_items ****material item assume as product item*****
                            $salesItemData = [
                                "sale_id"=>$mfSalesId,
                                "product_id"=>$allMaterialsArr[$key],
                                "quantity"=>$allQtyArr[$key],
                                "unit_price"=>$displayCostArr[$key],
                                "net_unit_price"=>$displayCostArr[$key],
                                "subtotal"=>$allQtyArr[$key] * $displayCostArr[$key],
                                "real_unit_price"=>$displayCostArr[$key],
                                "cost"=>$displayCostArr[$key],
                                "store_id "=>$from_warehouseInfo->id,
                            ];
                            $insertMaterialItemsAsSalesItem = $this->db->insert("sale_items", $salesItemData);
                            
                        }

                    endif;

                    if($materialArrCount == $i){
                         $this->db->trans_complete();
                        $this->session->set_flashdata('message', lang('Material transfer added'));
                        redirect("mf_transfers"); 
                        // $this->index();
                    }else{
                        $this->db->trans_rollback();
                        $this->session->set_flashdata('message', lang('Something went wrong, Please try again later.'));
                        // redirect("mf_transfers/add"); 
                        $this->add();
                    }
                }
                
            // }
                                 
        }
            
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
            
            $this->data['suppliers'] = $this->site->getAllSuppliers();
            $this->data['warehouses'] = $this->site->getAllStores();             
            $this->data['customers'] = $this->site->whereRows('customers','store_id',$this->session->userdata('from_warehouse'));             
            $this->data['page_title'] = lang('Add Raw Material Transfers');
            $this->data["packaging_items"] = $this->db->select('mf_material_packaging.*,mf_unit.name as unit')->from("mf_material_packaging")->join("mf_unit","mf_unit.id=mf_material_packaging.uom_id",'left')->get()->result();
            
            $bc = array(
                array(
                    'link' => site_url('mf_transfers'),
                    'page' => lang('Add Raw Material Transfers')
                ),
                array(
                    'link' => '#',
                    'page' => lang('Add Raw Material Transfers')
                )
            );
            
            $meta = array(
                'page_title' => lang('Add Raw Material Transfers'),
                'bc' => $bc
            ); 
            $this->page_construct('mf_transfers/add', $this->data, $meta); 
        }
        
    } 

    public function fn_supplierInfo($id){

        $returnData = '';
        if($id)
        {
            $SupPro =  $this->site->whereRows('mf_suppliers','store_id',$id); 
            $sr[''] = lang("select") . " " . lang("supplier");
            foreach ($SupPro as $supplier_arr) {
                $sr[$supplier_arr->id] = $supplier_arr->name;
            }
            $returnData .= '<div class="form-group"><label for="supplier_id">Supplier</label>'.form_dropdown('supplier_id', $sr, set_value('supplier_id'), 'class="form-control select2" id="supplier_id" style="width:100%;" required="required"').'</div>';

        }
        else
        {
            $sr[''] = lang("select") . " " . lang("supplier");
            $returnData .= '<div class="form-group"><label>Supplier</label>'.form_dropdown('supplier_id', $sr, set_value('supplier_id'), 'class="form-control select2" id="supplier_id" style="width:100%;" required="required"').'</div>';
        }  
        echo $returnData;  
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
        $this->page_construct('mf_transfers/edit', $this->data, $meta); 

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

        $this->load->model("mf_material_model");
          
        if ($id) {
            
            $row = $this->mf_material_model->getMaterialByID($id);
            
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
        
        // $rows = $this->transfers_model->getProductNames($term);

        $from_warehouseID =  $this->session->userdata('from_warehouse');

        $from_warehouseInfo =  $this->site->findeNameByID('stores', 'id', $from_warehouseID);
        $this->db->select("mf_material.id,mf_material_store_qty.store_id,  mf_material_store_qty.quantity as store_qty, mf_material_store_qty.cost  as cost,  mf_material.name");
        $this->db->from("mf_material_store_qty");
        $this->db->join('mf_material','mf_material.id=mf_material_store_qty.material_id');
        $this->db->group_by("mf_material_store_qty.material_id");
        $this->db->like('mf_material.name', $term);
        $this->db->or_like('mf_material.descriptions', $term);
        $this->db->where("mf_material_store_qty.store_id", $from_warehouseInfo->id);
        $rows = $this->db->get()->result();

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
                    'label' => $row->name . " Qty ( ".$row->store_qty." ) ",
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
            redirect('mf_transfers/add');
        }
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));       
        $this->data['page_title'] = lang('Raw Material Transfers');
        // $this->data['warehouses'] = $this->site->getAllStores();
        $this->data['warehouses'] = $this->site->getAllFactoryStores();

        $this->load->view($this->theme.'mf_transfers/fromWarehouse', $this->data, $meta); 
    }

    public function approve_transfer($id){
        $this->data['title'] = 'Approve Transfer';
        $this->data['id'] = $id;
        $this->load->view($this->theme.'mf_transfers/approve', $this->data,$id);	
    }

    public function approve($id){

        $transfer_mst = $this->transfers_model->getTransfersByID($id);  
        if($transfer_mst->status=="Approved")
        {
            $this->session->set_flashdata('error', lang("It's already Approved. Approve not allow"));
            $this->index();
        }
        else
        {

            $transfer_dtls = $this->transfers_model->getAllTransfersItems($id); 
            $total=$sales_total=$i=0;
            foreach($transfer_dtls as $key=>$val){
                $products[] = array(                        
                    'product_id' => $val->product_id,                
                    'cost' => $val->cost,                
                    'quantity' => $val->quantity,    
                    'subtotal' => ($val->cost * $val->quantity),                
                );                          
                $total += ($val->cost * $val->quantity);
    
                $product_details = $this->site->getWhereDataByElement('mf_finished_good_stock','store_id','product_id',$transfer_mst->from_warehouse_id, $val->product_id);
    
      
                $sales_products[] = array(
                    'product_id' => $val->product_id,
                    'quantity' => $val->quantity,
                    'unit_price' => $val->cost,
                    'net_unit_price' => $val->cost,
                    'subtotal' => ($val->cost * $val->quantity),
                    'real_unit_price' => $val->cost,
                    'cost' => $product_details[0]->cost,
                    'store_id' => $transfer_mst->from_warehouse_id ,
                );
                $sales_total += $val->cost * $val->quantity;
                $i++;
            }
    
            $data = array(
                'date' => date('Y-m-d H:i:s'),            
                'reference' => $transfer_mst->reference,             
                'note' =>$transfer_mst->note,             
                'supplier_id' => $transfer_mst->supplier_id,            
                'received' => 1,            
                'total' => $total,
                'deu' => $total,
                'purchase_type' => 2,
                'transfer_id' => $id,
                'created_by' => $this->session->userdata('user_id'),  
                'store_id' => $transfer_mst->to_warehouse_id ,   
    
            );  
            $dataAppr = array( 'status' => $this->input->post('status') );  
    
            $customer_details = $this->site->whereRow('customers','id',$transfer_mst->customer_id);
    
            $sales_data = array(
                'date' => date('Y-m-d H:i:s'),
                'customer_id' => $transfer_mst->customer_id,
                'customer_name' => $customer_details->name,
                'total' => $this->tec->formatDecimal($sales_total),
                'grand_total' => $sales_total,
                'total_items' => $i,
                'total_quantity' => $this->input->post('total_quantity'),
                'paid' => 0,
                'paid_by' => 'Credit',
                'created_by' => $this->session->userdata('user_id'),
                'store_id' => $transfer_mst->from_warehouse_id,
                'collection_id' => 0,
                'delivery_date' => date('Y-m-d'),
                'payment_status' => 3,
                'status' => 'due',
                'sale_type'=> 2,
                'transfer_id' => $id,
            );
            
            if($this->transfers_model->updateStatusApprove($id,$dataAppr,$data,$products,$sales_data,$sales_products))
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

    }

    function view($id, $from, $to) { 
        if(!$this->site->route_permission('transfers_view'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        $this->db->select(" mf_material_adjust.created_at as date, mf_material_adjust.id as id, mf_material_adjust.adjust_qty as qty, mf_material_adjust.from_factory as from,mf_material_adjust.to_factory as to, from_stores.name as from_factory_name, to_stores.name as to_factory_name,mf_material.name as material_name, mf_unit.name as unit_name");
        $this->db->from("mf_material_adjust");
        $this->db->join("stores as from_stores","from_stores.id=mf_material_adjust.from_factory");
        $this->db->join("stores as to_stores","to_stores.id=mf_material_adjust.to_factory");
        $this->db->join("mf_material","mf_material.id=mf_material_adjust.material_id");
        $this->db->join("mf_unit","mf_material.uom_id=mf_unit.id", 'left');
        $this->db->group_by('mf_material_adjust.created_at');
        $findMaterialAdjust = $this->db->where("mf_material_adjust.id",$id)->get()->row();

        $this->db->select("mf_material_adjust.*,mf_material.name, mf_material_store_qty.cost");

        $this->db->from("mf_material_adjust");

        $this->db->join("mf_material","mf_material.id=mf_material_adjust.material_id", 'left');

        $this->db->join("mf_material_store_qty","mf_material_store_qty.id=mf_material_adjust.material_stock_id", 'left');
        
        $this->db->where(["from_factory"=>$from, "to_factory"=>$to, "created_at"=> $findMaterialAdjust->date]);

        $getAllTransfer = $this->db->get()->result();

        $this->data['transfers_mst'] = $findMaterialAdjust;
        $this->data['transfers_dtls'] = $getAllTransfer;
               
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
        $this->data['page_title'] = lang('View All Material Transfer');
        
        $this->load->view($this->theme . 'mf_transfers/view', $this->data);
        
    }

    function chalan($id = NULL) { 

        $this->data['transfers_mst'] = $this->transfers_model->getTransfersByID($id);
        $this->data['transfers_dtls'] = $this->transfers_model->getAllTransfersItems($id);
               
        $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));        
        $this->data['page_title'] = lang('Chalan Production');
        
        $this->load->view($this->theme . 'mf_transfers/chalan', $this->data);
        
    }
}