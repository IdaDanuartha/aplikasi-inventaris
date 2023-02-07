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

<li class="nav-item <?= CURRENT_URL === BASE_URL . '/jenisbarang' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= BASE_URL ?>/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Jenis Barang</span></a>
</li>
    
<li class="nav-item <?= CURRENT_URL === BASE_URL . '/ruangan' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= BASE_URL ?>/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Data Ruangan</span></a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>List Barang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/barang/masuk' ? 'active' : '' ?>" href="buttons.html">Barang Masuk</a>
            <a class="collapse-item <?= CURRENT_URL === BASE_URL . '/barang/keluar' ? 'active' : '' ?>" href="cards.html">Barang Keluar</a>
        </div>
    </div>
</li>

<li class="nav-item <?= CURRENT_URL === BASE_URL . '/pegawai' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= BASE_URL ?>/pegawai">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Data Pegawai</span></a>
</li>

<li class="nav-item <?= CURRENT_URL === BASE_URL . '/laporan' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= BASE_URL ?>/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Laporan</span></a>
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