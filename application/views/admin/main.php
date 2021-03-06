<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>theme/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Admin</b>Panel</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>PANEL</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
           
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                
              
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="<?php echo base_url();?>admin/logout" class="dropdown-toggle" >
                  <i class="fa fa-sign-out"></i>
                  <span class="label label-danger">LOGOUT</span>
                </a>
               
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle">
                 
                  <span class="hidden-xs"><?php echo $admin->adminname; ?></span>
                </a>
                
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-sign-out"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <br/>
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?php echo base_url() ?>admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class=""></i>
              </a>
              
            </li>
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewAllUser">
                <i class="fa fa-edit"></i> <span>VIEW ALL USERS</span>
                <i class=""></i>
              </a>
              
            </li>
            
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Manage Referral Amount</span>
                <span class="label label-primary pull-right">2</span>
              </a>
            <ul class="treeview-menu">
              <li class="">
              <a href="<?php echo base_url() ?>admin/editLevelAmount">
                <i class="fa fa-edit"></i> <span>Manage Unpaid Referral</span>
                <i class=""></i>
              </a>
              
            </li>
                 <li class="">
              <a href="<?php echo base_url() ?>admin/editLevelAmountPaid">
                <i class="fa fa-edit"></i> <span>Manage Paid Referral</span>
                <i class=""></i>
              </a>
              
            </li>
                
              </ul>
            </li>
            
             <li class="">
              <a href="<?php echo base_url() ?>admin/managePaidReferral">
                <i class="fa fa-dollar"></i> <span>Manage Paid Referral</span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/addFacebookPage">
                <i class="fa fa-facebook"></i> <span>Add Facebook Page</span>
                <i class=""></i>
              </a>
              
            </li>
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewEditFacebook">
                <i class="fa fa-edit"></i> <span>View/Delete Facebook Page</span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/addYoutubePage">
                <i class="fa fa-youtube"></i> <span>Add Youtube Page</span>
                <i class=""></i>
              </a>
              
            </li>
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewEditYoutube">
                <i class="fa fa-edit"></i> <span>View/Delete Youtube Page</span>
                <i class=""></i>
              </a>
              
            </li>
            
            
             <li class="">
              <a href="<?php echo base_url() ?>admin/addTwitterPage">
                <i class="fa fa-twitter"></i> <span>Add Twitter </span>
                <i class=""></i>
              </a>
              
            </li>
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewEditTwitter">
                <i class="fa fa-edit"></i> <span>View/Delete Twiiter </span>
                <i class=""></i>
              </a>
              
            </li>
            
            
             <li class="">
              <a href="<?php echo base_url() ?>admin/addPostPage">
                <i class="fa fa-wordpress"></i> <span>Add New Write Topic </span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewEditPost">
                <i class="fa fa-edit"></i> <span>View/Delete Post Topic </span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewAllSubmittedPost">
                <i class="fa fa-edit"></i> <span>View All Submitted Post </span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/viewPaymentRequest">
                <i class="fa fa-dollar"></i> <span>Payment Request</span>
                <i class=""></i>
              </a>
              
            </li>
            
              <li class="">
              <a href="<?php echo base_url() ?>admin/viewAllUserTrans">
                <i class="fa fa-edit"></i> <span>VIEW ALL Payment</span>
                <i class=""></i>
              </a>
              
            </li>
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/manualPaymentRequest">
                <i class="fa fa-edit"></i> <span>Manual Payment Request</span>
                <i class=""></i>
              </a>
              
            </li>
            
            
            <li class="">
              <a href="<?php echo base_url() ?>admin/messageForUser">
                <i class="fa fa-pencil"></i> <span>Message For Users</span>
                <i class=""></i>
              </a>
              
            </li>
            
            
              <!-- Blog Menu Goes here -->
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Manage Blog</span>
                <span class="label label-primary pull-right">2</span>
              </a>
            <ul class="treeview-menu">
              <li class="">
              <a href="<?php echo base_url() ?>admin/addNewBlogPost">
                <i class="fa fa-plus"></i> <span>Add New Blog</span>
                <i class=""></i>
              </a>
              
            </li>
                 <li class="">
              <a href="<?php echo base_url() ?>admin/viewOrEditBlogPost">
                <i class="fa fa-edit"></i> <span>View Or Edit Blog</span>
                <i class=""></i>
              </a>
              
            </li>
                
              </ul>
            </li>
            
            
            
           
          </ul>
        </section>
        
      </aside>

  
        
       
        <!-- Main content goes here -->
        
        
        
        <?php 
            echo $inner;
        
        ?>
        
        
        
        
        
        
        
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>theme/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>theme/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>theme/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>theme/plugins/datatables/dataTables.bootstrap.min.js"></script>
     
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url();?>theme/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>theme/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>theme/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url();?>theme/plugins/daterangepicker/daterangepicker.js"></script>
     
    <!-- datepicker -->
    <script src="<?php echo base_url();?>theme/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>theme/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>theme/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>theme/dist/js/pages/dashboard.js"></script>
     
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>theme/dist/js/demo.js"></script>
    
   
     <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>