<?php

class Article_model extends CI_Model
{
    public function getAllArticle()
    {
        return $this->db->get('tbl_article')->result_array();
    }

    public function addArticle()
    {

        $data = [
            "title" => $this->input->post('title', true),
            "slug" => url_title($this->input->post('title'), 'dash', TRUE), // Generate slug title
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "content" => $this->input->post('content', true)
        ];

        $this->db->insert('tbl_article', $data);
    }

    public function deleteArticle($id)
    {
        $this->db->where('id', $id)->delete('tbl_article');
    }

    public function getArticleById($id)
    {
        return $this->db->get_where('tbl_article', ['id' => $id])->row_array();
    }

    public function editArticle()
    {

        $data = [
            "title" => $this->input->post('title', true),
            "slug" => url_title($this->input->post('title'), 'dash', TRUE), // Generate slug title
            "content" => $this->input->post('content', true),
            "updated_at" => date('Y-m-d H:i:s')
        ];

        $this->db->where('id', $this->input->post('id'))->update('tbl_article', $data);
    }

    public function searchArticle()
    {
        $keyword = $this->input->post('keyword', true);
        return $this->db->like('title', $keyword)->or_like('slug', $keyword)->get('tbl_article')->result_array();
    }
}
