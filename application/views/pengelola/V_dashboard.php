<!-- Begin Page Content -->
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
<script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
<div class="container-fluid">

    <?php foreach ($studio as $st) : ?>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800"><?= $st->nama_studio; ?></h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->


        <!-- Earnings (Monthly) Card Example -->
        <div class="row">
            <div class="col-xl-5 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-6">
                                <div class="h5  font-weight-bold text-gray-800">Jumlah Ruangan</div>
                                <div class="h5  font-weight-bold text-gray-800">Harga Sewa</div>
                                <div class="h5  font-weight-bold text-gray-800">Alamat</div>

                                <div class="h5  font-weight-bold text-gray-800">Tahun Berdiri</div>
                            </div>
                            <div class="col ">
                                <div class="h5 text-gray-800">: <?= $total_ruangan ?> Ruangan</div>
                                <div class="h5   text-gray-800">: <?= $st->harga_sewa; ?></div>
                                <div class="h5   text-gray-800">: <?= $st->alamat_studio; ?></div>
                                <div class="h5  text-gray-800">: <?= $st->tahun_didirikan; ?></div>


                            </div>

                        </div>
                        <div class="mt-3 float-right"><a href="#modalUpdate" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="modalUpdate(<?= $id_user ?>)" data-toggle="modal"><i class="fas fa-download fa-sm text-white-50"></i> Edit Profile</a></div>
                    </div>

                </div>
            </div>

            <div class="col-5">
                <img src="" alt="">
            </div>
        </div>

    <?php endforeach; ?>

</div>




</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('pengelola/C_dashboard/Update_user','id="form-update"'); ?>


                <form action="<?php echo base_url('pengelola/C_dashboard/Update_user'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="basic-url">Nama</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Lengkap" name="nama" id="nama_lengkap">
                        </div>
                        <?= form_error('nama', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">username</label>
                        <div class="input-group mb-1">
                            <input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan username" name="username" id="username" readonly>
                        </div>
                        <?= form_error('username', '<small class="text-danger">', '</small> '); ?>
                    </div>
                    <div class="mb-3">
                        <label for="basic-url">password</label>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan password" name="password" id="password">

                        </div>
                        <?= form_error('password', '<small class="text-danger">', '</small> '); ?>
                    </div>
                    <input type="hidden" id="id_user" name="id_user">
                    <input type="hidden" value="" id="id_st" name="id_st">
                    <input type="hidden" value="" id="foto_lama_st" name="foto_lama_st">
                    <hr>
                    <div class="mb-3">
                        <label for="basic-url">Nama Studio</label>
                        <div class="input-group mb-3">
                            <input id="nama_st" type="text" class="form-control <?= (form_error('nama_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Studio" name="nama_st">
                        </div>
                        <?= form_error('nama_st', '<small class="text-danger">', '</small> '); ?>
                    </div>


                    <div class="mb-3">
                        <label for="basic-url">Alamat Studio</label>
                        <div class="input-group mb-3">
                            <input id="alamat_st" type="text" class="form-control <?= (form_error('alamat_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Alamat Studio" name="alamat_st">
                        </div>
                        <?= form_error('alamat_st', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="form-group">

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="basic-url">Latitude</label>
                                    <div class="input-group mb-3">
                                        <input id="latitude_st" type="text" class="form-control <?= (form_error('latitude_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Latitude Studio" name="latitude_st">
                                    </div>
                                    <?= form_error('latitude_st', '<small class="text-danger">', '</small> '); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="basic-url">Longitude</label>
                                    <div class="input-group mb-3">
                                        <input id="longitude_st" type="text" class="form-control <?= (form_error('longitude_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Longitude Studio" name="longitude_st">
                                    </div>
                                    <?= form_error('longitude_st', '<small class="text-danger">', '</small> '); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="tbn btn-sm btn-focus" onclick="setLocationUpdate()"> Gunakan Lokasi saat ini! </button>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-7 mb-3">
                            <label for="basic-url">Harga Sewa</label>
                            <div class="input-group mb-3">
                                <input id="harga_st" type="number" class="form-control <?= (form_error('harga')) ? 'is-invalid' : ''; ?>" placeholder="_ _ _ _ _ _" name="harga">
                            </div>
                            <?= form_error('harga', '<small class="text-danger">', '</small> '); ?>
                        </div>
                        <div class="mb-3 col-5">
                            <label for="basic-url">Tahun di dirikan</label>
                            <div class="input-group mb-3">
                                <input id="thn_st" type="text" class="form-control <?= (form_error('thn_st')) ? 'is-invalid' : ''; ?>" placeholder="_ _ _ _" name="thn_st">
                            </div>
                            <?= form_error('thn_st', '<small class="text-danger">', '</small> '); ?>
                        </div>
                    </div>


                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input <?= (form_error('gambar')) ? 'is-invalid' : ''; ?>" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto Studio</label>
                        <?= form_error('gambar', '<small class="text-danger">', '</small> '); ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="button" onclick="showConfirmUpdate()" data-toggle="modal" class="btn btn-primary">Update Data</button>
            </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>



<div class="modal fade " id="modal-update">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Yakin akan mengubah data ini?</h5>
            </div>

            <div class="modal-footer justify-content-right">

                <button type="button" onclick="submitUpdateData()" class="btn  btn-success "><i class="fas fa-check fa-sm text-white-50"></i> Yakin</button>
                <button type="button" class="btn  btn-danger " data-dismiss="modal"><i class="fas fa-back fa-sm text-white-50"></i> Batal</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>