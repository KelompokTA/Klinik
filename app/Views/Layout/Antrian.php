<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css'); ?>">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?= base_url('assets/fonts/fontgoogle.css'); ?>" rel="stylesheet">
    <!-- untuk menampilkan apa saja yg ada akan diprint -->
    <style type="text/css">
        @media print {
            #btn {
                display: none;
            }
        }
    </style>
    <!--coba-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" />
</head>
<center>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->


            <?= $this->renderSection('content') ?>


            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <!-- DataTables -->
        <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
        <!-- Sweetalert App -->
        <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.all.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets/js/adminlte.min.js'); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets/js/demo.js'); ?>"></script>
        <!-- page script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": true,

                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </body>
</center>

</html>