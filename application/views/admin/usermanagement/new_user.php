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
                            <form class="user">
                                <h4>Data User</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Username</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="text" class="form-control" placeholder="Username..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">E-mail</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="email" class="form-control" placeholder="E-mail..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Password</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="password" class="form-control" placeholder="Password..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Confirm Password</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="password" class="form-control" placeholder="Confirm Password..."> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Jenis User</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <select class="form-control">
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
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nomor Telepon</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="email" class="form-control" placeholder="Nomor Telepon"> 
                                    </div>
                                </div>
                                <h4>Akses Klasifikasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Informasi</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Orang</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Fisik</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Layanan</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Intangible</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Software</p>
                                    </div>
                                    <div class="col-lg-6 col-12 pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div>
                                <a href="MR_admin_index.html" class="btn btn-primary btn-user btn-block">
                                    Buat User
                                </a>
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