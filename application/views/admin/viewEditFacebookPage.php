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
                        <th>ID</th>
                        <th>Page Name</th>
                        <th>Total Clicks</th>
                       <th>Paid Money</th>
                        <th>Unpaid Money</th>
                        <th>Delete Page</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($facebook->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['id'] ;?></td>
                        <td><?php echo $u['name'] ;?></td>
                        <td><?php echo $u['present'] ;?></td>
                       <td><?php echo $u['moneypaid'] ;?></td>
                        <td><?php echo $u['moneynormal'] ;?></td>
                        <td><?php echo'<a href="'.base_url().'admin/deletePage/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">DELETE NOW</button></a>';?></td>
                        
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