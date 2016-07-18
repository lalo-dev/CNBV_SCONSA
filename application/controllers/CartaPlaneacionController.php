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
        // $data['comentarios'] = $this->cp_m->get_comentarios();

        $this->load->view('auditoria/planeacion/carta_planeacion_detalle', $data);
    }

    public function set_comentario(){
        $data = array(
            'coment' => $this->input->post('comentario'),
            'idRev'=>  $this->input->post('id_revision')
            );


        $this->cp_m->set_comentario($data['coment'], $data['idRev']);

        echo json_encode("ok");
    }

     public function get_comentarios(){
        $data = array(
            'idRev'=>  $this->input->post('id_revision')
            );

        echo json_encode($this->cp_m->get_comentarios($data['idRev']));
    }

    public function set_tab2(){

         $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado'),
            'observacion_1' => $this->input->post('obser1'),
            'observacion_2' => $this->input->post('obser2'),
            'observacion_3' => $this->input->post('obser3'),
            'mejora_1' => $this->input->post('obser4'),
            'mejora_2' => $this->input->post('obser5')
            );

         $idAnt = $this->input->post('idAnterior');

         echo json_encode($this->cp_m->set_tab2($data, $idAnt));
    }

    public function get_tab2(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab2($idRev));
    }


    // Tab3 (D & M)
    public function set_tab3(){
        $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado'),
            'trimestre' => $this->input->post('trimestre'),
            'anio' => $this->input->post('anio'),
            'diagnosticos' => $this->input->post('diagnostic'),
            'recomendaciones' => $this->input->post('recomenda')
            );

        $idDM= $this->input->post('idDM');

        echo json_encode($this->cp_m->set_tab3($data, $idDM));

    }

    public function get_tab3(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab3($idRev));
    }

    // Tab4 (D & M)
    public function set_tab4(){
        $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado')
            );

        $plazas = $this->input->post('plazas');
        $idEstruc = $this->input->post('idEstruc');

        echo json_encode($this->cp_m->set_tab4($data, $plazas, $idEstruc ));
    }

    public function get_tab4(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab4($idRev));
    }

     // Tab5 (Marco)
    public function set_tab5(){
        $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado'),
            'anio'=>  $this->input->post('anio'),
            );

        $listas = $this->input->post('listas');
        $id_marco = $this->input->post('id_marco');

        echo json_encode($this->cp_m->set_tab5($data, $listas, $id_marco ));
    }

    public function get_tab5(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab5($idRev));
    }

    // Tab6 (Manual)
    public function set_tab6(){
        $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado')
            );

        $objetivos = $this->input->post('objetivos');
        $funciones = $this->input->post('funciones');
        $id_manual = $this->input->post('id_manual');

        echo json_encode($this->cp_m->set_tab6($data, $objetivos, $funciones, $id_manual));
        // echo json_encode($objetivos);
    }

    public function get_tab6(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab6($idRev));
    }

    // Tab7 (Mapa)
    public function set_tab7(){
        $data = array(
            'id_auditoria'=>  $this->input->post('id_revision'),
            'verificado'=>  $this->input->post('verificado'),
            'validado'=>  $this->input->post('validado')
            );

        $proc = $this->input->post('proc');
        $num_direccion = $this->input->post('num_direccion');
        $id_mapa = $this->input->post('id_mapa');

        echo json_encode($this->cp_m->set_tab7($data, $proc, $num_direccion, $id_mapa));
        // echo json_encode($objetivos);
    }

    public function get_tab7(){

         $idRev = $this->input->post('id_revision');

         echo json_encode($this->cp_m->get_tab7($idRev));
    }
}