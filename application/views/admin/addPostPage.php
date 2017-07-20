<div class="content-wrapper">
   <section class="content-header">
          <h1>
           Add New Blog Post Topic For Paid User
        
           
          </h1>
         
        </section>
    <br />
    <br />
    <br />
        <section class="content">
            <form role="form" action="<?php echo base_url(); ?>admin/addPostPageToDb" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Post Topic</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="posttopic">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Minimum Words</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="minimumwords">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Maximum Words</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="maximumwords">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Money For User</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="money">
                    </div>
                      
                        <div class="form-group">
                      <label for="exampleInputPassword1">Total Limit</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="likelimit">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
 </form>
            
     </section><!-- /.content -->
</div><!-- /.content-wrapper -->
