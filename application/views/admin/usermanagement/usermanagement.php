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
                    <h1 class="h3 mb-2 text-gray-800">Manajemen User</h1>
                    <p class="mb-4">
                        Fitur Khusus Admin. Tambah User baru, 
                        ubah data user, dan hapus user.
                    </p>

                    <!-- Content Start -->
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <img>
                                        
                                    </img>
                                    <a href="<?php echo site_url("admin/usermanagement/new_user")?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-block py-3">
                                        Tambah User Baru
                                    </a>
                                </div>
                                    <div class="topbar-divider d-none d-sm-block"></div>
                                <div class="col-md-6 col-12">
                                    <img>

                                    </img>
                                    <a href="<?php echo site_url("admin/usermanagement/list")?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-block py-3">
                                        Kelola Data User
                                    </a>
                                </div>
                            </div>
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