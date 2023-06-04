<!-- Begin Page Content -->
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
<script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-7">
            <h1 class="h3 mb-0 text-gray-800">Data Ruangan</h1>
        </div>
        <div class="col-5 ">
            <a href="#" class=" float-right mr-2 btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#ruangan"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Ruangan</a>
        </div>



    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan</th>
                            <th class="text-center">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                    <?php $no = 1; ?>
                        <?php foreach ($ruangan as $r) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $r->nama_ruangan; ?></td>
                                <td class="text-center">
                               

                                    <a class="btn btn-danger" href="<?= site_url('pengelola/C_ruangan/Hapus/' . $r->id_ruangan); ?>" onclick="return confirm('Are you sure?')" ><i class="fas fa-trash fa-sm text-white-50"></i>
                                        Hapus
                                    </a>


                                    <a href="#modalUpdateRuagan" class="btn btn-success" onclick="modalUpdateRuangan(<?php echo $r->id_ruangan ?>)" data-toggle="modal"> <i class="fas fa-edit fa-sm text-white-50"></i> Update</a>
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
<div class="modal fade" id="jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url('admin/C_ruangan/Tambah_ruangan'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="basic-url">Nama Pelanggan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Pelanggan" name="nama">
                        </div>
                        <?= form_error('nama', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Ruangan</label>
                        <select class="form-control mb-3 <?= (form_error('ruangan')) ? 'is-invalid' : ''; ?>" name="ruangan" id="">
                            <option value="0">Pilih</option>
                            <option value="1">Pengelola Studio</option>
                            <option value="2">Admin</option>
                        </select>
                        <?= form_error('ruangan', '<small class="text-danger">', '</small> '); ?>
                    </div>
                    <div class=" mb-3">
                        <label for="basic-url">Tanggal</label>
                        <div class="input-group mb-1">
                            <input type="date" class="form-control <?= (form_error('tgl')) ? 'is-invalid' : ''; ?>" name="tgl">
                        </div>
                        <?= form_error('tgl', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="basic-url">Jam Mulai</label>
                            <div class="input-group mb-1">
                                <input type="time" class="form-control <?= (form_error('mulai')) ? 'is-invalid' : ''; ?>" name="mulai">

                            </div>
                            <?= form_error('mulai', '<small class="text-danger">', '</small> '); ?>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="basic-url">Jam Berakhir</label>
                            <div class="input-group mb-1">
                                <input type="time" class="form-control <?= (form_error('akhir')) ? 'is-invalid' : ''; ?>" name="akhir">

                            </div>
                            <?= form_error('akhir', '<small class="text-danger">', '</small> '); ?>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>

        </div>
    </div>
</div>

\

<!-- Modal -->
<div class="modal fade" id="ruangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url('pengelola/C_ruangan/Tambah_ruangan'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="basic-url">Nama Ruangan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('namaR')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Ruangan" name="namaR">
                        </div>
                        <?= form_error('namaR', '<small class="text-danger">', '</small> '); ?>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="modalUpdateRuagan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url('pengelola/C_ruangan/Update_ruangan'); ?>" method="POST" onsubmit="return confirm('Yakin di update?');">
                <input type="hidden" name="idR" id="idR">
                    <div class="mb-3">
                        <label for="basic-url">Nama Ruangan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= (form_error('namaR')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Ruangan" name="namaR" id="namaR">
                        </div>
                        <?= form_error('namaR', '<small class="text-danger">', '</small> '); ?>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
            </form>

        </div>
    </div>
</div>


<?php if (validation_errors()) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            title: 'Gagal',
            text: 'Data User Gagal Ditambahkan!'
        })
    </script>
<?php endif; ?>