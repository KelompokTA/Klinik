<?= $this->extend('Layout/Tables'); ?>
<?= $i = 1; ?>
<?= $this->section('content'); ?>

<!-- /.navbar -->

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
                <img src="assets/img/foto/arif.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Arif</a>
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
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-bed"></i>
                                <p>
                                    Pasien
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="tambahPasien" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <p>Tambah Pasien</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="suratRujukan" class="nav-link">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        <p>Surat Rujukan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pendaftaran" class="nav-link">
                                <i class="fa fa-plus"></i>
                                <p>Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="tambahDokter" class="nav-link">
                                <i class="fa fa-plus"></i>
                                <p>
                                    Tambah Dokter
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="tambahAdmin" class="nav-link">
                                <i class="fa fa-plus"></i>
                                <p>
                                    Tambah Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="pembayaran" class="nav-link">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
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
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pasienAdmin'); ?>" class="nav-link ">
                                <i class="fas fa-bed"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dokterAdmin'); ?>" class="nav-link ">
                                <i class="fa fa-user-md"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('adminAdmin'); ?>" class="nav-link active">
                                <i class="fa fa-user"></i>
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
                    <h1>Admin</h1>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Admin</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Admin</th>
                                        <th>Status</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($admin as $row) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="assets/img/foto/<?= $row['FOTO_USER'] ?>" alt="admin.jpg" width="50px" height="70px"></td>
                                            <td><?= $row['NAMA_USER']; ?></td>
                                            <td><?= $row['STATUS_USER']; ?></td>
                                            <td><?= $row['USERNAME_USER']; ?></td>
                                            <td>********</td>
                                            <td>
                                                <a href="edit_admin/<?= $row['ID_USER']; ?>" class="btn btn-warning">Edit</a>
                                                <a href="hapus_admin/<?= $row['ID_USER']; ?>" class=" btn btn-danger">Hapus</a>
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