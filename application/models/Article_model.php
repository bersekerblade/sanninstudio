<?php

class Article_model extends CI_Model
{
    public function getAllArticle()
    {
        return $this->db->get('tbl_article')->result_array();
    }
}
