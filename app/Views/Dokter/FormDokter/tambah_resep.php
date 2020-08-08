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
                                <li class="nav-item"><a class="nav-link active" href="#Resep" data-toggle="tab">Resep</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Riwayat" data-toggle="tab">Riwayat</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Pelayanan">
                                    <div class="post">
                                        <form action="save_resep/<?= $id ?>" method="POST">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_pelayanan" value="<?= $id; ?>">
                                                        <label>Obat</label>
                                                        <select name="id_obat" class=" form-control <?= ($validation->hasError('id_obat')) ? 'is-invalid' : ''; ?>">
                                                            <option selected disabled value="<?= old('id_obat'); ?>"></option>
                                                            <?php foreach ($obat as $row) : ?>
                                                                <option value="<?= $row['ID_OBAT'] . "-" . $row['HARGA_JUAL']; ?>"><?= old('obat'); ?><?= $row['NAMA_OBAT'] . " - " . $row['SATUAN_OBAT'] . " - " . $row['HARGA_JUAL']; ?></option>
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
                                        </form>
                                        <form action="update_pelayanan/<?= $id ?>" method="POST">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Data Obat</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Obat</th>
                                                                <th>Satuan Obat</th>
                                                                <th>Dosis</th>
                                                                <th>Harga Obat</th>
                                                                <th>Jumlah</th>
                                                                <th>Total</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($resep as $row) : ?>
                                                                <tr>
                                                                    <td><?= $no++; ?></td>
                                                                    <td><?= $row['NAMA_OBAT']; ?></td>
                                                                    <td><?= $row['SATUAN_OBAT']; ?></td>
                                                                    <td><?= $row['DOSIS']; ?></td>
                                                                    <td class="text-right">Rp. <?= $row['HARGA_JUAL']; ?></td>
                                                                    <td><?= $row['JUMLAH'] ?></td>
                                                                    <td class="text-right">Rp. <?= $row['TOTAL_BIAYA_OBAT'];?></td>
                                                                    <td>
                                                                        <a href="hapus_resep/<?= $row['ID_OBAT']; ?>/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-danger">Hapus</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">kembali</button>
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

<script>
    $('.btn btn-success').on('click', 'a', function() {
        $('.nav-link disabled').removeClass('disabled');
        $(this).addClass('active');
    });
</script>

<?= $this->endSection(); ?>

//- select data paling akhir dari antrian (select * from user orderby id desc limit 1)