<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          View All Buyer Payment And Make them Paid
          
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
                        <th>Payment Id</th>
                        <th>User Id</th>
                        <th>Payer Email</th>
                        <th>Txn Id</th>
                        <th>Make User Paid</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        <?php if($payment->num_rows()>0)foreach($payment->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['payment_id'] ;?></td>
                        <td><?php echo $u['user_id'] ;?></td>
                        <td><?php echo $u['payer_email'] ;?></td>
                        <td>$<?php echo $u['txn_id'] ;?></td>
                        <td><?php if($u['verified'] == 0) echo '<a href="'.base_url().'/admin/makeUserPaid/'.$u['user_id'].'"><button class="btn btn-block btn-primary">Primary</button></a>'?><td>
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