<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartaPlaneacionController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CartaPlaneacion_model','cp_m');
    }
    public function index()
    {
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
    public function get_lista_revisiones($pat_ano = null)
    {
        $data['pat_ano'] = $pat_ano;
        $data['lista_revisiones'] = $this->cp_m->get_lista_auditorias($pat_ano);
        $this->load->view('auditoria/planeacion/carta_planeacion', $data);
    }
    public function get_carta_planeacion_detalle($id_revision = null)
    {
        $data['id_revision'] = $id_revision;
        $data['cp_detalle'] = $this->cp_m->get_cp_detalle($id_revision);
        $this->load->view('auditoria/planeacion/carta_planeacion_detalle', $data);
    }
}