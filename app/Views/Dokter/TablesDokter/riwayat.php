<?= $this->extend('Layout/Tables'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PAPSI KLINIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/foto/<?= session()->get('FOTO_DOKTER') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('NAMA_DOKTER') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('dokter') ?>" class="nav-link">
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
                        <li class="nav-item">
                            <a href="<?= base_url('tambahPelayanan') ?>" class="nav-link">
                                <i class="fas fa-plus"></i> <i class="fas fa-hand-holding-medical"></i>
                                <p>pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-pills"></i>
                                <p>
                                    Obat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('tambahObat') ?>" class="nav-link">
                                        <i class="fas fa-plus"></i> <i class="fas fa-pills"></i>
                                        <p>tambah obat</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-edit"></i> <i class="fas fa-pills"></i>
                                        <p>Edit obat</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-clipboard"></i>
                                <p>
                                    Riwayat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-edit"></i> <i class="fa fa-clipboard"></i>
                                        <p>Edit riwayat</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
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
                            <a href="<?= base_url('pasienDokter'); ?>" class="nav-link">
                                <i class="fas fa-bed"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dokterDokter'); ?>" class="nav-link">
                                <i class="fas fa-user-md"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('obatDokter'); ?>" class="nav-link">
                                <i class="fas fa-pills"></i>
                                <p>Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('riwayatDokter'); ?>" class="nav-link active">
                                <i class="fas fa-clipboard"></i>
                                <p>Riwayat</p>
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
                    <h1>Riwayat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=" <?= base_url('dokter'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('login'); ?>">logout</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Semua Riwayat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Keluhan Utama</th>
                                        <th>Diagnosa Primer</th>
                                        <th>Status Pasien</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($riwayat as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['NO_RM']; ?></td>
                                            <td><?= $row['NAMA_PASIEN']; ?></td>
                                            <td><?= $row['KELUHAN_UTAMA']; ?></td>
                                            <?php if ($row['DIAGNOSA_PRIMER'] !== null) : ?>
                                                <td><?= $row['DIAGNOSA_PRIMER']; ?></td>
                                            <?php endif; ?>
                                            <?php if ($row['DIAGNOSA_PRIMER'] == null) : ?>
                                                <td class="text-danger">Belum Ada Diagnosa</td>
                                            <?php endif; ?>
                                            <td class=" <?php if ($row['STATUS_PASIEN'] == "Belum Ada Tindakan") {
                                                            echo ' text-danger ';
                                                        } else if ($row['STATUS_PASIEN'] == "Rujukan") {
                                                            echo ' text-warning ';
                                                        }; ?> text-success"><?= ($row['STATUS_PASIEN'] == null) ? ' Belum Ada Tindakan ' : $row['STATUS_PASIEN']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                setlocale(LC_ALL, 'id-ID');
                                                echo strftime("%A, %d %B %Y - %H:%M", strtotime($row['created_diagnosa'])); ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('detailRiwalat'); ?>/<?= $row['ID_DIAGNOSA']; ?>/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-info"> <i class="fas fa-info-circle"></i> Detail</a>
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