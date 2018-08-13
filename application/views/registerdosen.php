<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url().'login'; ?>"><img src="<?php echo base_url(); ?>asset/Utama.png" width="25%" height="25%"><br><b>Bimbingan Proposal Online</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftar Akun Dosen<br>
    <?php if (isset($pesan)) {echo $pesan;} ?>
    <?php if (isset($errorMsg)) {echo $errorMsg;} ?>
    </p>

    <form action="<?php echo base_url('c_front/RegisterDosen');?>" method="post">
      <?php echo $this->session->flashdata('msg'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"><?php echo form_error('username');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama_user" placeholder="Nama" required>
        <span class="glyphicon glyphicon-user form-control-feedback"><?php echo form_error('nama');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nid" placeholder="NID" required>
        <span class="glyphicon glyphicon-user form-control-feedback"><?php echo form_error('nid');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"><?php echo form_error('password');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="confirmpswd" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"><?php echo form_error('confirmpswd');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"><?php echo form_error('email');?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" name="level" value="Dosen">
      </div>

      <div class="row">
        <div class="col-xs-12">
         
          <button type="submit" class="btn btn-primary btn-block btn-flat" >Register</button>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
    </form>


    <a href="<?php echo base_url('login');?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
