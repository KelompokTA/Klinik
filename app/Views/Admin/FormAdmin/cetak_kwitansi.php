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
                            <img src="..\assets\img\klinik.png" width="80dp" alt="klinik.png">
                        </div>
                        <h4 align=" center">PAPSI KLINIK</h4>

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
                                            <?php foreach ($laporan as $row) : ?>
                                                <input type="hidden" name="id_transaksi" value="<?= $row['ID_TRANSAKSI'] ?>" class="form-control">

                                                <tr>
                                                    <td>No Transaksi</td>
                                                    <td>:</td>
                                                    <td><?= $row['ID_TRANSAKSI'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Nama Pasien</td>
                                                    <td>:</td>
                                                    <td><?= $row['NAMA_PASIEN'] ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Tanggal Transaksi</td>
                                                    <td>:</td>
                                                    <td><?php setlocale(LC_ALL, 'id-ID');
                                                        echo strftime("%d %B %Y - %H:%M ", strtotime($row['created_transaksi'])); ?></td>
                                                </tr>

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
                                                <tr>
                                                    <td>Biaya Administrasi</td>
                                                    <td>:</td>
                                                    <td>Rp <?= ($row['BIAYA_ADMINISTRASI'] == null) ? ' 0 ' : $row['BIAYA_ADMINISTRASI']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Obat</td>
                                                    <td>:</td>
                                                    <td>Rp <?= ($row['TOTAL_BIAYA_RESEP'] == null) ? ' 0 ' : $row['TOTAL_BIAYA_RESEP']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Pelayanan</td>
                                                    <td>:</td>
                                                    <td>Rp <?= $row['BIAYA_PELAYANAN'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Biaya</td>
                                                    <td>:</td>
                                                    <td> Rp <?= $row['TOTAL_BIAYA_RESEP'] + $row['BIAYA_PELAYANAN'] + $row['BIAYA_ADMINISTRASI'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <div class="col-6">
                                            <p class="lead">Metode Pembayaran:</p>
                                            <img src="../assets/img/visa.png" alt="Visa">
                                            <img src="../assets/img/mastercard.png" alt="Mastercard">
                                            <img src="../assets/img/paypal2.png" alt="Paypal">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <button onclick="window.print()" id="btn" class="btn shadow btn-outline-secondary center"><i class="fa fa-print"></i> Cetak Kwitansi</button>
                <br><br>
                <a href="<?= base_url('laporanAdmin'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</i></a>
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