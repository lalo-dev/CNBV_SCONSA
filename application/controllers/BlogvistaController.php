<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogvistaController extends MY_Controller {
	function __construct(){
	  parent::__construct();
	 $this->load->model('Blogvista_model', "blog_vista");
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
    
    public function lista(){
        $data['get_blogs'] = $this->blog_vista->get_blog_todos();
        $this->load->view('blog/blog', $data);
    }
}