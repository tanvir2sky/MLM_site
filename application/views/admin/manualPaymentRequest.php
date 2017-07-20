<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW AND MANAGE All Manual Payment Request
          
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
                        <th>Id</th>
                        <th>Email</th>
                        <th>Make Paid Now</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($payment->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['id'] ;?></td>
                        <td><?php echo $u['email'] ;?></td>
                        
                       <td><?php if($u['isconfirmed']==0){echo '<a href="'.base_url().'admin/makeUserPaidNow/'.$u['id'].'"><button type="button" class="btn btn-danger btn-flat">Make Paid Now</button></a>';} ?></td>
                        
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