<?= $this->extend('Layout/Dashboard'); ?>

<?= $this->section('content'); ?>



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Klinik</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/img/arif.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Arif</a>
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
                  <a href="tambahPasien" class="nav-link">
                    <i class="fa fa-plus"></i>
                    <p>Tambah Pasien</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="suratRujukan" class="nav-link">
                    <i class="fa fa-paper-plane"></i>
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
                <i class="fas fa-bed"></i>
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
        <section class="col-lg-6 connectedSortable">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pasien</h3>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead class="table-info">
                      <tr>
                        <th>No</th>
                        <th>No RM</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>00001</td>
                        <td>Puspa sing ayu dewe</td>
                        <td>Perempuan</td>
                        <td>19</td>
                        <td>Jl. jalan ke surabaya</td>
                      </tr>
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
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead class="table-warning">
                      <tr>
                        <th>No</th>
                        <th>Nama Admin</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($admin as $a) : ?>
                      <tr>
                        <td>01</td>
                        <td>Puspa sing ayu dewe</td>
                        <td>Farmasi</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="col-lg-6 connectedSortable">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Dokter</h3>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead class="table-success">
                      <tr>
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>Puspa sing ayu dewe</td>
                        <td>Spesialis Jantung</td>
                      </tr>
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
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead class="table-danger">
                      <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Nama Pasien</th>
                        <th>Nama User</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Biaya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>00001</td>
                        <td>Puspa sing ayu dewe</td>
                        <td>Puspa sing ayu dewe</td>
                        <td>00-00-0000</td>
                        <td>Rp.20.000.000</td>
                      </tr>
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