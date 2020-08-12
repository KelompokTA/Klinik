<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../assets/img/klinik.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
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
                                    <a href="<?= base_url('pendaftaran'); ?>" class="nav-link">
                                        <i class="fas fa-plus"></i> <i class="fas fa-procedures"></i>
                                        <p>Tambah Pemeriksaan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
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

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview menu-open">
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
                            <a href="<?= base_url('adminAdmin'); ?>" class="nav-link active">
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
                    <h1>Edit Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="<?= base_url('login'); ?>">logout</a></li>
                    </ol>
                </div>
            </div>
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
                            <h3 class="card-title">Edit data dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" action="update_dokter/<?= $dokter['ID_DOKTER'] ?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <?= $validation->listErrors(); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="hidden" name="id_dokter" value="<?= $dokter['ID_DOKTER'] ?>" class="form-control">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="../assets/img/foto/<?= $dokter['FOTO_DOKTER'] ?>" value="<?= $dokter['FOTO_DOKTER'] ?>" alt="dokter.jpg" width="200px" height="220px">
                                            </div>
                                            <div class="col-sm-9">
                                                <br><br><br>
                                                <label>Foto</label>
                                                <div class="custom-file">
                                                    <input type="file" name="foto_dokter" class="custom-file-input <?= ($validation->hasError('foto_dokter')) ? 'is-invalid' : ''; ?>" id="foto_dokter">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Nama Dokter</label>
                                            <input type="text" name="nama_dokter" value="<?= $dokter['NAMA_DOKTER']; ?>" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama dokter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Dokter</label>
                                            <input type="text" name="status_dokter" value="<?= $dokter['STATUS_DOKTER']; ?>" class="form-control <?= ($validation->hasError('status_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan status dokter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Jadwal</label>
                                            <select name="jadwal" class=" form-control <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>">
                                                <option selected value="<?= $dokter['ID_JADWAL']; ?>"><?= $dokter['ID_JADWAL']; ?></option>
                                                <?php foreach ($jadwal as $row) : ?>
                                                    <option value=" <?= $row['ID_JADWAL']; ?>"><?= old('jadwal'); ?><?= $row['HARI'] . " &nbsp &nbsp" . $row['JAM'] . " &nbsp &nbsp" . $row['POLI']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email_dokter" value="<?= $dokter['EMAIL_DOKTER']; ?>" class="form-control <?= ($validation->hasError('email_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan email ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password_dokter" value="<?= $dokter['PASSWORD_DOKTER']; ?>" class="form-control <?= ($validation->hasError('password_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan password ...">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch ">
                                                <input type="checkbox" name="aktif" class="custom-control-input" id="customSwitch1" value="1" checked>
                                                <label class="custom-control-label" for="customSwitch1">Aktif</label>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
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
</div>

<?= $this->endSection(); ?>