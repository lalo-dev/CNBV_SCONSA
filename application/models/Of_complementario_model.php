<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Of_complementario_model extends CI_Model{

    //CONSULTAR OFICIO COMPLEMENTARIO
    function obtner_lista_riesgos(){
        $query = "SELECT pr.id_rev, pr.area_revizar, pdc.des, pr.auditores 
FROM pat_revisiones pr
INNER JOIN pat_data_cat pdc ON pdc.id = pr.area_revizar";
        return $this->db->query($query)->result();
    }

    function get_registro($idR){
        //$query = "SELECT * FROM auditoria_oficio_co where id_revision=".$idR;
        $arrayWhere = array('id_revision' => $idR );
        return $this->db->select('*')->get_where('auditoria_oficio_co', $arrayWhere )->row();

        //return $this->db->query($query)->result();

        //$this->db->query("Your query")->row()->campaign_id;
    }



    //AGREGAR OFICIO COMPLEMENTARIO
    function add_oficio_complementario(){
        $idmarca = $this->session->userdata("idmarca");
        $data = array(
            'id_revision' => $this->input->post('id_revision', TRUE),
            'id_creater' => $idmarca,
            'verificado' => $this->input->post('verif', TRUE)== "on" ? 1 : 0,
            'validado' => $this->input->post('valid', TRUE)== "on" ? 1 : 0,
            'orden' => $this->input->post('orden', TRUE),
            'objeto' => $this->input->post('objeto', TRUE),
            'revisar' => $this->input->post('revisar', TRUE),
            'motivo' => $this->input->post('motivo', TRUE),
            'ob_period'=> $this->input->post('ob_period', TRUE),
            'fecha_creacion' => date("Y-m-d H:i:s"),
            'estatus' => '0'
        );
        //orden=1&objeto=1&revisar=1&motivo=a&ob_period=b
       // echo json_encode($data);

        $this->db->insert('auditoria_oficio_co', $data);
        $afftectedRows = $this->db->affected_rows();

        if ($afftectedRows){
            $id_of = $this->db->insert_id();
            return $this->db->select('*')->get_where('auditoria_oficio_co', array('id_of_co' => $id_of ) )->row();
        }
        return array(	'estatus_error'=> 'errorvalidacion' ,  'error' => 'Error de registro');
    }

    function edit_oficio_complementario(){
        $idmarca = $this->session->userdata("idmarca");
        $data = array(
            'id_revision' => $this->input->post('id_revision', TRUE),
            'id_of_co' => $this->input->post('id_oficio', TRUE),
            'verificado' => $this->input->post('verif', TRUE)== "on" ? 1 : 0,
            'validado' => $this->input->post('valid', TRUE)== "on" ? 1 : 0,
            'orden' => $this->input->post('orden', TRUE),
            'objeto' => $this->input->post('objeto', TRUE),
            'revisar' => $this->input->post('revisar', TRUE),
            'motivo' => $this->input->post('motivo', TRUE),
            'ob_period'=> $this->input->post('ob_period', TRUE)
        );
//        return $data;
        $id_of_co = trim($this->input->post('id_oficio', TRUE) );
        $arraydata = array('id_of_co' => $id_of_co);
        $this->db->where( $arraydata )->update('auditoria_oficio_co', $data);
        return $this->db->select('*')->get_where('auditoria_oficio_co', array('id_of_co' => $id_of_co ) )->row();
    }

}