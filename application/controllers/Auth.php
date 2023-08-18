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

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sannin Studio | Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

        //if user already exist
        if ($user) {
            //if user account already activated
            if ($user['is_active'] == 1) {
                //password check match or not
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'password' => $user['password']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('alert', 'Password not correct');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('alert', 'Email is not activated');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('alert', 'Email is not registered');
            redirect('auth');
        }
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

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('alert', 'You have been logout');
        redirect('auth');
    }
}
