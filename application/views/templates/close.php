            </div>
        <!-- ./wrapper -->
        
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- DataTables -->
        <script src="<?php echo base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  
        <!-- Select2 -->
        <script src="<?php echo base_url() ?>/assets/plugins/select2/js/select2.full.min.js"></script>

        <!-- SweetAlert2 -->
        <script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        
        <!-- Toastr -->
        <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
  
        <!-- InputMask -->
        <script src="<?php echo base_url() ?>/assets/plugins/moment/moment.min.js"></script>
  
        <!-- daterangepicker -->
        <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
        
        <script>
            $(document).ready(function(){
                $(".table").DataTable({
                "responsive": true,
                "autoWidth": true,
                });
            });
        </script>
    </body>
</html>