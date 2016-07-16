<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo_model extends CI_Model {
	function data_cat_count($dato){
		$arrayName = array('tipo' => $dato, 'estatus' => 0 );
	    return $this->db->select('id')->where( $arrayName )->count_all_results('user_data_cat');      
	} 
	function data_cat($dato){
		$query = "SELECT * FROM user_data_cat WHERE tipo = '$dato' and estatus = 0 ORDER BY orden IS NULL ASC, orden ASC;";
		return $this->db->query($query)->result();
		//$arrayName = array('tipo' => $dato, 'estatus' => 0 );
	    //return $this->db->select('*')->where( $arrayName )->get('user_data_cat')->result();      
	} 

	function data_cat_alcance($dato){
		$query = "SELECT base.id, base.id_creater, base.tipo, base.des, base.alcance as alcance_id, des_alcance.des as alcance, base.orden, base.deslarga, base.date_created, base.estatus FROM user_data_cat as base 
		left join user_data_cat des_alcance on des_alcance.id = base.alcance  
		WHERE base.tipo = 'alcance' and base.estatus = 0 ORDER BY base.orden IS NULL ASC, base.orden ASC;";
		return $this->db->query($query)->result();
		//$arrayName = array('tipo' => $dato, 'estatus' => 0 );
	    //return $this->db->select('*')->where( $arrayName )->get('user_data_cat')->result();      
	} 

	function add_catalogo(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'id_creater' => $idmarca,
			'tipo' => $this->input->post('tipo', TRUE),
			'des' => $this->input->post('proceso', TRUE),
			//'orden' => $this->input->post('orden', TRUE),	
			'deslarga' => $this->input->post('descripcion', TRUE), 					        
			'date_created' => date("Y-m-d H:i:s"),
			'estatus' => '0'  
		); 
		if (!empty($this->input->post('alcance', TRUE))) {  //catalogos de alcance
			$data['alcance'] = $this->input->post('alcance', TRUE);
		}
		$this->db->insert('user_data_cat', $data);		
    	$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows){		
			$id_cat = $this->db->insert_id();					
			return $this->db->select('*')->get_where('user_data_cat', array('id' => $id_cat ) )->row();  
		}    	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_catalogo(){
		$idmarca = $this->session->userdata("idmarca");
		$data = array(
			'des' => $this->input->post('proceso', TRUE),
			//'orden' => $this->input->post('orden', TRUE),	
			'deslarga' => $this->input->post('descripcion', TRUE),
			'date_created' => date("Y-m-d H:i:s"),
		);
		if (!empty($this->input->post('alcance', TRUE))) {  //catalogos de alcance
			$data['alcance'] = $this->input->post('alcance', TRUE);
		}
		$id_cat = trim($this->input->post('id_cat_form', TRUE) );	
		$arraydata = array('id' => $id_cat);
		$this->db->where( $arraydata )->update('user_data_cat', $data); 
								
	    return $this->db->select('*')->get_where('user_data_cat', array('id' => $id_cat ) )->row();  
		 	
		//return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
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

    function delete_catalogo($id_cat){
    	$this->logSW("Entro a eliminar" . $id_cat );
    	$data = array('estatus' => '1',);
		$this->db->where(array('id' => $id_cat))->update('user_data_cat', $data); 
		$afftectedRows = $this->db->affected_rows();		
		if ($afftectedRows)
			return $id_cat;
		else
			return false;
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



	//codigo borrador
	function get_blog(){
		$idmarca = $this->session->userdata("idmarca");
	    $query = "SELECT id_blog,blog_titulo, blog_des, tipo.des as blog_tipo, link1, link2, link3, link4, img1_name, img1_url, img2_name, img2_url, img3_name, img3_url, img4_name, img4_url  from blog_admin as blogs 
	    inner join blog_data_cat tipo on tipo.id = blogs.blog_tipo 
	    where estatus = 0";         
	    return $this->db->query($query)->result(); 
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
		$this->logSW("modelo");
		//$this->db->insert('blog_admin', $data); //guarda usuario
		$id_blog = trim($this->input->post('id_blog_form', TRUE) );	
		$arraydata = array('id_blog' => $id_blog);
		$this->db->where( $arraydata )->update('blog_admin', $data); 
    							
	    return $this->db->select('*')->get_where('blog_admin', array('id_blog' => $id_blog ) )->row();  
		 	
		return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function delete_uploaded_file($id_blog, $search) {
        $idmarca = $this->session->userdata("idmarca");
        $where = array('id_blog' => $id_blog  );   
        $result = $this->db->select($search)->from('blog_admin')->where($where)->get();
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

    function usuarios_change_files($data, $id_blog, $url){
		$arraydata = array('id_blog' => $id_blog );
		$this->db->where( $arraydata )->update('blog_admin', $data);
		$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows){							
			$result = $this->db->select("id_blog, $url")->get_where('blog_admin', array('id_blog' => $id_blog ) )->row();  			  
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

    
    





}



/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */