<div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            
            
            
            
            <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  Youtube View. Stay Atleast 5 Second in the popup page and be sure to like it otherwise no point will be added to your account
             </div>
            
            
          <div class="box-body">
                  <?php if($facebook != null): ?>
                  <?php $f = $facebook->row(); ?>
              <a class="btn btn-block btn-social btn-facebook" href="<?php echo base_url(); ?>user/confirmYoutubeLike"   target="popup" 
  onclick="window.open('<?php echo $f->pageurl; ?>','facebook','width=1000,height=1000',parent.location ='confirmYoutubeLike/<?php echo $f->id; ?>'); return true">
                       
                    <i class="fa fa-youtube"></i> CLICK TO View HERE
                  </a>
                </div>
                
          <?php else : ?>
            <h1>No Job For Today </h1>
            <p>Want to earn more? Start referring people with your referral link/url.<br>
            Get your referral link/url from your Dashboard.</p>
            
            
            <?php  endif; ?>
            
            
        </section><!-- /.content -->
      </div>