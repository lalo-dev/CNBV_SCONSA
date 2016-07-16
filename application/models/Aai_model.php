<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aai_model extends CI_Model {
    function data_cat($dato){
        return $this->db->select('id, des')->where('tipo', $dato )->get('normativa_tipo_archivo_cat')->result();
    }

    function get_aai(){
        $query = "SELECT id_aai, aai_nombre, aai_des, aai_tipo, img1_name, img1_url  from normativa_aai as aai
	    where estatus = 0";
        return $this->db->query($query)->result();
    }

    function get_aai_form(){
        $query = "SELECT id_aai, aai_nombre, aai_des, aai_tipo, tipo.des as aai_tipo_archivo, img1_name, img1_url  from normativa_aai as aai
        inner join normativa_tipo_archivo_cat tipo on tipo.id = aai.aai_tipo
	    where estatus = 0";
        return $this->db->query($query)->result();
    }

    function add_aai(){
        $idmarca = $this->session->userdata("idmarca");
        $data = array(
            'id_creater' => $idmarca,
            'aai_nombre' => $this->input->post('aai_nombre', TRUE),
            'aai_des' => $this->input->post('aai_des', TRUE),
            'aai_tipo' => $this->input->post('aai_tipo', TRUE),
            'date_created' => date("Y-m-d H:i:s"),
            'estatus' => '0'
        );
        $this->db->insert('normativa_aai', $data); //guarda aai
        $afftectedRows = $this->db->affected_rows();
        if ($afftectedRows){
            $id_aai = $this->db->insert_id();
            $dir = 'content/normativa_aai/'.$id_aai;
            if ( !is_dir($dir) ) {
                mkdir($dir, 0777 , true);
                chmod($dir, 0777);
            }
            return $this->db->select('*')->get_where('normativa_aai', array('id_aai' => $id_aai ) )->row();
        }
        return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_aai(){
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

    function delete_log($id_blog){
        $data = array('estatus' => '1',);
        $this->db->where(array('id_blog' => $id_blog))->update('blog_admin', $data);
        $afftectedRows = $this->db->affected_rows();
        if ($afftectedRows)
            return $id_blog;
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

}
/* End of file Aai_model.php */
/* Location: ./application/models/Aai_model.php */