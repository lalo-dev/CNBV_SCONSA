<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends MY_Controller {
	function __construct(){
	  	parent::__construct();
	  	$this->load->model('Admin_model','adm_m');
 	}

	public function index(){
		$pat_anio = $this->session->userdata("pat_ano");

		$data['totalAuditorias'] = $this->adm_m->get_auditorias($pat_anio);
		$data['totalSeguimientos'] = $this->adm_m->get_seguimientos($pat_anio);
		$data['noticias'] = $this->adm_m->noticias();
		
		$this->load->view('core/dashboard', $data);
	}

}
