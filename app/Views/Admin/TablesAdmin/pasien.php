<?= $this->extend('Layout/Tables'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="assets/img/klinik.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PAPSI Klinik</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/img/foto/<?= session()->get('FOTO_ADMIN') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= session()->get('NAMA_ADMIN') ?></a>
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
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-bed"></i>
                <p>
                  Pasien
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('tambahPasien'); ?>" class="nav-link">
                    <i class="fas fa-plus"></i> <i class=" fas fa-bed"></i>
                    <p>Tambah Pasien Baru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('pendaftaran'); ?>" class="nav-link">
                    <i class="fas fa-plus"></i> <i class="fas fa-procedures"></i>
                    <p>Tambah Pemeriksaan</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-user-md"></i>
                <p>
                  Dokter
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                  <a href="<?= base_url('tambahDokter'); ?>" class="nav-link">
                    <i class="fas fa-plus"></i> <i class="fas fa-user-md"></i>
                    <p>
                      Tambah Dokter
                    </p>
                  </a>
                </li>
                <!-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link active">
                    <i class="fas fa-edit"></i> <i class="fas fa-user-md"></i>
                    <p>
                      Edit Dokter
                    </p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-hospital-user"></i>
                <p>
                  Admin
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                  <a href="<?= base_url('tambahAdmin'); ?>" class="nav-link">
                    <i class="fas fa-plus"></i> <i class="fas fa-hospital-user"></i>
                    <p>
                      Tambah Admin
                    </p>
                  </a>
                </li>
                <!-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link active">
                    <i class="fas fa-edit"></i> <i class="fas fa-hospital-user"></i>
                    <p>
                      Edit Admin
                    </p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="<?= base_url('pembayaran'); ?>" class="nav-link">
                <i class="fas fa-credit-card" aria-hidden="true"></i>
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
              <a href="<?= base_url('pasienAdmin'); ?>" class="nav-link active">
                <i class="fas fa-bed"></i>
                <p>Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('dokterAdmin'); ?>" class="nav-link">
                <i class="fas fa-user-md"></i>
                <p>Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('jadwalAdmin'); ?>" class="nav-link">
                <i class="fas fa-calendar"></i>
                <p>Jadwal Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('adminAdmin'); ?>" class="nav-link">
                <i class="fas fa-hospital-user"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporanAdmin'); ?>" class="nav-link">
                <i class="fas fa-chart-line"></i>
                <p>Laporan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('suratRujukan'); ?>" class="nav-link">
                <i class="fas fa-paper-plane"></i>
                <p>Rujukan</p>
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
          <h1>Pasien</h1>
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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pasien</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div> <a href="tambahPasien" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Pasien</a> </div>
              <table id="example1" class="table table-bordered table-striped" style="text-align:center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No RM</th>
                    <th>No KTP</th>
                    <th>Nama Pasien</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($pasien as $row) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row['NO_RM']; ?></td>
                      <td><?= $row['NO_KTP']; ?></td>
                      <td><?= $row['NAMA_PASIEN']; ?></td>
                      <td><?= $row['TEMPAT_LAHIR']; ?></td>
                      <td><?= $row['TANGGAL_LAHIR']; ?></td>
                      <td><?= $row['JENIS_KELAMIN']; ?></td>
                      <td><?= $row['UMUR']; ?></td>
                      <td><?= $row['ALAMAT_PASIEN']; ?></td>
                      <td><?= $row['KELURAHAN']; ?></td>
                      <td><?= $row['KECAMATAN']; ?></td>
                      <td><?= $row['KOTA']; ?></td>
                      <td><?= $row['PROVINSI']; ?></th>
                      <td><?= $row['TELFON_PASIEN']; ?></td>
                      <td>
                        <a href="cetak_kartu/<?= $row['ID_PASIEN']; ?>" class="btn btn-primary" value="<?= $row['ID_PASIEN']; ?>"> <i class="fas fa-share"></i> Cetak Kartu</a>
                        <a href="edit_pasien/<?= $row['ID_PASIEN']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                        <a href="hapus_pasien/<?= $row['ID_PASIEN']; ?>" class=" btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
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