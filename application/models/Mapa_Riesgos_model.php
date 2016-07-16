<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mapa_Riesgos_model extends CI_Model{

    function obtner_lista_riesgos(){
        $query = "SELECT * FROM pat_mapa_riesgos";
        return $this->db->query($query)->result();
    }

    function num_registros(){
        $query = $this->db->get('pat_mapa_riesgos');
        return $query->num_rows();
        /*$query = $this->db->get();
        $ret = $query->row();
        return $ret->campaign_id;*/
    }

}