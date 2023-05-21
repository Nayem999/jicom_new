<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Mf_material_packaging extends MY_Controller
{

    function __construct() {

        parent::__construct();

        if (!$this->loggedIn) {

            redirect('login');

        }
		if(!$this->site->permission('mf_material_packaging'))
        {
          $this->session->set_flashdata('error', lang('access_denied'));
          redirect();
        }

        $this->load->library('form_validation');

        $this->load->model('mf_categories_model');

        $this->load->model('mf_material_packaging_model');
		
    }



    function index()
    {
		if(!$this->site->route_permission('mf_material_view')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
    	$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    	$this->data['page_title'] = lang('material_packaging_list');
    	$bc = array(array('link' => '#', 'page' => lang('material_packaging_list')));
    	$meta = array('page_title' => lang('material_packaging_list'), 'bc' => $bc);
    	$this->page_construct('mf_material_packaging/index', $this->data, $meta);
    }



    function get_materials() {

    	$this->load->library('datatables'); 

    	$this->datatables->select($this->db->dbprefix('mf_material_packaging') . ".id as sid,".
    		$this->db->dbprefix('mf_material_packaging') . ".name, ".    		
    		$this->db->dbprefix('mf_unit') . ".name as unit_name, ".    		
    		$this->db->dbprefix('mf_material_packaging') . ".descriptions,", FALSE);  
		$this->datatables->join('mf_unit','mf_unit.id=mf_material_packaging.uom_id');             
        $this->datatables->from('mf_material_packaging');    

				
        $action="<div class='text-center'><div class='btn-group'>";
		if($this->site->route_permission('mf_material_edit')) {
			$action.="<a href='" . site_url('mf_material_packaging/edit/$1') . "' class='tip btn btn-primary btn-xs' title='".$this->lang->line("edit_material")."'><i class='fa fa-edit'></i></i></a>";
		}
		if($this->site->route_permission('mf_material_packaging_delete')) {
			$action.="<a href='" . site_url('mf_material_packaging/delete/$1') . "' onClick=\"return confirm('". $this->lang->line('alert_x_supplier') ."')\" class='tip btn btn-danger btn-xs' title='".$this->lang->line("delete_material")."'><i class='fa fa-trash-o'></i></a>";
		}
        $action.="</div></div>";

    	$this->datatables->add_column("Actions", $action, "sid");

    	$this->datatables->unset_column('sid'); 
    	echo $this->datatables->generate();

    }

	function add() {
		if(!$this->site->route_permission('mf_material_packaging_add')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		// $this->form_validation->set_rules('category_id', $this->lang->line("category"), 'required');
		$this->form_validation->set_rules('uom_id', $this->lang->line("Unit"), 'required');

		if ($this->form_validation->run() == true) { 
			$data = array(
				'name' => $this->input->post('name'),
				// 'category_id' => $this->input->post('category_id'),
				'uom_id' => $this->input->post('uom_id'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $cid = $this->mf_material_packaging_model->addMaterial($data)) { 

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
			$this->data['all_uom'] = $this->mf_material_packaging_model->get_all_uom();

			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('add_material');
    		$bc = array(array('link' => site_url('mf_material'), 'page' => lang('materials')), array('link' => '#', 'page' => lang('add_material')));
    		$meta = array('page_title' => lang('add_material'), 'bc' => $bc);
			// $this->data['categories'] = $this->site->getAllMfCategories(); 
    		$this->page_construct('mf_material_packaging/add', $this->data, $meta);

		}

	}

	function edit($id = NULL) {

		if(!$this->site->route_permission('mf_material_packaging_edit')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}
 
		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		$this->form_validation->set_rules('name', $this->lang->line("name"), 'required');
		$this->form_validation->set_rules('uom_id', $this->lang->line("Unit"), 'required');

		if ($this->form_validation->run() == true) {			
			$data = array('name' => $this->input->post('name'),
				'uom_id' => $this->input->post('uom_id'),
				'descriptions' => $this->input->post('descriptions')
			);
		}

		if ( $this->form_validation->run() == true && $this->mf_material_packaging_model->updateMaterial($id, $data)) {
			$this->session->set_flashdata('message', $this->lang->line("material_updated"));
            // redirect("mf_material");
			$this->index();
		} else {

			$this->data['material'] = $this->mf_material_packaging_model->getMaterialByID($id);
			$this->data['all_uom'] = $this->mf_material_packaging_model->get_all_uom();
			$this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
    		$this->data['page_title'] = lang('edit_material_packaging');
    		$bc = array(array('link' => site_url('mf_material_packaging'), 'page' => lang('raw_material_packaging')), array('link' => '#', 'page' => lang('edit_material_packaging')));
    		$meta = array('page_title' => lang('edit_material_packaging'), 'bc' => $bc);
    		$this->page_construct('mf_material_packaging/edit', $this->data, $meta);

		}

	}



	function delete($id = NULL) {

		if(DEMO) {
			$this->session->set_flashdata('error', $this->lang->line("disabled_in_demo"));
			redirect('pos');
		}

		if($this->input->get('id')) { $id = $this->input->get('id', TRUE); }

		if(!$this->site->route_permission('mf_material_packaging_delete')) {
			$this->session->set_flashdata('error', lang('access_denied'));
			redirect();
		}

		if ( $this->mf_material_packaging_model->deleteMaterial($id) )
		{
			$this->session->set_flashdata('message', lang("material_deleted"));
			redirect("mf_material_packaging");
		}

	}
	
}

