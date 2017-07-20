<div class="content-wrapper">
   <section class="content-header">
          <h1>
           Add New Twitter To follow
        
           
          </h1>
         
        </section>
    <br />
    <br />
    <br />
        <section class="content">
            <form role="form" action="<?php echo base_url(); ?>admin/addTwitterPageToDb" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Twitter Url</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="pageurl">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1"> Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Money For Paid User</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="moneypaid">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Money For Normal User</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="moneynormal">
                    </div>
                      
                        <div class="form-group">
                      <label for="exampleInputPassword1">Follow Limit</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="likelimit">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
 </form>
            
     </section><!-- /.content -->
</div><!-- /.content-wrapper -->
