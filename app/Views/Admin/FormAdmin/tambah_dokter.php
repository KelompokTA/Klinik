<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="assets/img/klinik.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Klinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/foto/admin.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
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
                                <!-- <li class="nav-item">
                                    <a href="<?= base_url('tambahPasien'); ?>" class="nav-link active">
                                        <i class="fas fa-edit"></i> <i class=" fas fa-bed"></i>
                                        <p>Edit Pasien</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="<?= base_url('suratRujukan'); ?>" class="nav-link">
                                        <i class="fas fa-paper-plane"></i>
                                        <p>Surat Rujukan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-user-md"></i>
                                <p>
                                    Dokter
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview active">
                                    <a href="<?= base_url('tambahDokter'); ?>" class="nav-link active">
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
                    <h1>Tambah Dokter</h1>
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
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#Dokter" data-toggle="tab">Dokter</a></li>
                                <li class="nav-item"><a class="nav-link" href="#Jadwal" data-toggle="tab">Jadwal</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Dokter">
                                    <!-- DOKTER -->
                                    <div class="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form action="save_dokter" method="POST" role="form" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <?= $validation->listErrors(); ?>
                                                    <div>
                                                        <label>Foto</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="foto_dokter" value="<?= old('foto_dokter'); ?>" class="custom-file-input <?= ($validation->hasError('foto_dokter')) ? 'is-invalid' : ''; ?>" id="foto_dokter">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Nama Dokter</label>
                                                        <input type="text" name="nama_dokter" value="<?= old('nama_dokter'); ?>" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama dokter ..." autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status Dokter</label>
                                                        <input type="text" name="status_dokter" value="<?= old('status_dokter'); ?>" class="form-control <?= ($validation->hasError('status_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan status dokter ..." autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jadwal</label>
                                                        <select name="jadwal" class=" form-control <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>">
                                                            <option selected disabled value="<?= old('jadwal'); ?>"><?= old('jadwal'); ?></option>
                                                            <?php foreach ($jadwal as $row) : ?>
                                                                <option value="<?= $row['ID_JADWAL']; ?>"><?= old('jadwal'); ?><?= $row['HARI'] . " &nbsp &nbsp" . $row['JAM'] . " &nbsp &nbsp" . $row['POLI']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email_dokter" value="<?= old('email_dokter'); ?>" class="form-control <?= ($validation->hasError('email_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan email ..." autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password_dokter" value="<?= old('password_dokter'); ?>" class="form-control <?= ($validation->hasError('password_dokter')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan password ..." autocomplete="off">
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" tab-pane" id="Jadwal">
                                    <!-- JADWAL -->
                                    <div class="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form action="save_jadwal" method="POST" role="form">
                                                    <?= csrf_field(); ?>
                                                    <?= $validation->listErrors(); ?>
                                                    <div class="form-group">
                                                        <label>Hari</label>
                                                        <input type="text" name="hari" value="<?= old('hari'); ?>" class="form-control <?= ($validation->hasError('hari')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan hari ..." autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jam</label>
                                                        <input type="text" name="jam" value="<?= old('jam'); ?>" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan jam ..." autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Poli</label>
                                                        <input type="text" name="poli" value="<?= old('poli'); ?>" class="form-control <?= ($validation->hasError('poli')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan poli ..." autocomplete="off">
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Tambah Jadwal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>