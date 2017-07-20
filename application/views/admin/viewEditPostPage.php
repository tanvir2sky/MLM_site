<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW AND Edit Post Topic
          
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
                     
                        <th>Post Topic</th>
                        <th>Minimum Words</th>
                       <th>Maximum Words</th>
                        <th>Money</th>
                        <th>Delete Post Topic</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($facebook->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['posttopic'] ;?></td>
                        <td><?php echo $u['minimumwords'] ;?></td>
                        <td><?php echo $u['maximumwords'] ;?></td>
                       <td><?php echo $u['money'] ;?></td>
                       
                        <td><?php echo'<a href="'.base_url().'admin/deletePostPage/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">DELETE NOW</button></a>';?></td>
                        
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