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