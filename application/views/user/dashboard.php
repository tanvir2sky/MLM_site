<div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img style="align:middle" width="728" height="90" border="0" src="tanvir.jpg" alt="Image">
                </div>
                
                
            </div>
            <br/>
            <br/>
            
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
            
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $user->userbalance; ?></h3>
                  <p>Total Earning</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
             
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $referral;?></h3>
                  <p>Total Referral</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                
              </div>
             
            </div>
           
           
             <?php if($user->isPaid == 0) : ?>
            <div class="small-box bg-yellow col-lg-4">
                <div class="inner">
                    <h3>NORMAL USER</h3>
                  <p>Be Premium User for only $10</p>
                </div>
                <div class="icon">
                       <a href="<?php echo base_url().'user/paymentOption'; ?>" class="btn btn-info" role="button">CLICK</a>
                </div>
              
             
              </div>
              <?php endif; ?>
            <!-- ./col -->
          </div><!-- /.row -->
          
           
            <div class="col-lg-6 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Your Referral Url</h3>
                  <p><?php echo base_url(); ?>userlogin/urlRegister/<?php echo $user->verificationUrl;?></p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                
              </div>
             
            </div>
        
        <div class="col-md-6">
              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Message From Admin</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                    <h4 style="color:blue"><?php echo $message; ?></h4>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
         
                 
          
          </div>
          
          
          
          <!-- Main row -->
    

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->