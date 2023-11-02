   <!-- Footer -->
   <footer class="sticky-footer bg-white">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; Sannin Studio <?= date('Y'); ?></span>
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
                   <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
               </div>
           </div>
       </div>
   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="<?= base_url('assets/sbadmin2/'); ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/sbadmin2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url('assets/sbadmin2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?= base_url('assets/sbadmin2/'); ?>js/sb-admin-2.min.js"></script>

   <!-- trumbowyg -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script>
       window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
   </script>
   <script src="/assets/trumbowyg/trumbowyg.min.js"></script>
   <script>
       $('#trumbowyg').trumbowyg();
   </script>

   <!-- sweetalert -->
   <script src="/assets/sweetalert/sweetalert2.all.min.js"></script>
   <script src="/assets/sweetalert/myscript.js"></script>


   <script>
       //preview image
       function previewImg() {
           let image = document.querySelector('#image');
           let imageLabel = document.querySelector('.custom-file-label');
           let imgPreview = document.querySelector('.img-preview');

           imageLabel.textContent = image.files[0].name;

           let fileImage = new FileReader();
           fileImage.readAsDataURL(image.files[0]);

           fileImage.onload = function(e) {
               imgPreview.src = e.target.result;
           }
       }


       // show upload file name
       $('.custom-file-input').on('change', function() {
           let fileName = $(this).val().split('\\').pop();
           $(this).next('.custom-file-label').addClass("selected").html(fileName);
       });

       // jquery check_access
       $('.form-check-input').on('click', function() {
           const menuId = $(this).data('menu');
           const roleId = $(this).data('role');

           $.ajax({
               url: "<?= base_url('admin/changeaccess'); ?>",
               type: 'post',
               data: {
                   menuId: menuId,
                   roleId: roleId
               },
               success: function() {
                   document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
               }
           });
       });
   </script>

   </body>

   </html>