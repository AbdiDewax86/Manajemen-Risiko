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
                        <h1 class="h3 mb-0 text-gray-800">New Form</h1>
                    </div>

                    <!-- Content Start -->
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Risiko Baru</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                            <?php if ($this->session->flashdata('success')): ?>
				                <div class="alert alert-success" role="alert">
				                	<?php echo $this->session->flashdata('success'); ?>
				                </div>
				            <?php endif; ?>

                            <form class="user" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nomor ID</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control" name="id" value="<?php echo $risiko->id ?>" readonly> 
                                    </div>
                                </div>
                                <h4>Klasifikasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Klasifikasi</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('klasifikasi_id') ? 'is-invalid':'' ?>" 
                                        type="number" name="klasifikasi_id" placeholder="1-6..." value="<?php echo $risiko->klasifikasi_id ?>"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Subklasifikasi</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('subklasifikasi') ? 'is-invalid':'' ?>" 
                                        type="text" name="subklasifikasi" placeholder="Subklasifikasi..." value="<?php echo $risiko->subklasifikasi ?>"> 
                                    </div>
                                </div>
                                <h4>Dampak</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('dampak_keterangan') ? 'is-invalid':'' ?>"
                                        name="dampak_keterangan" rows="4"><?php echo $risiko->dampak_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('dampak_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="dampak_nilai" placeholder="1-5..." value="<?php echo $risiko->dampak_nilai ?>"> 
                                    </div>
                                </div>
                                <h4>Pengancam</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('pengancam_keterangan') ? 'is-invalid':'' ?>"
                                        name="pengancam_keterangan" rows="4"><?php echo $risiko->pengancam_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('pengancam_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="pengancam_nilai" placeholder="1-5..." value="<?php echo $risiko->pengancam_nilai ?>"> 
                                    </div>
                                </div>
                                <h4>Risiko Bawaan</h4>
                                <h5>Kerentanan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('bawaan_kerentanan_keterangan') ? 'is-invalid':'' ?>"
                                        name="bawaan_kerentanan_keterangan" rows="4"><?php echo $risiko->bawaan_kerentanan_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('bawaan_kerentanan_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="bawaan_kerentanan_nilai" placeholder="1-5..." value="<?php echo $risiko->bawaan_kerentanan_nilai ?>"> 
                                    </div>
                                </div>
                                <h5>Paparan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('bawaan_paparan_keterangan') ? 'is-invalid':'' ?>"
                                        name="bawaan_paparan_keterangan" rows="4"><?php echo $risiko->bawaan_paparan_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('bawaan_paparan_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="bawaan_paparan_nilai" placeholder="1-5..." value="<?php echo $risiko->bawaan_paparan_nilai ?>"> 
                                    </div>
                                </div>
                                <h4>Kontrol</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('kontrol_keterangan') ? 'is-invalid':'' ?>"
                                        name="kontrol_keterangan" rows="4"><?php echo $risiko->kontrol_keterangan ?></textarea>
                                    </div>
                                </div>
                                <h4>Risiko Sisa</h4>
                                <h5>Kerentanan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('sisa_kerentanan_keterangan') ? 'is-invalid':'' ?>"
                                        name="sisa_kerentanan_keterangan" rows="4"><?php echo $risiko->sisa_kerentanan_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('sisa_kerentanan_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="sisa_kerentanan_nilai" placeholder="1-5..." value="<?php echo $risiko->sisa_kerentanan_nilai ?>"> 
                                    </div>
                                </div>
                                <h5>Paparan</h5>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Keterangan</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('sisa_paparan_keterangan') ? 'is-invalid':'' ?>"
                                        name="sisa_paparan_keterangan" rows="4"><?php echo $risiko->sisa_paparan_keterangan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Nilai</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="form-control <?php echo form_error('sisa_paparan_nilai') ? 'is-invalid':'' ?>" 
                                        type="number" name="sisa_paparan_nilai" placeholder="1-5..." value="<?php echo $risiko->sisa_paparan_nilai ?>"> 
                                    </div>
                                </div>
                                <h4>Mitigasi</h4>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Kontrol</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('mitigasi_kontrol') ? 'is-invalid':'' ?>"
                                        name="mitigasi_kontrol" rows="4"><?php echo $risiko->mitigasi_kontrol ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">PIC</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('mitigasi_pic') ? 'is-invalid':'' ?>"
                                        name="mitigasi_pic" rows="4"><?php echo $risiko->mitigasi_pic ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 col-12">
                                        <p class="text-right align-middle">Target</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <textarea class="form-control <?php echo form_error('mitigasi_target') ? 'is-invalid':'' ?>"
                                        name="mitigasi_target" rows="4"><?php echo $risiko->mitigasi_target ?></textarea>
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