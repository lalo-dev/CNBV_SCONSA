<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogdetalleController extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Blogdetalle_model', "blog_detalle");
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

    public function blog_detalle($id_blog)
    {
        $data['id_blog'] = $id_blog;
        $data['get_blog'] = $this->blog_detalle->get_blog_detalle($id_blog);
        $this->load->view('blog/blog_detalle', $data);
    }
}