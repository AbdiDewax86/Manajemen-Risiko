<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <!--Boostrap jQuery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="MR_admin_index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LOGO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="MR_admin_index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_user.html">
                    <span>Manajemen User</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_subklasifikasi.html">
                    <span>Manajemen Subklasifikasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Informasi</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Orang</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Fisik</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Layanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Intangible</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="MR_admin_informasi.html">
                    <span>Software</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin McAdmin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Risiko Baru</h1>
                    <p class="mb-4">
                        Tambah data baru jika suatu risiko muncul. Risiko dikelompokkan ke dalam klasifikasi dan subklasifikasi.
                    </p>

                    <!-- Content Row -->
                    
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Risiko Baru</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <form class="user">
                                <h4>Klasifikasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Klasifikasi</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Informasi</option>
                                            <option>Orang</option>
                                            <option>Fisik</option>
                                            <option>Layanan</option>
                                            <option>Intangible</option>
                                            <option>Software</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Subklasifikasi</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="text" class="form-control" placeholder="Subklasifkasi..."> 
                                    </div>
                                </div>
                                <h4>Dampak</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Pengancam</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Risiko Bawaan</h4>
                                <h5>Kerentanan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h5>Paparan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Kontrol</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <h4>Risiko Sisa</h4>
                                <h5>Kerentanan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h5>Paparan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <select class="form-control">
                                            <option>Very High - 5</option>
                                            <option>High - 4</option>
                                            <option>Medium - 3</option>
                                            <option>Low - 2</option>
                                            <option>Very Low - 1</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Mitigasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Kontrol</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">PIC</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Target</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <a href="MR_admin_index.html" class="btn btn-primary btn-user btn-block">
                                    Tambah Data
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>