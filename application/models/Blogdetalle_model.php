<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogdetalle_model extends CI_Model {

    function get_blog_detalle($id_blog){
        $query = "SELECT
                        blogs.id_blog, blogs.blog_titulo, blogs.blog_des, blogs.blog_tipo as tipo_noticia, tipo.des as blog_tipo,
                        blogs.link1,  blogs.link2,  blogs.link3,  blogs.link4,
                        blogs.img1_url, blogs.img2_url, blogs.img3_url, blogs.img4_url,
                        blogs.img1_name, blogs.img2_name, blogs.img3_name, blogs.img4_name,
                        blogs.date_created
                    FROM
                        blog_admin as blogs
                    inner join blog_data_cat tipo
                        on tipo.id = blogs.blog_tipo
                    WHERE blogs.id_blog = " . $id_blog;
        return $this->db->query($query)->result();
    }
}