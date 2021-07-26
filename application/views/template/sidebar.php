<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <?php if (isset($user['email'])) : ?>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/home') ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Sistem Pakar</div>
        </a>
    <?php else : ?>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Sistem Pakar</div>
        </a>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Dashboard
    </div>
    <!-- Nav Item - Dashboard -->
    <?php if (isset($user['email'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/home') ?>">
                <i class="fas fa-hospital-alt"></i>
                <span>Halaman Utama</span></a>
        </li>
    <?php else : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">
                <i class="fas fa-hospital-alt"></i>
                <span>Halaman Utama</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pengetahuan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url("overview/sistempakar") ?>">Sistem Pakar</a>
                <a class="collapse-item" href="<?= base_url("overview/buahnaga") ?>">Buah Naga</a>
                <a class="collapse-item" href="<?= base_url("overview/hama") ?>">Hama Buah Naga</a>
                <a class="collapse-item" href="<?= base_url("overview/penyakit") ?>">Penyakit Buah Naga</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-tasks"></i>
            <span>Konsultasi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('konsul1') ?>">Hama dan Penyakit </a>
                <a class="collapse-item" href="cards.html">Pemilihan Waktu Panen</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Tentang
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('overview/about') ?>">
            <i class="fas fa-clipboard"></i>
            <span>Tentang Sistem</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php if (isset($user['email'])) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/home/hasil') ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Hasil Diagnosa</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-table"></i>
                <span>Data</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php if ($user['role_id'] == 1) : ?>
                        <a class="collapse-item" href="<?= base_url('admin/home/hamapenyakit') ?>">Hama dan Penyakit</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/gejala') ?>">Gejala</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/solusi') ?>">Solusi</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/pengetahuan') ?>">Pengetahuan</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/user') ?>">User</a>
                    <?php else : ?>
                        <a class="collapse-item" href="<?= base_url('admin/home/hamapenyakit') ?>">Hama dan Penyakit</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/gejala') ?>">Gejala</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/solusi') ?>">Solusi</a>
                        <a class="collapse-item" href="<?= base_url('admin/home/pengetahuan') ?>">Pengetahuan</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    <?php else : ?>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    <?php endif; ?>
</ul>
<!-- End of Sidebar -->