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
					
					</div>
                                    
					<div class="col-md-8 col-lg-8">
                                                        
							<div class="blog-left">
								<div class="">
									
									<img src="<?php echo base_url();?>images/<?php echo $blog->blogimage; ?>" alt=""  height="600" width="600"/>
								</div>
								<div class="blog-left-right" data-wow-delay=".5s">
                                                                    <h3><a href="#"><?php echo $blog->blogtitle; ?> </a></h3>
									<p><?php
                                                                        
                                                                             echo $blog->blogbody;
                                                                        ?>
								</p>
								</div>
								
							</div>
                                            <br>
                                            <br>
                                           
							
							
					
						
					</div>
					
					
			
			<!-- //container -->
		
	<!-- //blog -->
        
          <?php 
  include('footer.php');
  
  ?>