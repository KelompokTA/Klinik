<?= $this->extend('Layout/Login'); ?>

<?= $this->section('content'); ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Account Login
            </span>
            <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                <div class="alert alert-warning">
                    <?php echo session()->getFlashdata('gagal'); ?>
                </div>
            <?php } ?>
            <?php echo form_open('login/cek_login') ?>


            <div class="wrap-input100 validate-input" data-validate="Enter email">
                <input class="input100" type="text" name="email" placeholder="Email address" required>
                <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="password" placeholder="Password" required>
                <span class="focus-input100" data-placeholder="&#xe80f;"></span>
            </div>

            <div class="container-login100-form-btn m-t-30">
                <button type="submit" class="login100-form-btn">
                    Login
                </button>
            </div>
            <div class="container-login100-form-btn m-t-30">
                <a class="login100-form-btn" href="<?= base_url('admin') ?>">Dashboard Admin</a>
            </div>
            <div class="container-login100-form-btn m-t-30">
                <a class="login100-form-btn" href="<?= base_url('dokter') ?>">Dashboard Dokter</a>
            </div>
            <div class="container-login100-form-btn m-t-30">
                <a class="login100-form-btn" href="<?= base_url('/') ?>">Kembali</a>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>