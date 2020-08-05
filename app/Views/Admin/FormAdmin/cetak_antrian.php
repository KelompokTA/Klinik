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
                            <img src="..\..\assets\img\klinik.png" width="80dp" class="img-circle elevation-2" alt="klinik.png">
                        </div>
                        <h4 align=" center">RUMAH SAKIT INDONESIA SEHAT</h4>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" align="center">
                        <form role="form" action="<?= $pendaftaran['ID_PENDAFTARAN'] ?>" method="POST">
                            <?= csrf_field(); ?>

                            <div class="row">
                                <div class="col">
                                    <!-- text input -->
                                    <div>
                                        <input type="hidden" name="id_pendaftaran" value="<?= $pendaftaran['ID_PENDAFTARAN'] ?>" class="form-control">


                                        <h3 align=" center">NOMOR ANTRIAN</h3>
                                        <td>
                                            <h1><input name="nomer_antrian" value="<?= $pendaftaran['NOMER_ANTRIAN'] ?>" class="form-control"></h1>
                                        </td>



                                    </div>

                                </div>
                            </div>

                        </form>
                        <form></form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <button onclick="window.print()" value="Print" class="btn shadow btn-outline-secondary center">Cetak No Antrian<i class="fa fa-print"></i></button>
                <br><br>
                <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-dark">Kembali</a>
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