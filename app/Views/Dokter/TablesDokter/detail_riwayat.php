<?= $this->extend('Layout/Tables'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../../assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PAPSI KLINIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/img/foto/<?= session()->get('FOTO_DOKTER') ?>" class="img-circle elevation-2" alt="User Image">
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
                            <h3 class="card-title">Detail Riwayat Pasien</h3>
                        </div>
                        <div class="card-body">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pasien</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>No RM</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['NO_RM']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['NAMA_PASIEN']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['TEMPAT_LAHIR']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?php setlocale(LC_ALL, 'id-ID');
                                                                                                                                    echo strftime("%d %B %Y", strtotime($row['TANGGAL_LAHIR'])); ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Umur</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['UMUR']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['JENIS_KELAMIN']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['ALAMAT_PASIEN']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">Data Dokter</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nama Dokter</label>
                                                        <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['NAMA_DOKTER']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Status Dokter</label>
                                                        <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['STATUS_DOKTER']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Data Obat</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <?php foreach ($resep as $row) : ?>
                                                    <div class="col-sm-3">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Nama obat</label>
                                                            <input type="text" name="nama_pasien" value="<?= $row['NAMA_OBAT']; ?>" class=" form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Kekuatan Sediaan</label>
                                                            <input type="text" name="nama_pasien" value="<?= $row['KEKUATAN_SEDIAAN']; ?>" class=" form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Bentuk Sediaan</label>
                                                            <input type="text" name="nama_pasien" value="<?= $row['BENTUK_SEDIAAN']; ?>" class=" form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Dosis</label>
                                                            <input type="text" name="nama_pasien" value="<?= $row['DOSIS']; ?>" class=" form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="nama_pasien" value="<?= $row['JUMLAH']; ?>" class=" form-control" readonly>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h3 class="card-title">Riwayat Pemeriksaan</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Keluhan Utama</label>
                                                        <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['KELUHAN_UTAMA']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Keadaan Umum</label>
                                                        <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['KEADAAN_UMUM']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Alergi</label>
                                                        <input type="text" name="nama_pasien" value="<?php foreach ($detail as $row) : ?><?= $row['ALERGI']; ?><?php endforeach; ?>" class=" form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Tekanan Darah</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['TD']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">mmHg</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Nadi</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['N']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">x/m</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Respirasi</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['RR']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">x/m</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Suhu</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['SUHU']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">&degC</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Berat Badan</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['BB']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Kg</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-group">
                                                        <label>Tinggi Badan</label>
                                                        <div class="input-group">
                                                            <input type="number" name="tekanan_darah" value="<?php foreach ($detail as $row) : ?><?= $row['TB']; ?><?php endforeach; ?>" class=" form-control " readonly>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Riwayat Penyakit Dahulu</label>
                                                        <textarea name="rpd" class="form-control" rows="3" readonly><?php foreach ($detail as $row) : ?><?= $row['RPD']; ?><?php endforeach; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Riwayat Penyakit Sekarang</label>
                                                        <textarea name="rpd" class="form-control" rows="3" readonly><?php foreach ($detail as $row) : ?><?= $row['RPS']; ?><?php endforeach; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card card-danger">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Riwayat Diagnosa</h3>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Diagnosa Primer</label>
                                                                            <textarea name="rpd" class="form-control " rows="3" readonly><?php foreach ($detail as $row) : ?><?= $row['DIAGNOSA_PRIMER']; ?><?php endforeach; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Diagnosa Sekunder</label>
                                                                            <textarea name="rpd" class="form-control" rows="3" readonly><?php foreach ($detail as $row) : ?><?= $row['DIAGNOSA_SEKUNDER']; ?><?php endforeach; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Diagnosa Tersier</label>
                                                                            <textarea name="rpd" class="form-control" rows="3" readonly><?php foreach ($detail as $row) : ?><?= $row['DIAGNOSA_TERSIER']; ?><?php endforeach; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?= base_url('riwayatDokter'); ?>" class="btn btn-secondary" style="text-align: center;">Kembali</a>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<?= $this->endSection(); ?>