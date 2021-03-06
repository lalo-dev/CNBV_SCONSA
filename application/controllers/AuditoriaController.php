<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuditoriaController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Auditoria_model', 'auditoria_m');
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
    
    public function get_acta_inicio(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/acta_inicio', $data);
    }
    
    public function get_carta_planeacion(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/carta_planeacion', $data);
    }
    public function get_carta_planeacion_detalle(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
        $this->load->view('auditoria/planeacion/carta_planeacion_detalle', $data);
    }
    public function get_cronograma(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cronograma', $data);
    }
    public function get_cronograma_detalle(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
        $this->load->view('auditoria/planeacion/cronograma_detalle', $data);
    }

    public function get_orden_auditoria(){
        $data['lista_revisiones'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/orden_auditoria', $data);
    }

    public function get_orden_auditoria_detalle($id_revision = null){
        // $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
        $data['id_revision'] = $id_revision;
        $this->load->view('auditoria/planeacion/orden_auditoria_detalle', $data);
    }

    public function set_comentario(){
        $data = array(
            'coment' => $this->input->post('comentario'),
            'idRev'=>  $this->input->post('id_revision')
            );

        $this->auditoria_m->set_comentario($data['coment'], $data['idRev']);

        echo json_encode("ok");
    }

    public function get_comentarios(){
        $data = array(
            'idRev'=>  $this->input->post('id_revision')
            );

        echo json_encode($this->auditoria_m->get_comentarios($data['idRev']));
    }

    //Vista General
    public function set_general(){

        $data = $this->input->post('gral');
        $id_general = $this->input->post('id_general');

        echo json_encode( $this->auditoria_m->set_general($data, $id_general));
    }
    public function get_general(){

        $id_revision = $this->input->post('id_revision');

        echo json_encode( $this->auditoria_m->get_general($id_revision));
    }

    public function set_orden(){

        $data = $this->input->post('orden');
        $firmas = $this->input->post('firmas');
        $cc = $this->input->post('cc');
        $id_orden = $this->input->post('id_orden');

        echo json_encode( $this->auditoria_m->set_orden($data, $firmas,$cc, $id_orden));
    }
    public function get_orden(){

        $id_revision = $this->input->post('id_revision');

        echo json_encode( $this->auditoria_m->get_orden($id_revision));
    }

    public function get_cat_firmas(){


        echo json_encode( $this->auditoria_m->get_cat_firmas());
    }











    public function get_programa_trabajo(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/programa_trabajo', $data);
    }
    public function get_programa_trabajo_detalle(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
        $this->load->view('auditoria/planeacion/m2_1_form_programa_trabajo_detallada', $data);
    }
	//Oficio complementario
	
    
    public function get_ampliacion(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/ampliacion', $data);
    }
    
    public function get_desincorporacion(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/desincorporacion', $data);
    }
    
    public function get_oficio_complementario(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/oficio/oficio_complementario', $data);
    }
    
    public function get_oficio_general(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/oficio_general', $data);
    }
    
    public function get_sustitucion(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/sustitucion', $data);
    }

	//Ejecucion
	
    public function get_acta_administrativa(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/acta_administrativa', $data);
    }
    
    public function get_cedula_control_interno(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_control_interno', $data);
    }
    
    public function get_cedula_hallazgo(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_hallazgo', $data);
    }
    
    public function get_cedula_observaciones(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_observaciones', $data);
    }
    
    public function get_cedula_resumen_actividades(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_resumen_actividades', $data);
    }
    
    public function get_cedula_trabajo(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_trabajo', $data);
    }
    
    public function get_requerimiento_informacion_1(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/requerimiento_informacion_1', $data);
    }
    
    public function get_requerimiento_informacion_2(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/requerimiento_informacion_2', $data);
    }

	//Cierre
	
    public function get_cedula_supervision_auditoria(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_supervision_auditoria', $data);
    }
    
    public function get_cedula_unica_auditoria(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_unica_auditoria', $data);
    }
    
    public function get_cierre_informe_auditoria(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cierre_informe_auditoria', $data);
    }
    
    public function get_memorandum_area_oportunidad(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/memorandum_area_oportunidad', $data);
    }
    
    public function get_oficio_informe_presidente(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/oficio_informe_presidente', $data);
    }
    
    /*public function get_(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/cedula_trabajo', $data);
    }
    
    public function get_(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/requerimiento_informacion_1', $data);
    }
    
    public function get_(){
        $data['get_auditorias'] = $this->auditoria_m->get_auditorias();
		$this->load->view('auditoria/planeacion/requerimiento_informacion_2', $data);
    }*/
}