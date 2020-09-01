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

            #btn,
            header {
                display: none;
            }
        }
    </style>
    <!--coba-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" />
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    } ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h4>
                        <img src="assets\img\klinik.png" width="80dp" class="img-circle elevation-2" alt="klinik.png"> KLINIK INDONESIA SEHAT
                        <small class="float-right"> <?php
                                                    setlocale(LC_ALL, 'id-ID');
                                                    echo strftime("%A, %d %B %Y");  ?></small>
                    </h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <br>
                    <br>
                    <b><?php echo 'Laporan bulan : ' .  tgl_indo(date('Y-m-'));  ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <br>
            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal Transaksi</th>
                                <th>Nama Admin</th>
                                <th>Nomor RM</th>
                                <th>Biaya Pelayanan</th>
                                <th>Biaya Resep</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($laporan as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['created_transaksi']; ?></td>
                                    <td><?= $row['NAMA_ADMIN']; ?></td>
                                    <td><?= $row['NO_RM']; ?></td>
                                    <td><?= $row['BIAYA_PELAYANAN']; ?></td>
                                    <td><?= $row['TOTAL_BIAYA_RESEP']; ?></td>
                                    <td><?= $row['BIAYA_PELAYANAN'] + $row['TOTAL_BIAYA_RESEP']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-9">

                </div>
                <!-- /.col -->
                <div class="col-3">


                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal: </th>
                                <?php foreach ($subtotal as $row) { ?>
                                    <td><?= $row['TOTAL']; ?></td>
                                <?php } ?>
                            </tr>

                        </table>

                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <center>
                <div class="row no-print">
                    <div class="col-12">
                        <button onclick="window.print()" id="btn" class="btn shadow btn-outline-secondary center"><i class="fa fa-print"></i> Cetak Laporan</button>
                        <br>
                        <br>
                        <a href="<?= base_url('laporanAdmin'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali </a>
                    </div>
                </div>
            </center>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


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

</html>