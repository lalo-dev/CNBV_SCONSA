<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

//
function get_usuarios(){       
    $idmarca = $this->session->userdata("idmarca");
    $query = "SELECT id_user, rol_permiso, rol.des, cargo.des as cargo, nombre, apellidop, apellidom, area.des as area , 
    nivel.des as nivel, activo, users.curr_url,  n_cod_p.des as n_cod_p, experiencia, grado.des as desgrado 
    from coreuser as users
		left join user_data_cat cargo on cargo.id = users.cargo
		left join user_data_cat grado on grado.id = users.grado
		left join user_data_cat area on area.id = users.area
		left join user_data_cat n_cod_p on n_cod_p.id = users.nivel_codigo_puesto 
		left join user_data_cat rol on rol.id = users.rol_permiso 
		left join user_data_cat nivel on nivel.id = users.nivel where users.estatus = 0 and tipo_usuario != 'develop'";        
    return $this->db->query($query)->result();       
} 

function get_usuarios_area(){       
    $idmarca = $this->session->userdata("idmarca");
    $query = "SELECT id_user , rol.des as rol, entidad, n_expediente, area.des as area,
	nombre, apellidop, apellidom, cargo.des cargo, nivel.des as nivel, nivel_codigo,
	sexo, rfc, curp, lugar_nac, nacionalidad, email_cnbv, extension, torre, piso,
	coordenada, red , activo 
    FROM areauser as users
	left join user_data_cat rol on rol.id = users.rol_permiso
	left join user_data_cat area on area.id = users.area
	left join user_data_cat cargo on cargo.id = users.cargo
	left join user_data_cat nivel on nivel.id = users.nivel 
	where users.estatus = 0";        
    return $this->db->query($query)->result();       
}
//CATALOGOS PARA USUARIO
function data_cat($dato){       
	$query = "SELECT * FROM user_data_cat WHERE tipo = '$dato' and estatus = 0 ORDER BY orden IS NULL ASC, orden ASC;";
	return $this->db->query($query)->result();
    //return $this->db->select('id, des')->where('tipo', $dato )->get('user_data_cat')->result();      
} 
//MODELO PARA CAMBIAR EL ESTATUS DE USUARIO ACTIVO O DESACTIVO
function usuarios_change_status(){
	$activo = $this->input->post('activo', TRUE);
	$id_user = $this->input->post('id_user', TRUE);
	$data = array('activo' => $activo);
	$this->db->where(array('id_user' => $id_user))->update('coreuser', $data); 
	$afftectedRows = $this->db->affected_rows();		
	if ($afftectedRows)
		return $this->db->select('id_user, activo ')->get_where('coreuser', array('id_user' => $id_user ) )->row();
	else
		return false;
}
//MODELO PARA ELIMINAR USUARIO
function usuarios_delete(){
	$estatus = $this->input->post('estatus', TRUE);
	$id_user = $this->input->post('id_user', TRUE);
	$data = array('estatus' => $estatus);
	$this->db->where(array('id_user' => $id_user))->update('coreuser', $data); 
	$afftectedRows = $this->db->affected_rows();		
	if ($afftectedRows)
		return $this->db->select('id_user, estatus ')->get_where('coreuser', array('id_user' => $id_user ) )->row();
	else
		return false;
}
//MODELO PARA USUARIO INFORMACION GENERAL

public function check_user($field){ 
	$idmarca = $this->session->userdata("idmarca");	
    return $this->db->get_where('coreuser', array( 'usuario' => trim($field), 'estatus' => 0    ), 1)->num_rows() > 0 ? false : true; 
}

public function check_user_edit($field , $edit){ 
	$idmarca = $this->session->userdata("idmarca");	
    return $this->db->get_where('coreuser', array( 'usuario' => trim($field), 'estatus' => 0 , 'id_user !=' => $edit   ), 1)->num_rows() > 0 ? false : true; 
}

public function check_data($field, $campo){ 
	$idmarca = $this->session->userdata("idmarca");	
	return $this->db->get_where('coreuser', array( $campo => trim($field), 'estatus' => 0    ), 1)->num_rows() > 0 ? false : true; 
}

public function check_data_edit($field, $campo, $edit){ 
	$idmarca = $this->session->userdata("idmarca");	
    return $this->db->get_where('coreuser', array( $campo => trim($field), 'estatus' => 0  , 'id_user !=' => $edit   ), 1)->num_rows() > 0 ? false : true; 
}

function add_user(){
		//$password = password_hash(trim($this->input->post('password') ), PASSWORD_BCRYPT, array("cost" => 10));
		//$password = password_hash(trim( '12345' ), PASSWORD_BCRYPT, array("cost" => 10));
		$password = password_hash(trim( $this->input->post('pass') ), PASSWORD_BCRYPT);
		$idmarca = $this->session->userdata("idmarca");

		$data = array(
			'creater' => $idmarca,					
			'tipo_usuario' => 'cnbv',		
			'rol_permiso' => $this->input->post('rol_permisos', TRUE),
			'usuario' => $this->input->post('usuario', TRUE),
			'pass' => $password,				
			'email_cnbv' => $this->input->post('email_cnbv', TRUE),
			'nombre' => $this->input->post('nombre', TRUE),
			'apellidop' => $this->input->post('apellidop', TRUE),
			'apellidom' => $this->input->post('apellidom', TRUE),
			'sexo' => $this->input->post('sexo', TRUE),
			'estado_civil' => $this->input->post('estado_civil', TRUE),
			'fecha_nac' => date('Y-m-d', strtotime( $this->input->post('fecha_nac', TRUE) ) ),
			'curp' => $this->input->post('curp', TRUE),
			'lugar_nac' => $this->input->post('lugar_nac', TRUE),
			'nacionalidad' => $this->input->post('nacionalidad', TRUE),
			'estructura' => empty( $this->input->post('estructura', TRUE) ) ? 1 : 0,	
			'n_expediente' => $this->input->post('n_expediente', TRUE), 
			'area' => $this->input->post('area', TRUE), 
			'cargo' => $this->input->post('cargo', TRUE), 
			'nivel' => $this->input->post('nivel', TRUE), 
			'nivel_codigo' => $this->input->post('nivel_codigo', TRUE), 
			'nivel_status' => $this->input->post('nivel_status', TRUE), 
			'nivel_codigo_puesto' => $this->input->post('nivel_codigo_puesto', TRUE), 
			'grado' => $this->input->post('grado', TRUE), 
			'grado_codigo' => $this->input->post('grado_codigo', TRUE), 
			'grado_cedula' => $this->input->post('grado_cedula', TRUE), 
			'grado_iniciales' => $this->input->post('grado_iniciales', TRUE), 
			'email_personal' => $this->input->post('email_personal', TRUE), 
			'celular' => $this->input->post('celular', TRUE), 
			'telefono' => $this->input->post('telefono', TRUE), 
			'telefono_ext' => $this->input->post('telefono_ext', TRUE),
			'direccion' => $this->input->post('direccion', TRUE), 
			'torre' => $this->input->post('torre', TRUE),
			'piso' => $this->input->post('piso', TRUE),
			'coordenada' => $this->input->post('coordenada', TRUE), 
			'ut' => $this->input->post('rol_permisos', TRUE),
			'curr_url' => '',
			'curr_file' => '',
			'curr_name' => '',
			'curr_type' => '',
			'perfil_url' =>'',
			'perfil_file' => '',
			'perfil_name' => '',
			'perfil_tye' => '',
			'desempeno_url' => '',
			'desempeno_file' => '',
			'desempeno_name' => '',
			'desempeno_type' => '',
			'foto_url' => '', 
			'foto_file' => '',
			'foto_name' => '',
			'foto_type' => '', 
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);
		$this->db->insert('coreuser', $data);	
    	$afftectedRows = $this->db->affected_rows();	

		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			//crear directorio
			$dir = 'users/'.$insert_id;
			if ( !is_dir($dir) ) { 
				mkdir($dir, 0777 , true);
		 	 	chmod($dir, 0777);			
		 	}
			return $this->db->select('id_user, nombre, apellidop')->get_where('coreuser', array('id_user' => $insert_id ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }
    function add_user_edit(){
		$idmarca = $this->session->userdata("idmarca");
		$fecha_nac = date("Y-m-d H:i:s");

		$data = array(					
			'tipo_usuario' => 'cnbv',		
			'rol_permiso' => $this->input->post('rol_permisos', TRUE),
			'usuario' => $this->input->post('usuario', TRUE),						
			'email_cnbv' => $this->input->post('email_cnbv', TRUE),
			'nombre' => $this->input->post('nombre', TRUE),
			'apellidop' => $this->input->post('apellidop', TRUE),
			'apellidom' => $this->input->post('apellidom', TRUE),
			'sexo' => $this->input->post('sexo', TRUE),
			'estado_civil' => $this->input->post('estado_civil', TRUE),
			'fecha_nac' => date('Y-m-d', strtotime( $this->input->post('fecha_nac', TRUE) ) ), 
			'curp' => $this->input->post('curp', TRUE),
			'lugar_nac' => $this->input->post('lugar_nac', TRUE),
			'nacionalidad' => $this->input->post('nacionalidad', TRUE),
			'estructura' => empty( $this->input->post('estructura', TRUE) ) ? 1 : 0,	
			'n_expediente' => $this->input->post('n_expediente', TRUE), 
			'area' => $this->input->post('area', TRUE), 
			'cargo' => $this->input->post('cargo', TRUE), 
			'nivel' => $this->input->post('nivel', TRUE), 
			'nivel_codigo' => $this->input->post('nivel_codigo', TRUE), 
			'nivel_status' => $this->input->post('nivel_status', TRUE), 
			'nivel_codigo_puesto' => $this->input->post('nivel_codigo_puesto', TRUE), 
			'grado' => $this->input->post('grado', TRUE), 
			'grado_codigo' => $this->input->post('grado_codigo', TRUE), 
			'grado_cedula' => $this->input->post('grado_cedula', TRUE), 
			'grado_iniciales' => $this->input->post('grado_iniciales', TRUE), 
			'email_personal' => $this->input->post('email_personal', TRUE), 
			'celular' => $this->input->post('celular', TRUE), 
			'telefono' => $this->input->post('telefono', TRUE), 
			'telefono_ext' => $this->input->post('telefono_ext', TRUE),
			'direccion' => $this->input->post('direccion', TRUE), 
			'torre' => $this->input->post('torre', TRUE),
			'piso' => $this->input->post('piso', TRUE),
			'coordenada' => $this->input->post('coordenada', TRUE), 
			'ut' => $this->input->post('rol_permisos', TRUE)
		);
		$pass_post = trim($this->input->post('pass')); 
		if ($pass_post != "password") { //editando password
			//$password = password_hash(, PASSWORD_BCRYPT, array("cost" => 10));
			$this->logSW("****");
			$this->logSW($pass_post);
			$password = password_hash($pass_post, PASSWORD_BCRYPT);
			$data['pass'] = $password;
		}
		$id_user = $this->input->post('id_user', TRUE);
		$this->db->where(array('id_user' => $id_user ))->update('coreuser', $data);	
    	$afftectedRows = $this->db->affected_rows();	
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();			
			return $this->db->select('id_user, nombre, apellidop')->get_where('coreuser', array('id_user' => $id_user ) )->row();  			  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }
    function usuarios_change_files($data, $id_user, $url){
		$arraydata = array('id_user' => $id_user );
		$this->db->where( $arraydata )->update('coreuser', $data);
		$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){							
			return $this->db->select("id_user, $url")->get_where('coreuser', array('id_user' => $id_user ) )->row();  			  
		}else
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }
    function getDown_info_btn($name, $url,$id_user){
    	return $this->db->select($name .' , id_user, ' . $url)->get_where('coreuser', array('id_user' => $id_user ) )->row();
    }
    function get_downloads($url, $nombre , $id_user){
        $this->db->select("$url as ruta, $nombre as nombre")
        ->from('coreuser')->where('id_user', $id_user);
        return $this->db->get()->row();
    }
    function delete_uploaded_file($id_user, $search) {
        $idmarca = $this->session->userdata("idmarca");
        $where = array('id_user' => $id_user  );   
        $result = $this->db->select($search)->from('coreuser')->where($where)->get();

        if ($result->num_rows() > 0) {
            $data = $result->result();
            
            foreach ($data as $key => $value) {
                if (!empty($value->ruta) ) {
                	$rutadel = "../".$value->ruta ;   
                    $dir_ant_file = realpath( APPPATH . '/'.$rutadel);             
                    if ( file_exists($dir_ant_file) ) {                 
                        unlink($dir_ant_file);                          
                     }else{
                     	//$this->logSW('file no exite');
                     }
                     //$this->logSW(var_export( $dir_ant_file , true));
                }
            }            
        }       
    }

    function get_user_edit($id){ 
		$query = "SELECT * FROM coreuser where id_user = $id";
	     return $this->db->query($query)->row();
	}
	function get_user_edit_esc($id){
		$query = "SELECT id_esc, id_esc.des as esc_instituto , id_titulo.des as esc_titulo, esc.esc_ini_fecha,
		esc.esc_fin_fecha, esc.esc_anos, id_doc.des as documento ,  id_estatus.des as esc_estatus   
		from user_escolaridad as esc
		left join user_data_cat id_esc on id_esc.id = esc.esc_instituto
		left join user_data_cat id_titulo on id_titulo.id = esc.esc_titulo
		left join user_data_cat id_doc on id_doc.id = esc.esc_doc
		left join user_data_cat id_estatus on id_estatus.id = esc.esc_estatus
		where id_user = $id and esc.estatus = 0;";
	     return $this->db->query($query)->result();
	}
	function get_user_edit_hab($id){ 
		$query = "SELECT id_hab, hab_habilidad_des, id_hab.des as hab_habilidad, id_nivel.des as hab_nivel, hab_anos 
		from user_habilidad as hab 
		left join user_data_cat id_hab on id_hab.id = hab.hab_habilidad
		left join user_data_cat id_nivel on id_nivel.id = hab.hab_nivel 
		where id_user = $id and hab.estatus = 0; ";
	    return $this->db->query($query)->result();
	}

	function get_user_edit_cer($id){ 
		$query = "SELECT id_cer, cer_certificacion_des, id_cer.des as cer_certificacion, cer_ano 
		from user_certificacion as cer 
		left join user_data_cat id_cer on id_cer.id = cer.cer_certificacion 
		where id_user = $id and cer.estatus = 0; ";
	     return $this->db->query($query)->result();
	}

	function get_user_edit_cur($id){ 
		$query = "SELECT id_cur, cur_curso_des, id_cur.des as cur_curso, 
		cur.cur_ini_fecha, cur.cur_fin_fecha, cur.cur_duracion, id_titulo.des as cur_instituto   
		from user_curso as cur
		left join user_data_cat id_cur on id_cur.id = cur.cur_curso
		left join user_data_cat id_titulo on id_titulo.id = cur.cur_instituto
		where id_user = $id and cur.estatus = 0; ";
	     return $this->db->query($query)->result();
	}
	function get_user_edit_exp($id){ 
		$query = "SELECT  * from user_experiencia
		where id_user = $id and estatus = 0; ";
	     return $this->db->query($query)->result();
	}
	function get_user_edit_area($id){ 
		$query = "SELECT id_area, id_area.des as area_area, id_sub_area.des as sub_area, id_tiempo.des as area_tiempo 
		from user_experiencia_area as exp_area
		left join user_data_cat id_area on id_area.id = exp_area.area_area 
		left join user_data_cat id_sub_area on id_sub_area.id = exp_area.area_subarea
		left join user_data_cat id_tiempo on id_tiempo.id = exp_area.area_tiempo
		where id_user = $id and exp_area.estatus = 0; ";
	     return $this->db->query($query)->result();
	}
	
  
    //MODELO PARA USUARIO ESCOLARIDAD
    function add_user_esc($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			'esc_instituto' => $this->input->post('esc_instituto', TRUE),	
			'esc_titulo' => $this->input->post('esc_titulo', TRUE),	
			//'esc_ini_fech' => date("Y-m-d"),		
			//'esc_fin_fech' =>  date("Y-m-d"),	date('Y-m-d', strtotime( $this->input->post('esc_fin_fecha', TRUE) ) )
			'esc_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('esc_ini_fecha', TRUE) ) ),
			'esc_fin_fecha' => date('Y-m-d', strtotime( $this->input->post('esc_fin_fecha', TRUE) ) ),
			'esc_anos' => $this->input->post('esc_anos', TRUE),		
			'esc_doc' => $this->input->post('esc_doc', TRUE),	
			'esc_estatus' => $this->input->post('esc_estatus', TRUE),			
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);
		$this->logSW(var_export($data , true));
		
		$this->db->insert('user_escolaridad', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_escolaridad', array('id_esc' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_esc($id_user){
    	$idmarca = $this->session->userdata("idmarca");
		$data = array(			
			'esc_instituto' => $this->input->post('esc_instituto', TRUE),	
			'esc_titulo' => $this->input->post('esc_titulo', TRUE),	
			'esc_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('esc_ini_fecha', TRUE) ) ),			
			'esc_fin_fecha' => date('Y-m-d', strtotime( $this->input->post('esc_fin_fecha', TRUE) ) ),
			'esc_anos' => $this->input->post('esc_anos', TRUE),		
			'esc_doc' => $this->input->post('esc_doc', TRUE),	
			'esc_estatus' => $this->input->post('esc_estatus', TRUE)
		);
		$id_esc = trim($this->input->post('id_esc', TRUE) );
		//'id_user' => $id_user,
		$arraydata = array('id_esc' => $id_esc, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_escolaridad', $data); 
		//$this->db->affected_rows()
		if ( true  ) {
			//$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_escolaridad', array('id_esc' => $id_esc ) )->row();  		
		}
				
		return false;
    }

    function del_user_esc($id_esc){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_esc' => $id_esc))->update('user_escolaridad', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_esc;
		else
			return false;
    }
	//MODELOS PARA USUARIO HABILIDAD
    function add_user_hab($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			//'hab_habilidad_des' => $this->input->post('hab_habilidad_des', TRUE),	
			'hab_habilidad' => $this->input->post('hab_habilidad', TRUE),	
			'hab_nivel' => $this->input->post('hab_nivel', TRUE),
			'hab_anos' => $this->input->post('hab_anos', TRUE),						
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);

		$this->db->insert('user_habilidad', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_habilidad', array('id_hab' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_hab($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			//'hab_habilidad_des' => $this->input->post('hab_habilidad_des', TRUE),	
			'hab_habilidad' => $this->input->post('hab_habilidad', TRUE),	
			'hab_nivel' => $this->input->post('hab_nivel', TRUE),
			'hab_anos' => $this->input->post('hab_anos', TRUE),
		);  	

		$id_hab = trim($this->input->post('id_hab_form', TRUE) );
		$arraydata = array('id_hab' => $id_hab, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_habilidad', $data); 
		return $this->db->select('*')->get_where('user_habilidad', array('id_hab' => $id_hab ) )->row();  		 
    }

    function del_user_hab($id_hab){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_hab' => $id_hab))->update('user_habilidad', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_hab;
		else
			return false;
    }
    
    //MODELOS PARA USUARIO CERTIFICACIONES
    function add_user_cer($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			//'cer_certificacion_des' => $this->input->post('cer_certificacion_des', TRUE),	
			'cer_certificacion' => $this->input->post('cer_certificacion', TRUE),	
			'cer_ano' => $this->input->post('cer_ano', TRUE),				
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);

		$this->db->insert('user_certificacion', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_certificacion', array('id_cer' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_cer($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			//'cer_certificacion_des' => $this->input->post('cer_certificacion_des', TRUE),	
			'cer_certificacion' => $this->input->post('cer_certificacion', TRUE),	
			'cer_ano' => $this->input->post('cer_ano', TRUE),				 
		);

		$id_cer = trim($this->input->post('id_cer_form', TRUE) );
		$arraydata = array('id_cer' => $id_cer, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_certificacion', $data); 		
		return $this->db->select('*')->get_where('user_certificacion', array('id_cer' => $id_cer ) )->row();  		
    }
    function del_user_cer($id_cer){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_cer' => $id_cer))->update('user_certificacion', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_cer;
		else
			return false;
    }

    //MODELOS PARA USUARIO ADD CURSO
    function add_user_cur($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			//'cur_curso_des' => $this->input->post('cur_curso_des', TRUE),	
			'cur_curso' => $this->input->post('cur_curso', TRUE),	
			'cur_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('cur_ini_fecha', TRUE) ) ),
			//date('Y-m-d', strtotime( $this->input->post('cur_fin_fecha', TRUE) ) )	
			'cur_fin_fecha' => date('Y-m-d', strtotime( $this->input->post('cur_fin_fecha', TRUE) ) ),	
			'cur_duracion' => $this->input->post('cur_duracion', TRUE),	
			'cur_instituto' => $this->input->post('cur_instituto', TRUE),	
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);

		$this->db->insert('user_curso', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_curso', array('id_cur' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_cur($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			//'cur_curso_des' => $this->input->post('cur_curso_des', TRUE),	
			'cur_curso' => $this->input->post('cur_curso', TRUE),	
			'cur_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('cur_ini_fecha', TRUE) ) ),	
			'cur_fin_fecha' =>date('Y-m-d', strtotime( $this->input->post('cur_fin_fecha', TRUE) ) ),			
			'cur_duracion' => $this->input->post('cur_duracion', TRUE),	
			'cur_instituto' => $this->input->post('cur_instituto', TRUE),	 
		);

		$id_cur = trim($this->input->post('id_cur_form', true) );
		$arraydata = array('id_cur' => $id_cur, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_curso', $data); 		
		return $this->db->select('*')->get_where('user_curso', array('id_cur' => $id_cur ) )->row();  		
    }

    function del_user_cur($id_cur){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_cur' => $id_cur))->update('user_curso', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_cur;
		else
			return false;
    }

     //MODELOS PARA USUARIO ADD EXPERIENCIA
    function add_user_exp($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			'exp_empresa' => $this->input->post('exp_empresa', TRUE),	
			'exp_giro' => $this->input->post('exp_giro', TRUE),	
			'exp_puesto' => $this->input->post('exp_puesto', TRUE),
			'exp_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('exp_ini_fecha', TRUE) ) ),	
			'exp_fin_fecha' => date('Y-m-d', strtotime( $this->input->post('exp_fin_fecha', TRUE) ) ),			
			'exp_actividades' => $this->input->post('exp_actividades', TRUE),	
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);
		$this->db->insert('user_experiencia', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_experiencia', array('id_exp' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_exp($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'exp_empresa' => $this->input->post('exp_empresa', TRUE),	
			'exp_giro' => $this->input->post('exp_giro', TRUE),	
			'exp_puesto' => $this->input->post('exp_puesto', TRUE),
			'exp_ini_fecha' => date('Y-m-d', strtotime( $this->input->post('exp_ini_fecha', TRUE) ) ),	
			'exp_fin_fecha' => date('Y-m-d', strtotime( $this->input->post('exp_fin_fecha', TRUE) ) ),					
			'exp_actividades' => $this->input->post('exp_actividades', TRUE),	
		);		

		$id_exp = trim($this->input->post('id_exp_form', true) );
		$arraydata = array('id_exp' => $id_exp, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_experiencia', $data); 		
		return $this->db->select('*')->get_where('user_experiencia', array('id_exp' => $id_exp ) )->row();
    }

    function del_user_exp($id_exp){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_exp' => $id_exp))->update('user_experiencia', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_exp;
		else
			return false;
    }


     //MODELOS PARA USUARIO ADD AREA EXPERIENCIA
    function add_user_area_exp($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_user' => $id_user,
			'area_area' => $this->input->post('area_area', TRUE),	
			'area_subarea' => $this->input->post('area_subarea', TRUE),	
			'area_tiempo' => $this->input->post('area_tiempo', TRUE),				
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);
		
		$this->db->insert('user_experiencia_area', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();
			return $this->db->select('*')->get_where('user_experiencia_area', array('id_area' => $insert_id ) )->row();  
		}    	
		return false; 
    }

    function edit_user_area_exp($id_user){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'area_area' => $this->input->post('area_area', TRUE),	
			'area_subarea' => $this->input->post('area_subarea', TRUE),	
			'area_tiempo' => $this->input->post('area_tiempo', TRUE),				
		);
		
		$id_area = trim($this->input->post('id_area_form', true) );
		$arraydata = array('id_area' => $id_area, 'id_user' => $id_user );
		$this->db->where( $arraydata )->update('user_experiencia_area', $data); 		
		return $this->db->select('*')->get_where('user_experiencia_area', array('id_area' => $id_area ) )->row();
    
    }

    function del_user_are_exp($id_area){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_area' => $id_area))->update('user_experiencia_area', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_area;
		else
			return false;
    }

    //MODELOS PARA USUARIO DE AREA
    //ADD USUARIO DE AREA
    function add_user_area(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'creater' => $idmarca,					
			'tipo_usuario' => 'area',		
			//'rol_permiso' => $this->input->post('rol_permiso', TRUE),
			'entidad' => $this->input->post('entidad', TRUE),	
			'n_expediente' => $this->input->post('n_expediente', TRUE), 
			'area' => $this->input->post('area', TRUE), 
			'nombre' => $this->input->post('nombre', TRUE),
			'apellidop' => $this->input->post('apellidop', TRUE),
			'apellidom' => $this->input->post('apellidom', TRUE),			
			'cargo' => $this->input->post('cargo', TRUE), 
			'nivel' => $this->input->post('nivel', TRUE), 
			'nivel_codigo' => $this->input->post('nivel_codigo', TRUE),
			'grado' => $this->input->post('grado', TRUE), 
			'grado_codigo' => $this->input->post('grado_codigo', TRUE), 
			'fecha_nac' => date('Y-m-d', strtotime( $this->input->post('fecha_nac', TRUE) ) ), 
			'sexo' => $this->input->post('sexo', TRUE),
			'rfc' => $this->input->post('rfc', TRUE),
			'curp' => $this->input->post('curp', TRUE),
			'lugar_nac' => $this->input->post('lugar_nac', TRUE),
			'nacionalidad' => $this->input->post('nacionalidad', TRUE),
			'email_cnbv' => $this->input->post('email_cnbv', TRUE), 
			'extension' => $this->input->post('extension', TRUE), 
			'torre' => $this->input->post('torre', TRUE),
			'piso' => $this->input->post('piso', TRUE), 
			'coordenada' => $this->input->post('coordenada', TRUE), 
			'red' => $this->input->post('red', TRUE), 
			'ut' => 'area',
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);                 
		
		$this->db->insert('areauser', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();			
			$dir = 'users/'.$insert_id;//crear directorio
			if ( !is_dir($dir) ) { 
				mkdir($dir, 0777 , true);
		 	 	chmod($dir, 0777);			
		 	}
			return $this->db->select('id_user, nombre, apellidop')->get_where('areauser', array('id_user' => $insert_id ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    

    function usuarios_area_change_status(){
	$activo = $this->input->post('activo', TRUE);
	$id_user = $this->input->post('id_user', TRUE);
	$data = array('activo' => $activo);
	$this->db->where(array('id_user' => $id_user))->update('areauser', $data); 
	$afftectedRows = $this->db->affected_rows();		
	if ($afftectedRows)
		return $this->db->select('id_user, activo ')->get_where('areauser', array('id_user' => $id_user ) )->row();
	else
		return false;
}

function usuarios_delete_usuario(){
	$estatus = $this->input->post('estatus', TRUE);
	$id_user = $this->input->post('id_user', TRUE);
	$data = array('estatus' => $estatus);
	$this->db->where(array('id_user' => $id_user))->update('areauser', $data); 
	$afftectedRows = $this->db->affected_rows();		
	if ($afftectedRows)
		return $this->db->select('id_user, estatus ')->get_where('areauser', array('id_user' => $id_user ) )->row();
	else
		return false;
}

function get_user_area($id){
	$query = "SELECT * FROM areauser where id_user = $id";
     return $this->db->query($query)->row();
}

function add_user_area_edit(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(					
			'tipo_usuario' => 'area',		
			//'rol_permiso' => $this->input->post('rol_permiso', TRUE),
			'entidad' => $this->input->post('entidad', TRUE),	
			'n_expediente' => $this->input->post('n_expediente', TRUE), 
			'area' => $this->input->post('area', TRUE), 
			'nombre' => $this->input->post('nombre', TRUE),
			'apellidop' => $this->input->post('apellidop', TRUE),
			'apellidom' => $this->input->post('apellidom', TRUE),			
			'cargo' => $this->input->post('cargo', TRUE), 
			'nivel' => $this->input->post('nivel', TRUE), 
			'nivel_codigo' => $this->input->post('nivel_codigo', TRUE),
			'grado' => $this->input->post('grado', TRUE), 
			'grado_codigo' => $this->input->post('grado_codigo', TRUE), 
			'fecha_nac' => $this->input->post('fecha_nac', TRUE),
			'sexo' => $this->input->post('sexo', TRUE),
			'rfc' => $this->input->post('rfc', TRUE),
			'curp' => $this->input->post('curp', TRUE),
			'lugar_nac' => $this->input->post('lugar_nac', TRUE),
			'nacionalidad' => $this->input->post('nacionalidad', TRUE),
			'email_cnbv' => $this->input->post('email_cnbv', TRUE), 
			'extension' => $this->input->post('extension', TRUE), 
			'torre' => $this->input->post('torre', TRUE),
			'piso' => $this->input->post('piso', TRUE), 
			'coordenada' => $this->input->post('coordenada', TRUE), 
			'red' => $this->input->post('red', TRUE), 
		);                 
		
		$id_user = $this->input->post('id_user', TRUE);
		$this->db->where(array('id_user' => $id_user ))->update('areauser', $data);
    		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){
			return $this->db->select('id_user, nombre, apellidop')->get_where('areauser', array('id_user' => $id_user ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function getxlsdata(){                  
 		$idmarca = $this->session->userdata("idmarca");        
        $query = "SELECT cargo.des as Cargo, nombre as Nombre, apellidop as 'Apellido Paterno', apellidom as 'Apellidos materno', area.des as Area , nivel.des as Nivel from coreuser as users
		left join user_data_cat cargo on cargo.id = users.cargo
		left join user_data_cat area on area.id = users.area
		left join user_data_cat nivel on nivel.id = users.nivel where users.estatus = 0 and tipo_usuario != 'develop'";        
    	return $this->db->query($query)->result_array(); 
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
