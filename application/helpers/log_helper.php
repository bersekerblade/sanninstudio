<?php

function is_logged_in()
{
    $ci_library = get_instance();

    if (!$ci_library->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci_library->session->userdata('role_id');
        $menu = $ci_library->uri->segment(1);

        $queryMenu = $ci_library->db->get_where('tbl_user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci_library->db->get_where('tbl_user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci_library = get_instance();

    $ci_library->db->where('role_id', $role_id);
    $ci_library->db->where('menu_id', $menu_id);
    $result = $ci_library->db->get('tbl_user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='cheked'";
    }
}
