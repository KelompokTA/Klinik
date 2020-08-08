<?= $this->extend('Layout/Antrian'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- general form elements disabled -->
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="image" align="center">
                            <img src="..\assets\img\klinik.png" width="80dp" class="img-circle elevation-2" alt="klinik.png">
                        </div>
                        <h4 align=" center">RUMAH SAKIT INDONESIA SEHAT</h4>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" role="form">
                            <?= csrf_field(); ?>

                            <div class="row">
                                <div class="col">
                                    <!-- text input -->
                                    <div>

                                        <table>
                                            <input type="hidden" name="id_transaksi" value="<?= $laporan['ID_TRANSAKSI'] ?>" class="form-control">
                                            <tr>
                                                <td>No Transaksi</td>
                                                <td>:</td>
                                                <td><?= $laporan['ID_TRANSAKSI'] ?></td>
                                            </tr>
                                            <?php foreach ($pasien as $row) : ?>
                                                <tr>
                                                    <td>Nama Pasien</td>
                                                    <td>:</td>
                                                    <td><?= $row['NAMA_PASIEN'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td>Tanggal Transaksi</td>
                                                <td>:</td>
                                                <td><?= $laporan['TANGGAL_TRANSAKSI'] ?></td>
                                            </tr>
                                            <?php foreach ($pasien as $row) : ?>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>:</td>
                                                    <td><?= $row['JENIS_KELAMIN'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?= $row['ALAMAT_PASIEN'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php foreach ($pelayanan as $row) : ?>
                                                <tr>
                                                    <td>Biaya Obat</td>
                                                    <td>:</td>
                                                    <td><?= ($row['TOTAL_BIAYA_RESEP'] == null) ? ' 0 ' : $row['TOTAL_BIAYA_RESEP']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Dokter</td>
                                                    <td>:</td>
                                                    <td><?= $row['BIAYA_DOKTER'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Biaya</td>
                                                    <td>:</td>
                                                    <td><?= $row['TOTAL_BIAYA_RESEP'] + $row['BIAYA_DOKTER'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>

                                    </div>

                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <button onclick="window.print()" id="btn" class="btn shadow btn-outline-secondary center"><i class="fa fa-print"></i> Cetak Kwitansi</button>
                <br><br>
                <a href="<?= base_url('pembayaran'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</i></a>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->
<!-- Main content -->

<!-- /.content -->


<?= $this->endSection(); ?>