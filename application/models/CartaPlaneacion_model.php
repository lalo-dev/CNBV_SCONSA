<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartaPlaneacion_model extends CI_Model
{
    function get_lista_auditorias($patAnio)
    {
        $query = "SELECT pr.id_rev, concat(pr.no_revision,'/16') AS revision, pr.area_revizar, pdc.des, pr.auditores
        FROM pat_revisiones pr
        INNER JOIN pat_data_cat pdc ON pdc.id = pr.area_revizar
        WHERE id_pat_ano = $patAnio";

        return $this->db->query($query)->result();
    }
    function get_cp_detalle($id_revision)
    {
        $query = "SELECT * FROM pat_revisiones";

        return $this->db->query($query)->result();
    }

    function set_comentario($comentario, $idAudi)
    {
        $data = array(
        'id_auditoria' => $idAudi,
        'comentario' => $comentario
        );
        $this->db->insert('carta_planeacion_chat', $data);
    }

    function get_comentarios($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_chat where id_auditoria =".$idAudi;

        return $this->db->query($query)->result();
    }


    function set_tab2($data, $idAnt)
    {

        if($idAnt > 0){
            $this->db->where('id_anterior', $idAnt);
            $this->db->update('carta_planeacion_anterior', $data);
        }else{
            $this->db->insert('carta_planeacion_anterior', $data);
            $idAnt = $this->db->insert_id();
        }
        return $idAnt;
        
    }

     function get_tab2($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_anterior where id_auditoria =".$idAudi;

        return $this->db->query($query)->result();
    }

    function set_tab3($data, $idDM)
    {

        if($idDM > 0){
            $this->db->where('id_DM', $idDM);
            $this->db->update('carta_planeacion_D_M', $data);
        }else{
            $this->db->insert('carta_planeacion_D_M', $data);
            $idDM = $this->db->insert_id();
        }
        return $idDM;
        
    }

     function get_tab3($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_D_M where id_auditoria =".$idAudi;

        return $this->db->query($query)->result();
    }

    function set_tab4($data, $plazas, $idEstrutura)
    {
        if($idEstrutura > 0){
            $this->db->where('id_estructura', $idEstrutura);
            $this->db->update('carta_planeacion_estructura', $data);
        }else{

            $this->db->insert('carta_planeacion_estructura', $data);
            $idEstrutura = $this->db->insert_id();
            foreach ($plazas as $row)
            {
                $plaza = array(
                      'puesto' => $row['puesto'],
                      'direccion_grl_1' => $row['dir1'],
                      'direccion_grl_2' => $row['dir2'],
                      'direccion_grl_3' => $row['dir3'],
                      'direccion_grl_4' => $row['dir4'],
                      'id_estructura' => $idEstrutura
                    );

               $this->db->insert('carta_planeacion_plazas', $plaza);
            }
        }
        return $idEstrutura;
        
    }

     function get_tab4($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_estructura where id_auditoria =".$idAudi;

        $result = $this->db->query($query)->result();

        if(count($result) > 0){
             $id_estructura = $result[0]->id_estructura;

             $plazasQuery = "SELECT * FROM carta_planeacion_plazas where id_estructura =".$id_estructura;

             $result[0]->plazas = $this->db->query($plazasQuery)->result();
        }

        return $result;
    }

    function set_tab5($data, $listas, $id_marco)
    {
        if($id_marco > 0){
            $this->db->where('id_marco', $id_marco);
            $this->db->update('carta_planeacion_marco', $data);
        }else{

            $this->db->insert('carta_planeacion_marco', $data);
            $id_marco = $this->db->insert_id();
        }
        if(count($listas) >0){
            foreach ($listas as $row)
            {
                $lista = array(
                      'id_lista_cat' => $row['id_lista_cat'],
                      'id_temp' => $row['id_temp'],
                      'id_marco' => $id_marco
                    );

               $this->db->insert('carta_planeacion_listas_marco', $lista);
            }
        }

       
        return $id_marco;
        
    }

     function get_tab5($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_marco where id_auditoria =".$idAudi;

        $result = $this->db->query($query)->result();

        if(count($result) > 0){
             $id_marco = $result[0]->id_marco;

             $listasQuery = "SELECT * FROM carta_planeacion_listas_marco where id_marco =".$id_marco;

             $result[0]->listas = $this->db->query($listasQuery)->result();
        }

        return $result;
    }

    function set_tab6($data, $objetivos, $funciones, $id_manual)
    {
        if($id_manual > 0){
            $this->db->where('id_manual', $id_manual);
            $this->db->update('carta_planeacion_manuales', $data);
        }else{

            $this->db->insert('carta_planeacion_manuales', $data);
            $id_manual = $this->db->insert_id();
        }

        if(count($objetivos) > 0){
            foreach ($objetivos as $row)
            {
                $obj = array(
                      'id_temp' => $row['id_temp'],
                      'objetivo' => $row['objetivo'],
                      'id_manual' => $id_manual
                    );
               
               $id_objetivo = $row['id_objetivo'];

                if($id_objetivo == 0){
                    $this->db->insert('carta_planeacion_objetivos_manuales', $obj);
                }else{
                    $this->db->where('id_objetivo', $id_objetivo);
                    $this->db->update('carta_planeacion_objetivos_manuales', $obj);
                }
            }
        }

        if(count($funciones) > 0){
            foreach ($funciones as $row)
            {
                $func = array(
                      'id_temp' => $row['id_temp'],
                      'funcion' => $row['funcion'],
                      'id_manual' => $id_manual
                    );
                $id_funcion = $row['id_funcion'];

                if($id_funcion == 0){
                    $this->db->insert('carta_planeacion_funciones_manuales', $func);
                }else{
                    $this->db->where('id_funcion', $id_funcion);
                    $this->db->update('carta_planeacion_funciones_manuales', $func);
                }
            }
        }

       
        return $id_manual;
        
    }

     function get_tab6($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_manuales where id_auditoria =".$idAudi;

        $result = $this->db->query($query)->result();

        if(count($result) > 0){
             $id_manual = $result[0]->id_manual;

             $objQuery = "SELECT * FROM carta_planeacion_objetivos_manuales where id_manual =".$id_manual;
             $funcQuery = "SELECT * FROM carta_planeacion_funciones_manuales where id_manual =".$id_manual;

             $result[0]->objetivos = $this->db->query($objQuery)->result();
             $result[0]->funciones = $this->db->query($funcQuery)->result();
        }

        return $result;
    }

    function set_tab7($data, $proc, $num_direccion, $id_mapa)
    {
        if($id_mapa > 0){
            $this->db->where('id_mapa', $id_mapa);
            $this->db->update('carta_planeacion_mapas', $data);
        }else{

            $this->db->insert('carta_planeacion_mapas', $data);
            $id_mapa = $this->db->insert_id();
        }

        $obj = array(
              'rubro' => $proc['rubro'],
              'proceso' => $proc['proceso'],
              'objetivo' => $proc['objetivo'],
              'id_mapa' => $id_mapa,
              'num_direccion'=> $num_direccion
            );
       
        $id_direccion = $proc['id_direccion'];

        if($id_direccion == 0){
            $this->db->insert('carta_planeacion_mapas_direcciones', $obj);
            $id_direccion = $this->db->insert_id();
        }else{
            $this->db->where('id_direccion', $id_direccion);
            $this->db->update('carta_planeacion_mapas_direcciones', $obj);

        }

        $etapasProc = $proc['etapasProc'];

        if(count($etapasProc) > 0){
            foreach ($etapasProc as $row)
            {
                 $etapa = array(
                      'etapa' => $row['etapa'],
                      'descripcion' => $row['descripcion'],
                      'responsable' => $row['responsable'],
                      'id_direccion' => $id_direccion
                    );
                $id_etapa = $row['id_etapa'];

                if($id_etapa == 0){
                    $this->db->insert('carta_planeacion_mapas_etapas_proceso', $etapa);
                }else{
                    $this->db->where('id_etapa', $id_etapa);
                    $this->db->update('carta_planeacion_mapas_etapas_proceso', $etapa);
                }
            }
        }
       
        return $id_mapa;
        
    }

     function get_tab7($idAudi)
    {
        $query = "SELECT * FROM carta_planeacion_mapas where id_auditoria =".$idAudi;

        $result = $this->db->query($query)->result();

        if(count($result) > 0){
             $id_mapa = $result[0]->id_mapa;

             $dirQuery = "SELECT * FROM carta_planeacion_mapas_direcciones where id_mapa =".$id_mapa;
             $result[0]->direcciones = $this->db->query($dirQuery)->result();

            foreach ($result[0]->direcciones as $row) {

                $funcQuery = "SELECT * FROM carta_planeacion_mapas_etapas_proceso where id_direccion =".$row->id_direccion;
                 $row->etapasProc = $this->db->query($funcQuery)->result();
            }
        }

        return $result;
    }




    ////// BORRADOR
    function get_pats_total()
    {
        $arrayWhere = array('estatus' => 0, 'pat_activo' => 0);
        return $this->db->select('*')->where($arrayWhere)->order_by("pat_ano", "desc")->get('pat_root')->result();
    }

    function get_pats_estatus()
    {
        $arrayWhere = array('estatus' => 0);
        return $this->db->select('*')->where($arrayWhere)->order_by("pat_ano", "desc")->get('pat_root')->result();
    }

    //MODELOS PARA PAT
    function get_pat_date()
    {
        $id_pat = $this->input->post('id_pat', TRUE);
        $arrayWhere = array('id_pat' => $id_pat);
        return $this->db->select('*')->get_where('pat_root', $arrayWhere)->row();
    }

    function pat_change_status()
    {
        $activo = $this->input->post('activo', TRUE);
        $id_pat = $this->input->post('id_pat', TRUE);
        $data_update = array('pat_activo' => $activo);
        $this->db->where(array('id_pat' => $id_pat))->update('pat_root', $data_update);
        $afftectedRows = $this->db->affected_rows();
        if ($afftectedRows)
            return $this->db->select('id_pat, pat_activo ')->get_where('pat_root', array('id_pat' => $id_pat))->row();
        else
            return false;
    }

    function get_pat_revisiones($pat_ano)
    {
        //$pat_ano = $this->session->userdata("pat_ano");
        $query = "SELECT rev.id_rev  ,  rev.id_creater  ,  rev.id_pat_ano  ,  rev.no_revision  ,
		t_rev.des as tipo_revision   ,  p_adic.des as prog_adic,  clave.des as clave  ,
		instancia.des  as instancia ,  justif.des as justificacion ,  area_rev.des as area_revizar  ,
		rev.descripcion ,  rev.objetivo ,  rev.semana_ini  ,  rev.semana_fin  ,  rev.ts_revision  ,
		rev.ts_hombre  ,  rev.periodo_ini ,  rev.periodo_fin  ,  aud_p.des as aud_precedente ,
		muestra.des as muestra  ,  univer.des as universo ,  rev.riesgo, rev.estatus_revisado,
		rev.estatus_validado, rev.estatus_auditoria, rev.trimestre, rev.auditores
		from pat_revisiones as rev
		inner join pat_data_cat t_rev on t_rev.id = rev.tipo_revision
		inner join pat_data_cat p_adic on p_adic.id = rev.prog_adic
		inner join pat_data_cat clave on clave.id = rev.clave
		inner join pat_data_cat instancia on instancia.id = rev.instancia
		inner join pat_data_cat justif on justif.id = rev.justificacion
		inner join pat_data_cat area_rev on area_rev.id = rev.area_revizar
		inner join pat_data_cat aud_p on aud_p.id = rev.aud_precedente
		inner join pat_data_cat muestra on muestra.id = rev.muestra
		inner join pat_data_cat univer on univer.id = rev.universo
		where rev.estatus = 0 and rev.id_pat_ano = $pat_ano; ";
        return $this->db->query($query)->result();
    }
}