<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
	function validate($username, $password) {
		//$call = "SELECT TOP 1 * FROM coreuser WHERE email_cnbv = '$email';";  //SQLSERVER
		//$call = "SELECT * FROM coreuser WHERE email_cnbv = '$email' LIMIT 1;"; //MYSQL
		$call = "SELECT user.id_user, user.usuario, user.pass, user.rol_permiso as id_rol_permiso , cat.des as rol_permiso, user.email_cnbv, user.foto_file 
		FROM coreuser as user  
		inner join user_data_cat as cat on cat.id = user.rol_permiso 
		WHERE user.estatus = 0 and user.usuario = '$username' LIMIT 1;"; //MYSQL
		$query = $this->db->query($call);
		/*$arrayWhere = array('user.estatus' => 0 , 'user.usuario' => (string)$username  );
		$query = $this->db->select('user.id_user, user.usuario, user.pass, user.rol_permiso as id_rol_permiso , cat.des as rol_permiso, user.email_cnbv, user.foto_file')
		->from('coreuser as user')
		->join('user_data_cat as cat', 'cat.id = user.rol_permiso', 'inner')
		->where($arrayWhere)->limit(1)->get();			
		*/
		
		//$this->logSW( var_export($query, true) );
		//$this->logSW( var_export($this->db->get_compiled_select(), true) );
		//$this->logSW( var_export($this->db->last_query(), true) );
		
		if ($query->num_rows() == 1) {
			$data = $query->row();
			$pass = $data->pass;
			$this->logSW( var_export($pass, true) );
			if (password_verify($password, $pass)) {
				return $data;
			} else {
				return false;
			}
		} else {
			return false;
		}
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

	