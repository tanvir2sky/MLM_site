<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW All Payment Request
          
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
                        <th>NAME</th>
                        <th>Email</th>
                        <th>Paypal Email</th>
                        <th>Manual / Paypal</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($request->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['name'] ;?></td>
                        <td><?php echo $u['email'] ;?></td>
                        <td><?php echo $u['paypalemail'] ;?></td>
                      <td><?php   
                        
                      if($u['paypalemail']==''){
                          echo 'Manual';
                      }
                      else{
                          echo 'Paypal';
                      }
                      
                      
                      ?></td>
                      
                       <td><?php echo '<a href="'.base_url().'admin/deletepaymentrequest/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">Delete Now</button></a>'; ?></td>
                      
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