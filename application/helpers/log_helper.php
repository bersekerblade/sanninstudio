<?php

function is_logged_in()
{
    $ci_library = get_instance();

    if (!$ci_library->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci_library->session->userdata('role_id');
        $menu = $ci_library->uri->segment(1);
        // var_dump($menu);
        // die;

        // cek parent menu
        $menu_id = null;
        $queryMenu = $ci_library->db->get_where('tbl_user_menu', ['menu' => $menu])->row_array();
        if ($queryMenu) { // parent menu ketemu
            $menu_id = $queryMenu['id'];
        } else { // coba cari di submenu
            $querySubMenu = $ci_library->db->get_where('tbl_user_sub_menu', ['url' => $menu])->row_array();

            if ($querySubMenu) $menu_id = $querySubMenu['menu_id'];
        }

        if (!is_null($menu_id)) {
            $userAccess = $ci_library->db->get_where('tbl_user_access_menu', [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ]);

            if ($userAccess->num_rows() < 1) {
                redirect('auth/blocked');
            }
        } else {
            // jika menu tidak ketemu di mana-mana
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
