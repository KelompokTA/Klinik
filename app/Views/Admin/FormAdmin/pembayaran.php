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
                            <a href="<?= base_url('pembayaran'); ?>" class="nav-link active">
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
                    <h1>Pembayaran</h1>
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
                            <h3 class="card-title">Masukkan data pembayaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>ID Transaksi</label>
                                            <input type="text" class="form-control" placeholder="Masukkan ID Transaksi ...">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Pelayanan</label>
                                            <input type="text" class="form-control" placeholder="Masukkan ID Pelayanan ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Total Biaya</label>
                                            <input type="text" class="form-control" placeholder="Masukkan total biaya ...">
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-info">Cetak Kwitansi</button>
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