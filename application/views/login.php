<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
    <script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">SIG Studio Musik</h1>
                                    <img src="<?php echo base_url('assets/gambar/'); ?>room.png" class="w-75" alt="">


                                </div>
                                <form class="user" action="<?php echo base_url('C_login/cek_login'); ?>" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" placeholder="Masukkan Username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="sebagai" id="">
                                            <option value="">Pilih</option>
                                            <option value="2">Admin</option>
                                            <option value="1">Pengelola</option>
                                        </select>

                                    </div>

                                    <button class="btn btn-primary btn-user btn-block" type="submit"> Masuk</button>
                                    <hr>
                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
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


    <?php if ($this->session->flashdata('salah')) : ?>
        <script type="text/javascript">
            Swal.fire({
                type: 'warning',
                title: 'Gagal',
                text: 'Cek Kembali Username Dan Password Anda!'
            })
        </script>
    <?php endif;  ?>

    <?php if (validation_errors()) : ?>
        <script type="text/javascript">
            Swal.fire({
                type: 'error',
                title: 'Gagal',
                text: 'Form Anda Ada Yang Kosong!'
            })
        </script>
    <?php endif; ?>

</body>

</html>