<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function addMenu()
    {

        $data = [
            "menu" => $this->input->post('menu', true),
            "dropdown" => $this->input->post('dropdown', true)
        ];

        $this->db->insert('tbl_user_menu', $data);
    }

    public function addSubmenu()
    {

        $data = [
            "title" => $this->input->post('title', true),
            "menu_id" => $this->input->post('menu_id', true),
            "url" => $this->input->post('url', true),
            "icon" => $this->input->post('icon', true),
            "is_active" => $this->input->post('is_active', true)
        ];


        $this->db->insert('tbl_user_sub_menu', $data);
    }

    public function getSubMenu()
    {

        $query = "  SELECT `tbl_user_sub_menu`. * ,`tbl_user_menu` . `menu`
                    FROM `tbl_user_sub_menu` JOIN `tbl_user_menu`
                    ON  `tbl_user_sub_menu` . `menu_id` = `tbl_user_menu` . `id`
        ";

        return $this->db->query($query)->result_array();
    }
}
