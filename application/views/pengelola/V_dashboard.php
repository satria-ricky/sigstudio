<!-- Begin Page Content -->
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
                        <div class="mt-3 float-right"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Edit Profile</a></div>
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