<div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
              
            <h1>Add New Blog</h1>
         <div class="box-body pad">
             <form action="<?php echo base_url(); ?>admin/addBlogPostToDb" method="post" enctype="multipart/form-data">
                 
                  <div class="form-group">
                      <label for="exampleInputEmail1">Blog Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="" name="blogtitle">
                    </div>
                    <ul class="wysihtml5-toolbar">

                       
                           
<li>
 

</li>
 <label for="exampleInputEmail1">Blog Body</label>
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
</ul><textarea class="textarea" name="blogbody" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: fbtn10px; display: block;" placeholder="Write Here"></textarea><input type="hidden" name="_wysihtml5_mode" value="1">
    <div class="form-group">
                      <label for="exampleInputFile">Insert Post Image</label>
                      <input type="file" id="exampleInputFile" name="blogimage">
                      <p class="help-block">Must Be this size</p>
                    </div>                 

<div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                  </form>
    </div>
            
            
            
             </section><!-- /.content -->
      </div>