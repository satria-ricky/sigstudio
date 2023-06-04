<link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
<script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Studio Musik</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Studio</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama Studio</th>
                            <th>Alamat Studio</th>
                            <th class="text-center">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($studio as $us) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $us->nama_studio ?></td>
                                <td><?php echo $us->alamat_studio ?></td>

                                <td class="text-center">

                                    <a href="<?= base_url('Studio/detailStudio/') . $us->id_studio; ?>" class="btn btn-primary " target="_blank"><i class="fas fa-link fa-sm text-white-50"></i> Detail</a>



                                    <a class="btn btn-danger" href="#modal-hapus" onclick="$('#modal-hapus #form_delete').attr('action', 
                '<?= site_url('admin/C_data_studio/Hapus/' . $us->id_studio); ?>')" data-toggle="modal"><i class="fas fa-trash fa-sm text-white-50"></i>
                                        Hapus
                                    </a>


                                    <a href="#modalUpdate" class="btn btn-success" onclick="modalUpdateStudio(<?php echo $us->id_studio ?>)" data-toggle="modal"> <i class="fas fa-edit fa-sm text-white-50"></i> Update</a>
                                </td>
                                </td>
                            </tr>

                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Studio Musik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('admin/C_data_studio/Tambah_studio'); ?>

                <form action="<?php echo base_url('admin/C_data_studio/Tambah_studio'); ?>" method="POST">

                    <div class="mb-3">
                        <label for="basic-url">Nama Studio</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('nama_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Studio" name="nama_st">
                        </div>
                        <?= form_error('nama_st', '<small class="text-danger">', '</small> '); ?>
                    </div>


                    <div class="mb-3">
                        <label for="basic-url">Alamat Studio</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('alamat_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Alamat Studio" name="alamat_st">
                        </div>
                        <?= form_error('alamat_st', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="form-group">

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="basic-url">Latitude</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control <?= (form_error('latitude_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Latitude Studio" name="latitude_st" id="latitudeTambah">
                                    </div>
                                    <?= form_error('latitude_st', '<small class="text-danger">', '</small> '); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="basic-url">Longitude</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control <?= (form_error('longitude_st')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Longitude Studio" name="longitude_st" id="longitudeTambah">
                                    </div>
                                    <?= form_error('longitude_st', '<small class="text-danger">', '</small> '); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="tbn btn-sm btn-focus" onclick="setLocationTambah()"> Gunakan Lokasi saat ini! </button>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-7 mb-3">
                            <label for="basic-url">Harga Sewa</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control <?= (form_error('harga')) ? 'is-invalid' : ''; ?>" placeholder="_ _ _ _ _ _" name="harga">
                            </div>
                            <?= form_error('harga', '<small class="text-danger">', '</small> '); ?>
                        </div>
                        <div class="mb-3 col-5">
                            <label for="basic-url">Tahun di dirikan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?= (form_error('thn_st')) ? 'is-invalid' : ''; ?>" placeholder="_ _ _ _" name="thn_st">
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
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<?php if (validation_errors()) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            title: 'Gagal',
            text: 'Data Studio Gagal Ditambahkan!'
        })
    </script>
<?php endif; ?>

<div class="modal fade " id="modal-hapus">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Yakin akan menghapus data ini?</h5>
            </div>

            <div class="modal-footer justify-content-right">

                <form id="form_delete" action="" method="post">
                    <button type="submit" class="btn  btn-success "><i class="fas fa-check fa-sm text-white-50"></i> Yakin</button>
                    <button type="button" class="btn  btn-danger " data-dismiss="modal"><i class="fas fa-back fa-sm text-white-50"></i> Batal</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Studio Musik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('admin/C_data_studio/Update_studio', 'id="form-update"'); ?>



                <form action="<?php echo base_url('admin/C_data_studio/Update_studio'); ?>">

                    <input type="hidden" value="" id="id_st" name="id_st">
                    <input type="hidden" value="" id="foto_lama_st" name="foto_lama_st">
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
                <button type="button" class="btn btn-primary" onclick="showConfirmUpdateStudio()" data-toggle="modal">Update Data</button>
            </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<div class="modal fade " id="modal-update-studio">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title">Yakin akan mengubah data ini?</h5>
            </div>

            <div class="modal-footer justify-content-right">

                <button type="button" onclick="submitUpdateDataStudio()" class="btn  btn-success "><i class="fas fa-check fa-sm text-white-50"></i> Yakin</button>
                <button type="button" class="btn  btn-danger " data-dismiss="modal"><i class="fas fa-back fa-sm text-white-50"></i> Batal</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>