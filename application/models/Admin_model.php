<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function addRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('tbl_user_role', $data);
    }

    public function deleteRole($id)
    {
        $this->db->where('id', $id)->delete('tbl_user_role');
    }

    public function getRoleById($id)
    {
        $this->db->get_where('tbl_user_role', ['id' => $id])->row_array();
    }
}

/* End of file ModelName.php */
