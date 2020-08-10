<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Klinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/img/foto/dokter.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Dokter</a>
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
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('tambahPelayanan') ?>" class="nav-link active">
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
                            <a href="<?= base_url('riwayatDokter'); ?>" class="nav-link">
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
                    <h1>Form Pemeriksaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=" <?= base_url('dokter'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('login'); ?>">logout</a></li>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link disabled" href="#Pelayanan" data-toggle="tab">Pelayanan</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Resep" data-toggle="tab">Resep</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Asesmen" data-toggle="tab">Asesmen</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Diagnosa" data-toggle="tab">Diagnosa</a></>
                                <li class="nav-item"><a class="nav-link disabled" href="#/" data-toggle="tab">/</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#Rujukan" data-toggle="tab">Rujukan</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Pelayanan">
                                    <!-- PELAYANAN -->
                                    <div class="post">
                                        <form role="form" action="<?= base_url('save_rujukan'); ?>/<?= $id ?>" method="POST">
                                            <div class=" form-group">
                                                <input name="id_asesmen" type="hidden" value="<?php foreach ($asesmen as $row) : ?><?= $row['MAX(ID_ASESMEN)']; ?><?php endforeach; ?>">
                                            </div>
                                            <div class=" form-group">
                                                <input name="id_diagnosa" type="hidden" value="<?php foreach ($diagnosa as $row) : ?><?= $row['DIAGNOSA_PRIMER']; ?><?php endforeach; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Diagnosa primer</label>
                                                <textarea name="diagnosa_primer" class="form-control" rows="4" placeholder="Belum ada diagnosa ..." readonly><?php foreach ($diagnosa as $row) : ?><?= $row['DIAGNOSA_PRIMER']; ?><?php endforeach; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Diagnosa Sekunder</label>
                                                <textarea name="diagnosa_sekunder" class="form-control" rows="3" placeholder="Belum ada diagnosa ..." readonly><?php foreach ($diagnosa as $row) : ?><?= $row['DIAGNOSA_SEKUNDER']; ?><?php endforeach; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Diagnosa Tersier</label>
                                                <textarea name="diagnosa_tersier" class="form-control" rows="2" placeholder="Belum ada diagnosa ..." readonly><?php foreach ($diagnosa as $row) : ?><?= $row['DIAGNOSA_TERSIER']; ?><?php endforeach; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Alasan Rujuk</label>
                                                <textarea name="alasan_rujuk" class="form-control" rows="2" placeholder="Masukan alasan rujuk..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Tujuan Rujuk</label>
                                                <div class="input-group">
                                                    <input type="text" name="tujuan_rujuk" class=" form-control <?= ($validation->hasError('tujuan_rujuk')) ? 'is-invalid' : ''; ?>" placeholder="Masukan tujuan rujuk kemana ..." autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class=" tab-pane" id="Resep">
                                    <!-- KOSONG -->
                                </div>

                                <div class="tab-pane" id="Riwayat">
                                    <!-- KOSONG -->
                                </div>

                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>