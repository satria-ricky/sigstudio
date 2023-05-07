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
 </script>

 <script>
     function modalUpdate(id) {
         $.ajax({
             url: '<?php echo base_url("User/getUserById/"); ?>' + id,
             type: 'GET',
             dataType: 'json',
             success: function(data) {
                 // Do something with the data here
                 console.log(data);
                 $('#id_user').val(data.id_user);
                 $('#nama_lengkap').val(data.nama_user);
                 $('#sebagai').val(data.level_user);
                 $('#studio_yg_dikelola').val(data.id_studio);
                 $('#username').val(data.username);
                 $('#password').val(data.password);
             }
         });
     }

     function showConfirmUpdate(){
        $('#modal-update').modal('show');
     }

     
     function submitUpdateData() {
        document.getElementById("form-update").submit();
     }
 </script>
 </body>

 </html>