<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Catalogo_model', "catalogo_m");
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

	public function m50_1_catalogos(){	//DASHBOARD CATALOGOS 
		//$data['getTipo_blog'] = $this->blog_m->data_cat('blog_tipo');
		//$data['get_blogs'] = $this->blog_m->get_blog('blog_tipo');
		$data['getAreas_count'] = $this->catalogo_m->data_cat_count('area');
		$data['getProceso_count'] = $this->catalogo_m->data_cat_count('proceso');
		$data['getAlcance_count'] = $this->catalogo_m->data_cat_count('alcance');
		$data['getCargo_count'] = $this->catalogo_m->data_cat_count('cargo');
		$data['getNivel_count'] = $this->catalogo_m->data_cat_count('nivel');
		$data['getEstatus_count'] = $this->catalogo_m->data_cat_count('nivelstatus');
		$data['getCodigoPuesto_count'] = $this->catalogo_m->data_cat_count('nivelcodpuesto');
		$data['getIntitucion_count'] = $this->catalogo_m->data_cat_count('esc_intitucion');
		$data['getTitulo_count'] = $this->catalogo_m->data_cat_count('esc_titulo');
		$data['getDocOptenido_count'] = $this->catalogo_m->data_cat_count('esc_doc');
		$data['getHabilidad_count'] = $this->catalogo_m->data_cat_count('hab_habilidad');
		$data['getCertificacion_count'] = $this->catalogo_m->data_cat_count('cer_certificacion');
		$data['getCurso_count'] = $this->catalogo_m->data_cat_count('cur_curso');
		$data['getCursoInst_count'] = $this->catalogo_m->data_cat_count('cur_institucion');
		$data['getArea_count'] = $this->catalogo_m->data_cat_count('area_area');
		$data['getSubarea_count'] = $this->catalogo_m->data_cat_count('area_subarea');
		$data['getVicepresidencia_count'] = $this->catalogo_m->data_cat_count('vicepresidencia'); /*sconsa*/
		$data['getDga_count'] = $this->catalogo_m->data_cat_count('dga');
		$data['getDgs_count'] = $this->catalogo_m->data_cat_count('dgs');

		
		$this->load->view('core/m50_1_catalogos',$data);
	}
	function get_s_rol(){
		if ( trim($this->session->userdata('rol') ) == 'Administrador') {
			return true;	
		}
		return false;
	}

	public function m50_2_procesos(){
		$data['getProcesos'] = $this->catalogo_m->data_cat('proceso');
		$data['s_rol'] = $this->get_s_rol();
		$this->load->view('core/m50_2_procesos',$data);
	}
	public function m50_3_alcances(){
		$data['getCatalcance'] = $this->catalogo_m->data_cat('proceso');
		$data['getAlcances'] = $this->catalogo_m->data_cat_alcance('alcance');
		$data['s_rol'] = $this->get_s_rol();
		$this->load->view('core/m50_3_alcances',$data);
	}
	public function m50_4_areas(){
		$data['getAreas'] = $this->catalogo_m->data_cat('area');
		$data['s_rol'] = $this->get_s_rol();
		$this->load->view('core/m50_4_areas',$data);
	}
	public function m50_5_cargo(){
		$data['getCargo'] = $this->catalogo_m->data_cat('cargo');
		$data['s_rol'] = $this->get_s_rol();
		$this->load->view('core/m50_5_cargo',$data);
	}
	public function m50_6_nivel(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getCargo'] = $this->catalogo_m->data_cat('nivel');
		$this->load->view('core/m50_6_nivel',$data);
	}
	public function m50_7_estatus(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getEstatus'] = $this->catalogo_m->data_cat('nivelstatus');
		$this->load->view('core/m50_7_estatus',$data);
	}
	public function m50_8_codigopuesto(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getEstatus'] = $this->catalogo_m->data_cat('nivelcodpuesto');
		$this->load->view('core/m50_8_codigopuesto',$data);
	}

	public function m50_9_intitucion(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getEstatus'] = $this->catalogo_m->data_cat('esc_intitucion');
		$this->load->view('core/m50_9_intitucion',$data);
	}
	public function m50_10_titulo(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getEstatus'] = $this->catalogo_m->data_cat('esc_titulo');
		$this->load->view('core/m50_10_titulo',$data);
	}
	public function m50_11_documento(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getDocumentoOptenido'] = $this->catalogo_m->data_cat('esc_doc');
		$this->load->view('core/m50_11_documento',$data);
	}
	public function m50_12_habilidad(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getHabilidad'] = $this->catalogo_m->data_cat('hab_habilidad');
		$this->load->view('core/m50_12_habilidad',$data);
	}
	public function m50_13_Certificacion(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getCertificacion'] = $this->catalogo_m->data_cat('cer_certificacion');
		$this->load->view('core/m50_13_Certificacion',$data);
	}
	public function m50_14_Curso(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getCurso'] = $this->catalogo_m->data_cat('cur_curso');
		$this->load->view('core/m50_14_Curso',$data);
	}
	public function m50_15_CursoInstitucion(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getCursoInstitucion'] = $this->catalogo_m->data_cat('cur_institucion');
		$this->load->view('core/m50_15_CursoInstitucion',$data);
	}
	public function m50_16_area(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getArea'] = $this->catalogo_m->data_cat('area_area');
		$this->load->view('core/m50_16_area',$data);
	}
	public function m50_17_subarea(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getSubarea'] = $this->catalogo_m->data_cat('area_subarea');
		$this->load->view('core/m50_17_subarea',$data);
	}
	public function m50_19_vicepresidencia(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getVicepresidencia'] = $this->catalogo_m->data_cat('vicepresidencia');
		$this->load->view('core/m50_19_vicepresidencia',$data);
	}
	public function m50_18_dir_gen_adj(){
		$data['s_rol'] = $this->get_s_rol();
		$data['getDga'] = $this->catalogo_m->data_cat('dga');
		$this->load->view('core/m50_18_dir_gen_adj',$data);
	}
	public function direcciones_generales(){
		$data['s_rol'] = $this->get_s_rol();
		$data['dgs'] = $this->catalogo_m->data_cat('dgs');
		$this->load->view('core/direcciones_generales',$data);
	}
	
	public function add_m50_4_catalogo(){
		$this->form_validation->set_rules('proceso', 'Proceso', 'trim|required|max_length[100]');
		//$this->form_validation->set_rules('orden', 'Orden', 'trim|required|integer|max_length[10]');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|max_length[255]');		
		if ($this->form_validation->run() == true) {
			$id_cat_form = trim($this->input->post('id_cat_form', TRUE) );
			if (!empty( $id_cat_form )) {
				$data = $this->catalogo_m->edit_catalogo();
				$data->id_catalogo_update = 'update';
			}else{
				$data = $this->catalogo_m->add_catalogo();
			}				
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}

	public function add_m50_4_catalogo_alcances(){
		$this->form_validation->set_rules('proceso', 'Proceso', 'trim|required');
		$this->form_validation->set_rules('alcance', 'Alcance', 'trim|required|integer|max_length[10]');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|max_length[100]');		
		if ($this->form_validation->run() == true) {
			$id_cat_form = trim($this->input->post('id_cat_form', TRUE) );
			if (!empty( $id_cat_form )) {
				$data = $this->catalogo_m->edit_catalogo();
				$data->id_catalogo_update = 'update';
			}else{
				$data = $this->catalogo_m->add_catalogo();
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
				$data = $this->catalogo_m->sortable_mysql();							
		}else{
			$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de validacion');
		}			
		echo json_encode($data);
	}

	public function delete_m50_4_catalogo($id_cat=null){
		if (empty($id_cat))
			$data = false;
		else
			$data=$this->catalogo_m->delete_catalogo($id_cat);	
		echo json_encode($data);
	}
	//codigo borrador	 
	




	







}
