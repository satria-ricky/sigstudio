<link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
<script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Peralatan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Peralatan</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alat</th>
                            <th>Jenis Alat</th>
                            <th class="text-center">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($alat as $at) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $at->nama_alat; ?></td>
                                <td><?= $at->jenis_alat; ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary "><i class="fas fa-link fa-sm text-white-50"></i> Detail</a>

                                    <a href="#" class="btn btn-danger  mx-2"> <i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a>

                                    <a href="" class="btn btn-success"> <i class="fas fa-edit fa-sm text-white-50"></i> Update</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Peralatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('pengelola/C_data_peralatan/Tambah_alat'); ?>

                <form action="<?php echo base_url('pengelola/C_data_peralatan/Tambah_alat'); ?>" method="POST">

                    <div class="mb-3">
                        <label for="basic-url">Nama Alat</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('nama_at')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Alat" name="nama_at">
                        </div>
                        <?= form_error('nama_at', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Jenis Alat</label>
                        <select class="form-control mb-3 <?= (form_error('jenis_at')) ? 'is-invalid' : ''; ?>" name="jenis_at" id="">
                            <option value="0">Pilih</option>
                            <option value="Pukul">Pukul</option>
                            <option value="Petik">Petik</option>
                        </select>
                        <?= form_error('jenis_at', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Kondisi Alat</label>
                        <select class="form-control mb-3 <?= (form_error('kondisi_at')) ? 'is-invalid' : ''; ?>" name="kondisi_at" id="">
                            <option value="0">Pilih</option>
                            <option value="Pukul">Baik</option>
                            <option value="Petik">Rusak</option>
                        </select>
                        <?= form_error('kondisi_at', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <label for="basic-url">Foto</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input <?= (form_error('gambar')) ? 'is-invalid' : ''; ?>" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto Alat</label>
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
            text: 'Data Alat Gagal Ditambahkan!'
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('berhasil_tambah_alat')) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            title: 'Berhasil',
            text: 'Berhasil Tambah Alat Baru'
        })
    </script>
<?php endif;  ?>