<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/overview') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LOGO</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('admin/overview') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    
    <?php if ($this->session->user_logged->role == 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/usermanagement') ?>">
                <span>Manajemen User</span></a>
        </li>
	<?php endif; ?>
    <!-- Nav Item - Utilities Collapse Menu -->
    <?php if ($this->session->user_logged->role != 'biasa'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/risiko') ?>">
                <span>Manajemen Subklasifikasi</span></a>
        </li>
	<?php endif; ?>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_informasi): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/informasi') ?>">
                <span>Informasi</span></a>
        </li>
	<?php endif; ?>
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_orang): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/orang') ?>">
                <span>Orang</span></a>
        </li>
	<?php endif; ?>
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_fisik): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/fisik') ?>">
                <span>Fisik</span></a>
        </li>
	<?php endif; ?>
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_layanan): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/layanan') ?>">
                <span>Layanan</span></a>
        </li>
	<?php endif; ?>
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_intangible): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/intangible') ?>">
                <span>Intangible</span></a>
        </li>
	<?php endif; ?>
    <?php if ($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_software): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/overview/software') ?>">
                <span>Software</span></a>
        </li>
	<?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->