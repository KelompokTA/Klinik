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
                            <img src="../assets\img\klinik.png" width="50px" height="50px" alt="klinik.png">
                        </div>
                        <h3 align=" center">KLINIK INDONESIA SEHAT</h3>

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
                                        <td>
                                            <h1><?= $pendaftaran['NOMER_ANTRIAN']; ?>
                                        </td>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button onclick="window.print()" value="Print" class="btn shadow btn-outline-secondary center">Cetak No Antrian<i class="fa fa-print"></i></button>
                        <br><br>
                        <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-dark">Kembali</a>
                    </div>
                    <!-- /.card-body -->
                </div>
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