<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	function get_auditorias($anio){
		$query = "select count(1) as total from pat_revisiones where tipo_revision = 1 and id_pat_ano = $anio";

		return $this->db->query($query)->row();
	}
	function get_seguimientos($anio){
		$query = "select count(1) as total from pat_revisiones where tipo_revision = 2 and id_pat_ano = $anio";

		return  $this->db->query($query)->row();
	}
	function noticias(){

	}
}
