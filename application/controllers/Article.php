<?php

class Article extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['page_title'] = 'Article';
        $data['tbl_article'] = $this->Article_model->getAllArticle();
        if ($this->input->post('keyword')) {
            $data['tbl_article'] = $this->Article_model->searchArticle();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('article/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['page_title'] = 'Add Article';
        $this->form_validation->set_rules('title', 'Title Article', 'required');
        $this->form_validation->set_rules('content', 'Content Article', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('article/add');
            $this->load->view('templates/footer');
        } else {
            $this->Article_model->addArticle();
            $this->session->set_flashdata('alert', 'Data Success Added');

            redirect('article');
        }
    }

    public function delete($id)
    {
        $this->Article_model->deleteArticle($id);
        $this->session->set_flashdata('alert', 'Delete');

        redirect('article');
    }

    public function detail($id)
    {
        $data['page_title'] = 'Detail Article';
        $data['tbl_article'] = $this->Article_model->getArticleById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('article/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Article';
        $data['tbl_article'] = $this->Article_model->getArticleById($id);
        $this->form_validation->set_rules('title', 'Title Article', 'required');
        $this->form_validation->set_rules('content', 'Content Article', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('article/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Article_model->editArticle();
            $this->session->set_flashdata('alert', 'Data Success Edited');

            redirect('article');
        }
    }
}
