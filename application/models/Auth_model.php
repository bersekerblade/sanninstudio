<?php

class Auth_model extends CI_Model
{

    public function addRegistration()
    {



        $data = [
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "image" => 'default.jpg',
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => time()
        ];

        $this->db->insert('tbl_user', $data);
    }
}
