<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Article_model');
    }

    public function index()
    {
        $data['page_title'] = 'Berita Terbaru';
        $data['tbl_article'] = $this->db->get('tbl_article')->result_array();

        //load
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://sanninstudio.test/portal/index';
        $config['total_rows'] = $this->Article_model->countAllArticleByPortal();
        $config['per_page'] = 5;
        $config['num_links'] = 5;

        //styling pagination
        $config['full_tag_open'] = '<nav><ul class="pagination" style=" justify-content: center;">';
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
        $data['tbl_article'] = $this->Article_model->getArticleByPortal($config['per_page'], $data['start']);


        $this->load->view('portal/portal_header');
        $this->load->view('portal/index', $data);
        $this->load->view('portal/portal_side');
        $this->load->view('portal/portal_footer');
    }

    public function detail($id)
    {
        $data['page_title'] = 'Berita Terbaru';
        $data['tbl_article'] = $this->Article_model->getArticleById($id);

        $this->load->view('portal/portal_header');
        $this->load->view('portal/detail_article', $data);
        $this->load->view('portal/portal_side');
        $this->load->view('portal/portal_footer');
    }

    public function staff()
    {
        $data['page_title'] = 'Staff';

        $this->load->view('portal/portal_header');
        $this->load->view('portal/staff_profile', $data);
        $this->load->view('portal/portal_side');
        $this->load->view('portal/portal_footer');
    }
}
