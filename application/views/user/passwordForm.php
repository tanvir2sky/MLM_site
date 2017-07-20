<div class="content-wrapper">
   <section class="content-header">
          <h1>
           Change Your Password Here!
        
           
          </h1>
          <p style="color:red">
          <?php
          
          	if($this->session->userdata('mismatch')){
          	
          		echo $this->session->userdata('mismatch');
          		$this->session->unset_userdata('mismatch');
          	}
          	?>
          </p>
         
        </section>
    <br />
    <br />
    <br />
        <section class="content">
            <form role="form" action="<?php echo base_url(); ?>user/changePasswordOfUser" method="post" data-toggle="validator" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Present Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="presentPassword">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">New Password</label>
                      <input type="password" class="form-control" id="password" placeholder="" required="" name="newPassword">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Confirm Password</label>
                     <input type="password" class="form-control" id="" placeholder="" required="" name="conPassword">
                    </div>
                    
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
 </form>
            
     </section><!-- /.content -->
</div><!-- /.content-wrapper -->