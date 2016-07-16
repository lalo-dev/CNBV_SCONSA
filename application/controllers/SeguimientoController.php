<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeguimientoController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Seguimiento_model', "auditorias_s");
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
    
    public function get_cedula_seguimiento(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/cedula_seguimiento', $data);
    }
    
    public function get_cedula_supervision_seguimiento(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/cedula_supervision_seguimiento', $data);
    }
    
    public function get_cedula_unica_seguimiento(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/cedula_unica_seguimiento', $data);
    }
    
    public function get_indice_legajo(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/indice_legajo', $data);
    }
    
    public function get_informe_seguimiento(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/informe_seguimiento', $data);
    }
    
    public function get_requerimiento_informacion(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/requerimiento_informacion', $data);
    }
    
    /*public function get_contraportada(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/contraportada', $data);
    }
    
    public function get_portada(){
        $data['get_auditorias'] = $this->get_todos->get_auditorias();
		$this->load->view('seguimiento/portada', $data);
    }*/
}