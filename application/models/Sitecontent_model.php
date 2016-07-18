<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Sitecontent_model extends CI_Model {

	function get_all_alert() {
		$call = "SELECT * FROM pat_rev_alert"; 
		return $this->db->query($call)->result();
	}

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

	