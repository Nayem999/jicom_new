<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf_material_stock_packaging extends MY_Controller
{
    
    function __construct() {
        
        parent::__construct();
        
        if (!$this->loggedIn) {            
            redirect('login');            
        }
        if(!$this->site->permission('mf_material_stock_packaging'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }
        
        $this->load->library('form_validation');        
        $this->load->model('mf_material_stock_packaging_model');
        $this->allowed_types = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|zip';

        $incSequence = null;

    }
  
    
    public function index()  {

        if(!$this->site->route_permission('mf_material_stock_packaging_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

        // $this->data['matarial_list'] = $this->mf_material_stock_packaging_model->getStockList(); 
        
        // echo "<pre>";
        // print_r($this->data['matarial_list']); die;

        $this->data['page_title'] = $this->lang->line("stock_list");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('packaging_stock_list')));
        $meta = array('page_title' => lang('packaging_stock_list'), 'bc' => $bc);
        $this->page_construct('mf_material_stock_packaging/stock_list', $this->data, $meta);

    }

    public function get_all_material_stock($brandId = null, $factory = null, $action=false)
    {
        $this->load->library('datatables');
        
        $this->datatables->select(

            $this->db->dbprefix('mf_material_packaging_store_qty') . ".id as id, " . 

            $this->db->dbprefix('mf_material_packaging') . ".name as material_name, " .

            $this->db->dbprefix('mf_brands') . ".name as brand_name, " .

            $this->db->dbprefix('stores') . ".name as store_name, " .

            $this->db->dbprefix('mf_material_packaging_store_qty') . ".quantity as qty, " .

            $this->db->dbprefix('mf_material_packaging_store_qty') . ".cost as cost, " .

            $this->db->dbprefix('mf_unit') . ".name as unit_name", FALSE);
        
        $this->datatables->join('mf_material_packaging','mf_material_packaging_store_qty.material_id=mf_material_packaging.id');

        $this->datatables->join('stores','mf_material_packaging_store_qty.store_id=stores.id');

        $this->datatables->join('mf_unit','mf_material_packaging.uom_id=mf_unit.id','left');

        $this->datatables->join('mf_brands','mf_material_packaging_store_qty.brand_id=mf_brands.id','left');

        $this->datatables->from('mf_material_packaging_store_qty');  

        if($brandId){
            $this->datatables->where('mf_material_packaging_store_qty.brand_id',$brandId);
        }

        if($factory):
			$this->datatables->where('mf_material_packaging_store_qty.store_id', intval($factory));
		endif;
        
        $i = 1;

        if($action ||  (isset($_GET['action']) && $_GET["action"] == 1 )){
            $actionData = "<a href='javascript:;' onClick='stockAdjustPackaging($1)' title='Adjust' class='tip btn btn-primary btn-xs'><i class='fa fa-edit'></i></a>";

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
        // echo "<pre>";
        // print_r( "fdfdfd" );
        // die;

        // $this->data['matarial_list'] = $this->mf_material_stock_packaging_model->getStockList();   

       
       
        $this->data['page_title'] = $this->lang->line("stock_adjust");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('stock_adjust_packaging')));
        $meta = array('page_title' => lang('stock_adjust_packaging'), 'bc' => $bc);
        $this->page_construct('mf_material_stock_packaging/stock_adjust', $this->data, $meta);

    }

    public function adjustStock($id)  {

        $this->data['matarial_info'] = $this->mf_material_stock_packaging_model->getStockStoreById($id);   
        $this->data['title'] = 'Adjust Packaging Material Stock';
		$this->data['id'] = $id;
        $this->load->view($this->theme.'mf_material_stock_packaging/adjust_stock', $this->data,$id);

    }

    public function adjust_stock($id){

		$material_id = $this->input->post('material_id'); 
		$adjust_type = $this->input->post('adjust_type'); 
		$adjust_qty = $this->input->post('adjust_qty'); 
        $matarial_store_info = $this->mf_material_stock_packaging_model->getStockStoreById($id);  
        $matarial_info = $this->mf_material_stock_packaging_model->getStockById($material_id);  
        $new_store_qty=0;

        $lastInsertedPackagingMaterial = $this->db->select('*')->from('mf_packaging_material_log')->where("material_id",$material_id)->order_by('created_at', 'desc')->limit(1)->get();

        $numRowData = $lastInsertedPackagingMaterial->num_rows();
        if($adjust_type==1 && $adjust_qty>0)
        {

            $adjustLog = [];
            if ($numRowData == 1){
                $resultData = $lastInsertedPackagingMaterial->row();
                $adjustLog["material_id"] = $material_id;
                $adjustLog["add_qty"] = $adjust_qty;
                $adjustLog["from_qty"] = $resultData->balance;
                $adjustLog["to_qty"] = $resultData->from_qty + $adjust_qty;
                $adjustLog["balance"] = $resultData->from_qty + $adjust_qty;
                $adjustLog["type"] = 4;
                $adjustLog["comment"] = "Adjust packaging material stock with increase";
                $adjustLog["date"] =  date("Y-m-d");
                $insertIntoPkLog = $this->db->insert("mf_packaging_material_log",$adjustLog);
           }

            $new_store_qty=$matarial_store_info->quantity + $adjust_qty;
            $new_qty=$matarial_info->quantity + $adjust_qty;
        }
        else if($adjust_type==2 && $adjust_qty>0)
        {
            $new_store_qty= $matarial_store_info->quantity - $adjust_qty;
            $new_qty= $matarial_info->quantity - $adjust_qty;

            if ($numRowData == 1){
                $resultData = $lastInsertedPackagingMaterial->row();
                $adjustLog["material_id"] = $material_id;
                $adjustLog["to_sale"] = $adjust_qty;
                $adjustLog["from_qty"] = $resultData->balance;
                $adjustLog["to_qty"] = $resultData->balance - $adjust_qty;
                $adjustLog["balance"] = $resultData->balance - $adjust_qty;
                $adjustLog["type"] = 4;
                $adjustLog["comment"] = "Adjust packaging material stock with decrease";
                $adjustLog["date"] =  date("Y-m-d");
                $insertIntoPkLog = $this->db->insert("mf_packaging_material_log",$adjustLog);
           }
        }

        $new_qty = number_format((float)$new_qty, 2, '.', '');
        
        if($new_store_qty >=0 &&  $adjust_qty >0 ){

            $data = array(
                'quantity'   => $new_store_qty		
            );
            $data2 = array(
                'quantity'   => $new_qty		
            );
        
            $this->mf_material_stock_packaging_model->adjustStoreStock($id,$data) ;	

            $this->mf_material_stock_packaging_model->adjustStock($material_id,$data2) ;	

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

          
            if($this->input->post()):

                if($this->mf_material_stock_packaging_model->adjustStockLog($data3))
                {
                    $this->session->set_flashdata('message', lang('Collection delete successfully')); 
                }
                else
                {
                    $this->session->set_flashdata('error', lang('Adjust not successfully'));
                }
                
            endif;
              
        } 
			 
		redirect('mf_material_stock_packaging/stock_adjust'); 
	
	}

    public function adjust_log_list()  {
        // $this->data['matarial_list'] = $this->mf_material_stock_packaging_model->getStockLogList();   

        $this->data['page_title'] = $this->lang->line("stock_packaging_adjust_log");
        $bc = array(array('link' => '#', 'page' => lang('reports')), array('link' => '#', 'page' => lang('stock_packaging_adjust_log')));
        $meta = array('page_title' => lang('stock_packaging_adjust_log'), 'bc' => $bc);
        $this->page_construct('mf_material_stock_packaging/stock_log_list', $this->data, $meta);

    }

    public function get_adjustment_log_list()
    {

        $this->load->library('datatables');
        
        $this->datatables->select(

            $this->db->dbprefix('mf_material_packaging_store_qty') . ".id as id, " . 

            $this->db->dbprefix('mf_material_packaging_adjust') . ".created_at, " .

            $this->db->dbprefix('mf_material_packaging') . ".name as material_name, " .

            $this->db->dbprefix('mf_brands') . ".name as brand_name, " .

            $this->db->dbprefix('stores') . ".name as store_name, " .
            
            $this->db->dbprefix('mf_material_packaging_adjust') . ".adjust_type, " .
            
            $this->db->dbprefix('mf_material_packaging_adjust') . ".adjust_type, " .
            
            $this->db->dbprefix('mf_material_packaging_adjust') . ".adjust_reason, " .

            $this->db->dbprefix('mf_material_packaging_adjust') . ".adjust_qty, " .

            $this->db->dbprefix('mf_material_packaging_adjust') . ".from_qty, " .
            
            $this->db->dbprefix('mf_material_packaging_adjust') . ".new_qty, " .

            $this->db->dbprefix('mf_unit') . ".name as unit_name", FALSE);



        $this->datatables->join('mf_material_packaging_store_qty','mf_material_packaging_store_qty.id=mf_material_packaging_adjust.material_stock_id');   

		$this->datatables->join('mf_material_packaging','mf_material_packaging_store_qty.material_id=mf_material_packaging.id');

		$this->datatables->join('stores','mf_material_packaging_store_qty.store_id=stores.id');

        $this->datatables->join('mf_unit','mf_material_packaging.uom_id=mf_unit.id','left');

		$this->datatables->join('mf_brands','mf_material_packaging_store_qty.brand_id=mf_brands.id','left');

        $this->datatables->from('mf_material_packaging_adjust');

        $this->datatables->unset_column('id');
        
        echo $this->datatables->generate();

    }
  
}