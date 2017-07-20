<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Write Blog Post
          
          <?php if($this->session->userdata('postSubmit')){
          	echo '<br>';
          	echo "Successfully Submitted For Review.";
          	$this->session->unset_userdata('postSubmit');
          	}
          
           ?>
          
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
                <?php if($facebook != null): ?>
                          <?php $f = $facebook->row(); ?>
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        
                        <th>Post Topic</th>
                        <th>Minimum Words</th>
                       <th>Maximum Words</th>
                        <th>Money</th>
                        <th>Write Now</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                         
                      <tr>
                        <td><?php echo $f->posttopic ;?></td>
                        <td><?php echo $f->minimumwords;?></td>
                        <td><?php echo $f->maximumwords ;?></td>
                       <td><?php echo $f->money ;?></td>
                     
                        <td><?php echo'<a href="'.base_url().'user/writeSpecificPost/'.$f->id.'"><button type="button" class="btn btn-primary btn-flat">Write Now</button></a>';?></td>
                        
                      </tr>
                     
                    </tbody>
                  </table>
                   <?php else : ?>
                   <h1>No Job For Today</h1>
            <p>Want to earn more? Start referring people with your referral link/url.<br>
            Get your referral link/url from your Dashboard.</p>
                   <?php endif; ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->