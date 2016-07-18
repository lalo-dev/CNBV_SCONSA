<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OficiocomplementarioController extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Of_complementario_model',"oficio_m");
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

    //Controlador para lista de Oficio complementario
    public function get_oficio_complementario(){
        $data['get_ofcom'] = $this->oficio_m->obtner_lista_riesgos();
        $this->load->view('auditoria/planeacion/oficio/oficio_complementario',$data );
    }

    public function get_oficio_complementario_detalle($idR){
        $data['id_revision'] = $idR;
        $data['get_registro'] = $this->oficio_m->get_registro($idR);
        $data['get_audit'] = $this->oficio_m->get_auditoresarea(); //obtener auditores
        $data['get_revisar'] = $this->oficio_m->get_revision();


        $this->load->view('auditoria/planeacion/oficio/oficio_complementario_detalle',$data );
    }

    public function oficio_complementario_form_add(){

        $this->form_validation->set_rules('id_revision', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('auditor', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('fundamento', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('fecha2', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('verif', 'verificado', 'trim|max_length[50]');
        $this->form_validation->set_rules('valid', 'validado', 'trim|max_length[50]');
        $this->form_validation->set_rules('orden', 'orden', 'trim|required|max_length[9999]');
        $this->form_validation->set_rules('objeto', 'objeto', 'trim|required|max_length[50]'); //integer
        $this->form_validation->set_rules('revisar', 'revisar', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('motivo', 'motivo', 'trim|required|max_length[9999]');
        $this->form_validation->set_rules('ob_period', 'ob_period', 'trim|required|max_length[9999]');

        $data = $this->input->post();

        if ($this->form_validation->run() == true) {
            $id_oficioForm = trim($this->input->post('id_oficio', TRUE) );

            //$data = $id_oficioForm;
           if ($id_oficioForm == "") {
                $data = $this->oficio_m->add_oficio_complementario();
                $data->oper = 'add';
            }else{
                //$data = $id_oficioForm;
                $data = $this->oficio_m->edit_oficio_complementario();
                $data->oper = 'upd';
            }

        }else{
            $data = array(  'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
        }
        echo json_encode($data);
    }

}

/*
$data = $this->Pat_m->edit_mapa_riesgos();
$data->id_riesgo_update = 'update';

$data = $this->Pat_m->add_mapa_riesgos();
*/