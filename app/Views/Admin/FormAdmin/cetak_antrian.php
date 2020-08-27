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
                            <img src="../assets\img\klinik.png" width="80px" height="50px" alt="klinik.png">
                        </div>
                        <h3 align=" center">PAPSI KLINIK</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" align="center">
                        <form>
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <!-- text input -->
                                    <div>
                                        <input type="hidden" name="id_pendaftaran" value="<?= $pendaftaran['ID_PENDAFTARAN'] ?>" class="form-control">
                                        <h3 align=" center">NOMOR ANTRIAN</h3>
                                        <!-- dapet value null bakal danger, kalo 1 ya biasa aja -->
                                        <?php foreach ($poli as $row) : ?>
                                            <h1 class=" <?= ($row['DARURAT'] == null) ? ' text-danger font-weight-bolder ' : '' ?>">
                                                <?= ($row['DARURAT'] == null) ? $pendaftaran['NOMER_ANTRIAN'] : $pendaftaran['NOMER_ANTRIAN']; ?>
                                            </h1>
                                            <td>

                                                <h1><?= $row['POLI'];
                                                endforeach; ?></h1>
                                            </td>
                                            <td>
                                                <h5><?php
                                                    setlocale(LC_ALL, 'id-ID');
                                                    echo strftime("%A, %d %B %Y - %H:%M", strtotime($pendaftaran['created_pendaftaran'])) . "\n"; ?></h5>
                                            </td>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <button onclick="window.print()" id="btn" value="Print" class="btn shadow btn-outline-secondary center"><i class="fa fa-print"></i> Cetak No Antrian</button>
                <br><br>
                <a href="<?= base_url('pendaftaran'); ?>" id="btn" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</a>
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