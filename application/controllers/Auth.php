<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Sannin Studio | Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'E-Mail', 'required|trim|valid_email|is_unique[tbl_user.email]');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|max_length[10]|matches[password2]',
            [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!',
                'max_length' => 'Password too long!'
            ]

        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sannin Studio | Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $this->Auth_model->addRegistration();
            $this->session->set_flashdata('alert', 'Register Success');
            redirect('auth');
        }
    }
}
