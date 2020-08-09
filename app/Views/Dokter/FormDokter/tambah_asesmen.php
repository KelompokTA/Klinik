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
                                <li class="nav-item"><a class="nav-link active" href="#Asesmen" data-toggle="tab">Asesmen</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Diagnosa" data-toggle="tab">Diagnosa</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#/" data-toggle="tab">/</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Rujukan" data-toggle="tab">Rujukan</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Pelayanan">
                                    <div class="post">
                                        <form action="<?= base_url('save_asesmen'); ?>/<?= $id ?>" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class=" form-group">
                                                                <input name="id_pelayanan" type="hidden" value="<?= $id ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keluhan Utama</label>
                                                                <input type="text" name="keluhan_utama" value="<?= old('keluhan_utama'); ?>" class=" form-control <?= ($validation->hasError('keluhan_utama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan keluhan utama ..." autocomplete="off">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Keadaan Umum</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio1" name="keadaan_umum">
                                                                            <label for="customRadio1" class="custom-control-label">Baik</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio2" name="keadaan_umum">
                                                                            <label for="customRadio2" class="custom-control-label">Sesak</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio3" name="keadaan_umum">
                                                                            <label for="customRadio3" class="custom-control-label">Pucat</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-lighter" text-secondary">refresh pilihan Shift+F5</label>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio4" name="keadaan_umum">
                                                                            <label for="customRadio4" class="custom-control-label">Lemah</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio5" name="keadaan_umum">
                                                                            <label for="customRadio5" class="custom-control-label">Kesadaran Menurun</label>
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><input type="radio" id="customRadio6"></span>
                                                                            </div>
                                                                            <input name="keadaan_umum" value="<?= old('keadaan_umum'); ?>" for="customRadio6" type="text" class="form-control" placeholder="lainnya ..." autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label>Tekanan Darah</label>
                                                                        <div class="input-group">
                                                                            <input type="number" name="tekanan_darah" value="<?= old('tekanan_darah'); ?>" class=" form-control <?= ($validation->hasError('tekanan_darah')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">mmHg</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label>Nadi</label>
                                                                        <div class="input-group">
                                                                            <input type="number" name="nadi" value="<?= old('nadi'); ?>" class=" form-control <?= ($validation->hasError('nadi')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">x/m</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label>Respirasi</label>
                                                                        <div class="input-group">
                                                                            <input type="number" name="respirasi" value="<?= old('respirasi'); ?>" class=" form-control <?= ($validation->hasError('respirasi')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">x/m</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label>Suhu</label>
                                                                        <div class="input-group">
                                                                            <input type="number" name="suhu" value="<?= old('suhu'); ?>" class=" form-control <?= ($validation->hasError('suhu')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">&degC</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">Berat Badan</span>
                                                                            </div>
                                                                            <input type="number" name="berat_badan" value="<?= old('berat_badan'); ?>" class=" form-control <?= ($validation->hasError('berat_badan')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">Tinggi Badan</span>
                                                                            </div>
                                                                            <input type="number" name="tinggi_badan" value="<?= old('tinggi_badan'); ?>" class=" form-control <?= ($validation->hasError('tinggi_badan')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Riwayat Penyakit Dahulu</label>
                                                                <textarea name="rpd" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Riwayat Penyakit Sekarang</label>
                                                                <textarea name="rps" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alergi</label>
                                                                <textarea name="alergi" class="form-control" rows="2" placeholder="Enter ..."></textarea>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                                <div class="btn-group" role="group">
                                                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Rencana Tindakan
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                        <button name="rencana_tindakan" value="Diagnosa" type="submit" class="dropdown-item" href="#">Diagnosa</button>
                                                                        <button name="rencana_tindakan" value="Rujuk" type="submit" class="dropdown-item" href="#">Rujuk</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
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

//- select data paling akhir dari antrian (select * from user orderby id desc limit 1)