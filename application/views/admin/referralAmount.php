<div class="content-wrapper">
 
     <section class="content-header">
          <h1>
           Mange your each level Referral Amount
            (only decimal values)
          </h1>
          
        </section>
    <form role="form" action="<?php echo base_url(); ?>admin/updateReferralTable" method="post">
         <br/>
            <br/>
            <br/>
            <br/>
         <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 1" name="level1" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level1; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 2" name="level2" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level2; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 3" name="level3" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level3; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 4" name="level4" required=""> 
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current:  <?php echo $amount->level4; ?> </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 5" name="level5" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current:  <?php echo $amount->level5; ?> </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 6" name="level6" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level6; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 7" name="level7" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level7; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 8" name="level8" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level8; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 9" name="level9" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level9; ?>  </button>
                    </span>
       </div>
          <div class="input-group" style="margin-left: 30px">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" placeholder="Edit Your Amount At level 10" name="level10" required="">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Current: <?php echo $amount->level10; ?>  </button>
                    </span>
       </div>
          
         
      <div class="box-footer">
                    <button type="submit" class="btn btn-primary center-block">Submit</button>
                  </div>
                </form>
    
</div><!-- /.content-wrapper -->
 