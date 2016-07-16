<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PraController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Pra_model', "auditorias_m");
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
    
    public function get_anexos(){
        $data['get_auditorias'] = $this->auditorias_m->get_todos();
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/anexos', $data);
    }
    public function get_detalle($id_detalle){
        $data['get_detalle'] = $this->auditorias_m->get_detalle($id_detalle);
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/anexos_detalle', $data);
    }
    
    public function get_informe_presunta_responsabilidad(){
        $data['get_auditorias'] = $this->auditorias_m->get_todos();
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/informe_presunta_responsabilidad', $data);
    }
    public function get_informe_presunta_responsabilidad_detalle($id_detalle){
        $data['get_detalle'] = $this->auditorias_m->get_detalle($id_detalle);
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/informe_presunta_responsabilidad_detalle', $data);
    }
    
    public function get_solicitud_asesoria_no_vinculante(){
        $data['get_auditorias'] = $this->auditorias_m->get_todos();
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/solicitud_asesoria_no_vinculante', $data);
    }
    public function get_solicitud_asesoria_no_vinculante_detalle($id_detalle){
        $data['get_detalle'] = $this->auditorias_m->get_detalle($id_detalle);
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/solicitud_asesoria_no_vinculante_detalle', $data);
    }
    
    public function get_solicitud_informacion(){
        $data['get_auditorias'] = $this->auditorias_m->get_todos();
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/solicitud_informacion', $data);
    }
    public function get_solicitud_informacion_detalle($id_detalle){
        $data['get_detalle'] = $this->auditorias_m->get_detalle($id_detalle);
        //$this->load->view('blog/blog', $data);
		$this->load->view('pra/solicitud_informacion_detalle', $data);
    }
}