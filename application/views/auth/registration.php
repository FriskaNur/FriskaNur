<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1">Registration</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Creat an Account</p>

      <form action="<?= base_url('auth/registration'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" value="<?= set_value('first_name'); ?>" id="first_name" name="first_name" class="form-control" placeholder="First name">
          <input type="text" value="<?= set_value('last_name'); ?>" id="last_name" name="last_name" class="form-control" placeholder="Last name">
        </div>
        <small class="text-danger"><?= form_error('first_name'); ?></small>
        <small class="text-danger"><?= form_error('last_name'); ?></small>

        <div class="input-group mb-3">
          <input type="text" value="<?= set_value('email'); ?>" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('email'); ?></small>

        <div class="input-group mb-3">
          <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="text-danger"><?= form_error('password1'); ?></small>

        <div class="input-group mb-3">
          <input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<hr>
      <a href="<?= base_url('auth'); ?>" class="text-center">Already have an account? Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
