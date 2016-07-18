<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitecontentController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	  $this->load->model('Sitecontent_model', "sites_m");
 	}

	public function index(){	
		if ( !$this->session->userdata('is_logged_in')){
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');			
			$this->load->view('index');		
		}else{
			$this->load->view('core/dashboard');			
		}
	}

	public function get_all_alert(){
		$this->form_validation->set_rules('get', 'get', 'trim|required|max_length[100]');
		if ($this->form_validation->run() == true) {
			$data = $this->sites_m->get_all_alert();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

}
