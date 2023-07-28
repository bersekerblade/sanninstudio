<?php

class Auth_model extends CI_Model
{

    public function addRegistration()
    {

        $data = [
            "name" => htmlspecialchars($this->input->post('name', true)),
            "email" => $this->input->post('email', true),
            "image" => 'default.jpg',
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => time()
        ];

        $this->db->insert('tbl_user', $data);
    }
}
