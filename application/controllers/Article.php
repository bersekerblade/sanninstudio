<?php

class Article extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Article_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['page_title'] = 'Article';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        //load
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://sanninstudio.test/article/index';
        $config['total_rows'] = $this->Article_model->countAllArticle();
        $config['per_page'] = 4;
        $config['num_links'] = 5;

        //styling pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tbl_article'] = $this->Article_model->getArticleByPage($config['per_page'], $data['start']);

        if ($this->input->get_post('keyword')) {
            $data['tbl_article'] = $this->Article_model->searchArticle();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('article/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['page_title'] = 'Article';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['page_title'] = 'Add Article';
        $this->form_validation->set_rules('title', 'Title Article', 'required');
        $this->form_validation->set_rules('content', 'Content Article', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
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

    // public function save_base64_image()
    // {
    //     $image_base64 = $this->input->post('content'); // Gantilah 'image_base64' dengan nama input yang sesuai
    //     $decoded_image = base64_decode($image_base64);

    //     // Simpan gambar dalam folder assets atau tempat yang Anda inginkan
    //     $image_filename = uniqid() . '.png'; // Nama file gambar yang dihasilkan secara acak
    //     $image_path = './assets/img/article/' . $image_filename; // Sesuaikan dengan path folder penyimpanan gambar

    //     file_put_contents($image_path, $decoded_image);

    //     // Kembalikan URL gambar yang diunggah dalam respons JSON
    //     $image_url = base_url('assets/img/article/' . $image_filename);
    //     echo json_encode(['url' => $image_url]);
    // }
}
