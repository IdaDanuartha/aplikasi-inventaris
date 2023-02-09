<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL ?>/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Inventaris</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading mt-2">
        <?= isset($_SESSION['petugas']) ? 'Administrator' : 'Pegawai' ?>
    </div>

    <li class="nav-item <?= CURRENT_URL === BASE_URL . '/' || CURRENT_URL === BASE_URL . '/dashboard' || CURRENT_URL === BASE_URL . '/dashboard/index' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= BASE_URL ?>/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <?php if (isset($_SESSION['petugas'])) : ?>
        <li class="nav-item <?= CURRENT_URL === BASE_URL . '/jenisbarang' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= BASE_URL ?>/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Inventaris</span>
            </a>
        </li>

        <li class="nav-item <?= CURRENT_URL === BASE_URL . '/jenisbarang' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= BASE_URL ?>/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Peminjaman</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/jenis' ? 'active' : '' ?>" href="<?= BASE_URL ?>/jenis">Jenis Barang</a>
                    <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/ruang' ? 'active' : '' ?>" href="<?= BASE_URL ?>/ruang">Ruang</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Pengguna</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/pegawai' ? 'active' : '' ?>" href="<?= BASE_URL ?>/pegawai">Pegawai</a>
                    <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/petugas' ? 'active' : '' ?>" href="<?= BASE_URL ?>/petugas">Petugas</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= CURRENT_URL === BASE_URL . '/profile' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= BASE_URL ?>/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php require_once "navbar.php" ?>
        <!-- End of Topbar -->