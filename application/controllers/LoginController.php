<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	function __construct(){
	  	parent::__construct();
	 	$this->load->model('login_model', "auth");
		$this->load->model('Admin_model','adm_m');
	 }

	public function index(){	
		if ( !$this->session->userdata('is_logged_in')){
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');			
			$this->load->view('index');		
		}else{
			$pat_anio = $this->session->userdata("pat_ano");
			$data['totalAuditorias'] = $this->adm_m->get_auditorias($pat_anio);
			$data['totalSeguimientos'] = $this->adm_m->get_seguimientos($pat_anio);
			$data['noticias'] = $this->adm_m->noticias();
			$this->load->view('core/dashboard', $data);
		}
	}

	public function checkuser() {
		$this->form_validation->set_rules('login-username', 'Nombre de usuario', 'trim|required|xss_clean');
		$this->form_validation->set_rules('login-password', 'password', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('captcha', 'Security Code', 'trim|required|xss_clean');
		$username = $this->input->post('login-username', true); //RECUPERACION DE CONTRASEÑA

		if (!$username) {
			redirect('inicio', 'refresh');
		}
		if ( $this->form_validation->run() == FALSE) {		

			$data['message'] = "<p class=\"text-center alert-danger\">Información incorrecta!</p>";
			//$data['security_code'] = $this->loginAttemps();
			$this->load->view('index', $data);
			//$this->index();
		} else {
			$username = trim($this->input->post('login-username', true) );
			$password = trim($this->input->post('login-password', true) );
			$remember = trim($this->input->post('login-remember-me', true) );
			$valid = $this->auth->validate($username, $password);
			
			if ($valid) {
				$data = array(
					'idmarca' => $valid->id_user,
					'usuario' => $valid->usuario,
					'rol' => $valid->rol_permiso,
					'email_cnbv' => $valid->email_cnbv,
					'pat_ano' => '2016',
					'foto_file' => $valid->foto_file,
					'is_logged_in' => true,
				);
				if($remember){
			        $new_expiration = 60*60*24*30;//30 days
			        $this->session->sess_expiration = $new_expiration;
			    }
				$this->session->set_userdata($data);
				redirect('dashboard', 'refresh');
				//$this->load->view('core/dashboard');
			}else {
				$data['message'] = "<p class='text-center alert-danger'>Usuario o contraseña incorrecta!</p>";		
				$this->load->view('index', $data);
			}
		}
	}


	public function logout(){ //cierre de session
			$this->session->sess_destroy();
			//This code prevents the user from pressing the back button after logging out
			//of the application.
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');

			redirect('inicio', 'refresh');
    }







}
