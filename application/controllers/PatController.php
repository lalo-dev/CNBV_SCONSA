<?php defined('BASEPATH') OR exit('No direct script access allowed');
class PatController extends MY_Controller {
	function __construct(){
	  	parent::__construct();
		$this->load->model('Usuarios_model', "usuarios_m");
	  	$this->load->model('Pat_model', "Pat_m");
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
	//CONTROLADORES PARA PAT
	public function m1_0_pat(){
		//$data['totalAuditorias'] = $this->Pat_m->get_total_auditorias($anio);
		//$data['totalSeguimientos'] = $this->Pat_m->get_total_seguimientos($anio);
		$data['getPats'] = $this->Pat_m->get_pats_total();
		$this->load->view('pat/m1_0_pat', $data);
	}

	public function m1_0_0_form_nuevo_pat(){
		$data['getPats'] = $this->Pat_m->get_pats_estatus();		
		$this->load->view('pat/m1_0_0_form_nuevo_pat', $data);
	}

	public function pat_change_status(){
		date_default_timezone_set('America/Monterrey');	
		$this->form_validation->set_rules('activo', 'activo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_pat', 'id_pat', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$get_data = $this->Pat_m->get_pat_date();
			$year = date('Y');
			$mes = date('m');
			$send = $get_data->pat_ano;
			if ( ( $send <= $year ) or ( $send <= ($year+1  )  and $mes >= 11 )  ) {
				$data= $this->Pat_m->pat_change_status();	
			}else{
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de activacion');
			}
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion, recargue la pagina');
		}			
		echo json_encode($data);
	}

	public function m1_0_0_form_pat($pat_ano = null){
		$data['pat_ano'] = $pat_ano;
		$data['getRevisiones'] = $this->Pat_m->get_pat_revisiones($pat_ano);
		$this->load->view('pat/m1_0_0_form_pat', $data);
	}
	public function m1_0_0_form_pat_down_list($pat_ano = null){
		$this->load->helper(array('download', 'file', 'html' ));
		$this->load->library("excel");			
		$result = $this->Pat_m->get_pat_revisiones_down_list($pat_ano); 
        if (is_array($result)){            
            $this->excel->setActiveSheetIndex(0);            
            $this->excel->stream('lstRevisiones_'.trim($pat_ano).'_' . date('Y_m_d_H_i_s') . '_.xls', $result);                
        }else {
            print_r("Error interno, consulta a su administrador");
        } 
	}

	public function m1_0_0_form_pat_revision_commit_add(){
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		$this->form_validation->set_rules('id_comment', 'Identificador de Revision', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('mess_comment', 'Comentario vacio', 'trim|required|max_length[255]');			
		if ($this->form_validation->run() == true) {			
			$data = $this->Pat_m->add_revision_commit();			
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		echo json_encode($data);
	}

	public function m1_0_0_form_pat_revision_commit_del($id_rev=null){
		if (empty($id_rev))
			$data = false;
		else
			$data=$this->Pat_m->del_revision($id_rev);	
		echo json_encode($data);
	}

	public function m1_0_0_form_pat_agregar_revision($pat_ano = null){
		$data['pat_ano'] = $pat_ano;
		$data['getpat_tipo_revision'] = $this->Pat_m->data_cat('pat_tipo_revision');
		$data['getpat_prog_adic'] = $this->Pat_m->data_cat('pat_prog_adic');
		$data['getpat_instancia'] = $this->Pat_m->data_cat('pat_instancia');
		$data['getpat_clave'] = $this->Pat_m->data_cat('pat_clave');
		$data['getpat_justificacion'] = $this->Pat_m->data_cat('pat_justificacion');
		$data['getpat_area_revizar'] = $this->Pat_m->data_cat('pat_area_revizar');

		$data['getpat_sem_ini'] = $this->Pat_m->data_cat('pat_sem_ini');
		$data['getpat_sem_fin'] = $this->Pat_m->data_cat('pat_sem_fin');
		$data['getpat_ts_revision'] = $this->Pat_m->data_cat('pat_ts_revision');
		//semana inicio y fin. ts hombre y ts revision
		$data['getpat_aud_pre'] = $this->Pat_m->data_cat('pat_aud_pre');
		$data['getpat_muestra'] = $this->Pat_m->data_cat('pat_muestra');
		$data['getpat_universo'] = $this->Pat_m->data_cat('pat_universo');
		$data['get_riesgos'] = $this->Pat_m->obtner_lista_riesgos();
		$this->load->view('pat/m1_0_0_form_pat_agregar_revision', $data);
	}

	public function m1_0_0_form_pat_editar_revision($pat_ano = null, $id_rev = null){
		$data['pat_ano'] = $pat_ano;
		$data['getpat_tipo_revision'] = $this->Pat_m->data_cat('pat_tipo_revision');
		$data['getpat_prog_adic'] = $this->Pat_m->data_cat('pat_prog_adic');
		$data['getpat_instancia'] = $this->Pat_m->data_cat('pat_instancia');
		$data['getpat_clave'] = $this->Pat_m->data_cat('pat_clave');
		$data['getpat_justificacion'] = $this->Pat_m->data_cat('pat_justificacion');
		$data['getpat_area_revizar'] = $this->Pat_m->data_cat('pat_area_revizar');

		$data['getpat_sem_ini'] = $this->Pat_m->data_cat('pat_sem_ini');
		$data['getpat_sem_fin'] = $this->Pat_m->data_cat('pat_sem_fin');
		$data['getpat_ts_revision'] = $this->Pat_m->data_cat('pat_ts_revision');
		//semana inicio y fin. ts hombre y ts revision
		$data['getpat_aud_pre'] = $this->Pat_m->data_cat('pat_aud_pre');
		$data['getpat_muestra'] = $this->Pat_m->data_cat('pat_muestra');
		$data['getpat_universo'] = $this->Pat_m->data_cat('pat_universo');
		$data['get_riesgos'] = $this->Pat_m->obtner_lista_riesgos();
		$data['get_riesgos_rev'] = $this->Pat_m->obtner_lista_riesgos_rev($id_rev);
		$data['get_areas_rev'] = $this->Pat_m->obtner_lista_areas_rev($id_rev);
		$data['get_revision'] = $this->Pat_m->get_pat_revision_unica($id_rev);

		$this->load->view('pat/m1_0_0_form_pat_editar_revision', $data);
	}

	public function m1_0_0_form_pat_agregar_revision_add(){					
		$this->form_validation->set_rules('no_revision', 'no_revision', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('tipo_revision', 'tipo_revision', 'trim|required|max_length[1000]');
		$this->form_validation->set_rules('prog_adic', 'prog_adic', 'trim|max_length[100]');	
		$this->form_validation->set_rules('clave', 'clave', 'trim|max_length[100]');	
		$this->form_validation->set_rules('instancia', 'instancia', 'trim|max_length[100]');	
		$this->form_validation->set_rules('justificacion', 'justificacion', 'trim|max_length[100]');	
		$this->form_validation->set_rules('area_revizar', 'area_revizar', 'trim|max_length[100]');		
		$this->form_validation->set_rules('descripcion', 'descripcion', 'trim|max_length[1000]');	
		$this->form_validation->set_rules('objetivo', 'objetivo', 'trim|max_length[1000]');	
		$this->form_validation->set_rules('semana_ini', 'semana_ini', 'trim|max_length[100]');	
		$this->form_validation->set_rules('semana_fin', 'semana_fin', 'trim|max_length[100]');	
		$this->form_validation->set_rules('ts_revision', 'ts_revision', 'trim|max_length[100]');	
		$this->form_validation->set_rules('ts_hombre', 'ts_hombre', 'trim|max_length[100]');
		$this->form_validation->set_rules('periodo_ini', 'periodo_ini', 'trim|max_length[100]');
		$this->form_validation->set_rules('periodo_fin', 'periodo_fin', 'trim|max_length[100]');
		$this->form_validation->set_rules('aud_precedente', 'aud_precedente', 'trim|max_length[100]');
		$this->form_validation->set_rules('muestra', 'muestra', 'trim|max_length[100]');
		$this->form_validation->set_rules('universo', 'universo', 'trim|max_length[100]');
		$this->form_validation->set_rules('riesgo', 'riesgo', 'trim|max_length[100]');	

		if ($this->form_validation->run() == true) {
			$id_rev_form = trim($this->input->post('id_rev_form', TRUE) );
			if (!empty( $id_rev_form )) {
				$data = $this->Pat_m->update_revision();
				$data->id_pres_update = 'update';
			}else{
				$data = $this->Pat_m->add_revision();
			}
				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	} 

	function update_revision_riesgo_add(){
		$this->form_validation->set_rules('id_revision', 'id_revision', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('id_riesgo', 'id_riesgo', 'trim|required|max_length[100]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->update_revision_riesgo_add();
		}else{
			$data = false;
		}
		echo json_encode($data);
    }

    function update_revision_riesgo_delete(){    	
    	$this->form_validation->set_rules('id_revision', 'id_revision', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('id_riesgo', 'id_riesgo', 'trim|required|max_length[100]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->update_revision_riesgo_delete();
		}else{
			$data = false;
		}
		echo json_encode($data);
    }

    function update_revision_areas_revisar_add(){
		$this->form_validation->set_rules('id_revision', 'id_revision', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('id_area', 'id_area', 'trim|required|max_length[100]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->update_revision_areas_revisar_add();
		}else{
			$data = false;
		}
		echo json_encode($data);
    }

    function update_revision_areas_revisar_delete(){    	
    	$this->form_validation->set_rules('id_revision', 'id_revision', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('id_area', 'id_area', 'trim|required|max_length[100]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->update_revision_areas_revisar_delete();
		}else{
			$data = false;
		}
		echo json_encode($data);
    }

    public function revision_btn_revizado(){//CHANGE STATUS USUARIO 
		//$this->form_validation->set_rules('estatus_revisado', 'estatus_revisado', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('id_rev', 'id_rev', 'trim|required|max_length[11]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->revision_btn_revizado_m();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}
    public function revision_check_revizado(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('estatus_revisado', 'estatus_revisado', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('id_rev', 'id_rev', 'trim|required|max_length[11]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->revision_check_revizado_m();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

	 public function revision_check_validado(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('estatus_validado', 'estatus_validado', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('id_rev', 'id_rev', 'trim|required|max_length[11]');
		if ($this->form_validation->run() == true) {
			$data = $this->Pat_m->revision_check_validado_m();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

	//CONTROLADORES PARA PRESENTACION EJECUTIVA
	public function m1_3_presentacion_ejecutiva(){
		$data['gets_pres_ejecutiva'] = $this->Pat_m->gets_pres_ejecutiva();
		$data['file_type'] = $this->Pat_m->data_cat('pat_pre_eje_file_type');
		$this->load->view('pat/m1_3_presentacion_ejecutiva', $data);
	}

	public function get_down_file($id_file = null){
		   $this->load->helper(array('download', 'file', 'html' ));	
		   $data = $this->Pat_m->get_downloads($id_file ); 
		   //$this->logSW( var_export($data, true) );
		   if (!empty($data)) {
			   $get_ruta = URL. $data->ruta; 
			   //$this->logSW( var_export($get_ruta, true) );			   
			   $get_nombre = $data->nombre; 
			   //$this->logSW( var_export($get_nombre, true) );
		       $data_url = file_get_contents($get_ruta); 
		       //$this->logSW( var_export($data_url, true) );
		       force_download($get_nombre, $data_url);
		    }else{
		    	echo "Seguridad activada";
		    }	
	}

	public function m1_3_presentacion_ejecutiva_down_list($pat_ano = null){
		$this->load->helper(array('download', 'file', 'html' ));
		$this->load->library("excel");			
		$result = $this->Pat_m->gets_pres_ejecutiva_down_list($pat_ano); 
        if (is_array($result)){            
            $this->excel->setActiveSheetIndex(0);            
            $this->excel->stream('lstPlaneacionEjecutva_'.trim($pat_ano).'_' . date('Y_m_d_H_i_s') . '_.xls', $result);                
        }else {
            print_r("Error interno, consulta a su administrador");
        } 
	}

	public function m1_3_presentacion_ejecutiva_form(){
		$data['gets_pres_ejecutiva'] = $this->Pat_m->gets_pres_ejecutiva();
		$data['file_type'] = $this->Pat_m->data_cat('pat_pre_eje_file_type');

		$this->load->view('pat/m1_3_presentacion_ejecutiva_form' , $data);
	}

	public function adm_pres_add(){					
		$this->form_validation->set_rules('pre_eje_name', 'Nombre', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('pre_eje_des', 'Descripcion', 'trim|required|max_length[1000]');
		$this->form_validation->set_rules('pre_eje_file_type', 'Tipo', 'trim|max_length[100]');		
		if ($this->form_validation->run() == true) {
			$id_pres_form = trim($this->input->post('id_pres_form', TRUE) );
			if (!empty( $id_pres_form )) {
				$data = $this->Pat_m->edit_pres_ejecutiva();
				$data->id_pres_update = 'update';
			}else{
				$data = $this->Pat_m->add_pres_ejecutiva();
			}
				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	} 

	function get_url_encode(){
      usleep(1);
      $datetime = date("Y-m-d H:i:s");
        list($usec, $sec) = explode(" ", microtime());
        $time =  ((float)$usec + (float)$sec);
        $time_end = date('Ymdhis', strtotime( $datetime ) ).$time;
        return str_replace('.', '', $time_end);
    }

	public function adm_pres_Form_files($id_pres = 0){
		$this->logSW("********_FILES*********");
		$this->logSW( var_export($_FILES, true) );
		$full_path = 'content/pat_pres_ejecutiva/'. $id_pres ."/";
		$config['upload_path'] = $full_path;
		$config['allowed_types'] = 'docx|xls|pdf|ppt|pptx|gif|jpg|png';
		//$config['max_size'] = '5120';
		$config['max_size'] = '41920';
		$arrayResp = array();
		if (!empty($_FILES['img1'])) { //img2	$this->logSW($_FILES['img1']['name']);
	        $this->load->library('upload');		
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config); //$this->logSW( var_export($_FILES, true) );			
			if (!$this->upload->do_upload('img1')){	
				$arrayResp['img1'] =  array('Error' => 'Error al subir Imagen 1, Formatos permitido docx|xls|pdf|pwd|gif|jpg|png, maximo 40MB' );
			}else{
				$info_img1 = $this->upload->data();	//$this->logSW( var_export($info_img1, true) );
				$this->logSW( var_export($info_img1, true) );
				$send_img1 = array(
					//'pre_eje_file_name' => 'img1_'.date('Y_m_d_H_i_s').$info_img1['file_ext'],
					'pre_eje_file_name' => $info_img1['client_name'],
					'pre_eje_file_url' => $full_path.$info_img1['file_name']					
				);				
				$this->Pat_m->delete_uploaded_file($id_pres, 'pre_eje_file_url as ruta' );
				$img1_man = $this->Pat_m->pres_change_files($send_img1, $id_pres, 'pre_eje_file_url');								
				$img1_man->base_url= URL;
				$arrayResp['img1']= $img1_man;								
			}
		}	
		echo json_encode($arrayResp);
	}

	public function delete_pres_ejec($id_pres=null){
		if (empty($id_pres))
			$data = false;
		else
			$data=$this->Pat_m->delete_pres_ejec($id_pres);	
		echo json_encode($data);
	}

	//CONTROLADORES PARA MAPA DE RIESGO

	public function m1_4_mapa_riesgos_index(){
		$data['getPats'] = $this->Pat_m->get_pats_total_mapa_riesgos();
		$this->load->view('pat/m1_4_mapa_riesgos_index', $data);
	}

	public function m1_4_mapa_riesgos($id_pat= null){
		$data['get_riesgos'] = $this->Pat_m->obtner_lista_riesgos_filtro($id_pat);
		$data['id_pat'] = $id_pat;
		$this->load->view('pat/m1_4_mapa_riesgos',$data);
	}

	public function m1_4_mapa_riesgos_form($id_pat= null){
		$data['id_pat'] = $id_pat;
		$data['getRiesgo_impacto'] = $this->Pat_m->data_cat('pat_riesgo_impacto');
		$data['getRiesgo_probabilidad'] = $this->Pat_m->data_cat('pat_riesgo_probabilidad');
		$data['get_riesgos'] = $this->Pat_m->obtner_lista_riesgos_filtro($id_pat);
		$this->load->view('pat/m1_4_mapa_riesgos_form',$data);
	}	

	public function m1_4_mapa_riesgos_form_add(){
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required|max_length[255]');
		$this->form_validation->set_rules('impacto', 'Impacto', 'trim|required|max_length[5]'); //integer
		$this->form_validation->set_rules('probabilidad', 'Probabilidad', 'trim|required|max_length[5]');
		$this->form_validation->set_rules('cuadrante', 'Cuadrante', 'trim|required|max_length[5]');
		$this->form_validation->set_rules('riesgo_ponderado', 'Riesgo ponderado', 'trim|required|max_length[5]');
		
		if ($this->form_validation->run() == true) {
			$id_map_form = trim($this->input->post('id_map_form', TRUE) );
			if (!empty( $id_map_form )) {
				$data = $this->Pat_m->edit_mapa_riesgos();
				$data->id_riesgo_update = 'update';
			}else{
				$data = $this->Pat_m->add_mapa_riesgos();
			}				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}	

	public function sortable_mysql(){
		$this->form_validation->set_rules('id_cat', 'Proceso', 'trim|required|integer|max_length[50]');
		$this->form_validation->set_rules('pos', 'Orden', 'trim|required|integer|max_length[50]');	
		if ($this->form_validation->run() == true) {			
				$data = $this->Pat_m->sortable_mysql();							
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}

	public function delete_m1_4_mapa_riesgos_form($id_cat=null){
		if (empty($id_cat))
			$data = false;
		else
			$data=$this->Pat_m->delete_mapa_riesgos($id_cat);	
		echo json_encode($data);
	}

	//CONTROLADORES PARA SEMANA HOMBRE
	public function m1_5_semanas_hombre(){		
		$data['get_resumen'] = $this->Pat_m->gets_resumen_sem_hom();
		$data['get_total_nivel'] = $this->Pat_m->gets_distribucion_nivel_sem_hom();
		$data['get_total_area'] = $this->Pat_m->gets_distribucion_nivel_sem_hom();
		$data['get_distribucion_nivel'] = $this->Pat_m->gets_distribucion_nivel_sem_hom();
		$data['get_distribucion_area'] = $this->Pat_m->gets_distribucion_nivel_sem_hom();		
		$this->load->view('pat/m1_5_semanas_hombre',$data);
	}
	public function m1_5_semanas_hombre_form(){
		$data['gets_users'] = $this->Pat_m->gets_users_sem_hom();
		$this->load->view('pat/m1_5_semanas_hombre_form',$data);
	}
	public function m1_5_semanas_hombre_search_iduser($id_user = null){
		$data = $this->Pat_m->gets_users_sem_hom_userid($id_user);
		echo json_encode($data);
	}

	public function m1_5_semanas_hombre_add(){		
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('auditoria', 'auditoria', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('seguimiento', 'seguimiento', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('mejora_gestion', 'mejora_gestion', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('trans_inte_parti', 'trans_inte_parti', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('quejas_denuncias', 'quejas_denuncias', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('responsabilidades', 'responsabilidades', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('controversia', 'controversia', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('actividades', 'actividades', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('planeacion', 'planeacion', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('informe_sfp', 'informe_sfp', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('comite', 'comite', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('junta_consejo', 'junta_consejo', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('act_adm', 'act_adm', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('capacitacion', 'capacitacion', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('plazas_vac', 'plazas_vac', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('vacaciones', 'vacaciones', 'trim|required|is_natural|max_length[10]');
		$this->form_validation->set_rules('total', 'total', 'trim|required|is_natural|max_length[10]');

		if ($this->form_validation->run() == true) {
			$id_pres_form = trim($this->input->post('id_pres_form', TRUE) );
			if (!empty( $id_pres_form )) {
				$data = $this->Pat_m->edit_semana_hombre();
				//$data->id_pres_update = 'update';
			}else{
				$data = $this->Pat_m->add_semana_hombre();
			}
				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}
	
	//CONTROLADORES PARA EQUIPO DE TRABAJO
	public function m1_6_equipo_trabajo($pat_ano = null){
		$data['pat_ano'] = $pat_ano;
		$data['getRevisiones'] = $this->Pat_m->get_pat_revisiones_trabajo($pat_ano);
		$this->load->view('pat/m1_6_equipo_trabajo', $data);
	}

	public function down_list_m1_6_equipo_trabajo($pat_ano = null){
		$this->load->helper(array('download', 'file', 'html' ));
		$this->load->library("excel");			
		$result = $this->Pat_m->getxlsdata_equipo_trabajo($pat_ano); 
        if (is_array($result)){            
            $this->excel->setActiveSheetIndex(0);            
            $this->excel->stream('lstrevisiones_'.trim($pat_ano).'_' . date('Y_m_d_H_i_s') . '_.xls', $result);                
        }else {
            print_r("Error interno, consulta a su administrador");
        } 
	}

	public function m1_6_0_form_equipo_trabajo($id_revision = null){
		$data['get_equipo_rol'] = $this->Pat_m->data_cat('pat_equi_trab_rol');
		$data['get_usuarios'] = $this->Pat_m->get_usuarios_equipo();//solo 
		$data['id_revision'] = $id_revision;
		$this->load->view('pat/m1_6_0_form_equipo_trabajo', $data);
	}

	public function rol_usuarios_change_status(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('activo', 'activo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_rev', 'id_rev', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$check = $this->Pat_m->usuarios_change_status_check();
			if ($check > 0) {
				//$data = array(	'activo'=> $check ,  'error' => 'mayor a cero');
				$data= $this->Pat_m->usuarios_change_status();	
			}else{
				//$data = array(	'activo'=> $check ,  'error' => 'menor a cero');
				$data=$this->Pat_m->usuarios_insert_status();	
			}			
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}
	/*
	47 : titular ; 48 : coordinador; 49 : jefe_grupo; 50: auditor; 51 : consulta
	*/
	function get_rol_usuarios_change_roles($val = null){
		$activo = $this->input->post('activo', TRUE);
		$id_user = $this->input->post('id_user', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		$error_rol_cotent = $this->session->set_flashdata('mess_error_rol', '');

		if (!empty($val)) {
	 		if ($val == "rol=47") {	//echo "Titular"; echo "<br>";	
		 		if ($activo == 1) {
		 			return 'titular';
		 		}else{ //validacion 
		 			$data = array('id_revision' => $id_rev, 'rol_titular' => 0, 'activo' => 0 , 'estatus' => 0, 'id_usuario !='=> $id_user );
		 			$val_unico = $this->Pat_m->usuarios_change_status_check_valido($data);
		 			if ($val_unico > 0) {
		 				return '';
		 				//$error_rol_cotent += "<p>Error al agregar Titular, solo agregue un titular. </p>";
						//$this->session->set_flashdata('mess_error_rol', $error_rol_cotent);
					}else{
						return 'titular';
					}
		 		} 	
		 	}else if($val == "rol=48"){//echo "Coordinador";
		 		//return 'coordinador';
		 		if ($activo == 1) {
		 			return 'coordinador';
		 		}else{ //validacion 
		 			$data = array('id_revision' => $id_rev, 'rol_cordinador' => 0 , 'activo' => 0 , 'estatus' => 0, 'id_usuario !='=> $id_user );
		 			$val_unico = $this->Pat_m->usuarios_change_status_check_valido($data);
		 			if ($val_unico > 0) {
		 				return '';
		 				//$error_rol_cotent += "<p>Error al agregar Titular, solo agregue un titular. </p>";
						//$this->session->set_flashdata('mess_error_rol', $error_rol_cotent);
					}else{
						return 'coordinador';
					}
		 		}
		 	}else if($val == "rol=49"){//echo "Jefe de grupo";
		 		//return 'jefe_grupo';
		 		if ($activo == 1) {
		 			return 'jefe_grupo';
		 		}else{ //validacion 
		 			$data = array('id_revision' => $id_rev, 'rol_jefe_grupo' => 0, 'activo' => 0 , 'estatus' => 0, 'id_usuario !=' => $id_user );
		 			$val_unico = $this->Pat_m->usuarios_change_status_check_valido($data);
		 			if ($val_unico > 0) {
		 				return '';
		 				//$error_rol_cotent += "<p>Error al agregar Titular, solo agregue un titular. </p>";
						//$this->session->set_flashdata('mess_error_rol', $error_rol_cotent);
					}else{
						return 'jefe_grupo';
					}
		 		}
		 	}else if($val == "rol=50"){//echo "Auditor";
		 		return 'auditor';
		 	}else if($val == "rol=51"){//echo "Consulta";
		 		return 'consulta';
		 	}
	 	}
	 	return '';
	}
	public function rol_usuarios_change_roles(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('activo', 'activo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_rev', 'id_rev', 'trim|required|max_length[50]');
		//$this->form_validation->set_rules('rol', 'rol', 'trim|max_length[50]');
		
		if ($this->form_validation->run() == true) {
			$check = $this->Pat_m->usuarios_change_status_check();
			if ($check > 0) {
				
			}else{
				$this->Pat_m->usuarios_insert_status();	
			}
			//$this->session->set_flashdata('mess_error_rol', '');
			//$this->session->set_flashdata('data_rol','');
			$array_rol = array();
			$roles = $this->input->post('rol');
			if (!empty($roles)) {
				$rol = explode("&", $roles); 			
				foreach ($rol as $key => $value) {
					$array_rol[$key] = $this->get_rol_usuarios_change_roles($value);
				} 
			}
			$data = $this->Pat_m->usuarios_add_roles($array_rol);
			//$data['mess_error_rol'] = $this->session->flashdata('mess_error_rol');
			//$this->session->set_flashdata('mess_error_rol', ''); //limpiando
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}
	


	//funcion para log
	function logSW($cadena){
        try {
            $direcion = APPPATH."/logs/registro/";
            $control = fopen($direcion."LogsServicios-".date('d-m-Y').".log","a+");
            if($control == true){
                fwrite($control,date('d/m/Y h:i:s ')."  ".$cadena. PHP_EOL);
                fclose($control);
            }
        } catch (Exception $e) {}        
    }
























	//////////////////////////////////////////////////////////////////////////////////////////////////////
	//CODIGO BORRADOR /////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////
	public function adm_Blog(){		
		//CATALOGOS DE BLOG
		$data['getTipo_blog'] = $this->blog_m->data_cat('blog_tipo');
		$data['get_blogs'] = $this->blog_m->get_blog('blog_tipo');
		$data['s_rol'] = false;
		if ( trim($this->session->userdata('rol') ) == 'Administrador') {
			$data['s_rol'] = true;	
		}
		$this->load->view('core/blogAdmin', $data);
	} 

	public function adm_Blog_add(){					
		$this->form_validation->set_rules('blog_titulo', 'Titulo blog', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('blog_des', 'Descripcion blog', 'trim|required|max_length[9999]');
		$this->form_validation->set_rules('blog_tipo', 'Descripcion Tipo', 'trim|max_length[100]');		
		if ($this->form_validation->run() == true) {
			$id_blog_form = trim($this->input->post('id_blog_form', TRUE) );
			if (!empty( $id_blog_form )) {
				$data = $this->blog_m->edit_blog();
				$data->id_blog_update = 'update';
			}else{
				$data = $this->blog_m->add_blog();
			}
				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	} 




}
