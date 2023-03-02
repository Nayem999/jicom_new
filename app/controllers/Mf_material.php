<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Mf_material extends MY_Controller
{

    function __construct() {

        parent::__construct();

        if (!$this->loggedIn) {

            redirect('login');

        }
		if(!$this->site->permission('mf_material'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }

        $this->load->library('form_validation');

        $this->load->model('mf_categories_model');
        $this->load->model('mf_material_model');
		// $this->load->model('purchases_model');
		
		$ses_unset=array('error'=>'error','success'=>'success','message'=>'message');
		$this->session->unset_userdata($ses_unset);

    }



    function index()
    {
		if(!$this->site->route_permission('mf_material_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
    	$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    	$this->data['page_title'] = lang('material_list');
    	$bc = array(array('link' => '#', 'page' => lang('material_list')));
    	$meta = array('page_title' => lang('material_list'), 'bc' => $bc);
    	$this->page_construct('mf_material/index', $this->data, $meta);
    }



    function get_materials() {

    	$this->load->library('datatables'); 

    	$this->datatables->select($this->db->dbprefix('mf_material') . ".id as sid,".
    		$this->db->dbprefix('mf_material') . ".name, ".    		
    		$this->db->dbprefix('mf_categories') . ".name as category_name, ".
    		$this->db->dbprefix('mf_material') . ".descriptions,", FALSE);       
        $this->datatables->join('mf_categories','mf_categories.id=mf_material.category_id');         
        $this->datatables->from('mf_material');        
				
        $action="<div class='text-center'><div class='btn-group'>";
		if($this->site->route_permission('mf_material_edit')) {
			$action.="<a href='" . site_url('mf_material/edit/$1') . "' class='tip btn btn-primary btn-xs' title='".$this->lang->line("edit_material")."'><i class='fa fa-edit'></i></i></a>";
		}
		if($this->site->route_permission('mf_material_delete')) {
			$action.="<a href='" . site_url('mf_material/delete/$1') . "' onClick=\"return confirm('". $this->lang->line('alert_x_supplier') ."')\" class='tip btn btn-danger btn-xs' title='".$this->lang->line("delete_material")."'><i class='fa fa-trash-o'></i></a>";
		}
        $action.="</div></div>";

    	$this->datatables->add_column("Actions", $action, "sid");

    	$this->datatables->unset_column('sid'); 
    	echo $this->datatables->generate();

    }

	function add() {
		if(!$this->site->route_permission('mf_material_add')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		$this->form_validation->set_rules('category_id', $this->lang->line("category"), 'required');
		$this->form_validation->set_rules('uom_id', $this->lang->line("Unit"), 'required');

		if ($this->form_validation->run() == true) { 
			$data = array('name' => $this->input->post('name'),
				'category_id' => $this->input->post('category_id'),
				'uom_id' => $this->input->post('uom_id'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $cid = $this->mf_material_model->addMaterial($data)) { 

            if($this->input->is_ajax_request()) {
                echo json_encode(array('status' => 'success', 'msg' =>  $this->lang->line("material_added"), 'id' => $cid, 'val' => $data['name']));
                die();
            }

            $this->session->set_flashdata('message', $this->lang->line("material_added"));
            // redirect("mf_material");
			$this->index();

		} else {

            if($this->input->is_ajax_request()) {
                echo json_encode(array('status' => 'failed', 'msg' => validation_errors())); die();
            }
			$this->data['all_uom'] = $this->mf_material_model->get_all_uom();
			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('add_material');
    		$bc = array(array('link' => site_url('mf_material'), 'page' => lang('materials')), array('link' => '#', 'page' => lang('add_material')));
    		$meta = array('page_title' => lang('add_material'), 'bc' => $bc);
			$this->data['categories'] = $this->site->getAllMfCategories(); 
    		$this->page_construct('mf_material/add', $this->data, $meta);

		}

	}

	function edit($id = NULL) {
		if(!$this->site->route_permission('mf_material_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
 
		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		$this->form_validation->set_rules('category_id', $this->lang->line("category"), 'required');
		$this->form_validation->set_rules('uom_id', $this->lang->line("Unit"), 'required');

		if ($this->form_validation->run() == true) {			
			$data = array('name' => $this->input->post('name'),
				'category_id' => $this->input->post('category_id'),
				'uom_id' => $this->input->post('uom_id'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $this->mf_material_model->updateMaterial($id, $data)) {
			$this->session->set_flashdata('message', $this->lang->line("material_updated"));
            // redirect("mf_material");
			$this->index();
		} else {

			$this->data['material'] = $this->mf_material_model->getMaterialByID($id);
			$this->data['categories'] = $this->site->getAllMfCategories(); 
			$this->data['all_uom'] = $this->mf_material_model->get_all_uom();
			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('edit_material');
    		$bc = array(array('link' => site_url('mf_material'), 'page' => lang('materials')), array('link' => '#', 'page' => lang('edit_material')));
    		$meta = array('page_title' => lang('edit_material'), 'bc' => $bc);
    		$this->page_construct('mf_material/edit', $this->data, $meta);

		}

	}



	function delete($id = NULL) {

		if(DEMO) {
			$this->session->set_flashdata('error', $this->lang->line("disabled_in_demo"));
			redirect('pos');
		}

		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		if(!$this->site->route_permission('mf_material_delete')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

		if ( $this->mf_material_model->deleteMaterial($id) )
		{
			$this->session->set_flashdata('message', lang("material_deleted"));
			redirect("mf_material");
		}

	}
	
}

