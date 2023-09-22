<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
        <div class="sidebar-brand-icon">
            <img src="/assets/img/logo-sannin.png" alt="sannin studio" style="height: 50px;">
        </div>
        <!-- <div class="sidebar-brand-text mx-3">can fill with tagline</div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- query menu -->
    <?php

    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `tbl_user_menu`.`id`, `menu`, `dropdown` 
                    FROM `tbl_user_menu` JOIN `tbl_user_access_menu`
                    ON `tbl_user_menu`.`id` = `tbl_user_access_menu`.`menu_id`
                    WHERE `tbl_user_access_menu`.`role_id` = $role_id
                    ORDER BY `tbl_user_access_menu`.`menu_id` ASC
                     ";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>

    <!-- Looping Menu -->
    <?php foreach ($menu as $m) :  ?>
        <div class="sidebar-heading">
            <?php if ($role_id == 1) { ?>
                <?= $m['menu']; ?>
            <?php }; ?>
        </div>


        <?php

        $menuId = $m['id'];
        $isDropdown = $m['dropdown'];
        $querySubMenu = "SELECT * 
                FROM `tbl_user_sub_menu` JOIN `tbl_user_menu`
                ON `tbl_user_sub_menu`.`menu_id` = `tbl_user_menu`.`id`
                WHERE `tbl_user_sub_menu`.`menu_id` = $menuId
                AND `tbl_user_sub_menu`.`is_active` = 1
                 ";

        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <!-- Looping Sub Menu -->
        <?php if ($isDropdown == 0) {
            foreach ($subMenu as $sm) :  ?>
                <!-- Nav Item - Dashboard -->
                <?php if ($page_title == $sm['title']) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>

                    <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span></a>
                    </li>
                    <!-- Divider -->
                    <!-- <hr class="sidebar-divider"> -->
                <?php endforeach;
                ?>


            <?php } else { ?>
                <!-- menu -->

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="far fa-fw fa-id-badge"></i>
                        <span>Menu</span>
                    </a>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Menu:</h6>
                            <?php foreach ($subMenu as $sm) :  ?>

                                <?php if ($page_title == $sm['title']) : ?>
                                    <a class="collapse-item active" href="<?= $sm['url']; ?>">
                                        <i class="<?= $sm['icon']; ?>"></i>
                                        <span><?= $sm['title']; ?></span></a>
                                    </a>
                                <?php else : ?>
                                    <a class="collapse-item" href="<?= $sm['url']; ?>">
                                        <i class="<?= $sm['icon']; ?>"></i>
                                        <span><?= $sm['title']; ?></span></a>
                                    </a>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">
            <?php }; ?>

        <?php endforeach; ?>


        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->