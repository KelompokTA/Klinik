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
                            <a href="<?= base_url('tambahPelayanan') ?>" class="nav-link">
                                <i class="fas fa-plus"></i> <i class="fas fa-hand-holding-medical"></i>
                                <p>pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
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
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="fas fa-edit"></i> <i class="fas fa-pills"></i>
                                        <p>Edit obat</p>
                                    </a>
                                </li>
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
                    <h1>Form Edit Obat</h1>
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
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Masukkan data Obat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" action="update_obat/<?= $obat['ID_OBAT'] ?>" method="POST">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <input type="hidden" name="id_obat" value="<?= $obat['ID_OBAT'] ?>" class="form-control">
                                        <div class="form-group">
                                            <label>Nama Obat <?= $validation->listErrors(); ?></label>
                                            <input type="text" name="nama_obat" value="<?= $obat['NAMA_OBAT'] ?>" class=" form-control <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama obat ..." autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan Obat</label>
                                            <input type="text" name="satuan_obat" value="<?= $obat['SATUAN_OBAT'] ?>" class="form-control <?= ($validation->hasError('satuan_obat')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan satuan obat ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Rute Pemberian</label>
                                            <select name="rute_pemberian" class=" form-control <?= ($validation->hasError('rute_pemberian')) ? 'is-invalid' : ''; ?>">
                                                <option selected value="<?= $obat['RUTE_PEMBERIAN'] ?>"><?= $obat['RUTE_PEMBERIAN'] ?></option>
                                                <option <?= ($obat['RUTE_PEMBERIAN'] == "Oral") ? 'selected="selected"' : 'Oral'; ?>>Oral</option>
                                                <option <?= ($obat['RUTE_PEMBERIAN'] == "Intravena") ? 'selected="selected"' : 'Intravena'; ?>>Intravena</option>
                                                <option <?= ($obat['RUTE_PEMBERIAN'] == "Inhalasi") ? 'selected="selected"' : 'Inhalasi'; ?>>Inhalasi</option>
                                                <option <?= ($obat['RUTE_PEMBERIAN'] == "Transdermal") ? 'selected="selected"' : 'Transdermal'; ?>>transdermal</option>
                                                <option <?= ($obat['RUTE_PEMBERIAN'] == "Okular") ? 'selected="selected"' : 'Okular'; ?>>Okular</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dosis</label>
                                            <input type="text" name="dosis" value="<?= $obat['DOSIS'] ?>" class=" form-control <?= ($validation->hasError('dosis')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Dosis pakai ...">
                                        </div>
                                        <div class="form-group">
                                            <label>No Batch</label>
                                            <input type="text" name="no_batch" value="<?= $obat['NO_BATCH'] ?>" class=" form-control <?= ($validation->hasError('no_batch')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomor batch ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Expired</label>
                                            <input type="date" name="expired" value="<?= date('Y-m-d', strtotime($obat["EXPIRED"])) ?>" class=" form-control <?= ($validation->hasError('expired')) ? 'is-invalid' : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input type="number" name="harga_beli" value="<?= $obat['HARGA_BELI'] ?>" class=" form-control <?= ($validation->hasError('harga_beli')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan harga beli obat ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input type="number" name="harga_jual" value="<?= $obat['HARGA_JUAL'] ?>" class=" form-control <?= ($validation->hasError('harga_jual')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan harga jual obat ...">
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