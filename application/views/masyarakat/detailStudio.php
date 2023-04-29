<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content container">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="navbar-brand ml-3"> <b> SIG Studio Musik</b></div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item  mx-1 pt-2">
                            <!-- Topbar Search -->
                            <!-- <form class="d-none d-sm-inline-block form-inline  ml-md-3  my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> -->

                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="pt-2">
                            <a href="<?php echo base_url('C_login') ?>" class="btn btn-primary ">Masuk</a>
                        </li>

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="<?php //echo base_url('assets/dashboardTemp/'); 
                                                                                ?>img/undraw_profile.svg">
                            </a> -->
                        <!-- Dropdown - User Information -->
                        <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Dashboard
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DATA DETAIL STUDIO -->
                    <div class="row">
                        <div class="col-xl mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">

                                    <div class="row">

                                        <h1 class="ml-2">
                                            <center>
                                                <u>
                                                    <?= $data_studio['nama_studio'] ?>
                                                </u>
                                            </center>
                                        </h1>

                                    </div>

                                    <div class="row">
                                        <div class="card">
                                            <img src="<?= base_url('assets/foto_studio/') . $data_studio['foto_studio']; ?>" class="img-fluid ml-2" alt="foto studio">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row no-gutters">


                                        <div class="col-4">
                                            <div class="h5  font-weight-bold text-gray-800">Jumlah Ruangan</div>
                                            <div class="h5  font-weight-bold text-gray-800">Harga Sewa</div>
                                            <div class="h5  font-weight-bold text-gray-800">Alamat</div>

                                            <div class="h5  font-weight-bold text-gray-800">Tahun Berdiri</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="h5 text-gray-800">: <?= $data_total_ruangan ?> Ruangan</div>
                                            <div class="h5   text-gray-800">: <?= $data_studio['harga_sewa'] ?></div>
                                            <div class="h5   text-gray-800">: <?= $data_studio['alamat_studio'] ?> </div>
                                            <div class="h5  text-gray-800">: <?= $data_studio['tahun_didirikan'] ?> </div>


                                        </div>

                                    </div>
                                    <div class="mt-3 float-right">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary"><i class="fas fa-calendar fa-sm text-white-50"></i> Lihat Jadwal</a> <br>
                                        <a href="#" class="btn btn-sm btn-success mt-2"><i class="fas fa-map fa-sm text-white-50"></i> Lihat Rute</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- DATA PERALATAN -->
                    <div class="row">
                        <div class="col-xl mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">

                                    <div class="row">
                                        <h1>
                                            Peralatan
                                        </h1>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <?php $counter = 1; ?>
                                        <?php foreach ($data_peralatan_studio as $st_alat) : ?>
                                            <div class="col-md-3">

                                                <div class="card mb-4">
                                                    <img class="card-img-top" src="<?= base_url('assets/foto_alat/') . $st_alat->foto_alat ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $st_alat->nama_alat ?></h5>
                                                        <p class="card-text"><?= $st_alat->jenis_alat ?>.</p>
                                                        <p class="card-text"><?= $st_alat->kondisi_alat ?>.</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if ($counter % 4 == 0) : ?>
                                    </div>

                                    <div class="row">
                                    <?php endif; ?>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                    </div>

                                </div>

                            </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jadwal Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Ruangan</th>
                                    <th>Nama Booking</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>harga</th>
                                </tr>
                            </thead>

                            <?php foreach ($data_booking_studio as $bok) { ?>
                                <tbody>
                                <tr>
                                    <td><?= $bok->nama_ruangan ?></td>
                                    <td><?= $bok->nama_boking ?></td>
                                    <td><?= $bok->tanggal_boking ?></td>
                                    <td> mulai : <?= $bok->jam_mulai ?>, <br> selesai :<?= $bok->jam_berakhir ?></td>
                                    <td><?= $bok->harga ?></td>
                                </tr>
                            </tbody>
                            <?php  } ?>

                            
                        </table>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/sb-admin-2.min.js"></script>

    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>
    <!-- <script>
        getData_peta();

        function getData_peta() {
            $.ajax({
                url: "<?php echo base_url(); ?>c_dashboard/load_data_to_tabel",
                dataType: "json",
                success: function(data) {
                    // console.log(data);

                    //load data

                    var datasearch = [];
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].latitude != null || data[i].longitude != null) {
                            datasearch.push({
                                "titik_koordinat": [data[i].latitude, data[i].longitude],
                                "nama": data[i].bt_nama
                            });
                        }
                    }

                    // console.log(datasearch);


                    navigator.geolocation.getCurrentPosition(function(location) {
                        var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);


                        console.log(location.coords.latitude, location.coords.longitude);

                        document.getElementById('mapid').innerHTML = "<div id='data_peta' style='height: 450px;'></div>";


                        var mymap = new L.Map('data_peta', {
                            zoom: 14,
                            center: new L.latLng([-8.58280355011038, 116.13464826731037])
                        });

                        mymap.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                            maxZoom: 18,
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            id: 'mapbox/streets-v11',
                        }));


                        var markersLayer = new L.LayerGroup();
                        mymap.addLayer(markersLayer);

                        mymap.addControl(new L.Control.Search({
                            position: 'topleft',
                            layer: markersLayer,
                            initial: false,
                            collapsed: true,
                            zoom: 17
                        }));


                        var mylocation = L.marker(latlng).addTo(mymap).bindPopup('Youre location!');


                        for (var i = 0; i < data.length; i++) {
                            if (data[i].latitude != null || data[i].longitude != null) {

                                var icon_map = L.icon({
                                    iconUrl: '<?= base_url('assets/foto/bt/mapicon/') ?>' + data[i].stts_mapicon,
                                    iconSize: [40, 40], // size of the icon
                                });


                                var nama_bt = data[i].bt_nama;
                                var titik_koordinat = [data[i].latitude, data[i].longitude];

                                marker = new L.Marker(new L.latLng(titik_koordinat), {
                                    title: nama_bt,
                                    icon: icon_map
                                });

                                marker.bindPopup("<b>" + data[i].bt_nama + "</b><br>" + data[i].bt_alamat + "<br> <div class='row ml-1'><h6><a href='" + data[i].bt_id + "' class='btn btn-sm btn-outline-info' data-toggle='modal' data-target='#modal_detail" + data[i].bt_id + "'>Detail</a></h6><h6><a href='https://www.google.com/maps/dir/?api=1&origin=" + location.coords.latitude + "," + location.coords.longitude + "&destination=" + data[i].latitude + "," + data[i].longitude + "' class='btn btn-sm btn-outline-success' target='_blank'>Rute</a></h6></div>");

                                markersLayer.addLayer(marker);

                            }
                        }

                    });
                }

            });

        }
    </script> -->
</body>

</html>