<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW AND Edit Facebook Page
          
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
                       
                        <th>User Email</th>
                        <th>Text</th>
                         <th>View Full Post</th>
                        <th>Approve Now</th>
                        <th>Delete Now</th>
                     
                         
                      </tr>
                    </thead>
                    <tbody>
                       
                    
                         <?php foreach($facebook->result_array() as $u) : ?>
                         <tr>
                        <td><?php echo $u['useremail'] ;?></td>
                        <td><?php echo substr($u['text'],0,30) ;?></td>
                      
                        <td><?php echo'<a href="'.base_url().'admin/viewFullPost/'.$u['id'].'"><button type="button" class="btn btn-primary btn-flat">View Full Post</button></a>';?></td>
                        <td><?php if($u['isApproved']==0) echo'<a href="'.base_url().'admin/approvePost/'.$u['id'].'"><button type="button" class="btn btn-primary btn-flat">Approve Now</button></a>';?></td>
                         <td><?php echo'<a href="'.base_url().'admin/deletePostOfUser/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">Delete Post</button></a>';?></td>
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