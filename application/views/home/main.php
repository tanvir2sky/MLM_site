<?php include('header.php');?>

<div class="container">
  <!--Start Carousel-->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active"> <img src="<?php echo base_url();?>home/img/featured/1.jpg" alt="">
        <!--<div class="carousel-caption">
          <h4>First Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>-->
      </div>
      <div class="item"> <img src="<?php echo base_url();?>home/img/featured/2.jpg" alt="">
        <!--<div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>-->
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php echo base_url();?>home/img/arrow.png" alt=""></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="<?php echo base_url();?>home/img/arrow2.png" alt=""></a> </div>
  <!--End Carousel-->
  <hr>
  <div class="row">
    <div class="span4">
      <h3>Refer A Friend</h3>
      <a rel="lightbox" href="img/thumb1.jpg"><img src="<?php echo base_url();?>home/img/referfriend.jpg" alt="Refer A Friend"></a> </div>
    <div class="span4">
      <h3>Free Online Jobs</h3>
      <a rel="lightbox" href="img/thumb2.jpg"><img src="<?php echo base_url();?>home/img/freeonlinejobs.jpg" alt="Free Online Jobs"></a> </div>
    <div class="span4">
      <h3>Details</h3>
      <blockquote>Jobs Logon is a website which provide online jobs related to marketing, advertising, data entery, ad posting and many many more to user all around the world. People can join the website for FREE and start earning today by doing small, big or all the jobs.<br><br>
      If you want to earn more then we have a premium option which you can avail at any time, also you can earn by referring your friend, your friend or you do not have to pay anything for earnings.</blockquote>
    </div>
  </div>
  <!--Start second row of columns-->  
  <hr>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="<?php echo base_url();?>home/img/thumb-small01.png" alt=""></a>
      <h3><a href="#">Advertising Jobs</a></h3>
      <!--<p>This will be the description or something I guess. I don't know. Your choice.You could summarize something here. Keep it simple. Just a few short sentences. Maybe one large one? No, a few short ones.</p>-->
    </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="<?php echo base_url();?>home/img/thumb-small02.png" alt=""></a>
      <h3><a href="#">Marketing Jobs</a></h3>
      <!--<p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a>--> </div>
  </div>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="<?php echo base_url();?>home/img/thumb-small01.png" alt=""></a>
      <h3><a href="#">Data Entry Jobs</a></h3>
      <!--<p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a>--> </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="<?php echo base_url();?>home/img/thumb-small02.png" alt=""></a>
      <h3><a href="#">Writing Jobs</a></h3>
      <!--<p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a>--> </div>
  </div>
  <hr>

  <?php 
  include('footer.php');
  
  ?>