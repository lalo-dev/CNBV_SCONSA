<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends MY_Controller {
	function __construct(){
	  parent::__construct();
 	}

	public function index(){		
		$this->load->view('core/dashboard');
	}

}
