<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
         Set Message For Users (Simpley Update This Message)
          
          </h1>
          
        </section>
         
        <section class="content">
            
            
            <form role="form" action="<?php echo base_url(); ?>admin/addMessageToDb" method="post">
                    <!-- text input -->
                   
                  
                    
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="8" name="mytext"><?php echo $message; ?></textarea>
                    </div>
                    
                        <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
            
            
            
       </section>
     </div>
       
      