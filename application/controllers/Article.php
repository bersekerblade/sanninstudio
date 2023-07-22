<?php

class Article extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
    }

    public function index()
    {
        $data['title'] = 'Article';
        $data['tbl_article'] = $this->Article_model->getAllArticle();
        $this->load->view('templates/header', $data);
        $this->load->view('article/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Article';
        $this->load->view('templates/header', $data);
        $this->load->view('article/add');
        $this->load->view('templates/footer');
    }
}
