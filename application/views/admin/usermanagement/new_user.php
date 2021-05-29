<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("admin/_partials/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah User Baru</h1>
                    <p class="mb-4">
                        Beri akses sistem kepada pengguna baru dengan membuat user baru
                    </p>

                    <!-- Content Start -->
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah User Baru</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')): ?>
				                <div class="alert alert-success" role="alert">
				                	<?php echo $this->session->flashdata('success'); ?>
				                </div>
				            <?php endif; ?>

                            <form class="user" action="<?php echo site_url('admin/usermanagement/add') ?>" method="post" enctype="multipart/form-data">
                                <h4>Data User</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Username</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" 
                                        type="text" name="username" placeholder="Username..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">E-mail</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" 
                                        type="email" name="email" placeholder="E-mail..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Password</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" 
                                        type="password" name="password" placeholder="Password..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Confirm Password</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('confirm_password') ? 'is-invalid':'' ?>"
                                        type="password" name="confirm_password" class="form-control" placeholder="Confirm Password..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Peran User</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <select class="form-control <?php echo form_error('role') ? 'is-invalid':'' ?>" 
                                        name="role">
                                            <option>Biasa</option>
                                            <option>Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Profil User</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nama Lengkap</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('fullname') ? 'is-invalid':'' ?>" 
                                        type="text" name="fullname" placeholder="Nama Lengkap..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nomor Telepon</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" 
                                        type="text" name="phone" placeholder="Username...">  
                                    </div>
                                </div>
                                <h4>Akses Klasifikasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Informasi</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_informasi') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_informasi" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_informasi') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_informasi" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Orang</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_orang') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_orang" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_orang') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_orang" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Fisik</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_fisik') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_fisik" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_fisik') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_fisik" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Layanan</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_layanan') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_layanan" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_layanan') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_layanan" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Intangible</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_intangible') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_intangible" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_intangible') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_intangible" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Software</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input <?php echo form_error('akses_software') ? 'is-invalid':'' ?>" 
                                        type="hidden" name="akses_software" value="0" id="flexCheckDefault">
                                        <input class="form-check-input <?php echo form_error('akses_software') ? 'is-invalid':'' ?>" 
                                        type="checkbox" name="akses_software" value="1" id="flexCheckDefault">
                                    </div>
                                </div>
                                <input class="btn btn-primary btn-user btn-block" type="submit" value="Save"/>
                            </form>
                        </div>
                    </div>
                    <!-- Content End -->

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- JS Scripts -->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>