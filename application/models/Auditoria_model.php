<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auditoria_model extends CI_Model {

    function get_auditorias(){
        $query = "SELECT pr.id_rev, concat(pr.no_revision,'/16') AS revision, pr.area_revizar, pdc.des, pr.auditores
        FROM pat_revisiones pr
        INNER JOIN pat_data_cat pdc ON pdc.id = pr.area_revizar";

        return $this->db->query($query)->result();
	}

    function set_comentario($comentario, $idAudi)
    {
        $data = array(
        'id_auditoria' => $idAudi,
        'comentario' => $comentario
        );
        $this->db->insert('orden_auditoria_chat', $data);
    }


     function get_comentarios($idAudi)
    {
        $query = "SELECT * FROM orden_auditoria_chat where id_auditoria =".$idAudi;

        return $this->db->query($query)->result();
    }

     function set_general($data, $id_general){

         if($id_general > 0){
            $this->db->where('id_general', $id_general);
            $this->db->update('orden_auditoria_general', $data);
        }else{

            $this->db->insert('orden_auditoria_general', $data);
            $id_general = $this->db->insert_id();
        }


        return $id_general;
     }
     function get_general($idAudi){

         $query = "SELECT * FROM orden_auditoria_general where id_auditoria =".$idAudi;

        return $this->db->query($query)->result();

     }

     function set_orden($data, $firmas, $cc, $id_orden){

         if($id_orden > 0){
            $this->db->where('id_orden', $id_orden);
            $this->db->update('orden_auditoria_orden', $data);
        }else{

            $this->db->insert('orden_auditoria_orden', $data);
            $id_orden = $this->db->insert_id();
        }

        if(count($firmas) > 0){
            foreach ($firmas as $row) {

                $row['id_orden'] = $id_orden;

                $id_firma = $row['id_firma'];

                if($id_firma == 0){
                    $this->db->insert('orden_auditoria_orden_firmas', $row);
                }else{
                    $this->db->where('id_firma', $id_firma);
                    $this->db->update('orden_auditoria_orden_firmas', $row);
                }
            }
        }

        if(count($cc) > 0){
            foreach ($cc as $row) {
                
                $row['id_orden'] = $id_orden;

                $id_CC = $row['id_CC'];

                if($id_CC == 0){
                    $this->db->insert('orden_auditoria_orden_cc', $row);
                }else{
                    $this->db->where('id_CC', $id_CC);
                    $this->db->update('orden_auditoria_orden_cc', $row);
                }
            }
        }

        return $id_orden;
    }

    function get_orden($idAudi){

         $query = "SELECT * FROM orden_auditoria_orden where id_auditoria =".$idAudi;

         $result = $this->db->query($query)->result();

         if(count($result) > 0){

            $id_orden = $result[0]->id_orden;

             $objQuery = "SELECT t1.id_firma,t1.rol,t1.auditor,t1.id_orden,t2.des, t3.des as des_auditor
                          FROM orden_auditoria_orden_firmas as t1 inner join user_data_cat as t2 on t1.rol = t2.id
                           inner join user_data_cat as t3 on t1.auditor = t3.id where id_orden =".$id_orden;
             $funcQuery = "SELECT t1.id_CC,t1.cc_rol,t1.id_orden,t2.des as des_ccrol
                           FROM orden_auditoria_orden_cc as t1 inner join user_data_cat as t2 on t1.cc_rol = t2.id where id_orden =".$id_orden;

             


             $result[0]->firmas = $this->db->query($objQuery)->result();
             $result[0]->CCs = $this->db->query($funcQuery)->result();
         }

        return $result;
    }

    function get_cat_firmas(){

         $funcQuery = "SELECT id,des FROM user_data_cat where tipo = 'rol_permiso'";


         return $this->db->query($funcQuery)->result();

    }

}