<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pra_model extends CI_Model {

    function get_todos(){
	    /*$query = "SELECT blogs.id_blog, blogs.blog_titulo, blogs.blog_des, blogs.date_created,
                         blogs.blog_tipo as tipo_noticia, tipo.des as blog_tipo,
                         blogs.link1, blogs.link2, blogs.link3, link4,
                         img1_name, img2_name, img3_name, img4_name,
                         img1_url, img2_url, img3_url, img4_url
                  from blog_admin as blogs 
	        inner join blog_data_cat tipo on tipo.id = blogs.blog_tipo 
	             where estatus = 0";         
	    return $this->db->query($query)->result();*/
        return "Mensaje desde el modelo de XXX (XXX_model.php)<br/>"; 
	}

    function get_detalle($id_detalle){
	    /*$query = "SELECT blogs.id_blog, blogs.blog_titulo, blogs.blog_des, blogs.date_created,
                         blogs.blog_tipo as tipo_noticia, tipo.des as blog_tipo,
                         blogs.link1, blogs.link2, blogs.link3, link4,
                         img1_name, img2_name, img3_name, img4_name,
                         img1_url, img2_url, img3_url, img4_url
                  from blog_admin as blogs 
	        inner join blog_data_cat tipo on tipo.id = blogs.blog_tipo 
	             where estatus = 0";         
	    return $this->db->query($query)->result();*/
        return "Mensaje desde el modelo de XXX (XXX_model.php)<br/>"; 
	}
}