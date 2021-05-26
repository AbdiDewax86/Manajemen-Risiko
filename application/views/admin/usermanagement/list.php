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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar User</h1>
                    </div>

                    <!-- Content Start -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Nama Lengkap</th>
                                            <th>No. Telepon</th>
                                            <th>Peran</th>
                                            <th>Akses Informasi</th>
                                            <th>Akses Orang</th>
                                            <th>Akses Fisik</th>
                                            <th>Akses Layanan</th>
                                            <th>Akses Intangible</th>
                                            <th>Akses Software</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user): ?>
									    <tr>
									    	<td width="150">
									    		<?php echo $user->user_id ?>
									    	</td>

									    	<td>
									    		<?php echo $user->username ?>
									    	</td>

									    	<td>
									    		<?php echo $user->email ?>
									    	</td>

                                            <td>
									    		<?php echo $user->fullname ?>
									    	</td>

									    	<td>
									    		<?php echo $user->phone ?>
									    	</td>

									    	<td>
									    		<?php echo $user->role ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_informasi ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_orang ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_fisik ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_layanan ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_intangible ?>
									    	</td>

									    	<td width="150">
									    		<?php echo $user->akses_software ?>
									    	</td>

                                            <td>
									    		<a href="<?php echo site_url('admin/usermanagement/edit/'.$user->user_id) ?>"
									    		 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
									    		<a onclick="deleteConfirm('<?php echo site_url('admin/usermanagement/delete/'.$user->user_id) ?>')"
									    		 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
									    	</td>
									    </tr>
									    <?php endforeach; ?>
                                    </tbody>
                                </table>
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
    <script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>

</body>

</html>