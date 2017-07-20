<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup | Jobs LogOn</title>
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
  <body class="hold-transition register-page">
  
  
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
    <div class="register-box">
      <div class="register-logo">
        <p>Registration</p>
      </div>
        <?php if($this->session->userdata('errorLogin')) :?>
           <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   <?php echo $this->session->userdata('errorLogin'); ?>
        </div>
          <?php endif;$this->session->unset_userdata('errorLogin'); ?>
       
      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="<?php echo base_url(); ?>userlogin/confirmRegister" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" name="username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="useremail" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="userpassword" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
              <?php  if(isset($refemail)) : ?>
          <div class="form-group has-feedback">
            
            <input type="text" class="form-control" placeholder="" name="referralemail" value="<?php echo $refemail; ?>">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
            <?php else: ?>
            <div class="form-group has-feedback">
            
            <input type="text" class="form-control" placeholder="Referral Email / Not Required" name="referralemail" >
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
            
            
            <?php endif; ?>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                 
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

     

        <a href="<?php echo base_url(); ?>userlogin" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

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