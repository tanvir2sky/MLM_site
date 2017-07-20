<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW AND Edit Al Blog
          
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">USERS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                     
                        <th>Blog Title</th>
                        <th>Sample Body</th>
                       <th>Image</th>
                        <th>Publish/unpublish</th>
                        <th>Edit Blog</th>
                        <th>Delete Blog</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($blog->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['blogtitle'] ;?></td>
                        <td><?php echo substr($u['blogbody'],0,30)  ;?></td>
                        <td><img src="<?php echo base_url(); ?>images/<?php echo $u['blogimage']; ?>" alt="Smiley face" height="100" width="100"></td>
                       
                       <?php if($u['isPublished'] == 1): ?>
                        <td><?php echo'<a href="'.base_url().'admin/unpublishBlog/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">Unpublish</button></a>';?></td>
                        <?php endif; ?>
                        
                        <?php if($u['isPublished'] == 0): ?>
                        <td><?php echo'<a href="'.base_url().'admin/publishBlog/'.$u['id'].'"><button type="button" class="btn btn-primary btn-flat">Publish</button></a>';?></td>
                        <?php endif; ?>
                        <td><?php echo'<a href="'.base_url().'admin/editBlog/'.$u['id'].'"><button type="button" class="btn btn-primary btn-flat">Edit</button></a>';?></td>
                         <td><?php echo'<a href="'.base_url().'admin/deleteBlog/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">Delete Blog</button></a>';?></td>
                        
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->