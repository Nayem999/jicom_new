<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf_finish_good_stock extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
            redirect('login');            
        }
        if(!$this->site->permission('mf_finish_good_stock'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');        
        $this->load->model('mf_finish_good_stock_model');        

        $ses_unset=array('error'=>'error','success'=>'success','message'=>'message','warning'=>'warning');
		$this->session->unset_userdata($ses_unset);
    }
  
    
    public function index()  {
        if(!$this->site->route_permission('mf_finish_good_stock_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
        $this->data['finish_good_list'] = $this->mf_finish_good_stock_model->getFinishStockList();   

        // echo "<pre>";
        // print_r( $this->data['finish_good_list']);
        // die;

        $this->data['page_title'] = $this->lang->line("finish_goods");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('finish_goods')));
        $meta = array('page_title' => lang('finish_goods'), 'bc' => $bc);
        $this->page_construct('mf_finish_good_stock/stock_list', $this->data, $meta);

    }


    function excel_stock_list()  {

        $matarial_list = $this->mf_finish_good_stock_model->getStockList();  

        $fileName = "raw_material_stock_list_" . date('Y-m-d_h_i_s') . ".xls"; 

        $fields = array('Name','Brand','Store','Quantity');
        $excelData = implode("\t", array_values($fields)) . "\n"; 

        if(count($matarial_list) > 0){ 
            foreach($matarial_list as $result){ 
                $lineData=array($result->material_name,$result->brand_name,$result->store_name,$result->quantity);
                $excelData .= implode("\t", array_values($lineData)) . "\n"; 
            }            
        }else{ 
            $excelData .= 'No records found...'. "\n"; 
        } 
            
        // Headers for download 
        header("Content-Type: application/vnd.ms-excel"); 
        header("Content-Disposition: attachment; filename=\"$fileName\""); 
            
        // Render excel data 
        echo $excelData; 

    }

    public function stock_adjust()  {
        if(!$this->site->route_permission('mf_finish_good_stock_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

        $this->data['finish_good_list'] = $this->mf_finish_good_stock_model->getFinishStockList();   
        $this->data['page_title'] = $this->lang->line("stock_adjustment");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('stock_adjustment')));
        $meta = array('page_title' => lang('stock_adjustment'), 'bc' => $bc);
        $this->page_construct('mf_finish_good_stock/stock_adjust', $this->data, $meta);

    }


    public function get_stock_adjust_data()
    {

        /* 
            $this->db->select('mf_finished_good_stock.id, mf_finished_good_stock.quantity as qty,mf_finished_good_stock.cost as cost, products.name as product_name, stores.name as store_name'); 
            $this->db->from('mf_finished_good_stock');  
            $this->db->join('products','mf_finished_good_stock.product_id=products.id');
            $this->db->join('stores','stores.id=mf_finished_good_stock.store_id', 'left');
            $this->db->order_by('mf_finished_good_stock.id','desc');
    */

        $this->load->library('datatables');

         $this->datatables->select($this->db->dbprefix('mf_finished_good_stock') . ".id as id, " .  
         $this->db->dbprefix('products'). ".name as product_name,".
         $this->db->dbprefix('stores'). ".name as store_name,".
         $this->db->dbprefix('mf_finished_good_stock'). ".quantity,".
         	$this->db->dbprefix('mf_finished_good_stock'). ".cost", FALSE); 
        $this->datatables->from('mf_finished_good_stock');  
        $this->datatables->join('products','mf_finished_good_stock.product_id=products.id'); 
        $this->datatables->join('stores','stores.id=mf_finished_good_stock.store_id', 'left');

        $action="<div class='text-center'><div class='btn-group'>";
		if($this->site->route_permission('mf_recipe_view')) {
			$action.="<a onclick=\"window.open('" . site_url('mf_recipe/view/$1') . "', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#' title='Print Recipe' class='tip btn btn-primary btn-xs'><i class='fa fa-file-text-o'></i></a> ";
		}
		if($this->site->route_permission('mf_recipe_edit')) {
			$action.="<a href='" . site_url('mf_recipe/edit/$1') . "' title='Edit Recipe' class='tip btn btn-warning btn-xs'><i class='fa fa-edit'></i></a>";
		}
		if($this->site->route_permission('mf_recipe_delete')) {
			$action.=" <a href='" . site_url('mf_recipe/delete/$1') . "' onClick=\"return confirm('" . lang('alert_x_recipe') . "')\" title='" . lang("delete_unit") . "' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a>";
		}
        $action.="</div></div>";

        $this->datatables->add_column("Actions", $action, "id, image, code, name");
        $this->datatables->unset_column('id');
        echo $this->datatables->generate();
    }

    public function adjustStock($id)  {

        $this->data['finish_good_info'] = $this->mf_finish_good_stock_model->getStockStoreById($id);   
        $this->data['title'] = 'Adjust Stock';
		$this->data['id'] = $id;
        $this->load->view($this->theme.'mf_finish_good_stock/adjust_stock', $this->data,$id);

    }

    public function adjust_stock($id){

		$finish_good_id = $this->input->post('finish_good_id'); 
		$adjust_type = $this->input->post('adjust_type'); 
		$adjust_qty = $this->input->post('adjust_qty'); 
        $finish_good_store_info = $this->mf_finish_good_stock_model->getStockStoreById($id);  
        $new_store_qty=0;
        if($adjust_type==1 && $adjust_qty>0)
        {
            $new_store_qty=$finish_good_store_info->quantity + $adjust_qty;
        }
        else if($adjust_type==2 && $adjust_qty>0)
        {
            $new_store_qty=$finish_good_store_info->quantity - $adjust_qty;
        }

        if($new_store_qty>=0 &&  $adjust_qty>0){

            $data = array(
                'quantity'   => $new_store_qty		
            );

            $data2 = array(	
                'product_id'   => $finish_good_store_info->product_id,		
                'store_id'   => $finish_good_store_info->store_id,		
                'adjust_type'   => $adjust_type,		
                'quantity'   => $adjust_qty,		
                'type'   => 2,		
                'note'   => $this->input->post('adjust_reason'),		
                'created_by'   => $this->session->userdata('user_id'),		
                'created_at'   => date('Y-m-d H:i:s'),		
            );

            if($this->mf_finish_good_stock_model->adjustStoreStock($id,$data) && $this->mf_finish_good_stock_model->adjustStockLog($data2))
            {
                $this->session->set_flashdata('message', lang('Adjust successfully')); 
            }
            else
            {
                $this->session->set_flashdata('error', lang('Adjust not successfully'));
            }
        } 
        else{
            $this->session->set_flashdata('error', lang('Adjust not successfully'));
        }
			 
		$this->stock_adjust(); 
	
	}

    public function adjust_log_list()  {
        $this->data['finish_goods_stock_adjust_list'] = $this->mf_finish_good_stock_model->getStockLogList(); 
        
        // echo "<pre>";
        // print_r($this->data['finish_goods_stock_adjust_list']);die;

        $this->data['page_title'] = $this->lang->line("adjust_log");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('adjust_log')));
        $meta = array('page_title' => lang('adjust_log'), 'bc' => $bc);
        $this->page_construct('mf_finish_good_stock/stock_log_list', $this->data, $meta);

    }
  

    public function get_adjustment_log()
    {

        $this->load->library('datatables');

        $this->datatables->select(
            $this->db->dbprefix('mf_finished_good_stock') . ".id as id, " .  
            $this->db->dbprefix('mf_finished_good_stock_log').".created_at," .
            $this->db->dbprefix('stores'). ".name as store_name,".
            $this->db->dbprefix('products'). ".name as product_name,".
            $this->db->dbprefix('mf_finished_good_stock_log'). ".note,".
            $this->db->dbprefix('mf_finished_good_stock_log'). ".adjust_type,".
            $this->db->dbprefix('mf_finished_good_stock_log'). ".quantity",FALSE
        );

       $this->datatables->from('mf_finished_good_stock'); 
       $this->datatables->join('products','mf_finished_good_stock.product_id=products.id');
       $this->datatables->join('mf_finished_good_stock_log','mf_finished_good_stock_log.product_id=products.id and mf_finished_good_stock_log.store_id=mf_finished_good_stock.store_id', 'left');
       $this->datatables->join('stores','stores.id=mf_finished_good_stock_log.store_id','left');
       $this->datatables->where('mf_finished_good_stock_log.type','2');

       $this->datatables->unset_column('id');

       echo $this->datatables->generate();

    }

}