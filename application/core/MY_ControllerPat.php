<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_ControllerPat extends CI_Controller {
    public function __construct(){
    	parent::__construct();
		date_default_timezone_set('America/Monterrey');	
		if ( !$this->session->userdata('is_logged_in')){
			redirect('', 'refresh');
			
		}		
    }

    //funcion para log
	function logSW1($cadena){
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
