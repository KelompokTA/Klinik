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
                                <li class="nav-item"><a class="nav-link active" href="#Pelayanan" data-toggle="tab">Pelayanan</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Resep" data-toggle="tab">Resep</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Asesmen" data-toggle="tab">Asesmen</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Diagnosa" data-toggle="tab">Diagnosa</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Diagnosa" data-toggle="tab">Diagnosa</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#/" data-toggle="tab">/</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#Rujukan" data-toggle="tab">Rujukan</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="Pelayanan">
                                    <!-- PELAYANAN -->
                                    <div class="post">
                                        <form role="form" action="save_pelayanan" method="POST">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Pendaftar</label>
                                                <select name="id_pendaftaran" class="form-control select2" style="width: 100%;" <?= ($validation->hasError('id_pendaftaran')) ? 'is-invalid' : ''; ?>">
                                                    <option selected disabled value="<?= old('id_pendaftaran'); ?>"><?= old('id_pendaftaran'); ?></option>
                                                    <?php foreach ($pendaftaran as $row) : ?>
                                                        <?php setlocale(LC_ALL, 'id-ID'); ?>
                                                        <option value="<?= $row['ID_PENDAFTARAN']; ?>"><?= old('id_pendaftaran'); ?><?= $row['NO_RM'] . " - " . $row['NAMA_PASIEN'] . " &nbsp | &nbsp " .   strftime("%A, %d %B %Y - %H:%M", strtotime($row['created_pendaftaran'])); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Biaya Pelayanan</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="number" name="biaya_pelayanan" value="<?= old('biaya_pelayanan'); ?>" class=" form-control <?= ($validation->hasError('biaya_pelayanan')) ? 'is-invalid' : ''; ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Data Pelayanan</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No RM</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Nama Dokter</th>
                                                            <th>Status Dokter</th>
                                                            <th>Biaya Pelayanan</th>
                                                            <th>Total Biaya Resep</th>
                                                            <th>Status Pasien</th>
                                                            <th>Tanggal Pelayanan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        <?php foreach ($pelayanan as $row) : ?>
                                                            <tr>
                                                                <td><?= $no++; ?></td>
                                                                <td><?= $row['NO_RM'] ?></td>
                                                                <td><?= $row['NAMA_PASIEN'] ?></td>
                                                                <td><?= $row['NAMA_DOKTER'] ?></td>
                                                                <td><?= $row['STATUS_DOKTER'] ?></td>
                                                                <td>Rp. <?= $row['BIAYA_PELAYANAN'] ?></td>
                                                                <td class="<?= ($row['TOTAL_BIAYA_RESEP'] == null) ? ' text-info font-weight-bolder ' : '' ?>"><?= ($row['TOTAL_BIAYA_RESEP'] == null) ? ' Tidak Ada Resep ' : 'Rp. ' . $row['TOTAL_BIAYA_RESEP']; ?></td>
                                                                <td class=" <?php if ($row['STATUS_PASIEN'] == "Belum Ada Tindakan") {
                                                                                echo ' text-danger font-weight-bolder ';
                                                                            } else if ($row['STATUS_PASIEN'] == "Rujukan") {
                                                                                echo ' text-warning font-weight-bolder ';
                                                                            }; ?> text-success font-weight-bolder"><?= ($row['STATUS_PASIEN'] == null) ? ' Belum Ada Tindakan ' : $row['STATUS_PASIEN']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    setlocale(LC_ALL, 'id-ID');
                                                                    echo strftime("%A, %d %B %Y - %H:%M", strtotime($row['created_pelayanan'])); ?>
                                                                </td>
                                                                <td>
                                                                    <a href="tambah_resep/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-info">Tambah Resep</a>
                                                                    <a href="tambah_asesmen/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-success">Tambah Tindakan</a>
                                                                    <a href="edit_pelayanan/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-warning">Edit</a>
                                                                    <a href="hapus_pelayanan/<?= $row['ID_PELAYANAN']; ?>" class="btn btn-danger">Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
    const simpan = document.querySelector('#simpan');
    simpan.addEventListener('click', function() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    })
</script>

<?= $this->endSection(); ?>

//- select data paling akhir dari antrian (select * from user orderby id desc limit 1)