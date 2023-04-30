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


 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>   
  <link rel="stylesheet" href="<?= base_url() ?>leaflet-locatecontrol/dist/L.Control.Locate.min.css" />
<script src="<?= base_url() ?>leaflet-locatecontrol/src/L.Control.Locate.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>leaflet-search/src/leaflet-search.css" />
<script src="<?= base_url() ?>leaflet-search/src/leaflet-search.js"></script>

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
                    <div class="navbar-brand ml-3">  <b><a href="<?= base_url(); ?>">SIG Studio Musik</a> </b></div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
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
                        </li> -->

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

                    <!-- Page Heading -->
                    <center>
                        <h1 class="h3 mb-4 text-gray-800">Peta Lokasi</h1>
                    </center>

                    <div class="card">

                        <div id="mapid" style="height: 450px;"></div>


                    </div>


                    <hr>

                    <div class="row">
                        <?php $counter = 1; ?>
                        <?php foreach ($data_studio as $st) : ?>
                            <div class="col-md-4">

                                <div class="card mb-4">
                                    <img class="card-img-top" src="<?= base_url('assets/foto_studio/'); ?>FIMG-Studio-Musik.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $st->nama_studio ?></h5>
                                        <p class="card-text"><?= $st->alamat_studio ?>.</p>
                                    </div>
                                    <div class="card-footer">
                                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                                        <a href="<?= base_url('Studio/detailStudio/') . $st->id_studio ?>">Lihat selengkapnya ... </a>
                                    </div>
                                </div>

                            </div>
                            <?php if ($counter % 3 == 0) : ?>
                    </div>

                    <div class="row">
                    <?php endif; ?>
                    <?php $counter++; ?>
                <?php endforeach; ?>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/sb-admin-2.min.js"></script>


    <script>
        getData_peta();

        function getData_peta() {
            $.ajax({
                url: "<?php echo base_url(); ?>Welcome/studioToPeta",
                dataType: "json",
                success: function(data) {
                    // console.log(data);

                    //load data

                    var datasearch = [];
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].latitude != null || data[i].longitude != null) {
                            datasearch.push({
                                "titik_koordinat": [data[i].latitude, data[i].longitude],
                                "nama": data[i].nama_studio
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

                        // mymap.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        //     maxZoom: 18,
                        //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        //     id: 'mapbox/streets-v11',
                        // }));

mymap.addLayer(

new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
})
    );

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
                                    iconUrl: '<?= base_url('assets/foto_icon/icon.PNG') ?>',
                                    iconSize: [40, 40], // size of the icon
                                });


                                var nama_studio = data[i].nama_studio;
                                var titik_koordinat = [data[i].latitude, data[i].longitude];

                                marker = new L.Marker(new L.latLng(titik_koordinat), {
                                    title: nama_studio,
                                    icon: icon_map
                                });

                                marker.bindPopup("<b>" + data[i].nama_studio + "</b><br>" + data[i].alamat_studio + "<br> <div class='row ml-1'><h6><a href='<?= base_url('Studio/detailStudio/')?>" + data[i].id_studio + "' class='btn btn-sm btn-outline-info'>Detail</a></h6><h6><a href='https://www.google.com/maps/dir/?api=1&origin=" + location.coords.latitude + "," + location.coords.longitude + "&destination=" + data[i].latitude + "," + data[i].longitude + "' class='btn btn-sm btn-outline-success' target='_blank'>Rute</a></h6></div>");

                                markersLayer.addLayer(marker);

                            }
                        }

                    });
                }

            });

        }
    </script> 
</body>

</html>