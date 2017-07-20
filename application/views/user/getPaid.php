<div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
<div>
    <h1>Claim Your Payment Here</h1>
   <?php if($user->userbalance <5): ?>
    
    <h3>Sorry your balance is less then $5. You cannot request for withdraw. Work hard to get Payment</h3>
   <?php else: ?>
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>user/loadPaypalForm"><button class="btn btn-block btn-primary">Paypal Payment</button></a></div>
            
              <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>user/loadManualPalForm"> <button class="btn btn-block btn-primary col-md-6">Manual Payment</button> </a>
         </div>
        
    </div>
    
   <?php endif; ?>
</div>
            
             </section><!-- /.content -->
      </div>