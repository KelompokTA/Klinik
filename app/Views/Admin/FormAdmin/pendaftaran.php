<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="assets/img/klinik.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PAPSI KLINIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/foto/<?= session()->get('FOTO_ADMIN') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('NAMA_ADMIN') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-bed"></i>
                                <p>
                                    Pasien
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('tambahPasien'); ?>" class="nav-link">
                                        <i class="fas fa-plus"></i> <i class=" fas fa-bed"></i>
                                        <p>Tambah Pasien Baru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pendaftaran'); ?>" class="nav-link active">
                                        <i class="fas fa-plus"></i> <i class="fas fa-procedures"></i>
                                        <p>Tambah Pemeriksaan</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="<?= base_url('tambahPasien'); ?>" class="nav-link active">
                                        <i class="fas fa-edit"></i> <i class=" fas fa-bed"></i>
                                        <p>Edit Pasien</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-md"></i>
                                <p>
                                    Dokter
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="<?= base_url('tambahDokter'); ?>" class="nav-link">
                                        <i class="fas fa-plus"></i> <i class="fas fa-user-md"></i>
                                        <p>
                                            Tambah Dokter
                                        </p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link active">
                    <i class="fas fa-edit"></i> <i class="fas fa-user-md"></i>
                    <p>
                      Edit Dokter
                    </p>
                  </a>
                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-hospital-user"></i>
                                <p>
                                    Admin
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="<?= base_url('tambahAdmin'); ?>" class="nav-link">
                                        <i class="fas fa-plus"></i> <i class="fas fa-hospital-user"></i>
                                        <p>
                                            Tambah Admin
                                        </p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link active">
                    <i class="fas fa-edit"></i> <i class="fas fa-hospital-user"></i>
                    <p>
                      Edit Admin
                    </p>
                  </a>
                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('pembayaran'); ?>" class="nav-link">
                                <i class="fas fa-credit-card" aria-hidden="true"></i>
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pasienAdmin'); ?>" class="nav-link">
                                <i class="fas fa-bed"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dokterAdmin'); ?>" class="nav-link">
                                <i class="fas fa-user-md"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('jadwalAdmin'); ?>" class="nav-link">
                                <i class="fas fa-calendar"></i>
                                <p>Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('adminAdmin'); ?>" class="nav-link">
                                <i class="fas fa-hospital-user"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporanAdmin'); ?>" class="nav-link">
                                <i class="fas fa-chart-line"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('suratRujukan'); ?>" class="nav-link">
                                <i class="fas fa-paper-plane"></i>
                                <p>Rujukan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pemeriksaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="<?= base_url('login'); ?>">logout</a></li>
                    </ol>
                </div>
            </div>
            <?php if (session()->getFlashdata('Info')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Info'); ?>
                </div>
            <?php endif; ?>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Masukkan data pemeriksaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="save_pendaftaran" method="POST" role="form">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php $id_admin = session()->get('ID_ADMIN'); ?>
                                        <input type="hidden" name="id_admin" value="<?= $id_admin ?>" class="form-control">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No RM</label>
                                            <select class="form-control select2" style="width: 100%;" name="id_pasien">
                                                <option selected disabled value="<?= old('id_pasien'); ?>"></option>
                                                <?php foreach ($pasien as $row) { ?>
                                                    <option value="<?= $row['ID_PASIEN']; ?>"><?= old('id_pasien'); ?><?= $row['NO_RM'] . " - " . $row['NAMA_PASIEN']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dokter</label>
                                            <select class="form-control select2" style="width: 100%;" name="id_dokter">
                                                <option selected disabled value="<?= old('id_dokter'); ?>"></option>
                                                <?php foreach ($dokter as $row) { ?>
                                                    <option value="<?= $row['ID_DOKTER']; ?>"><?= old('id_dokter'); ?><?= $row['NAMA_DOKTER'] . " - " . $row['STATUS_DOKTER'] . " | " . $row['POLI']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Nomer Antrian</label>
                                            <?php {
                                                // $koneksi = mysqli_connect('localhost', 'root', '', 'db_klinik');
                                                // //Next Antrian
                                                // // $tgl = date('Y-m-d');
                                                // $query = mysqli_query($koneksi, "SELECT created_pendaftaran,max(NOMER_ANTRIAN) as nextAntrian FROM pendaftaran");
                                                // //$koneksi, "SELECT max(NOMER_ANTRIAN) as nextAntrian FROM pendaftaran WHERE Tanggal
                                                // $data = mysqli_fetch_array($query);
                                                // // dd($data);
                                                // $tgl = date('Y-m-d');
                                                // if ($data['created_pendaftaran'] == $tgl) {
                                                //     $nomerAntrian = $data['nextAntrian'];
                                                //     $nomerAntrian++;
                                                // }
                                                // $nomerAntrian = $data['nextAntrian'];
                                                // $nomerAntrian++;
                                                if (empty($antrian['nextAntrian'])) {
                                                    $nomerAntrian = 1;
                                                } else {
                                                    $nomerAntrian = $antrian['nextAntrian'] + 1;
                                                }
                                            ?>
                                                <input name="no_antrian" required="required" type="text" class="form-control" value="<?= $nomerAntrian; ?>" readonly>
                                                </input>
                                                <br>
                                                <!-- kalo value = 1 itu biasa, kalo null itu darurat -->
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" name="darurat" class="custom-control-input" id="customSwitch3" value="1" checked="checked">
                                                        <label class="custom-control-label" for="customSwitch3">Darurat</label>
                                                    </div>
                                                </div>
                                                <!-- date_default_timezone_set('Asia/Jakarta'); -->
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya Administrasi</label>
                                            <input name="biaya_admin" required="required" type="text" class="form-control" value="15000">
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>

                                        </div>
                                    <?php } ?>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pendaftar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NO RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>No Antrian</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pendaftaran as $row) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['NO_RM']; ?></td>
                                            <td><?= $row['NAMA_PASIEN']; ?></td>
                                            <td><?= $row['NAMA_DOKTER']; ?></td>
                                            <td><?= $row['POLI']; ?></td>
                                            <td><?= $row['NOMER_ANTRIAN']; ?></td>
                                            <td><?php
                                                setlocale(LC_ALL, 'id-ID');
                                                echo strftime("%A, %d %B %Y", strtotime($row['created_pendaftaran'])) . "\n"; ?></td>
                                            <!-- - %H:%M -->
                                            <td>
                                                <a href=" cetak_antrian/<?= $row['ID_PENDAFTARAN']; ?>" class="btn btn-primary"><i class="fas fa-share"></i> Cetak antrian</a>
                                                <a href="hapus_antrian/<?= $row['ID_PENDAFTARAN']; ?>" class=" btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>

//reset and increment number on daiyly base
// reset number daily