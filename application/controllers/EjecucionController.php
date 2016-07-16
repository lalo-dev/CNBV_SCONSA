<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EjecucionController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Ejecucion_model', "ejec_m");
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
   
    public function get_cedula_control_interno(){
		//$data['get_ccinterno'] = $this->auditorias->get_auditorias();
		$this->load->view('auditoria/ejecucion/cedula_control_interno');
	}


	/*
    public function get_auditorias(){
        $data['get_auditorias'] = $this->###_auditorias->get_auditorias();
        //$this->load->view('blog/blog', $data);
		$this->load->view('###/###', $data);
    }
	*/
}