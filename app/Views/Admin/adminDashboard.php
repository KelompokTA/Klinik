<?= $this->extend('Layout/Dashboard'); ?>

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
        <img src="assets/img/foto/admin.jpg" class="img-circle elevation-2" alt="User Image">
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
          <a href="<?= base_url('admin') ?>" class="nav-link active">
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
              <a href="<?= base_url('pasienAdmin'); ?>" class="nav-link">
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
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('login'); ?>">logout</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Pasien</h3>
              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-bed"></i>
            </div>
            <a href="pasienAdmin" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Dokter</h3>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="dokterAdmin" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Admin</h3>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="adminAdmin" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Laporan</h3>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <a href="laporanAdmin" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
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
                    <table id="example1" class="table table-bordered table-striped">
                      <thead class="table-info">
                        <tr>
                          <th>No</th>
                          <th>No.RM</th>
                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Umur</th>
                          <th>Alamat Pasien</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pasien as $row) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['NO_RM']; ?></td>
                            <td><?= $row['NAMA_PASIEN']; ?></td>
                            <td><?= $row['JENIS_KELAMIN']; ?></td>
                            <td><?= $row['UMUR']; ?></td>
                            <td><?= $row['ALAMAT_PASIEN']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Admin</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                      <thead class="table-warning">
                        <tr>
                          <th>No</th>
                          <th>Nama Admin</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($admin as $row) : ?>
                          <tr>
                            <td><?= $no++; ?></td>

                            <td><?= $row['NAMA_ADMIN']; ?></td>
                            <td><?= $row['STATUS_ADMIN']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data dokter</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example3" class="table table-bordered table-striped">
                      <thead class="table-success">
                        <tr>
                          <th>No</th>
                          <th>Nama Dokter</th>
                          <th>Status Dokter</th>
                          <th>Hari</th>
                          <th>Jam</th>
                          <th>Poli</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($dokter as $row) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['NAMA_DOKTER']; ?></td>
                            <td><?= $row['STATUS_DOKTER']; ?></td>
                            <td><?= $row['HARI']; ?></td>
                            <td><?= $row['JAM']; ?></td>
                            <td><?= $row['POLI']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Laporan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example4" class="table table-bordered table-striped">
                      <thead class="table-danger">
                        <tr>
                          <th>No</th>
                          <th>ID Transaksi</th>
                          <th>Nama Pasien</th>
                          <th>Nama Admin</th>
                          <th>Tanggal Transaksi</th>
                          <th>Total Biaya</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($dashboard as $row) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['ID_TRANSAKSI']; ?></td>
                            <td><?= $row['NAMA_PASIEN']; ?></td>
                            <td><?= $row['NAMA_ADMIN']; ?></td>
                            <td><?= $row['created_transaksi']; ?></td>
                            <td><?= $row['TOTAL_BIAYA_TRANSAKSI']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?= $this->endSection(); ?>