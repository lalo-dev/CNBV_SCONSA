<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pat_model extends CI_Model {

	function get_pats_total(){       
		$arrayWhere = array('estatus' => 0 , 'pat_activo' => 0 );
	    return $this->db->select('pr.*,(select count(1) as total from pat_revisiones where tipo_revision = 1 and id_pat_ano = pr.pat_ano) AS auditorias,
(select count(1) as total from pat_revisiones where tipo_revision = 2 and id_pat_ano = pr.pat_ano) AS seguimientos')->where($arrayWhere)->order_by("pat_ano", "desc")->get('pat_root AS pr')->result();
	}
	function get_pats_estatus(){   
		$arrayWhere = array('estatus' => 0 );    
	    return $this->db->select('*')->where($arrayWhere )->order_by("pat_ano", "desc")->get('pat_root')->result();      
	}

	//MODELOS PARA PAT
	function get_pat_date(){
		$id_pat = $this->input->post('id_pat', TRUE);
		$arrayWhere = array('id_pat' => $id_pat );    
		return $this->db->select('*')->get_where('pat_root', $arrayWhere )->row();
	}

	function pat_change_status(){
		$activo = $this->input->post('activo', TRUE);
		$id_pat = $this->input->post('id_pat', TRUE);
		$data_update = array('pat_activo' => $activo);
		$this->db->where( array('id_pat' => $id_pat) )->update('pat_root', $data_update); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $this->db->select('id_pat, pat_activo ')->get_where('pat_root', array('id_pat' => $id_pat ) )->row();
		else
			return false;
	}
	function get_pat_revisiones($pat_ano){
		//$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  , 
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,  
		instancia.des  as instancia ,  justif.des as justificacion ,  
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,  
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,  
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado,
		rev.estatus_validado, rev.estatus_auditoria, rev.trimestre, rev.auditores
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
		inner join pat_data_cat clave on clave.id = rev.clave 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion 		 
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente 
		inner join pat_data_cat muestra on muestra.id = rev.muestra 
		inner join pat_data_cat univer on univer.id = rev.universo 
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result(); 
	}

	function get_pat_revisiones_down_list($pat_ano){
		//$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT rev.id_pat_ano as PAT  ,  rev.no_revision as No_revision , 
        t_rev.des as 'Tipo revision',  p_adic.des as 'P/A/C',  clave.des as Clave  ,  
        rev.periodo_ini as Inicio  ,  rev.periodo_fin as Fin 
        from pat_revisiones as rev 
        inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
        inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
        inner join pat_data_cat clave on clave.id = rev.clave 
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result(); 
	}

	function get_pat_revisiones_basura_respado($pat_ano){ //cambio de estructura en agregar areas a revizar
		//$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  , 
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,  
		instancia.des  as instancia ,  justif.des as justificacion ,  area_rev.des as area_revizar  ,  
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,  
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,  
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado,
		rev.estatus_validado, rev.estatus_auditoria, rev.trimestre, rev.auditores
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
		inner join pat_data_cat clave on clave.id = rev.clave 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion 
		inner join pat_data_cat area_rev on area_rev.id = rev.area_revizar 
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente 
		inner join pat_data_cat muestra on muestra.id = rev.muestra 
		inner join pat_data_cat univer on univer.id = rev.universo 
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result(); 
	}

	 function add_revision_commit(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_creater' => $idmarca,								
			'id_rev' => $this->input->post('id_comment', TRUE), 
			'comentario' => $this->input->post('mess_comment', TRUE), 			
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);

		$this->db->insert('pat_rev_comment', $data);	
    	$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){				
			$insert_id = $this->db->insert_id();			
			return $this->db->select('*')->get_where('pat_rev_comment', array('id' => $insert_id ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    
	 }

	function add_revision(){
		$idmarca = $this->session->userdata("idmarca");
		$pat_ano = $this->session->userdata("pat_ano");
		$data = array(
			'id_creater' => $idmarca,
			'id_pat_ano' => trim($pat_ano),
			'no_revision' => $this->input->post('no_revision', TRUE),
			'tipo_revision' => $this->input->post('tipo_revision', TRUE),
			'prog_adic' => $this->input->post('prog_adic', TRUE),
			'clave' => $this->input->post('clave', TRUE),
			'instancia' => $this->input->post('instancia', TRUE),
			'justificacion' => $this->input->post('justificacion', TRUE),
			'area_revizar' => '0',
			'descripcion' => $this->input->post('descripcion', TRUE),
			'objetivo' => $this->input->post('objetivo', TRUE),
			'semana_ini' => $this->input->post('semana_ini', TRUE),
			'semana_fin' => $this->input->post('semana_fin', TRUE),
			'ts_revision' => $this->input->post('ts_revision', TRUE),
			'ts_hombre' => $this->input->post('ts_hombre', TRUE),
			'periodo_ini' => date('Y-m-d', strtotime( $this->input->post('periodo_ini', TRUE) ) ), 
			'periodo_fin' => date('Y-m-d', strtotime( $this->input->post('periodo_fin', TRUE) ) ), 
			'aud_precedente' => $this->input->post('aud_precedente', TRUE),
			'muestra' => $this->input->post('muestra', TRUE),
			'universo' => $this->input->post('universo', TRUE),
			'riesgo' => $this->input->post('riesgo', TRUE),			
			'estatus_revisado' => '0',			
			'estatus_validado' => '0',			 					        
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'
		);	
		$this->db->insert('pat_revisiones', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){		
			$id_rev = $this->db->insert_id();		
			$list_riesgos = json_decode($id= $this->input->post("id_riesgos_list")); 
			$list_areas = json_decode($id= $this->input->post("id_areas_list")); 
	    	$idmarca = $this->session->userdata("idmarca");
	    	if (!empty($list_riesgos)) {
	    		$this->db->trans_start();
	    		foreach ($list_riesgos as $id_riesgo){
	    			$query = "INSERT INTO pat_revxriesgo (id_revision , id_riesgo, id_creater, estatus , date_created) 
	    			VALUES ( $id_rev, $id_riesgo,  $idmarca, 0, now() );";
	    			$this->db->query($query);
	    		}
	    		$this->db->trans_complete(); 
	    		if ($this->db->trans_status() === false){                
	                return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error al regsitrar riesgos');
	            }
	    	}
	    	//LISTA DE AREAS A REVISAR
	    	if (!empty($list_areas)) {
	    		$this->db->trans_start();
	    		foreach ($list_areas as $id_area){
	    			$query = "INSERT INTO pat_revxarevisar (id_revision , id_area, id_creater, estatus , date_created) 
	    			VALUES ( $id_rev, $id_area,  $idmarca, 0, now() );";
	    			$this->db->query($query);
	    		}
	    		$this->db->trans_complete(); 
	    		if ($this->db->trans_status() === false){                
	                return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error al regsitrar riesgos');
	            }
	    	}
			return $this->db->select('*')->get_where('pat_revisiones', array('id_rev' => $id_rev ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }


    function get_pat_revision_unica($id_rev){
		$query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  , 
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,  
		instancia.des  as instancia ,  justif.des as justificacion ,  
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,  
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,  
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado, rev.estatus_validado 
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
		inner join pat_data_cat clave on clave.id = rev.clave 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion   
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente 
		inner join pat_data_cat muestra on muestra.id = rev.muestra 
		inner join pat_data_cat univer on univer.id = rev.universo 
		where rev.estatus = 0 and rev.id_rev = $id_rev; ";
		return $this->db->query($query)->row(); 
	}

	function get_pat_revision_unica_respaldo_borrador($id_rev){//se quita campo area_revizar sera un mantenedor
		$query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  , 
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,  
		instancia.des  as instancia ,  justif.des as justificacion ,  area_rev.des as area_revizar  ,  
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,  
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,  
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado, rev.estatus_validado 
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
		inner join pat_data_cat clave on clave.id = rev.clave 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion 
		inner join pat_data_cat area_rev on area_rev.id = rev.area_revizar 
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente 
		inner join pat_data_cat muestra on muestra.id = rev.muestra 
		inner join pat_data_cat univer on univer.id = rev.universo 
		where rev.estatus = 0 and rev.id_rev = $id_rev; ";
		return $this->db->query($query)->row(); 
	}

    function update_revision(){
		$idmarca = $this->session->userdata("idmarca");
		$pat_ano = $this->session->userdata("pat_ano");
		$data = array(
			'no_revision' => $this->input->post('no_revision', TRUE),
			'tipo_revision' => $this->input->post('tipo_revision', TRUE),
			'prog_adic' => $this->input->post('prog_adic', TRUE),
			'clave' => $this->input->post('clave', TRUE),
			'instancia' => $this->input->post('instancia', TRUE),
			'justificacion' => $this->input->post('justificacion', TRUE),
			'area_revizar' => '0',
			'descripcion' => $this->input->post('descripcion', TRUE),
			'objetivo' => $this->input->post('objetivo', TRUE),
			'semana_ini' => $this->input->post('semana_ini', TRUE),
			'semana_fin' => $this->input->post('semana_fin', TRUE),
			'ts_revision' => $this->input->post('ts_revision', TRUE),
			'ts_hombre' => $this->input->post('ts_hombre', TRUE),
			'periodo_ini' => date('Y-m-d', strtotime( $this->input->post('periodo_ini', TRUE) ) ),
			'periodo_fin' => date('Y-m-d', strtotime( $this->input->post('periodo_fin', TRUE) ) ),
			'aud_precedente' => $this->input->post('aud_precedente', TRUE),
			'muestra' => $this->input->post('muestra', TRUE),
			'universo' => $this->input->post('universo', TRUE),
			'riesgo' => $this->input->post('riesgo', TRUE)
		);		

		$id_rev = trim($this->input->post('id_rev_form', TRUE) );	
		$arraydata = array('id_rev' => $id_rev);
		$this->db->where( $arraydata )->update('pat_revisiones', $data);     							
	    return $this->db->select('*')->get_where('pat_revisiones', $arraydata )->row();  
    }

    function update_revision_riesgo_add(){
    	$idmarca = $this->session->userdata("idmarca");
    	$data = array(
			'id_revision' => $this->input->post('id_revision', TRUE),
			'id_riesgo' => $this->input->post('id_riesgo', TRUE),
			'id_creater' => $idmarca,	
			'estatus' => '0',
			'date_created' => date("Y-m-d H:i:s")
		);
		$this->db->insert('pat_revxriesgo', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){		
			$id = $this->db->insert_id();
			return $this->db->select('*')->get_where('pat_revxriesgo', array('id' => $id ) )->row();
    	}
    	else
    		false;
    }

    function update_revision_riesgo_delete(){    	
    	$arrayWhere = array(
    		'id_revision' => $this->input->post('id_revision', TRUE), 
    		'id_riesgo' => $this->input->post('id_riesgo', TRUE)
		);
    	$data = array('estatus' => '1',);
		$this->db->where($arrayWhere)->update('pat_revxriesgo', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_rev;
		else
			return false;
    }

    function update_revision_areas_revisar_add(){
    	$idmarca = $this->session->userdata("idmarca");
    	$data = array(
			'id_revision' => $this->input->post('id_revision', TRUE),
			'id_area' => $this->input->post('id_area', TRUE),
			'id_creater' => $idmarca,	
			'estatus' => '0',
			'date_created' => date("Y-m-d H:i:s")
		);
		$this->db->insert('pat_revxarevisar', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){		
			$id = $this->db->insert_id();
			return $this->db->select('*')->get_where('pat_revxarevisar', array('id' => $id ) )->row();
    	}
    	else
    		false;
    }

    function update_revision_areas_revisar_delete(){    	
    	$arrayWhere = array(
    		'id_revision' => $this->input->post('id_revision', TRUE), 
    		'id_area' => $this->input->post('id_area', TRUE)
		);
    	$data = array('estatus' => '1',);
		$this->db->where($arrayWhere)->update('pat_revxarevisar', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_rev;
		else
			return false;
    }

    function revision_btn_revizado_m(){
    	$idmarca = $this->session->userdata("idmarca");
    	$data = array(
    		'id_creater' => $idmarca,
			'id_rev' => $this->input->post('id_rev', TRUE),				
			'info' => 'Revisar/validar',	
			'check' => '0',				
			'estatus' => '0',
			'date_created' => date("Y-m-d H:i:s")
		);
		$this->db->insert('pat_rev_alert', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){		
			$id_alert = $this->db->insert_id();
			return $this->db->select('*')->get_where('pat_rev_alert', array('id_alert' => $id_alert ) )->row();
    	}
    	else
    		false;
    }

	function del_revision($id_rev){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_rev' => $id_rev))->update('pat_revisiones', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_rev;
		else
			return false;
    }

    function revision_check_revizado_m(){
		$estatus_revisado = $this->input->post('estatus_revisado', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		$data = array('estatus_revisado' => $estatus_revisado);
		$this->db->where(array('id_rev' => $id_rev))->update('pat_revisiones', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $this->db->select('id_rev, estatus_revisado ')->get_where('pat_revisiones', array('id_rev' => $id_rev ) )->row();
		else
			return false;
	}
	function revision_check_validado_m(){
		$estatus_validado = $this->input->post('estatus_validado', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		$data = array('estatus_validado' => $estatus_validado);
		$this->db->where(array('id_rev' => $id_rev))->update('pat_revisiones', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $this->db->select('id_rev, estatus_validado ')->get_where('pat_revisiones', array('id_rev' => $id_rev ) )->row();
		else
			return false;
	}
	//MODELOS PARA PRESENTACION EJECUTIVA
	function data_cat($dato){
		$query = "SELECT * FROM pat_data_cat WHERE tipo = '$dato' and estatus = 0 ORDER BY orden IS NULL ASC, orden ASC;";
		return $this->db->query($query)->result();      
	} 
	function gets_pres_ejecutiva_borrador(){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT * FROM pat_pre_ejecutiva 
		WHERE estatus = 0 and pre_eje_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result();      
	} 

	function gets_pres_ejecutiva(){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT id_pre_eje, pat_pre.id_creater, pre_eje_pat_ano, pre_eje_name,pre_eje_des ,pre_eje_file_type, cat.des as type_des , pre_eje_file_name, pre_eje_file_url,pat_pre.estatus FROM pat_pre_ejecutiva as pat_pre
		inner join pat_data_cat as cat on cat.id = pat_pre.pre_eje_file_type 
		WHERE pat_pre.estatus = 0 and pre_eje_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result();      
	} 

	function gets_pres_ejecutiva_down_list(){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT pre_eje_pat_ano as PAT, pre_eje_name as Documento,pre_eje_des as Descripcion FROM pat_pre_ejecutiva as pat_pre
		inner join pat_data_cat as cat on cat.id = pat_pre.pre_eje_file_type 
		WHERE pat_pre.estatus = 0 and pre_eje_pat_ano = $pat_ano; ";
		return $this->db->query($query)->result();      
	} 

	function get_downloads( $id_file){
        $this->db->select("pre_eje_file_url as ruta, pre_eje_file_name as nombre")
        ->from('pat_pre_ejecutiva')->where('id_pre_eje', $id_file);
        return $this->db->get()->row();
    }
    //MODELOS PARA PRESENTACION EJECUTIVA
    function add_pres_ejecutiva(){
		$idmarca = $this->session->userdata("idmarca");
		$pat_ano = $this->session->userdata("pat_ano");
		$data = array(
			'id_creater' => $idmarca,
			'pre_eje_pat_ano' => trim($pat_ano),
			'pre_eje_name' => $this->input->post('pre_eje_name', TRUE),
			'pre_eje_des' => $this->input->post('pre_eje_des', TRUE),	
			'pre_eje_file_type' => $this->input->post('pre_eje_file_type', TRUE), 					        
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'
		);	//$this->logSW( var_export($data, true) );
		$this->db->insert('pat_pre_ejecutiva', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$id_pre_eje = $this->db->insert_id();	
			$dir = 'content/pat_pres_ejecutiva/'.$id_pre_eje;
			if ( !is_dir($dir) ) { 
				mkdir($dir, 0777 , true);
		 	 	chmod($dir, 0777);			
		 	}		
			return $this->db->select('*')->get_where('pat_pre_ejecutiva', array('id_pre_eje' => $id_pre_eje ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function delete_uploaded_file($id_pres, $search) {
        $idmarca = $this->session->userdata("idmarca");
        $where = array('id_pre_eje' => $id_pres  );   
        $result = $this->db->select($search)->from('pat_pre_ejecutiva')->where($where)->get();
        if ($result->num_rows() > 0) {
            $data = $result->result();            
            foreach ($data as $key => $value) {
                if (!empty($value->ruta) ) {
                	$rutadel = "../".$value->ruta ;   
                    $dir_ant_file = realpath( APPPATH . '/'.$rutadel);             
                    if ( file_exists($dir_ant_file) ) {                 
                        unlink($dir_ant_file);                          
                     }                     
                }
            }            
        }       
    }

    function pres_change_files($data, $id_pre_eje, $url){
		$arraydata = array('id_pre_eje' => $id_pre_eje );
		$this->db->where( $arraydata )->update('pat_pre_ejecutiva', $data);
		$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){							
			$result = $this->db->select("id_pre_eje, pre_eje_file_name , $url")->get_where('pat_pre_ejecutiva', array('id_pre_eje' => $id_pre_eje ) )->row();  			  
			if (!empty($result->ruta) ) {
                	$rutadel = "../".$result->ruta ;   
                    $dir_ant_file = realpath( APPPATH . '/'.$rutadel);             
                    if ( file_exists($dir_ant_file) )                 
                        chmod($dir_ant_file, 0777);	    
                }
			return $result;
		}else
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

	function edit_pres_ejecutiva(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'pre_eje_name' => $this->input->post('pre_eje_name', TRUE),
			'pre_eje_des' => $this->input->post('pre_eje_des', TRUE),	
			'pre_eje_file_type' => $this->input->post('pre_eje_file_type', TRUE)
		);
		$id_pre_eje = trim($this->input->post('id_pres_form', TRUE) );	
		$arraydata = array('id_pre_eje' => $id_pre_eje);
		$this->db->where( $arraydata )->update('pat_pre_ejecutiva', $data);     							
	    return $this->db->select('*')->get_where('pat_pre_ejecutiva', array('id_pre_eje' => $id_pre_eje ) )->row();  
    }

    function delete_pres_ejec($id_press){
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_pre_eje' => $id_press))->update('pat_pre_ejecutiva', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_press;
		else
			return false;
    }

    //MODELOS PARA MAPA DE RIESGO
    function get_pats_total_mapa_riesgos(){       
			$arrayWhere = array('pr.estatus' => 0 , 'pr.pat_activo' => 0 );
		    return $this->db->select('pr.*,
		    	(SELECT count(*) FROM pat_mapa_riesgos as riesgos WHERE riesgos.estatus = 0 and riesgos.pat_ano = pr.pat_ano) AS riesgosxpat,
				(SELECT count(*) FROM pat_mapa_riesgos as riesgos WHERE riesgos.estatus = 0 ) AS riesgosxpat_total ')
		    ->where($arrayWhere)->order_by("pat_ano", "desc")->get('pat_root AS pr')->result();
	}
    function obtner_lista_riesgos_filtro($pat_ano){
        $query = "SELECT * FROM pat_mapa_riesgos where estatus = 0 and pat_ano = $pat_ano;";
        return $this->db->query($query)->result();
    }
   	function obtner_lista_riesgos(){
   		$pat_ano = $this->session->userdata("pat_ano");
        $query = "SELECT * FROM pat_mapa_riesgos where estatus = 0 and pat_ano = $pat_ano; ";
        return $this->db->query($query)->result();
    }
    function obtner_lista_riesgos_rev($id_rev){  //editada
        $query = "SELECT revxrie.id, revxrie.id_revision, revxrie.id_riesgo, riesgo.descripcion  FROM pat_revxriesgo revxrie
		inner join pat_mapa_riesgos riesgo on riesgo.id_riesgo = revxrie.id_riesgo 
        where revxrie.estatus = 0 and revxrie.id_revision = $id_rev;";
        return $this->db->query($query)->result();
    }

    function obtner_lista_areas_rev($id_rev){  //editada
        $query = "SELECT revxarea.id, revxarea.id_revision, revxarea.id_area , areas.des  
        FROM pat_revxarevisar as revxarea 
		 inner join pat_data_cat areas on areas.id = revxarea.id_area
        where revxarea.estatus = 0 and revxarea.id_revision = $id_rev;";
        return $this->db->query($query)->result();
    }
    function add_mapa_riesgos(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_usuario_creador' => $idmarca,
			'pat_ano' => $this->input->post('id_pat', TRUE),
			'descripcion' => $this->input->post('descripcion', TRUE),
			'impacto' => $this->input->post('impacto', TRUE),
			'probabilidad' => $this->input->post('probabilidad', TRUE),	
			'cuadrante' => $this->input->post('cuadrante', TRUE), 
			'riesgo_ponderado' => $this->input->post('riesgo_ponderado', TRUE), 					        
			'fecha_creacion' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		); 

		$this->db->insert('pat_mapa_riesgos', $data);		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){		
			$id_map = $this->db->insert_id();					
			return $this->db->select('*')->get_where('pat_mapa_riesgos', array('id_riesgo' => $id_map ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_mapa_riesgos(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'descripcion' => $this->input->post('descripcion', TRUE),
			'impacto' => $this->input->post('impacto', TRUE),
			'probabilidad' => $this->input->post('probabilidad', TRUE),	
			'cuadrante' => $this->input->post('cuadrante', TRUE), 
			'riesgo_ponderado' => $this->input->post('riesgo_ponderado', TRUE)
		); 

		$id_map = trim($this->input->post('id_map_form', TRUE) );	
		$arraydata = array('id_riesgo' => $id_map);
		$this->db->where( $arraydata )->update('pat_mapa_riesgos', $data);								
	    return $this->db->select('*')->get_where('pat_mapa_riesgos', array('id_riesgo' => $id_map ) )->row();  
    }

    function sortable_mysql(){ 
    	try {
    		$idmarca = $this->session->userdata("idmarca");
			$data = array( 'orden' => $this->input->post('pos', TRUE)	);
			$id_cat = $this->input->post('id_cat', TRUE);	
			$this->db->where( array('id' => $id_cat) )->update('user_data_cat', $data);
		    return $this->db->select('*')->get_where('user_data_cat', array('id' => $id_cat ) )->row();
    	} catch (Exception $e) {
    		$this->logSW( var_export($e, true) );
    	}
		
    }

    function delete_mapa_riesgos($id_cat){
    	//$this->logSW("Entro a eliminar" . $id_cat );
    	$data = array('estatus' => '1',);
		$this->db->where(array('id_riesgo' => $id_cat))->update('pat_mapa_riesgos', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_cat;
		else
			return false;
    }
    //MODELOS PARA SEMANA HOMBRE    
    function gets_resumen_sem_hom(){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT  SUM(auditoria ) as auditoria,  SUM(seguimiento ) as seguimiento,  
		SUM(mejora_gestion ) as mejora_gestion,  SUM(trans_inte_parti) as trans_inte_parti,  
		SUM(quejas_denuncias) as quejas_denuncias,  SUM(responsabilidades) as responsabilidades,  
		SUM(controversia) as controversia,  SUM(actividades) as actividades,  SUM(planeacion) as planeacion,  
		SUM(informe_sfp) as informe_sfp,  SUM(comite) as comite,  SUM(junta_consejo) as junta_consejo,  
		SUM(act_adm) as act_adm,  SUM(capacitacion) as capacitacion,  SUM(plazas_vac) as plazas_vac,  
		SUM(vacaciones) as vacaciones ,  SUM(total) as total  
		FROM pat_semana_hombre WHERE estatus = 0 and id_pat_ano = $pat_ano";
		return $this->db->query($query)->row();      
	} 
	function gets_distribucion_nivel_sem_hom(){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT users.nombre , users.apellidop, users.apellidom, auditoria,  seguimiento,  mejora_gestion, trans_inte_parti, quejas_denuncias, 
		responsabilidades,  controversia,  actividades,  planeacion,  informe_sfp, 
		comite, junta_consejo, act_adm, capacitacion,  plazas_vac,  vacaciones , total  
		FROM pat_semana_hombre hom
		inner join coreuser users on users.id_user = hom.id_user
		WHERE hom.estatus = 0 and hom.id_pat_ano = $pat_ano";
		return $this->db->query($query)->result();      
	} 
    function gets_users_sem_hom(){
		$pat_ano = $this->session->userdata("pat_ano");
		//$query = "SELECT id_user, nombre, apellidop, apellidom FROM coreuser WHERE estatus = 0 and (rol_permiso = 61 or rol_permiso = 57)"; //cambio realizado por lalo
		$query = "SELECT id_user, nombre, apellidop, apellidom FROM coreuser WHERE estatus = 0 and rol_permiso != 55";
		return $this->db->query($query)->result();      
	} 

	function gets_users_sem_hom_userid($id_user){
		$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT * FROM pat_semana_hombre   
		WHERE estatus = 0 and id_user = $id_user and id_pat_ano = $pat_ano";
		return $this->db->query($query)->row();      
	}

	function add_semana_hombre(){
		$idmarca = $this->session->userdata("idmarca");
		$pat_ano = $this->session->userdata("pat_ano");
		$data = array(
			'id_pat_ano' => trim($pat_ano),
			'id_user' => $this->input->post('id_user', TRUE),
			'auditoria' => $this->input->post('auditoria', TRUE),
			'seguimiento' => $this->input->post('seguimiento', TRUE),	
			'mejora_gestion' => $this->input->post('mejora_gestion', TRUE),
			'trans_inte_parti' => $this->input->post('trans_inte_parti', TRUE), 			
			'quejas_denuncias' => $this->input->post('quejas_denuncias', TRUE), 	
			'responsabilidades' => $this->input->post('responsabilidades', TRUE), 			
			'controversia' => $this->input->post('controversia', TRUE), 
			'actividades' => $this->input->post('actividades', TRUE), 			
			'planeacion' => $this->input->post('planeacion', TRUE), 
			'informe_sfp' => $this->input->post('informe_sfp', TRUE), 			
			'comite' => $this->input->post('comite', TRUE), 
			'junta_consejo' => $this->input->post('junta_consejo', TRUE), 			
			'act_adm' => $this->input->post('act_adm', TRUE), 	        
			'capacitacion' => $this->input->post('capacitacion', TRUE), 
			'plazas_vac' => $this->input->post('plazas_vac', TRUE), 
			'vacaciones' => $this->input->post('vacaciones', TRUE), 
			'total' => $this->input->post('total', TRUE), 
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'
		);	//$this->logSW( var_export($data, true) );

		$this->db->insert('pat_semana_hombre', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$id_pre_eje = $this->db->insert_id();	
			return $this->db->select('*')->get_where('pat_semana_hombre', array('id_sem_hom' => $id_pre_eje ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_semana_hombre(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(			
			'auditoria' => $this->input->post('auditoria', TRUE),
			'seguimiento' => $this->input->post('seguimiento', TRUE),	
			'mejora_gestion' => $this->input->post('mejora_gestion', TRUE),
			'trans_inte_parti' => $this->input->post('trans_inte_parti', TRUE), 			
			'quejas_denuncias' => $this->input->post('quejas_denuncias', TRUE), 	
			'responsabilidades' => $this->input->post('responsabilidades', TRUE), 			
			'controversia' => $this->input->post('controversia', TRUE), 
			'actividades' => $this->input->post('actividades', TRUE), 			
			'planeacion' => $this->input->post('planeacion', TRUE), 
			'informe_sfp' => $this->input->post('informe_sfp', TRUE), 			
			'comite' => $this->input->post('comite', TRUE), 
			'junta_consejo' => $this->input->post('junta_consejo', TRUE), 			
			'act_adm' => $this->input->post('act_adm', TRUE), 	        
			'capacitacion' => $this->input->post('capacitacion', TRUE), 
			'plazas_vac' => $this->input->post('plazas_vac', TRUE), 
			'vacaciones' => $this->input->post('vacaciones', TRUE), 
			'total' => $this->input->post('total', TRUE),
		);
		
		$id_pre_eje = trim($this->input->post('id_pres_form', TRUE) );	
		$pat_ano = $this->session->userdata("pat_ano");
		$arraydata = array(			 
			'id_sem_hom' => $id_pre_eje,
			'id_pat_ano' => $pat_ano
		);
		$this->db->where( $arraydata )->update('pat_semana_hombre', $data);     							
	    return $this->db->select('*')->get_where('pat_semana_hombre', $arraydata )->row();  
    }
    //MODELOS PARA EQUIPO DE TRABAJO
    function get_pat_revisiones_trabajo($pat_ano){
		//$pat_ano = $this->session->userdata("pat_ano");
		$query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  , 
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,  
		instancia.des  as instancia ,  justif.des as justificacion ,  area_rev.des as area_revizar  ,  
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,  
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,  
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado,
		rev.estatus_validado, rev.estatus_auditoria, rev.trimestre, rev.auditores, 
		(select count(*) from pat_equipo_trabajo where activo = 0 and id_revision = rev.id_rev) as cant_auditores 
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic 
		inner join pat_data_cat clave on clave.id = rev.clave 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion 
		inner join pat_data_cat area_rev on area_rev.id = rev.area_revizar 
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente 
		inner join pat_data_cat muestra on muestra.id = rev.muestra 
		inner join pat_data_cat univer on univer.id = rev.universo 		
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano;";

		return $this->db->query($query)->result(); 
	}

	function get_usuarios_equipo(){       
	    $idmarca = $this->session->userdata("idmarca");
	    $query = "SELECT id_user, rol_permiso, rol.des, cargo.des as cargo, nombre, apellidop, 
	    apellidom, area.des as area , nivel.des as nivel, activo, users.curr_url,  
	    n_cod_p.des as n_cod_p, experiencia, grado.des as desgrado 
	    from coreuser as users
			left join user_data_cat cargo on cargo.id = users.cargo
			left join user_data_cat area on area.id = users.area 
			left join user_data_cat grado on grado.id = users.grado 
			left join user_data_cat n_cod_p on n_cod_p.id = users.nivel_codigo_puesto 
			left join user_data_cat rol on rol.id = users.rol_permiso 
			left join user_data_cat nivel on nivel.id = users.nivel where users.estatus = 0 and tipo_usuario != 'develop' and rol.des != 'Administrador'";        
	    return $this->db->query($query)->result();       
	}
	function usuarios_change_status_check(){
		$id_user = $this->input->post('id_user', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		$data = array('id_usuario' => $id_user, 'id_revision' => $id_rev);
		$query = $this->db->from('pat_equipo_trabajo')->where($data)->get();
		return $query->num_rows();		
	}
	function usuarios_change_status_check_valido($data){				
		$query = $this->db->from('pat_equipo_trabajo')->where($data)->get();
		return $query->num_rows();		
	}
	function usuarios_insert_status(){
		$idmarca = $this->session->userdata("idmarca");
		$pat_ano = $this->session->userdata("pat_ano");
		$data = array(
			'id_revision' => $this->input->post('id_rev', TRUE),
			'id_usuario' => $this->input->post('id_user', TRUE),
			'rol_titular' => '1',
			'rol_cordinador' => '1',
			'rol_jefe_grupo' => '1',
			'rol_auditor' => '1',
			'rol_consulta' => '1',
			'activo' => $this->input->post('activo', TRUE),	
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'
		);
		$this->db->insert('pat_equipo_trabajo', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$id_equipo = $this->db->insert_id();	
			return $this->db->select('*')->get_where('pat_equipo_trabajo', array('id_equipo' => $id_equipo ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
	}
	function usuarios_change_status(){
		$activo = $this->input->post('activo', TRUE);
		$id_user = $this->input->post('id_user', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		$data = array('activo' => $activo);
		$arrayWhere = array( 'id_revision' => $id_rev ,'id_usuario' => $id_user  );
		$this->db->where($arrayWhere)->update('pat_equipo_trabajo', $data); 
		//$afftectedRows = $this->db->affected_rows();		
		//if ($afftectedRows)
			return $this->db->select('id_usuario, id_revision , activo')->get_where('pat_equipo_trabajo', $arrayWhere  )->row();
		//else
			//return false;
	}

	function usuarios_add_roles($array_rol = null){
		$activo = $this->input->post('activo', TRUE);
		$id_user = $this->input->post('id_user', TRUE);
		$id_rev = $this->input->post('id_rev', TRUE);
		//$data = array('activo' => $activo);
		$arrayWhere = array( 'id_revision' => $id_rev ,'id_usuario' => $id_user  );		
		//47 : titular ; 48 : coordinador; 49 : jefe_grupo; 50: auditor; 51 : consulta	
		$data['rol_titular'] = 1; $data['rol_cordinador'] = 1; 
		$data['rol_jefe_grupo'] = 1; $data['rol_auditor'] = 1; 
		$data['rol_consulta'] = 1;
		foreach ($array_rol as $key => $value) {
			if (isset($value)) {
				if ($value == "titular") 
					$data['rol_titular'] = 0;
				if ($value == "coordinador") 
					$data['rol_cordinador'] = 0;
				if ($value == "jefe_grupo") 
					$data['rol_jefe_grupo'] = 0;
				if ($value == "auditor") 
					$data['rol_auditor'] = 0;
				if ($value == "consulta") 
					$data['rol_consulta'] = 0;
			}			
		}
		
		$this->db->where($arrayWhere)->update('pat_equipo_trabajo', $data); 
		//$afftectedRows = $this->db->affected_rows();		
		//if ($afftectedRows)
			return $this->db->select('*')->get_where('pat_equipo_trabajo', $arrayWhere  )->row();
		//else
			//return false;
	}
	function getxlsdata_equipo_trabajo($pat_ano = null){                  
 		$idmarca = $this->session->userdata("idmarca");        
        $query = "SELECT rev.id_pat_ano as pat  ,  t_rev.des as tipo, instancia.des  as instancia ,  
		justif.des as justificacion ,  rev.trimestre,
		(select count(*) from pat_equipo_trabajo where activo = 0 and id_revision = rev.id_rev) as auditores , rev.estatus_auditoria as estatus
		from pat_revisiones as rev 
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision 
		inner join pat_data_cat instancia on instancia.id = rev.instancia 
		inner join pat_data_cat justif on justif.id = rev.justificacion   
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano;";        
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












	//////////////////////////////////////////////////////////////////////////////////////////////////////
	//CODIGO BORRADOR /////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////

	function get_blog(){
		$idmarca = $this->session->userdata("idmarca");
	    $query = "SELECT id_blog,blog_titulo, blog_des, tipo.des as blog_tipo, link1, link2, link3, link4, img1_name, img1_url, img2_name, img2_url, img3_name, img3_url, img4_name, img4_url  from blog_admin as blogs 
	    inner join blog_data_cat tipo on tipo.id = blogs.blog_tipo 
	    where estatus = 0";         
	    return $this->db->query($query)->result(); 
	}

	function add_blog(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_creater' => $idmarca,
			'blog_titulo' => $this->input->post('blog_titulo', TRUE),
			'blog_des' => $this->input->post('blog_des', TRUE),	
			'blog_tipo' => $this->input->post('blog_tipo', TRUE), 		
			'link1' => $this->input->post('link1', TRUE), 
			'link2' => $this->input->post('link2', TRUE),
			'link3' => $this->input->post('link3', TRUE),
			'link4' => $this->input->post('link4', TRUE),			        
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		);
		$this->db->insert('blog_admin', $data); //guarda usuario		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){				
			$id_blog = $this->db->insert_id();	
			$dir = 'content/blogs/'.$id_blog;
			if ( !is_dir($dir) ) { 
				mkdir($dir, 0777 , true);
		 	 	chmod($dir, 0777);			
		 	}		
			return $this->db->select('*')->get_where('blog_admin', array('id_blog' => $id_blog ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_blog(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'blog_titulo' => $this->input->post('blog_titulo', TRUE),
			'blog_des' => $this->input->post('blog_des', TRUE),	
			'blog_tipo' => $this->input->post('blog_tipo', TRUE), 		
			'link1' => $this->input->post('link1', TRUE), 
			'link2' => $this->input->post('link2', TRUE),
			'link3' => $this->input->post('link3', TRUE),
			'link4' => $this->input->post('link4', TRUE),	
		);
		//$this->logSW("modelo");
		//$this->db->insert('blog_admin', $data); //guarda usuario
		$id_blog = trim($this->input->post('id_blog_form', TRUE) );	
		$arraydata = array('id_blog' => $id_blog);
		$this->db->where( $arraydata )->update('blog_admin', $data); 
    							
	    return $this->db->select('*')->get_where('blog_admin', array('id_blog' => $id_blog ) )->row();  
		 	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }


    
    





}



/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */