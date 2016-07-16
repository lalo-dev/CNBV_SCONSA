<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapaRiesgosController extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mapa_Riesgos_model',"riesgo_m");
    }

    public function index(){
        $data['get_riesgos'] = $this->riesgo_m->obtner_lista_riesgos();
        $data['get_tot_riesg'] = $this->riesgo_m->num_registros();
        $this->load->view('pat/mapa_riesgos', $data);
    }
    public function form(){
        $data['get_riesgos'] = $this->riesgo_m->obtner_lista_riesgos();
        $data['get_tot_riesg'] = $this->riesgo_m->num_registros();
        $this->load->view('pat/mapa_riesgos_form',$data);
    }
}