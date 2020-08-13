<?= $this->extend('Layout/Form'); ?>

<?= $this->section('content'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../../assets/img/klinik.png" alt="Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PAPSI KLINIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/img/foto/<?= session()->get('FOTO_DOKTER') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('NAMA_DOKTER') ?></a>
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
                                    <a href="<?= base_url('tambahObat') ?>" class="nav-link active">
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
                    <h1>Form Tambah Obat</h1>
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
                            <form role="form" action="save_obat" method="post">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama_obat" value="<?= old('nama_obat'); ?>" class=" form-control <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nama obat ..." autocomplete="off">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Kekuatan Sediaan <?= $validation->listErrors(); ?></label>
                                                    <input type="text" name="kekuatan_sediaan" value="<?= old('kekuatan_sediaan'); ?>" class=" form-control <?= ($validation->hasError('kekuatan_sediaan')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan kekuatan sediaan ..." autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Bentuk Sediaan</label>
                                                    <select name="bentuk_sediaan" class=" form-control <?= ($validation->hasError('bentuk_sediaan')) ? 'is-invalid' : ''; ?>">
                                                        <option selected disabled value="<?= old('bentuk_sediaan'); ?>"><?= old('bentuk_sediaan'); ?></option>
                                                        <option value="Kapsul">Kapsul</option>
                                                        <option value="Tablet">Tablet</option>
                                                        <option value="Ampul">Ampul</option>
                                                        <option value="Tube">Tube</option>
                                                        <option value="Capsul">Capsul</option>
                                                        <option value="Sirup">Sirup</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Rute Pemberian</label>
                                            <select name="rute_pemberian" class=" form-control <?= ($validation->hasError('rute_pemberian')) ? 'is-invalid' : ''; ?>">
                                                <option selected disabled value="<?= old('rute_pemberian'); ?>"><?= old('rute_pemberian'); ?></option>
                                                <option value="Oral">Oral</option>
                                                <option value="Intravena">Intravena</option>
                                                <option value="Inhalasi">Inhalasi</option>
                                                <option value="transdermal">transdermal</option>
                                                <option value="okular">Okular</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No Batch</label>
                                            <input type="text" name="no_batch" value="<?= old('no_batch'); ?>" class=" form-control <?= ($validation->hasError('no_batch')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan nomor batch ..." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Expired</label>
                                            <input type="date" name="expired" value="<?= old('expired'); ?>" class=" form-control <?= ($validation->hasError('expired')) ? 'is-invalid' : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" name="stok" value="<?= old('stok'); ?>" class=" form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan jumlah stok ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input type="number" name="harga_beli" value="<?= old('harga_beli'); ?>" class=" form-control <?= ($validation->hasError('harga_beli')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan harga beli obat ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input type="number" name="harga_jual" value="<?= old('harga_jual'); ?>" class=" form-control <?= ($validation->hasError('harga_jual')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan harga jual obat ...">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success" id="simpan"><i class="fas fa-save"></i> Submit</button>
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