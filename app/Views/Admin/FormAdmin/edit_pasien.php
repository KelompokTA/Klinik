<?= $this->extend('Layout/Form'); ?>

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
                <img src="assets/img//foto/arif.jpg" class="img-circle elevation-2" alt="User Image">
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
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class=" fas fa-bed"></i>
                                <p>
                                    Pasien
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="tambahPasien" class="nav-link active">
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
                            <a href="pasienAdmin" class="nav-link">
                                <i class=" fas fa-bed"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokterAdmin" class="nav-link">
                                <i class="fa fa-user-md"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminAdmin" class="nav-link">
                                <i class="fa fa-user"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="laporanAdmin" class="nav-link">
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
                    <h1>Edit Data Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="<?= base_url('login'); ?>">logout</a></li>
                    </ol>
                </div>
                <?= $validation->listErrors(); ?>
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
                            <h3 class="card-title">Masukkan data pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" action="update_pasien/<?= $pasien['ID_PASIEN'] ?>" method="POST">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <input type="hidden" name="id_pasien" value="<?= $pasien['ID_PASIEN'] ?>" class="form-control">
                                        <div class="form-group">
                                            <label>No RM</label>
                                            <input type="text" name="no_rm" value="<?= $pasien['NO_RM']; ?>" class=" form-control <?= ($validation->hasError('no_rm')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomer Rekam Medik ..." autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <input type="text" name="no_ktp" value="<?= $pasien['NO_KTP']; ?>" class=" form-control <?= ($validation->hasError('no_ktp')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomer Kartu Tanda Penduduk ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien <?= $validation->listErrors(); ?></label>
                                            <input type="text" name="nama_pasien" value="<?= $pasien['NAMA_PASIEN']; ?>" class=" form-control <?= ($validation->hasError('nama_pasien')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama pasien ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="<?= $pasien['TEMPAT_LAHIR']; ?>" class=" form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan tempat lahir ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" value="<?= $pasien['TANGGAL_LAHIR']; ?>" class=" form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class=" form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled><?= $pasien['JENIS_KELAMIN'] ?></option>
                                                <option <?= ($pasien['JENIS_KELAMIN'] == "Laki-laki") ? 'selected="selected"' : 'Laki-laki'; ?>>Laki-laki</option>
                                                <option <?= ($pasien['JENIS_KELAMIN'] == "Perempuan") ? 'selected="selected"' : 'Perempuan'; ?>>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="number" name="umur" value="<?= $pasien['UMUR']; ?>" class=" form-control <?= ($validation->hasError('umur')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan umur ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" value="<?= $pasien['ALAMAT_PASIEN']; ?>" class=" form-control<?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" rows="3" placeholder="Masukkan alamat ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelurahan/Desa</label>
                                            <select name="kelurahan" value="<?= $pasien['KELURAHAN']; ?>" class=" form-control <?= ($validation->hasError('kelurahan')) ? 'is-invalid' : ''; ?>">

                                                <option selected disabled><?= $pasien['KELURAHAN'] ?></option>
                                                <option <?= ($pasien['KELURAHAN'] == "Kramat") ? 'selected="selected"' : 'Kramat'; ?>>Kramat</option>
                                                <option <?= ($pasien['KELURAHAN'] == "Ganung") ? 'selected="selected"' : 'Ganung'; ?>>Ganung</option>
                                                <option <?= ($pasien['KELURAHAN'] == "Lor") ? 'selected="selected"' : 'Lor'; ?>>Lor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select name="kecamatan" value="<?= $pasien['KECAMATAN']; ?>" class=" form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled><?= $pasien['KECAMATAN'] ?></option>
                                                <option <?= ($pasien['KECAMATAN'] == "Nganjuk") ? 'selected="selected"' : 'Nganjuk'; ?>>Nganjuk</option>
                                                <option <?= ($pasien['KECAMATAN'] == "Wilangan") ? 'selected="selected"' : 'Wilangan'; ?>>Wilangan</option>
                                                <option <?= ($pasien['KECAMATAN'] == "Caruban") ? 'selected="selected"' : 'Caruban'; ?>>Caruban</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <select name="kota" value="<?= $pasien['KOTA']; ?>" class=" form-control <?= ($validation->hasError('kota')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled><?= $pasien['KOTA'] ?></option>
                                                <option <?= ($pasien['KOTA'] == "Nganjuk") ? 'selected="selected"' : 'Nganjuk'; ?>>Nganjuk</option>
                                                <option <?= ($pasien['KOTA'] == "Sukabumi") ? 'selected="selected"' : 'Sukabumi'; ?>>Sukabumi</option>
                                                <option <?= ($pasien['KOTA'] == "Surabaya") ? 'selected="selected"' : 'Surabaya'; ?>>Surabaya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select name="provinsi" value="<?= $pasien['PROVINSI']; ?>" class=" form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled><?= $pasien['PROVINSI'] ?></option>
                                                <option <?= ($pasien['PROVINSI'] == "Jawa Barat") ? 'selected="selected"' : 'Jawa Barat'; ?>>Jawa Barat</option>
                                                <option <?= ($pasien['PROVINSI'] == "Jawa Tengah") ? 'selected="selected"' : 'Jawa Tengah'; ?>>Jawa Tengah</option>
                                                <option <?= ($pasien['PROVINSI'] == "Jawa Timur") ? 'selected="selected"' : 'Jawa Timur'; ?>>Jawa Timur</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input type="text" name="telfon_pasien" value="<?= $pasien['NO_TELFONE_PASIEN']; ?>" class=" form-control <?= ($validation->hasError('telfon_pasien')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomer telepon ...">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success">Submit</button>
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