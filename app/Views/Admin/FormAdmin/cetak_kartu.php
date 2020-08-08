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
                                            <input type="hidden" name="id_pasien" value="<?= $pasien['ID_PASIEN'] ?>" class="form-control">
                                            <tr>
                                                <td>No RM</td>
                                                <td>:</td>
                                                <td><?= $pasien['NO_RM'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pasien</td>
                                                <td>:</td>
                                                <td><?= $pasien['NAMA_PASIEN'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td><?= $pasien['TEMPAT_LAHIR'] ?>, <?= $pasien['TANGGAL_LAHIR']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td><?= $pasien['JENIS_KELAMIN'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><?= $pasien['ALAMAT_PASIEN'] ?></td>
                                            </tr>
                                        </table>

                                    </div>

                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <button onclick="window.print()" id="btn" class="btn shadow btn-outline-secondary center">Cetak Kartu<i class="fa fa-print"></i></button>
                <br><br>
                <a href="<?= base_url('pasienAdmin'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</a>
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