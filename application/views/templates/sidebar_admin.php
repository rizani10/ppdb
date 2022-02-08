<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Interface
        </div>
        <!-- Nav Item - Dashboard -->
        <?php if ($title == 'Dashboard Admin') : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link pb-1" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            </li>
            </li>

            <?php if ($title == 'Profil') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-user-alt"></i>
                    <span>Profile</span>
                </a>
                </li>
                </li>

            <div class="sidebar-heading">
                Menu Admin
            </div>

            <?php if ($title == 'Daftar Siswa') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link " href="<?= base_url('admin/datasiswa'); ?>">
                <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Daftar Siswa</span>
                </a>
                </li>
                </li>

            <?php if ($title == 'Data Gallery') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-1" href="<?= base_url('admin/gallery'); ?>">
                <i class="far fa-fw fa-images"></i>
                    <span>Data Gallery</span>
                </a>
                </li>
                </li>



                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutAdmin">
                        <i class="fas fa-fw fa-sign-out-alt "></i>
                        Logout
                    </a>
                </li>
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

    </ul>