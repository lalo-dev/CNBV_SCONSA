<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdquisicionController extends MY_Controller {

	/*function __construct(){
	  parent::__construct();
	 	$this->load->model('Blog_model', "blog_m");
	 }*/

	public function m8_1_adquisiciones(){
		//CATALOGOS DE BLOG
		/*
		$data['getTipo_blog'] = $this->blog_m->data_cat('blog_tipo');
		$data['get_blogs'] = $this->blog_m->get_blog('blog_tipo');
		$data['s_rol'] = false;
		if ( trim($this->session->userdata('rol') ) == 'Administrador') {
			$data['s_rol'] = true;
		}*/
		$this->load->view('otras_actividades/m8_1_adquisiciones');
	}

	/*
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

        function get_url_encode(){
            usleep(1);
            $datetime = date("Y-m-d H:i:s");
            list($usec, $sec) = explode(" ", microtime());
            $time =  ((float)$usec + (float)$sec);
            $time_end = date('Ymdhis', strtotime( $datetime ) ).$time;
            return str_replace('.', '', $time_end);
        }

        public function adm_blog_Form_files($id_blog = 0){
            //$this->logSW("********_FILES*********");
            $this->logSW( var_export($_FILES, true) );
            $full_path = 'content/blogs/'. $id_blog ."/";
            $config['upload_path'] = $full_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            //$config['max_size'] = '15360';
            $config['max_size'] = '5120';
            $arrayResp = array();
            if (!empty($_FILES['img1'])) { //img2	$this->logSW($_FILES['img1']['name']);
                $this->load->library('upload');
                $config['file_name'] = $this->get_url_encode();
                $this->upload->initialize($config); //$this->logSW( var_export($_FILES, true) );
                if (!$this->upload->do_upload('img1')){
                    $arrayResp['img1'] =  array('Error' => 'Error al subir Imagen 1, Formatos permitido gif|jpg|png|jpeg, maximo 5MB' );
                }else{
                    $info_img1 = $this->upload->data();	//$this->logSW( var_export($info_img1, true) );
                    $send_img1 = array(
                        'img1_name' => 'img1_'.date('Y_m_d_H_i_s').$info_img1['file_ext'],
                        'img1_url' => $full_path.$info_img1['file_name']
                    );
                    $this->blog_m->delete_uploaded_file($id_blog, 'img1_url as ruta' );
                    $img1_man = $this->blog_m->usuarios_change_files($send_img1, $id_blog, 'img1_url');
                    $img1_man->base_url= URL;
                    $arrayResp['img1']= $img1_man;
                }
            }

            if (!empty($_FILES['img2'])) { //img2
                $this->load->library('upload');
                $config['file_name'] = $this->get_url_encode();
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('img2')){
                    $arrayResp['img2'] =  array('Error' => 'Error al subir Imagen 2, Formatos permitido gif|jpg|png|jpeg, maximo 5MB' );
                }else{
                    $info_img2 = $this->upload->data();
                    $send_img2 = array(
                        'img2_name' => 'img2_'.date('Y_m_d_H_i_s').$info_img2['file_ext'],
                        'img2_url' => $full_path.$info_img2['file_name']
                    );
                    $this->blog_m->delete_uploaded_file($id_blog, 'img2_url as ruta' );
                    $img2_man =$this->blog_m->usuarios_change_files($send_img2, $id_blog, 'img2_url');
                    $img2_man->base_url= URL;
                    $arrayResp['img2'] =$img2_man;
                }
            }

            if (!empty($_FILES['img3'])) { //img3
                $this->load->library('upload');
                $config['file_name'] = $this->get_url_encode();
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('img3')){
                    $arrayResp['img3'] =  array('Error' => 'Error al subir Imagen 3, Formatos permitido gif|jpg|png|jpeg, maximo 5MB' );
                }else{
                    $info_img3 = $this->upload->data();
                    $send_img3 = array(
                        'img3_name' => 'img3_'.date('Y_m_d_H_i_s').$info_img3['file_ext'],
                        'img3_url' => $full_path.$info_img3['file_name']
                    );
                    $this->blog_m->delete_uploaded_file($id_blog, 'img3_url as ruta' );
                    $img3_man =$this->blog_m->usuarios_change_files($send_img3, $id_blog, 'img3_url');
                    $img3_man->base_url= URL;
                    $arrayResp['img3'] =$img3_man;

                }
            }

            if (!empty($_FILES['img4'])) { //PERFIL FOTO	perfil
                $this->load->library('upload');
                $config['file_name'] = $this->get_url_encode();
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('img4')){
                    $arrayResp['img4'] =  array('Error' => 'Error al subir Imagen 4, Formatos permitido gif|jpg|png|jpeg, maximo 5MB' );
                }else{
                    $info_img4 = $this->upload->data();
                    $send_img4 = array(
                        'img4_name' => 'img4_'.date('Y_m_d_H_i_s').$info_img4['file_ext'],
                        'img4_url' => $full_path.$info_img4['file_name']
                    );
                    $this->blog_m->delete_uploaded_file($id_blog, 'img4_url as ruta' );
                    $img4_man =$this->blog_m->usuarios_change_files($send_img4, $id_blog, 'img4_url');
                    $img4_man->base_url= URL;
                    $arrayResp['img4'] =$img4_man;
                }
            }

            if (!empty($_FILES['perfil_resize'])) { //SOLO PARA RESIZE EJEMPLO
                $this->load->library('upload');
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

        public function delete_Log($id_blog=null){
            if (empty($id_blog))
                $data = false;
            else
                $data=$this->blog_m->delete_log($id_blog);
            echo json_encode($data);
        }
        public function adm_Blog_del(){
            //$data['get_usuarios'] = $this->usuarios_m->get_usuarios();
            $this->load->view('core/blogAdmin');
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



    */

}
