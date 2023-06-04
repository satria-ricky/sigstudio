<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
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
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-danger" href="<?php echo base_url('C_login/logout') ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- datatables -->
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/demo/datatables-demo.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);

    });

    function modalUpdate(id) {
        $.ajax({
            url: '<?php echo base_url("Studio/getUserStudioById/"); ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Do something with the data here
                console.log(data);
                $('#id_user').val(data.id_user);
                $('#nama_lengkap').val(data.nama_user);
                // $('#sebagai').val(data.level_user);
                // $('#studio_yg_dikelola').val(data.id_studio);
                $('#username').val(data.username);
                $('#password').val(data.password);

                $('#id_st').val(data.id_studio);
                $('#foto_lama_st').val(data.foto_studio);
                $('#nama_st').val(data.nama_studio);
                $('#alamat_st').val(data.alamat_studio);
                $('#latitude_st').val(data.latitude);
                $('#longitude_st').val(data.longitude);
                $('#harga_st').val(data.harga_sewa);
                $('#thn_st').val(data.tahun_didirikan);

            }
        });
    }

    function modalUpdateRuangan(id) {
        $.ajax({
            url: '<?php echo base_url("User/getRuanganByid/"); ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Do something with the data here
                console.log(data);
                $('#idR').val(data.id_ruangan);
                $('#namaR').val(data.nama_ruangan);

            }
        });
    }

    function modalUpdateStudio(id) {
        $.ajax({
            url: '<?php echo base_url("Studio/getUserStudioById/"); ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Do something with the data here
                console.log(data);
                $('#id_st').val(data.id_studio);
                $('#foto_lama_st').val(data.foto_studio);
                $('#nama_st').val(data.nama_studio);
                $('#alamat_st').val(data.alamat_studio);
                $('#latitude_st').val(data.latitude);
                $('#longitude_st').val(data.longitude);
                $('#harga_st').val(data.harga_sewa);
                $('#thn_st').val(data.tahun_didirikan);
            }
        });
    }


    function showConfirmUpdate() {
        $('#modal-update').modal('show');
    }

    function submitUpdateData() {
        document.getElementById("form-update").submit();
    }

    function setLocationUpdate() {

        navigator.geolocation.getCurrentPosition(function(location) {
            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

            //map view 
            console.log(location.coords.latitude, location.coords.longitude);

            document.getElementById("latitude_st").value = location.coords.latitude;
            document.getElementById("longitude_st").value = location.coords.longitude;


        });

    }
</script>



<?php if ($this->session->flashdata('berhasil_tambah')) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            title: 'Berhasil',
            text: 'Data Baru Berhasil ditambahkan'
        })
    </script>
<?php endif;  ?>

<?php if ($this->session->flashdata('berhasil_ubah')) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            title: 'Berhasil',
            text: 'Data Berhasil Diubah !'
        })
    </script>
<?php endif;  ?>

<?php if ($this->session->flashdata('hapusP')) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            title: 'Berhasil',
            text: 'Data Berhasil Dihapus !'
        })
    </script>
<?php endif;  ?>


</body>

</html>