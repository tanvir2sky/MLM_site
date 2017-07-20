<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Jobs LogOn</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link href="<?php echo base_url();?>home/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>home/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="<?php echo base_url(); ?>"><span class="color-highlight">Jobs</span>LogOn</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>userlogin/register">Signup</a></li>
          <li><a href="<?php echo base_url(); ?>userlogin">Login</a></li>
          <li><a href="<?php echo base_url(); ?>home/contact">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
    <div class="login-box">
      <div class="login-logo">
      <p><?php if(isset($name)) {echo $name;} ?>LOGIN</p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
          <?php if($this->session->userdata('registeSuccess')) :?>
           <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->userdata('registeSuccess'); ?>
        </div>
          <?php endif; $this->session->unset_userdata('registeSuccess');?>
          
          <?php if($this->session->userdata('loginFail')) :?>
           <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                    USER NAME OR PASSWORD DIDNT MATCH!! TRY AGAIN
        </div>
          <?php endif;$this->session->unset_userdata('loginFail'); ?>
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo base_url(); ?><?php if(isset($uri)){ echo 'adminlogin';} 
        else { echo 'userlogin';} ?>/checkLogin" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="useremail" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="userpassword" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      <?php
      
      	if(isset($uri)){}
      	else{
      	
      	echo '<a href="'.base_url().'/userlogin/register"> Not registered ? Signup Here</a>';
      	}
      
       ?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>theme/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>theme/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>theme/plugins/iCheck/icheck.min.js"></script>
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
</html>