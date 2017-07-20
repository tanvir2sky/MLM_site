<div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
              
            <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  Post Writing. Submit the writing and admin will approve your writing
             </div>
         <div class="box-body pad">
             <form action="<?php echo base_url(); ?>user/addPostToDb" method="post">
                    <ul class="wysihtml5-toolbar">

                        <input type="hidden" name="postid" value="<?php echo $id; ?>"/>
                           
<li>
 

</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
          </div> 
        </div>
        
      </div>
    </div>
  </div>
  
</li>
</ul><textarea class="textarea" name="text" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: fbtn10px; display: block;" placeholder="Write Here"></textarea><input type="hidden" name="_wysihtml5_mode" value="1">
                 <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                  </form>
    </div>
            
            
            
             </section><!-- /.content -->
      </div>