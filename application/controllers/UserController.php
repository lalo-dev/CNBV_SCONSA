<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	  $this->load->model('Usuarios_model', "usuarios_m");
	  $this->load->helper(array('form', 'url'));

	  //VALIDACION TIPO DE USUARIO
 	}

	public function index(){		
		$this->load->view('core/dashboard');
	}

	//VISTA USUARIOS
	public function adm_Usuarios(){		
		$data['get_usuarios'] = $this->usuarios_m->get_usuarios();
		$data['get_usuarios_area'] = $this->usuarios_m->get_usuarios_area();
		$data['s_rol'] = false;
		if ( trim($this->session->userdata('rol') ) == 'Administrador') {
			$data['s_rol'] = true;	
		}
		$this->load->view('core/adm_usuarios', $data);//vistas usuarios	
	}

	public function adm_Usuarios_change_status(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('activo', 'activo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$data=$this->usuarios_m->usuarios_change_status();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

	public function adm_Usuarios_delete(){//DELETE USER
		$this->form_validation->set_rules('estatus', 'status', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$data=$this->usuarios_m->usuarios_delete();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

	public function adm_Usuarios_Form(){
		$data['estadoCivil'] = $this->usuarios_m->data_cat('estadocivil');
		$data['nacionalidad'] = $this->usuarios_m->data_cat('nacionalidad');
		$data['getareas'] = $this->usuarios_m->data_cat('area');
		$data['getcargos'] = $this->usuarios_m->data_cat('cargo');
		$data['getnivel'] = $this->usuarios_m->data_cat('nivel');
		$data['nivelStatus'] = $this->usuarios_m->data_cat('nivelstatus');
		$data['nivelCodPuesto'] = $this->usuarios_m->data_cat('nivelcodpuesto');
		$data['GradoEstudio'] = $this->usuarios_m->data_cat('gradoestudio');
		$data['rol_permiso'] = $this->usuarios_m->data_cat('rol_permiso');
		//catalogos de Escolaridad
		$data['getEsc_Intitucion'] = $this->usuarios_m->data_cat('esc_intitucion');
		$data['getEsc_Titulo'] = $this->usuarios_m->data_cat('esc_titulo');
		$data['getEsc_doc'] = $this->usuarios_m->data_cat('esc_doc');
		$data['getEsc_estatus'] = $this->usuarios_m->data_cat('esc_estatus');
		
		//CATALOGO DE HABILIDADES
		$data['getHab_habilidad'] = $this->usuarios_m->data_cat('hab_habilidad');
		$data['getHab_nivel'] = $this->usuarios_m->data_cat('hab_nivel');

		//CATALOGO DE CERTIFICACION
		$data['getCer_certificacion'] = $this->usuarios_m->data_cat('cer_certificacion');
		//CATALOGO DE CERTIFICACION
		$data['getCur_curso'] = $this->usuarios_m->data_cat('cur_curso');
		$data['getCur_institucion'] = $this->usuarios_m->data_cat('cur_institucion');

		//CATALOGO DE AREA
		$data['getArea_area'] = $this->usuarios_m->data_cat('area_area');
		$data['getArea_subarea'] = $this->usuarios_m->data_cat('area_subarea');
		$data['getArea_tiempo'] = $this->usuarios_m->data_cat('area_tiempo');
		if ( trim($this->session->userdata('rol') )== 'Administrador') {
			$this->load->view('core/adm_usuarios_form', $data);			
		}else{
			echo "Usuario no autorizado";
		}
		//var_dump($this->session);
	}

	public function check_user(){ //validacion para user unico
		if (!empty( $this->input->post('check_user') ) ){			
			$input = $this->input->post('check_user', true);		
        	$respuesta = $this->usuarios_m->check_user($input);
        	echo json_encode($respuesta);
        }else{
            echo json_encode(false);
        }
	}	

	public function check_user_edit($edit = 0){ //validacion para user unico
		if (!empty( $this->input->post('check_user') ) and $edit > 0  ){			
			$input = $this->input->post('check_user', true);		
        	$respuesta = $this->usuarios_m->check_user_edit($input, $edit );
        	echo json_encode($respuesta);
        }else{
            echo json_encode(false);
        }
	}

	public function check_some(){ //validacion para CURP, NO. EXP, EMAIL PERSONAL
		$data = $this->input->post();		
		if (!empty( $data['check'] ) and !empty( $data['campo'] )  ){			
			$input = $this->input->post('check', true);		
        	$respuesta = $this->usuarios_m->check_data($data['check'], $data['campo']);
        	echo json_encode($respuesta);
        }else{
            echo json_encode(false);
        }
	}

	public function check_some_edit($edit = 0){ //validacion para CURP, NO. EXP, EMAIL PERSONAL
		$data = $this->input->post();		
		if (!empty( $data['check'] ) and !empty( $data['campo'] )  ){			
			$input = $this->input->post('check', true);		
        	$respuesta = $this->usuarios_m->check_data_edit($data['check'], $data['campo'],$edit );
        	echo json_encode($respuesta);
        }else{
            echo json_encode(false);
        }
	}

	public function adm_Usuarios_Form_edit($id_user = null){
		$data['estadoCivil'] = $this->usuarios_m->data_cat('estadocivil');
		$data['nacionalidad'] = $this->usuarios_m->data_cat('nacionalidad');
		$data['getareas'] = $this->usuarios_m->data_cat('area');
		$data['getcargos'] = $this->usuarios_m->data_cat('cargo');
		$data['getnivel'] = $this->usuarios_m->data_cat('nivel');
		$data['nivelStatus'] = $this->usuarios_m->data_cat('nivelstatus');
		$data['nivelCodPuesto'] = $this->usuarios_m->data_cat('nivelcodpuesto');
		$data['GradoEstudio'] = $this->usuarios_m->data_cat('gradoestudio');
		$data['rol_permiso'] = $this->usuarios_m->data_cat('rol_permiso');
		//catalogos de Escolaridad
		$data['getEsc_Intitucion'] = $this->usuarios_m->data_cat('esc_intitucion');
		$data['getEsc_Titulo'] = $this->usuarios_m->data_cat('esc_titulo');
		$data['getEsc_doc'] = $this->usuarios_m->data_cat('esc_doc');
		$data['getEsc_estatus'] = $this->usuarios_m->data_cat('esc_estatus');		
		//CATALOGO DE HABILIDADES
		$data['getHab_habilidad'] = $this->usuarios_m->data_cat('hab_habilidad');
		$data['getHab_nivel'] = $this->usuarios_m->data_cat('hab_nivel');		
		//CATALOGO DE CERTIFICACION
		$data['getCer_certificacion'] = $this->usuarios_m->data_cat('cer_certificacion');
		//CATALOGO DE CERTIFICACION
		$data['getCur_curso'] = $this->usuarios_m->data_cat('cur_curso');
		$data['getCur_institucion'] = $this->usuarios_m->data_cat('cur_institucion');


		//CATALOGO DE AREA
		$data['getArea_area'] = $this->usuarios_m->data_cat('area_area');
		$data['getArea_subarea'] = $this->usuarios_m->data_cat('area_subarea');
		$data['getArea_tiempo'] = $this->usuarios_m->data_cat('area_tiempo');
		$data['get_user'] = $this->usuarios_m->get_user_edit($id_user);
		$data['get_user_esc'] = $this->usuarios_m->get_user_edit_esc($id_user);
		$data['get_user_hab'] = $this->usuarios_m->get_user_edit_hab($id_user);
		$data['get_user_cer'] = $this->usuarios_m->get_user_edit_cer($id_user);
		$data['get_user_cur'] = $this->usuarios_m->get_user_edit_cur($id_user);
		$data['get_user_exp'] = $this->usuarios_m->get_user_edit_exp($id_user);
		$data['get_user_area'] = $this->usuarios_m->get_user_edit_area($id_user);
		$data['getDown_curr_url'] = $this->usuarios_m->getDown_info_btn( 'curr_name', 'curr_url', $id_user);			
		$data['getDown_perfil_url'] = $this->usuarios_m->getDown_info_btn( 'perfil_name' ,'perfil_url', $id_user);
		$data['getDown_desempeno_url'] = $this->usuarios_m->getDown_info_btn( 'desempeno_name' ,'desempeno_url', $id_user);
		$data['getDown_foto_url'] = $this->usuarios_m->getDown_info_btn( 'foto_name' ,'foto_url',$id_user);
		

		if ( trim($this->session->userdata('rol') )== 'Administrador') {
			$this->load->view('core/adm_usuarios_form_edit', $data);			
		}else{
			echo "Usuario no autorizado";
		}

	}

	public function get_down_file($id_user = null, $parametro = null){
		$this->logSW("entra a descarga de archivos".$id_user . " " . $parametro );
		 $this->load->helper(array('download', 'file', 'html' ));
		 if (!empty($id_user)) {
		 	if ($parametro == "curr") {
		 		$url = "curr_url";
		 		$nombre = "curr_name";
		 	}elseif($parametro == "perfil"){
		 		$url = "perfil_url";
		 		$nombre = "perfil_name";
		 	}elseif($parametro == "desempeno"){
		 		$url = "desempeno_url";
		 		$nombre = "desempeno_name";
		 	}elseif($parametro == "foto"){
		 		$url = "foto_url";
		 		$nombre = "foto_name";
		 	}
		   $data = $this->usuarios_m->get_downloads($url ,$nombre, $id_user );  
		   $this->logSW( var_export($data, true) );
		   if (!empty($data)) {
			   $get_ruta = URL. $data->ruta; 
			   $get_nombre = $data->nombre; 
		       $data_url = file_get_contents($get_ruta); 
		       $this->logSW( var_export($data_url, true) );
		       force_download($get_nombre, $data_url);
		    }else{
		    	echo "Seguridad activada";
		    }	   
		 }else{
		 	echo "Seguridad activada";
		 }	   
	}

	function get_url_encode(){
		usleep(1);
		$datetime = date("Y-m-d H:i:s");
	    list($usec, $sec) = explode(" ", microtime());
	    $time =  ((float)$usec + (float)$sec);
	    $time_end = date('Ymdhis', strtotime( $datetime ) ).$time;
	    return str_replace('.', '', $time_end);
	}
	public function adm_Usuarios_Form_Generales_files($id_user= null){
		//$this->logSW("********_FILES*********");
		$this->logSW( var_export($_FILES, true) );
		$full_path = 'users/'. $id_user ."/";
		$config['upload_path'] = $full_path;
		$config['max_size'] = '15360';
		$arrayResp = array();
		if (!empty($_FILES['curr_file'])) { //CURRICULUM	
			$this->logSW($_FILES['curr_file']['name']);
	        $this->load->library('upload');								
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config);
			$this->logSW( var_export($_FILES, true) );
			if (!$this->upload->do_upload('curr_file')){
				$this->logSW( var_export($this->upload->display_errors() , true) );
				$arrayResp['curr_file'] =  array('Error' => 'Error al subir archivo Curriculum, Formatos permitido PDF, maximo 15MB' );
			}else{						
				$info_curr = $this->upload->data();
				//$this->logSW( var_export($info_curr, true) );
				$send_curr = array(
					'curr_name' => 'curriculum_'.date('Y_m_d_H_i_s').$info_curr['file_ext'],
					'curr_url' => $full_path.$info_curr['file_name']
				);				
				$this->usuarios_m->delete_uploaded_file($id_user, 'curr_url as ruta' );
				$curr_file_man = $this->usuarios_m->usuarios_change_files($send_curr, $id_user, 'curr_url');								
				$curr_file_man->base_url= URL;
				$arrayResp['curr_file']= $curr_file_man;								
			}
		}

		if (!empty($_FILES['perfil_file'])) { //PERFIL PUESTO	
	        $this->load->library('upload');								
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx';			
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('perfil_file')){
				$arrayResp['perfil_file'] =  array('Error' => 'Error al subir archivo perfil Puesto, Formatos permitido gif|jpg|png|jpeg|pdf|doc|docx, maximo 15MB' );
			}else{						
				$info_file = $this->upload->data();
				$send_perfil = array(
					'perfil_name' => 'perfil_file_'.date('Y_m_d_H_i_s').$info_file['file_ext'],
					'perfil_url' => $full_path.$info_file['file_name']
				);				
				$this->usuarios_m->delete_uploaded_file($id_user, 'perfil_url as ruta' );

				$perfil_file_man =$this->usuarios_m->usuarios_change_files($send_perfil, $id_user, 'perfil_url');		
				$perfil_file_man->base_url= URL;
				$arrayResp['perfil_file'] =$perfil_file_man;
				
			}
		}

		if (!empty($_FILES['desempeno_file'])) { //DESEMPEÑO FILE	
	        $this->load->library('upload');								
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx';			
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('desempeno_file')){
				$arrayResp['desempeno_file'] =  array('Error' => 'Error al subir archivo Desempeño, Formatos permitido gif|jpg|png|jpeg|pdf|doc|docx, maximo 15MB' );
			}else{						
				$info_desempeno = $this->upload->data();
				$send_desempeno = array(
					'desempeno_name' => 'desempeno_file_'.date('Y_m_d_H_i_s').$info_desempeno['file_ext'],
					'desempeno_url' => $full_path.$info_desempeno['file_name']
				);				
				$this->usuarios_m->delete_uploaded_file($id_user, 'desempeno_url as ruta' );
				$desempeno_file_man =$this->usuarios_m->usuarios_change_files($send_desempeno, $id_user, 'desempeno_url');					
				$desempeno_file_man->base_url= URL;
				$arrayResp['desempeno_file'] =$desempeno_file_man;					

			}
		}

		if (!empty($_FILES['foto_file'])) { //PERFIL FOTO	
	        $this->load->library('upload');								
			$config['allowed_types'] = 'gif|jpg|png|jpeg';			
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_file')){
				$arrayResp['foto_file'] =  array('Error' => 'Error al subir archivo Fotografia, Formatos permitido gif|jpg|png|jpeg, maximo 15MB' );
			}else{						
				$info_foto = $this->upload->data();
				$send_foto = array(
					'foto_name' => 'foto_file_'.date('Y_m_d_H_i_s').$info_foto['file_ext'],
					'foto_url' => $full_path.$info_foto['file_name']
				);				
				$this->usuarios_m->delete_uploaded_file($id_user, 'foto_url as ruta' );
				$foto_file_man =$this->usuarios_m->usuarios_change_files($send_foto, $id_user, 'foto_url');					
				$foto_file_man->base_url= URL;
				$arrayResp['foto_file'] =$foto_file_man;
			}
		}

		if (!empty($_FILES['perfil_resize'])) { //SOLO PARA RESIZE EJEMPLO
			$this->logSW($_FILES['curr_file']['name']);
	        $this->load->library('upload');								
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx';
			$config['max_size'] = '15000';
			$config['file_name'] = $this->get_url_encode();
			$this->upload->initialize($config);
			$this->logSW( var_export($_FILES, true) );
			if (!$this->upload->do_upload('perfil_file')){
				$this->logSW( var_export($this->upload->display_errors() , true) );
			}else{						
				$info_curr = $this->upload->data();
				$this->logSW( var_export($info_curr, true) );
				if ($info_curr['file_ext'] == '.png' or $info_curr['file_ext'] == '.jpg' or $info_curr['file_ext'] == '.gif' ) {
					if ($info_curr['image_width'] > 1024 ) {//resize image
						$this->scale_image($info_curr, 'curriculum');
					}else{} //UDPATE					
				}else{		//udpate en user
					$send_curr = array(
						'nomarchivo' => 'curriculum'.$info_curr['file_ext'],
						//'ruta' => $this->root_path . '/' . $info_curr['file_name'],
					);
				}								
			}
		}

		echo json_encode($arrayResp);
	}
	

	function scale_image($data, $modulo, $idmodulo) {
		$this->load->model('CorezmantModel');
		//$this->CorezmantModel->logSW(var_export($data, true));
		$dir_imagen = realpath($data['full_path']);
		if ( file_exists($dir_imagen) ) {chmod( $dir_imagen , 0777); }
		$this->load->library('image_lib');

		$file_name = $data['file_name'];
		if ($data['file_ext'] != ".pdf") {
			/** if image width is greater then 1024 reize it to 1024x768 **/
			if ($data['image_width'] > 1024) {
				$configer = array(
					'image_library' => 'gd2',
					'source_image' => $data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 1024,
					'height' => 768,
					'new_image' => $this->final_upload_path . "/" . $file_name,
				);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();
				/** finally unlink the cache file **/
				unlink($data['full_path']);
			} else {
				rename("./upload/" . $file_name, $this->final_upload_path . "/" . $file_name);
			}
		} else {/** if not image file just move the file from temp directory **/			
			rename("./upload/" . $file_name, $this->final_upload_path . "/" . $file_name);
		}

		//$rutapermisos = $this->final_upload_path . "/" . $file_name ; 
		$rutapermisos = "../diskgroup/files/". $this->root_path . '/' . $file_name ; 
		if (!empty($rutapermisos) ) { //asignando permisos linux
			$dir_ant_file = realpath( APPPATH . '/'.$rutapermisos);		       
	        if ( file_exists($dir_ant_file) ) {			        				 	 		
		 	 	chmod($dir_ant_file, 0777);
		 	 }
		}
		if (strlen($data['client_name'])>50) { //limitando el nombre
			$nom_cliente = substr($data['client_name'],40) ;
			$nom_cliente = trim($nom_cliente).'--'.$data['file_ext'];
		}else{
			$nom_cliente = $data['client_name'];
		}

		$idmarca = $this->session->userdata("idmarca");
		$iduser = $this->session->userdata("iduser");
		$pdata = array(
			'modulo' => $modulo,
			'idmodulo' => $idmodulo,
			'idmarca' => $idmarca,
			'iduser' => $iduser,
			'nomarchivo' => $nom_cliente, //$file_name,
			'ruta' => $this->root_path . '/' . $file_name,
			'date_created' => date("Y-m-d H:i:s"),
			'status' => 0,
		);
		
		$this->load->model('OperacionModel');	
		$this->OperacionModel->save_uploaded_file($pdata);
		return true;
	}
	//CONTROLADORES PARA USUARIO INFORMACION GENERAL
	public function adm_Usuarios_Form_Generales(){ //ajax informacion general
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('numero', 'Numero', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('usuario', 'Usuarios', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('email_cnbv', 'Correo CNBV', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cargo', 'Cargo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required|max_length[50]');
				
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('usuario');	
			if (!$user) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				$data = $this->usuarios_m->add_user();
				//$this->logSW( var_export($data->id_user, true) );
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		echo json_encode($data);
	}

	public function adm_Usuarios_Form_Generales_edit(){ //ajax informacion general
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		$this->form_validation->set_rules('usuario', 'Usuarios', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('email_cnbv', 'Correo CNBV', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cargo', 'Cargo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required|max_length[50]');
				
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('usuario');	
			if (!$user) 
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			else
				$data = $this->usuarios_m->add_user_edit();			
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		echo json_encode($data);
	}
	//CONTROLADORES PARA USUARIO ESCOLAR
	public function adm_Usuarios_Form_Escolares($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		$this->form_validation->set_rules('esc_instituto', 'Instituto', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('esc_titulo', 'Titulo', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('esc_ini_fecha', 'Fecha iniial', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('esc_fin_fecha', 'Fecha fin', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('esc_anos', 'Años', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('esc_doc', 'Documento', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('esc_estatus', 'Estatus', 'trim|required|max_length[50]');	
		
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('esc_instituto');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_esc = trim($this->input->post('id_esc', TRUE) );
					if (!empty( $id_esc )) {
						$temporal = $this->usuarios_m->edit_user_esc($id_user );
					}else{
						$temporal = $this->usuarios_m->add_user_esc($id_user );
					}
						
					if ($temporal) { //validando respuesta
						if (!empty( $id_esc )) {
							$temporal->id_esc_update = 'update';
						}				
						$data = $temporal;
					}else{
						$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio				
					}		
					
				}							
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		
		echo json_encode($data);
	}
//	public function edit_Usuarios_Form_Escolares($id_esc=null){}
	public function del_Usuarios_Form_Escolares($id_esc=null){
		if (empty($id_esc))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_esc($id_esc);	
		echo json_encode($data);
	}
	//CONTROLADORES USUARIO HABILIDADES
	public function adm_Usuarios_Form_Habilidad($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('hab_habilidad_des', 'Habilidad', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('hab_habilidad', 'Habilidad', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('hab_nivel', 'Nivel', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('hab_anos', 'Años', 'trim|required|max_length[50]');			
		
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('hab_habilidad');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_hab = trim($this->input->post('id_hab_form', TRUE) );
					if (!empty( $id_hab )) {
						$temporal = $this->usuarios_m->edit_user_hab($id_user );
					}else{
						$temporal = $this->usuarios_m->add_user_hab($id_user);	
					}
						
					if ($temporal) { //validando respuesta
						if (!empty( $id_hab )) {
							$temporal->id_esc_update = 'update';
						}				
						$data = $temporal;
					}else{
						$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio				
					}	
				}
					
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}		
		echo json_encode($data);
	}

	public function del_Usuarios_Form_Habilidad($id_hab= null){
		if (empty($id_hab))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_hab($id_hab);	
		echo json_encode($data);
	}

	//CONTROLADORES PARA USUARIO CERTIFICACION
	public function adm_Usuarios_Form_Certificacion($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('cer_certificacion_des', 'Certificacion', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cer_certificacion', 'Certificacion', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cer_ano', 'Años', 'trim|required|max_length[50]');			
		
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('cer_certificacion');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_cer = trim($this->input->post('id_cer_form', TRUE) );
					if (!empty( $id_cer )) {
						$temporal = $this->usuarios_m->edit_user_cer($id_user );
					}else{
						$temporal = $this->usuarios_m->add_user_cer($id_user);	
					}
						
					if ($temporal) { //validando respuesta
						if (!empty( $id_cer )) {
							$temporal->id_esc_update = 'update';
						}				
						$data = $temporal;
					}else{
						$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio				
					}
				}
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}		
		echo json_encode($data);
	}

	public function del_Usuarios_Form_Certificacion($id_cer = null){
		if (empty($id_cer))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_cer($id_cer);	
		echo json_encode($data);
	}

	//CONTROLADORES DE USUARIO CURSOS

	//CONTROLADORES PARA USUARIO CERTIFICACION
	public function adm_Usuarios_Form_Curso($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('cur_curso_des', 'Curso', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cur_curso', 'Curso', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('cur_ini_fecha', 'Fecha inicio', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cur_fin_fecha', 'Fecha fin', 'trim|required|max_length[50]');
		
		$this->form_validation->set_rules('cur_duracion', 'Mes fin', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cur_instituto', 'Año fin', 'trim|required|max_length[50]');
		
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('cur_curso');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_cur = trim($this->input->post('id_cur_form', TRUE) );
					if (!empty( $id_cur )) {
						$temporal = $this->usuarios_m->edit_user_cur($id_user );
					}else{
						$temporal = $this->usuarios_m->add_user_cur($id_user);	
					}
						
					if ($temporal) { //validando respuesta
						if (!empty( $id_cur )) {
							$temporal->id_esc_update = 'update';
						}				
						$data = $temporal;
					}else{
						$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio				
					}
				}
						
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}		
		echo json_encode($data);
	}


	public function del_Usuarios_Form_Curso($id_cur= null){
		if (empty($id_cur))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_cur($id_cur);	
		echo json_encode($data);
	}


	//CONTROLADORES PARA USUARIO EXPERIENCIA
	public function adm_Usuarios_Form_Experiencia($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('exp_empresa', 'Empresa', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('exp_giro', 'Giro', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('exp_puesto', 'Puesto', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('exp_ini_fecha', 'Inicio fecha', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('exp_fin_fecha', 'Fin fecha', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('exp_actividades', 'Actividades', 'trim|required|max_length[500]');
		
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('exp_empresa');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_exp = trim($this->input->post('id_exp_form', TRUE) );
					if (!empty( $id_exp )) {
						$data = $this->usuarios_m->edit_user_exp($id_user );
						$data->id_all_update = 'update';
					}else{
						$data = $this->usuarios_m->add_user_exp($id_user);	
					}
				}						
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}		
		echo json_encode($data);
	}

	public function del_Usuarios_Form_Experiencia($id_exp=null){
		if (empty($id_exp))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_exp($id_exp);	
		echo json_encode($data);
	}

	//CONTROLADORES PARA USUARIO EXPERIENCIA
	public function adm_Usuarios_Form_Area_Exp($id_user = null){ //ajax informacion escolar
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('area_area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area_subarea', 'Subarea', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area_tiempo', 'Tiempo', 'trim|required|max_length[50]');
	
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('area_area');	
			if (empty($user) ) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				if (empty($id_user))
					$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion no se encontro asuario');//code_seg vacio
				else{
					$id_area = trim($this->input->post('id_area_form', TRUE) );
					if (!empty( $id_area )) {
						$data = $this->usuarios_m->edit_user_area_exp($id_user );
						$data->id_all_update = 'update';
					}else{
						$data = $this->usuarios_m->add_user_area_exp($id_user);	
					}
				}
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}		
		echo json_encode($data);
	}

	public function del_Usuarios_Form_Area_Exp($id_area=null){
		if (empty($id_area))
			$data = false;
		else
			$data=$this->usuarios_m->del_user_are_exp($id_area);	
		echo json_encode($data);
	}

	//CONTROLADORE PARA USUARIO AREA
	//VISTA USUARIOS AREAS
	public function adm_Usuarios_Form_Area(){		
		$data['estadoCivil'] = $this->usuarios_m->data_cat('estadocivil');
		$data['nacionalidad'] = $this->usuarios_m->data_cat('nacionalidad');
		$data['getareas'] = $this->usuarios_m->data_cat('area');
		$data['getcargos'] = $this->usuarios_m->data_cat('cargo');
		$data['getnivel'] = $this->usuarios_m->data_cat('nivel');
		$data['nivelStatus'] = $this->usuarios_m->data_cat('nivelstatus');
		$data['nivelCodPuesto'] = $this->usuarios_m->data_cat('nivelcodpuesto');
		$data['GradoEstudio'] = $this->usuarios_m->data_cat('gradoestudio');
		$data['rol_permiso'] = $this->usuarios_m->data_cat('rol_permiso');
		//catalogos de Escolaridad
		$data['getEsc_Intitucion'] = $this->usuarios_m->data_cat('esc_intitucion');
		$data['getEsc_Titulo'] = $this->usuarios_m->data_cat('esc_titulo');
		$data['getEsc_doc'] = $this->usuarios_m->data_cat('esc_doc');
		$data['getEsc_estatus'] = $this->usuarios_m->data_cat('esc_estatus');		
		//CATALOGO DE HABILIDADES
		$data['getHab_habilidad'] = $this->usuarios_m->data_cat('hab_habilidad');
		$data['getHab_nivel'] = $this->usuarios_m->data_cat('hab_nivel');		
		//CATALOGO DE CERTIFICACION
		$data['getCer_certificacion'] = $this->usuarios_m->data_cat('cer_certificacion');
		//CATALOGO DE CERTIFICACION
		$data['getCur_curso'] = $this->usuarios_m->data_cat('cur_curso');
		$data['getCur_institucion'] = $this->usuarios_m->data_cat('cur_institucion');
		//CATALOGO DE AREA
		$data['getArea_area'] = $this->usuarios_m->data_cat('area_area');
		$data['getArea_subarea'] = $this->usuarios_m->data_cat('area_subarea');
		$data['getArea_tiempo'] = $this->usuarios_m->data_cat('area_tiempo');

		$this->load->view('core/adm_usuarios_form_area', $data);
	}
	//ADD USUARIO AREA
	public function adm_Usuarios_Form_Area_add(){ //ajax informacion general usuario area
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('numero', 'Numero', 'trim|required|max_length[50]');
		//$this->form_validation->set_rules('rol_permiso', 'Rol', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('entidad', 'Entidad', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('n_expediente', 'Expediente', 'trim|required|max_length[50]');

		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cargo', 'Cargo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required|max_length[50]');
		                  
		           
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('entidad');	
			if (!$user) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				$data = $this->usuarios_m->add_user_area();	
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		echo json_encode($data);
	}

	public function adm_Usuarios_area_change_status(){//CHANGE STATUS USUARIO 
		$this->form_validation->set_rules('activo', 'activo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$data=$this->usuarios_m->usuarios_area_change_status();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}

	public function adm_Usuarios_area_delete(){//DELETE USER
		$this->form_validation->set_rules('estatus', 'status', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required|max_length[50]');
		if ($this->form_validation->run() == true) {
			$data=$this->usuarios_m->usuarios_delete_usuario();	
		}else{
			$data = false;
		}			
		echo json_encode($data);
	}
	//EDITAR USUARIOS DE AREA
	public function adm_Usuarios_Form_Area_edit($id_user= null){		
		$data['estadoCivil'] = $this->usuarios_m->data_cat('estadocivil');
		$data['nacionalidad'] = $this->usuarios_m->data_cat('nacionalidad');
		$data['getareas'] = $this->usuarios_m->data_cat('area');
		$data['getcargos'] = $this->usuarios_m->data_cat('cargo');
		$data['getnivel'] = $this->usuarios_m->data_cat('nivel');
		$data['nivelStatus'] = $this->usuarios_m->data_cat('nivelstatus');
		$data['nivelCodPuesto'] = $this->usuarios_m->data_cat('nivelcodpuesto');
		$data['GradoEstudio'] = $this->usuarios_m->data_cat('gradoestudio');
		$data['rol_permiso'] = $this->usuarios_m->data_cat('rol_permiso');
		//catalogos de Escolaridad
		$data['getEsc_Intitucion'] = $this->usuarios_m->data_cat('esc_intitucion');
		$data['getEsc_Titulo'] = $this->usuarios_m->data_cat('esc_titulo');
		$data['getEsc_doc'] = $this->usuarios_m->data_cat('esc_doc');
		$data['getEsc_estatus'] = $this->usuarios_m->data_cat('esc_estatus');		
		//CATALOGO DE HABILIDADES
		$data['getHab_habilidad'] = $this->usuarios_m->data_cat('hab_habilidad');
		$data['getHab_nivel'] = $this->usuarios_m->data_cat('hab_nivel');		
		//CATALOGO DE CERTIFICACION
		$data['getCer_certificacion'] = $this->usuarios_m->data_cat('cer_certificacion');
		//CATALOGO DE CERTIFICACION
		$data['getCur_curso'] = $this->usuarios_m->data_cat('cur_curso');
		$data['getCur_institucion'] = $this->usuarios_m->data_cat('cur_institucion');
		//CATALOGO DE AREA
		$data['getArea_area'] = $this->usuarios_m->data_cat('area_area');
		$data['getArea_subarea'] = $this->usuarios_m->data_cat('area_subarea');
		$data['getArea_tiempo'] = $this->usuarios_m->data_cat('area_tiempo');
		//DATOS DE USUARIO
		$data['get_user'] = $this->usuarios_m->get_user_area($id_user);

		$this->load->view('core/adm_usuarios_form_area_edit', $data);
	}

	public function adm_Usuarios_Area_edit(){ //ajax informacion general usuario area
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		//$this->form_validation->set_rules('rol_permiso', 'Rol', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('entidad', 'Entidad', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('n_expediente', 'Expediente', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('cargo', 'Cargo', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('apellidop', 'Apellido Paterno', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nivel', 'Nivel', 'trim|required|max_length[50]');
		                  
		           
		if ($this->form_validation->run() == true) {
			$user = $this->input->post('entidad');	
			if (!$user) {
				$data = array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error_validacion');//code_seg vacio
			}else{
				$data = $this->usuarios_m->add_user_area_edit();	
			}
		}else{
			$error = validation_errors();
			$error = str_replace('\n', "", $error);
			$data = array( 'estatus_error'=> 'errorvalidacion' , 'error' => $error );	
		}
		echo json_encode($data);
	}

	public function getxlsUsuarios(){ 	
		$this->load->helper(array('download', 'file', 'html' ));
		$this->load->library("excel");			
		$result = $this->usuarios_m->getxlsdata(); 
        if (is_array($result)){            
            $this->excel->setActiveSheetIndex(0);            
            $this->excel->stream('lstUsuarios' . date('Y_m_d_H_i_s') . '_.xls', $result);                
        }else {
            print_r("Error interno, consulta a su administrador");
        } 		
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

	
}
