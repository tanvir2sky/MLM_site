<?php include('header.php');?>

<div class="blog">
			<!-- container -->
			<div class="container">
				<div class="blog-heading">
					<h2 class="wow fadeInDown animated" data-wow-delay=".5s">Blog</h2>
					<p class="wow fadeInUp animated" data-wow-delay=".5s">Vivamus efficitur scelerisque nulla nec lobortis. Nullam ornare metus vel dolor feugiat maximus.Aenean nec nunc et metus volutpat dapibus ac vitae ipsum. Pellentesque sed rhoncus nibh</p>
				</div>
				<!---728x90--->

				<div class="row">
                                    
                                    <div class="col-md-4 pull-right">
						<div class="Categories">
							<h3>Recent Posts</h3>
							<ul>
                                                                <?php foreach($recent->result_array() as $u) : ?>
								<li><a href="<?php echo base_url(); ?>home/singleblog/<?php echo $u['blogtitle']; ?>"><?php echo $u['blogtitle']; ?></a></li>
                                                                 <?php endforeach;?>
							
								
							</ul>
						</div>
						
					
					</div>
                                    
					<div class="col-md-8 col-lg-8">
                                                        <?php foreach($blog->result_array() as $u) : ?>
							<div class="blog-left">
								<div class="">
									
									<a href="<?php echo base_url(); ?>home/singleblog/<?php echo $u['id']; ?>"><img src="<?php echo base_url();?>images/<?php echo $u['blogimage']; ?>" alt=""  height="600" width="600"/></a>
								</div>
								<div class="blog-left-right" data-wow-delay=".5s">
									<a href="<?php echo base_url(); ?>home/singleblog/<?php echo $u['id']; ?>"><?php echo $u['blogtitle']; ?> </a>
									<p style="align:center"><?php
                                                                        
                                                                             echo substr($u['blogbody'],0,500)  ;
                                                                        ?>
								</p>
								</div>
								
							</div>
                                            <br>
                                            <br>
                                            <?php endforeach;?>
							
							
					<!--
						<nav>
							<ul class="pagination wow fadeInUp animated">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
                                                    -->
					</div>
					
					
			
			<!-- //container -->
		
	<!-- //blog -->
        
          <?php 
  include('footer.php');
  
  ?>