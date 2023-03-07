<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf_material_stock extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
            redirect('login');            
        }
        if(!$this->site->permission('mf_material_stock'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');        
        $this->load->model('mf_material_stock_model');        
        $this->allowed_types = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|zip';

        $incSequence = null;
        $ses_unset=array('error'=>'error','success'=>'success','message'=>'message');
		$this->session->unset_userdata($ses_unset);
    }
  
    
    public function index()  {

        if(!$this->site->route_permission('mf_material_stock_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

        $this->data['matarial_list'] = $this->mf_material_stock_model->getStockList();   

        $this->data['page_title'] = $this->lang->line("stock_list");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('stock_list')));
        $meta = array('page_title' => lang('stock_list'), 'bc' => $bc);
        $this->page_construct('mf_material_stock/stock_list', $this->data, $meta);

    }

    public function get_all_material_stock($brandId = null, $factory = null, $action=false)
    {
        $this->load->library('datatables');
        
        $this->datatables->select(

            $this->db->dbprefix('mf_material_store_qty') . ".id as id, " . 

            $this->db->dbprefix('mf_material') . ".name as material_name, " .

            $this->db->dbprefix('mf_brands') . ".name as brand_name, " .

            $this->db->dbprefix('stores') . ".name as store_name, " .

            $this->db->dbprefix('mf_material_store_qty') . ".quantity as qty, " .
            $this->db->dbprefix('mf_material_store_qty') . ".cost as cost, " .

            $this->db->dbprefix('mf_unit') . ".name as unit_name", FALSE);
        
        $this->datatables->join('mf_material','mf_material_store_qty.material_id=mf_material.id');

        $this->datatables->join('stores','mf_material_store_qty.store_id=stores.id');

        $this->datatables->join('mf_unit','mf_material.uom_id=mf_unit.id','left');

        $this->datatables->join('mf_brands','mf_material_store_qty.brand_id=mf_brands.id','left');

        $this->datatables->from('mf_material_store_qty');  

        if($brandId){
            $this->datatables->where('mf_material_store_qty.brand_id',$brandId);
        }

        if($factory):
			$this->datatables->where('mf_material_store_qty.store_id', intval($factory));
		endif;
        
        $i = 1;

        if($action){
            $actionData = "<a href='javascript:;' onClick='stockAdjust($1)' title='Adjust' class='tip btn btn-primary btn-xs'><i class='fa fa-edit'></i></a>";

            $this->datatables->add_column("Actions",$actionData, "id");
        }
        
        $this->datatables->unset_column('id');
        
        echo $this->datatables->generate();
    }


    public function get_adjustment_log()
    {
        $this->load->library('datatables');
        
        $this->datatables->select(

            $this->db->dbprefix('mf_material_store_qty') . ".id as id, " . 

            $this->db->dbprefix('mf_material') . ".name as material_name, " .

            $this->db->dbprefix('mf_brands') . ".name as brand_name, " .

            $this->db->dbprefix('stores') . ".name as store_name, " .

            $this->db->dbprefix('mf_material_adjust') . ".adjust_qty as adjust_qty, " .

            $this->db->dbprefix('mf_material_adjust') . ".adjust_type as adjust_type, " .

            $this->db->dbprefix('mf_unit') . ".name as unit_name", FALSE);

        $this->datatables->join('mf_material_store_qty','mf_material_store_qty.id=mf_material_adjust.material_stock_id');  

		$this->datatables->join('mf_material','mf_material_store_qty.material_id=mf_material.id');

		$this->datatables->join('stores','mf_material_store_qty.store_id=stores.id');

        $this->datatables->join('mf_unit','mf_material.uom_id=mf_unit.id','left');

		$this->datatables->join('mf_brands','mf_material_store_qty.brand_id=mf_brands.id','left');

        $this->datatables->from('mf_material_adjust');

        $this->datatables->unset_column('id');
        
        echo $this->datatables->generate();
    }




    function excel_stock_list($brand = null, $factory = null )  {

        $matarial_list = $this->mf_material_stock_model->getStockList($brand, $factory);  

        $fileName = "raw_material_stock_list_" . date('Y-m-d_h_i_s') . ".xls"; 

        $fields = array('Name','Brand','Store','Quantity', 'Unit', 'Unit Cost' );
        $excelData = implode("\t", array_values($fields)) . "\n"; 

        if(count($matarial_list) > 0){ 
            foreach($matarial_list as $result){ 
                $lineData=array($result->material_name,$result->brand_name,$result->store_name,$result->quantity,$result->unit_name,$result->cost);
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
        if(!$this->site->route_permission('mf_material_stock_add')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

        $this->data['matarial_list'] = $this->mf_material_stock_model->getStockList();   
       
        $this->data['page_title'] = $this->lang->line("stock_adjust");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('stock_adjust')));
        $meta = array('page_title' => lang('stock_adjust'), 'bc' => $bc);
        $this->page_construct('mf_material_stock/stock_adjust', $this->data, $meta);

    }

    public function adjustStock($id)  {

        $this->data['matarial_info'] = $this->mf_material_stock_model->getStockStoreById($id);   
        $this->data['title'] = 'Adjust Stock';
		$this->data['id'] = $id;
        $this->load->view($this->theme.'mf_material_stock/adjust_stock', $this->data,$id);

    }

    public function adjust_stock($id){

		$material_id = $this->input->post('material_id'); 
		$adjust_type = $this->input->post('adjust_type'); 
		$adjust_qty = $this->input->post('adjust_qty'); 
        $matarial_store_info = $this->mf_material_stock_model->getStockStoreById($id);  
        $matarial_info = $this->mf_material_stock_model->getStockById($material_id);  
        $new_store_qty=0;
        if($adjust_type==1 && $adjust_qty>0)
        {
            $new_store_qty=$matarial_store_info->quantity + $adjust_qty;
            $new_qty=$matarial_info->quantity + $adjust_qty;
        }
        else if($adjust_type==2 && $adjust_qty>0)
        {
            $new_store_qty=$matarial_store_info->quantity - $adjust_qty;
            $new_qty=$matarial_info->quantity - $adjust_qty;
        }

        if($new_store_qty>=0 &&  $adjust_qty>0){

            $data = array(
                'quantity'   => $new_store_qty		
            );
            $data2 = array(
                'quantity'   => $new_qty		
            );
        
            $this->mf_material_stock_model->adjustStoreStock($id,$data) ;	
            $this->mf_material_stock_model->adjustStock($material_id,$data2) ;	

            $data3 = array(
                'material_id'   => $material_id,		
                'material_stock_id'   => $id,		
                'adjust_type'   => $adjust_type,		
                'adjust_qty'   => $adjust_qty,		
                'from_qty'   => $matarial_store_info->quantity,		
                'new_qty'   => $new_store_qty,		
                'adjust_reason'   => $this->input->post('adjust_reason'),		
                'created_by'   => $this->session->userdata('user_id'),		
                'created_at'   => date('Y-m-d H:i:s'),		
            );

            if($this->mf_material_stock_model->adjustStockLog($data3))
            {
                $this->session->set_flashdata('message', lang('Collection delete successfully')); 
            }
            else
            {
                $this->session->set_flashdata('error', lang('Adjust not successfully'));
            }
              
        } 
			 
		redirect('mf_material_stock/stock_adjust'); 
	
	}

    public function adjust_log_list()  {
        $this->data['matarial_list'] = $this->mf_material_stock_model->getStockLogList();   

        $this->data['page_title'] = $this->lang->line("adjust_log");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('adjust_log')));
        $meta = array('page_title' => lang('adjust_log'), 'bc' => $bc);
        $this->page_construct('mf_material_stock/stock_log_list', $this->data, $meta);

    }
  
}