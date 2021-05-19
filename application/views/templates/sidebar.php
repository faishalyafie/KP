<!-- Sidebar -->
<ul class="navbar-nav merah sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DATA MANAGEMEN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query Menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "  SELECT `user_menu`.`id`, `menu`
                      FROM `user_menu` JOIN `user_aksesmenu` 
                        ON `user_menu`.`id` = `user_aksesmenu` . `menu_id`
                     WHERE `user_aksesmenu` . `role_id`= $role_id
                  ORDER BY `user_aksesmenu` . `menu_id` ASC
                ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Query Menu -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- Sub Menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT * FROM `user_submenu`
                             WHERE `menu_id` = $menuId 
                             AND `is_active` = 1";
        $Smenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($Smenu as $sm) : ?>
            <!-- Nav Item - Dashboard -->
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

        <?php endforeach;  ?>


        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
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