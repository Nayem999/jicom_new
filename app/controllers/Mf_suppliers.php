<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Mf_suppliers extends MY_Controller
{

    function __construct() {

        parent::__construct();

        if (!$this->loggedIn) {

            redirect('login');

        }
		if(!$this->site->permission('mf_suppliers'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }

        $this->load->library('form_validation');

        $this->load->model('mf_suppliers_model');
		// $this->load->model('purchases_model');
		
    }



    function index()
    {
		if(!$this->site->route_permission('mf_suppliers_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
    	$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    	$this->data['page_title'] = lang('suppliers');
    	$bc = array(array('link' => '#', 'page' => lang('suppliers')));
    	$meta = array('page_title' => lang('suppliers'), 'bc' => $bc);
    	$this->page_construct('mf_suppliers/index', $this->data, $meta);
    }



    function get_suppliers() {

    	$this->load->library('datatables'); 

    	$this->datatables->select($this->db->dbprefix('mf_suppliers') . ".id as sid,".
    		$this->db->dbprefix('mf_suppliers') . ".name, ".    		
    		$this->db->dbprefix('mf_suppliers') . ".phone, ".
    		$this->db->dbprefix('mf_suppliers') . ".email, ".
    		$this->db->dbprefix('mf_suppliers') . ".address, ".
    		$this->db->dbprefix('mf_suppliers') . ".descriptions,", FALSE);       
        $this->datatables->from('mf_suppliers');      
		
		$action="<div class='text-center'><div class='btn-group'>";
		if($this->site->route_permission('mf_suppliers_view')) {
			$action.="<a href='" . site_url('mf_suppliers/purchases/$1') . "' class='tip btn btn-warning btn-xs' style='display:none;' title='View purchases '><i class='fa fa-list'></i></a> ";
		}
		if($this->site->route_permission('mf_suppliers_edit')) {
			$action.="<a href='" . site_url('mf_suppliers/edit/$1') . "' class='tip btn btn-primary btn-xs' title='".$this->lang->line("edit_supplier")."'><i class='fa fa-edit'></i></i></a>";
		}
		if($this->site->route_permission('mf_suppliers_delete')) {
			$action.=" <a href='" . site_url('mf_suppliers/delete/$1') . "' onClick=\"return confirm('". $this->lang->line('alert_x_supplier') ."')\" class='tip btn btn-danger btn-xs' title='".$this->lang->line("delete_supplier")."'><i class='fa fa-trash-o'></i></a>";
		}
        $action.="</div></div>";

    	$this->datatables->add_column("Actions", $action, "sid");

    	$this->datatables->unset_column('sid'); 
    	echo $this->datatables->generate();

    }

	function add() {
		if(!$this->site->route_permission('mf_suppliers_add')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		$this->form_validation->set_rules('phone', $this->lang->line("phone"), 'required');
		$this->form_validation->set_rules('address', $this->lang->line("address"), 'required');

		if($this->input->post('email')){ $this->form_validation->set_rules('email', $this->lang->line("email_address"), 'valid_email'); }
		
		if ($this->form_validation->run() == true) { 
			$data = array('name' => $this->input->post('name'),
				'store_id' => $this->input->post('store_id'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $cid = $this->mf_suppliers_model->addSupplier($data)) { 

            if($this->input->is_ajax_request()) {
                echo json_encode(array('status' => 'success', 'msg' =>  $this->lang->line("supplier_added"), 'id' => $cid, 'val' => $data['name']));
                die();
            }

            $this->session->set_flashdata('message', $this->lang->line("supplier_added"));
            redirect("mf_suppliers");

		} else {

            if($this->input->is_ajax_request()) {
                echo json_encode(array('status' => 'failed', 'msg' => validation_errors())); die();
            }

			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('add_supplier');
    		$bc = array(array('link' => site_url('mf_suppliers'), 'page' => lang('suppliers')), array('link' => '#', 'page' => lang('add_supplier')));
    		$meta = array('page_title' => lang('add_supplier'), 'bc' => $bc);
    		$this->page_construct('mf_suppliers/add', $this->data, $meta);

		}

	}

	function edit($id = NULL) {

		if(!$this->site->route_permission('mf_suppliers_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		$this->form_validation->set_rules('phone', $this->lang->line("phone"), 'required');
		$this->form_validation->set_rules('address', $this->lang->line("address"), 'required');
		if($this->input->post('email')){ $this->form_validation->set_rules('email', $this->lang->line("email_address"), 'valid_email'); }

		if ($this->form_validation->run() == true) {
			
			$data = array('name' => $this->input->post('name'),
				'store_id' => $this->input->post('store_id'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $this->mf_suppliers_model->updateSupplier($id, $data)) {
			$this->session->set_flashdata('message', $this->lang->line("supplier_updated"));
			redirect("mf_suppliers");
		} else {

			$this->data['supplier'] = $this->mf_suppliers_model->getSupplierByID($id);
			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('edit_supplier');
    		$bc = array(array('link' => site_url('mf_suppliers'), 'page' => lang('suppliers')), array('link' => '#', 'page' => lang('edit_supplier')));
    		$meta = array('page_title' => lang('edit_supplier'), 'bc' => $bc);
    		$this->page_construct('mf_suppliers/edit', $this->data, $meta);

		}

	}



	function delete($id = NULL) {

		if(DEMO) {
			$this->session->set_flashdata('error', $this->lang->line("disabled_in_demo"));
			redirect('pos');
		}

		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		if(!$this->site->route_permission('mf_suppliers_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

		if ( $this->mf_suppliers_model->deleteSupplier($id) )
		{
			$this->session->set_flashdata('message', lang("supplier_deleted"));
			redirect("mf_suppliers");
		}

	}
	
	
  	function purchases($id) { 

    	$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');

    	$this->data['page_title'] = 'Purchases';

    	$bc = array(array('link' => '#', 'page' => 'Purchases'));

    	$meta = array('page_title' => 'Purchases', 'bc' => $bc);
		
		$this->data['suppliers_id'] = $id ;
		
    	$this->page_construct('mf_suppliers/purchases', $this->data, $meta);

	}
	
 	function get_purchases($id){
	
 		if ( ! $this->Admin) {

            $this->session->set_flashdata('error', lang('access_denied'));

            redirect('pos');

        }

        $this->load->library('datatables');

       $this->datatables->select($this->db->dbprefix('purchases').".id as id, ".$this->db->dbprefix('purchases').".date as date , reference,  ".$this->db->dbprefix('mf_suppliers').".name as cname , total, paid , deu , note, attachment",FALSE);
		
        $this->datatables->join('mf_suppliers', 'suppliers.id=purchases.supplier_id');
		
		$this->datatables->from('purchases');

        $this->datatables->add_column("Actions", "
		<div class='text-center'>
		  <div class='btn-group'>
		    <a onclick=\"window.open('".site_url('purchases/view/$1')."', 'pos_popup', 'width=900,height=600,menubar=yes,scrollbars=yes,status=no,resizable=yes,screenx=0,screeny=0'); return false;\" href='#' title='Print Purchase' class='tip btn btn-primary btn-xs'><i class='fa fa-file-text-o'></i></a> 
			
				<a href='" . site_url('purchases/edit/$1') . "' title='" . lang("edit_purchase") . "' class='tip btn btn-warning btn-xs'><i class='fa fa-edit'></i></a> 
			  
			
			 <a href='" . site_url('purchases/delete/$1') . "' onClick=\"return confirm('" . lang('alert_x_purchase') . "')\" title='" . lang("delete_purchase") . "' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a>
			 </div>
			 
			 </div>", "id");

        $this->datatables->unset_column('id');
		
		if($id) { $this->datatables->where('purchases.supplier_id', $id); }

        echo $this->datatables->generate();

    }

    public function supplier_laser($id) { 
    	$this->data['results'] = '';  
		$this->data['suppliser'] = $this->purchases_model->getSuppByID($id);    
        if($id !=''){ 
        $this->data['results'] = $this->mf_suppliers_model->getSupplierLaserBySid($id);  
        }  
        $this->data['page_title'] = $this->lang->line("Suppliser Laser List"); 
        $bc = array(array('link' => '#', 'page' => lang('merge')), array('link' => '#', 'page' => lang('Suppliser Laser list')));
        $meta = array('page_title' => lang('Suppliser Laser List'), 'bc' => $bc);        
        $this->page_construct('mf_suppliers/supplier_laser', $this->data, $meta);
    }

    public function excel_supplier_laser($id) { 
    	$results = '';  
		$suppliser = $this->purchases_model->getSuppByID($id);    
        if($id !=''){ 
        	$results = $this->suppliers_model->getSupplierLaserBySid($id);  
        }  
		$emptyvalue = '0.00';
		$gtotal =0;
		$pgtotal = 0;
		$sgtotal = 0;
		$i= 1; 
		if($results !=''){
			foreach ($results as $key => $part) {
				$sort[$key] = strtotime($part['datetime']); 
			}
		  array_multisort($sort, SORT_ASC, $results); 
		}
		// Excel file name for download 
		$fileName = "suppliser_laser_" . date('Y-m-d_h_i_s') . ".xls"; 
		$fields = array('Name : '. $suppliser[0]->name);
		$excelData = implode("\t", array_values($fields)) . "\n"; 
		$fields = array('Phone : '.$suppliser[0]->phone);
		$excelData .= implode("\t", array_values($fields)) . "\n"; 
		$fields = array('Sl. No', 'Date & Time', 'Type', 'Dr', 'Cr','Balance');
		$excelData .= implode("\t", array_values($fields)) . "\n"; 
		
		if(count($results) > 0){ 
			foreach($results as $key => $value){ 

				if(($value['type'] == 'Opening balance') && (1>$value['total'])){ 
					// echo '<td class="center">3*'.$emptyvalue.'</td>' ;
				}else{
					$dr_val=$cr_val=$value['total'];
				}                                   
				if(($value['type'] == 'purchases') || ($value['type'] == 'Opening balance')) {  ;
					if(($value['type'] == 'Opening balance') && (1>$value['total'])){ 
						// echo '<td class="center">1*'.abs($value['total']).'</td>' ;
					}else{
						$dr_val=$emptyvalue;
					}					 
					$pgtotal = $pgtotal + $value['total'];
				}
				if(($value['type'] =='payment') || ($value['type'] =='Advance Payment')){
					$cr_val=$emptyvalue;
				$sgtotal = $sgtotal + $value['total'];
				}

				$gtotal = $sgtotal - $pgtotal;

				$lineData = array($i++,$this->tec->hrld($value['datetime']), $value['type'] , $dr_val, $cr_val, $gtotal); 
				$excelData .= implode("\t", array_values($lineData)) . "\n"; 
			} 

			$lineData = array('','','' ,$sgtotal, $pgtotal, ''); 
			$excelData .= implode("\t", array_values($lineData)) . "\n"; 
		}else{ 
			$excelData .= 'No records found...'. "\n"; 
		} 
		header("Content-Type: application/vnd.ms-excel"); 
		header("Content-Disposition: attachment; filename=\"$fileName\""); 
		echo $excelData;  
    }

}

