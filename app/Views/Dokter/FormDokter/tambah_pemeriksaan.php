<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Klinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/foto/dokter.jpg" class="img-circle elevation-2" alt="User Image">
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
                            <a href="<?= base_url('tambahPemeriksaan') ?>" class="nav-link active">
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
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No.RM</label>
                                            <select name="pasien" class=" form-control <?= ($validation->hasError('pasien')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled value="<?= old('pasien'); ?>"><?= old('pasien'); ?></option>
                                                <?php foreach ($pendaftaran as $row) : ?>
                                                    <option value="<?= $row['ID_PENDAFTARAN']; ?>"><?= old('pasien'); ?><?= $row['NO_RM'] . " - " . $row['NAMA_PASIEN'] . " &nbsp | &nbsp " . $row['created_at']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa Primer</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukkan diagnosa primer ..." autocomplete="off"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa Sekunder</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukkan diagnosa sekunder ..." autocomplete="off"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa Tersier</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukkan diagnosa tersier ..." autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="form-group">
                                                <label>PELAYANAN</label>
                                                <select name="pelayanan" class=" form-control <?= ($validation->hasError('pelayanan')) ? 'is-invalid' : ''; ?>">
                                                    <option selected disabled value="<?= old('pelayanan'); ?>"><?= old('pelayanan'); ?></option>
                                                    <?php foreach ($pelayanan as $row) : ?>
                                                        <option value="<?= $row['ID_PELAYANAN']; ?>"><?= old('pelayanan'); ?><?= $row['created_at'] . " - " . $row['NAMA_DOKTER'] . " - " . $row['STATUS_DOKTER']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Biaya Pelayanan</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="number" name="biaya" value="<?= old('biaya'); ?>" class=" form-control <?= ($validation->hasError('biaya')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Obat</label>
                                                    <select name="obat" class=" form-control <?= ($validation->hasError('obat')) ? 'is-invalid' : ''; ?>">
                                                        <option selected disabled value="<?= old('obat'); ?>"><?= old('obat'); ?></option>
                                                        <?php foreach ($obat as $row) : ?>
                                                            <option value="<?= $row['ID_OBAT']; ?>"><?= old('obat'); ?><?= $row['NAMA_OBAT'] . " - " . $row['SATUAN_OBAT']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input type="number" name="jumlah" value="<?= old('jumlah'); ?>" class=" form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>&nbsp</label>
                                                    <button type="submit" class="form-control btn btn-primary">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Data Obat</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID Obat</th>
                                                            <th>Nama Obat</th>
                                                            <th>Satuan Obat</th>
                                                            <th>Harga Obat</th>
                                                            <th>Jumlah</th>
                                                            <th>Total</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>                                                        
                                                        <?php foreach ($resep as $row) : ?>
                                                            <?php if ($row['ID_PELAYANAN'] == 1 ) : ?>
                                                            <tr>
                                                                <td><?= $no++; ?></td>
                                                                <td><?= $row['ID_OBAT'] ?></td>
                                                                <td><?= $row['NAMA_OBAT'] ?></td>
                                                                <td><?= $row['SATUAN_OBAT'] ?></td>
                                                                <td><?= $row['HARGA_JUAL'] ?>0</td>
                                                                <td><?= $row['JUMLAH'] ?></td>
                                                                <td><?= $row['HARGA_JUAL'] * $row['JUMLAH'] ?></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                                </td>
                                                            </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div>
                                            <h3>SUB Total : </h3>
                                            <h3>15000</h3>
                                            <button type="button" class="btn btn-success btn-lg float-md-right">Submit</button>
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