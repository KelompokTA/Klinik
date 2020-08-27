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
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }
    </style>
    <!--coba-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" />
    <table width="100%">
        <tr>
            <td width="25" align="center"><img src="..\assets\img\klinik.png" width="100%"></td>
            <td width="50" align="center">
                <h2> PAPSI KLINIK</h2>
                <h5>Kampus ITS Gedung U 4th Floor, JL. Teknik Mesin, Sukolilo, 60111</h5>
                <h5> Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60117</h5>
                <h5>Telp.(031) 5928954</h5>
            </td>
            <td width="25" align="center"><img src="..\assets\img\Badge_ITS.png" width="100%"></td>
        </tr>
    </table>
</head>

<body class="hold-transition sidebar-mini">
    <hr size="10px">
    <br>
    <br>
    <center>
        <h4>SURAT RUJUKAN</h4>
    </center>
    <br>
    <br>
    <p>Kepada</p>
    <p>Yth. Bapak/Ibu</p>
    <?php foreach ($rujukan as $row) { ?>
        <p>Di RS <?= $row['TUJUAN_RUJUK']; ?></p>
    <?php } ?>
    <br>
    <br>
    <p>Mohon penatalaksanaan lanjutan terhadap pasien sbb :</p>
    <?php foreach ($rujukan as $row) { ?>
        <table>
            <tr>
                <td><?= "Nama  " ?></td>
                <td><?php echo "&nbsp :  " . $row['NAMA_PASIEN']; ?></td>
            </tr>
            <tr>
                <td><?= "Umur  " ?></td>
                <td><?php echo "&nbsp :  " . $row['UMUR']; ?></td>
            </tr>
            <tr>
                <td><?= "Alamat " ?></td>
                <td><?php echo "&nbsp :  " . $row['ALAMAT_PASIEN']; ?></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td><?= "Keluhan Utama " ?></td>
                <td><?php echo "&nbsp :  " . $row['KELUHAN_UTAMA']; ?></td>
            </tr>
            <tr>
                <td><?= "Riwayat Penyakit Sekarang    " ?></td>
                <td><?php echo "&nbsp :  " . $row['RPS']; ?></td>
            </tr>
            <tr>
                <td><?= "Diagnosa  " ?></td>
                <td><?php echo "&nbsp :  " . $row['DIAGNOSA_PRIMER']; ?></td>
            </tr>
            <tr>
                <td><?= "Indikasi Dirujuk  " ?></td>
                <td><?php echo "&nbsp :  " . $row['ALASAN_RUJUK']; ?></td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        Konfirmasi ke Rumah Sakit rujukan diterima oleh ............................................................................
        <br>
        <br>
        <br>
        <p class="right">Surabaya,<?php
                                    setlocale(LC_ALL, 'id-ID');
                                    echo strftime(" %d %B %Y", strtotime($row['created_rujuk'])) . "\n"; ?> </p>
        <br>
        <br>
        <br>
        <p class="right">(<?php echo "&nbsp &nbsp &nbsp &nbsp &nbsp   " . "dr." . $row['NAMA_DOKTER'] . " &nbsp &nbsp &nbsp &nbsp  "; ?> )</p>
    <?php } ?>



    <!-- this row will not appear when printing -->
    <center>
        <div class="row no-print">
            <div class="col-12">
                <button onclick="window.print()" id="btn" class="btn shadow btn-outline-secondary center"><i class="fa fa-print"></i> Cetak Rujukan</button>
                <br>
                <br>
                <a href="<?= base_url('suratRujukan'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali </a>
            </div>
        </div>
    </center>



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