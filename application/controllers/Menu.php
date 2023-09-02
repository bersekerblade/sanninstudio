<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['page_title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('tbl_user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        //add menu togle
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->addMenu();
            $this->session->set_flashdata('alert', 'Menu Success Added');

            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['page_title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('tbl_user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Submenu Name', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu Name', 'required');
        $this->form_validation->set_rules('url', 'Submenu URL', 'required');
        $this->form_validation->set_rules('icon', 'Submenu Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->addSubmenu();

            $this->session->set_flashdata('alert', 'Submenu Success Added');

            redirect('menu/submenu');
        }
    }
}
