<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN | Log in</title>

  <!-- favicon -->        
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/logo/logo_round.png') ?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/fontawesome-free/css/all.min.css') ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <div class="text-danger text-center">
        <?php $this->session = \Config\Services::session(); echo $this->session->getFlashdata('msg'); ?>
      </div>

      <form action="Login/auth" method="post">
        <div class="input-group mb-3">
          <?= csrf_field() ?>
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>
</body>
</html>
