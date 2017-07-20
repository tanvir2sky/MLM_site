<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          VIEW AND MANAGE USERS
          
          </h1>
          
        </section>
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">USERS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NAME</th>
                        <th>Email</th>
                        <th>Referral Email</th>
                        <th>Paid Or Unpaid</th>
                        <th>Deactvate/Activate</th>
                         
                         <th>Paid/ Unpaid</th>
                         <th>User Balance</th>
                          <th>Clear Payment</th>
                        
                           <th>Last Login</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form action="<?php echo base_url(); ?>admin/deleteMultipleUser" method="post">
                        <?php foreach($alluser->result_array() as $u) : ?>
                      <tr>
                        <td><?php echo $u['username'] ;?></td>
                        <td><input type="checkbox" name="check_list[]" value="<?php echo $u['userid']; ?>"> &nbsp<?php echo $u['useremail'] ;?></td>
                        <td><?php echo $u['referralemail'] ;?></td>
                        <td> <?php if($u['isPaid']==0){echo '<span class="badge bg-red">UNPAID</span>';} else {echo '<span class="badge bg-green">PAID</span>';};?></td>
                        <td><?php if($u['isActivated']==1){echo '<a href="'.base_url().'admin/deactiveUser/'.$u['userid'].'"><button type="button" class="btn btn-danger btn-flat">DEACTIVATE NOW</button></a>';} else {echo '<a href="'.base_url().'admin/activeUser/'.$u['userid'].'"><button type="button" class="btn btn-success btn-flat">Activate Now</button></a>';};?></td>
                        
                        <td><?php if($u['isPaid']==1){echo '<a href="'.base_url().'admin/unpaidUser/'.$u['userid'].'"><button type="button" class="btn btn-danger btn-flat">Make Unpaid</button></a>';} else {echo '<a href="'.base_url().'admin/paidUser/'.$u['userid'].'"><button type="button" class="btn btn-success btn-flat">Make Paid</button></a>';};?></td>
                        
                        
                        <td>$<?php echo $u['userbalance'] ;?></td>
                        <td><?php echo '<a href="'.base_url().'admin/clearPayment/'.$u['userid'].'"><button type="button" class="btn btn-primary btn-flat">Clear Payment</button></a>'; ?></td>
                         
                         
                         <td> <?php echo $u['lastlogin']; ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                     <div class="box-footer">
                    
                  </div>
                  <button type="submit" class="btn btn-danger">Delete Multiple User</button>
                    </form>
                  </table>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>