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
                            <img src="assets\img\klinik.png" alt="klinik.png">
                        </div>
                        <h3 align=" center">RUMAH SAKIT INDONESIA SEHAT</h3>

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

                                        <?php $koneksi = mysqli_connect('localhost', 'root', '', 'db_klinik');
                                        //Next Antrian

                                        $query = mysqli_query($koneksi, "SELECT NOMER_ANTRIAN FROM pendaftaran WHERE ID_PENDAFTARAN = id_pendaftaran");
                                        $data = mysqli_fetch_array($query);
                                        $nomerAntrian = $data['NOMER_ANTRIAN'];
                                        $nomerAntrian++;
                                        ?>
                                        <h3 align=" center">NOMOR ANTRIAN</h3>
                                        <td>
                                            <h1><?= $nomerAntrian; ?>
                                        </td>
                                        </h1>

                                    </div>
                                    <div>
                                        <button onclick="window.print()" value="Print" class="btn shadow btn-outline-secondary center">Cetak No Antrian<i class="fa fa-print"></i></button>
                                        <br><br>
                                        <a href="pendaftaran" class="btn btn-dark">Kembali</a>

                                    </div>
                                </div>
                            </div>

                        </form>
                        <form></form>
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