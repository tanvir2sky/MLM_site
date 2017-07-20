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
      <h3>Deep Sky<small> By <a href="#">Srawat56</a></small></h3>
      <a rel="lightbox" href="img/thumb1.jpg"><img src="<?php echo base_url();?>home/img/thumb1.jpg" alt=""></a> </div>
    <div class="span4">
      <h3>Nature's Valley<small> By <a href="#">Paul venter</a></small></h3>
      <a rel="lightbox" href="img/thumb2.jpg"><img src="<?php echo base_url();?>home/img/thumb2.jpg" alt=""></a> </div>
    <div class="span4">
      <h3>Details</h3>
      <blockquote>Respond is a fully responsive website template utilizing Twitter's Bootstrap framework. What does that mean? First of all, the website will respond according to the size of the viewers browser window. Go on, try it out. Resize your window. On top of that, the framework offers loads of ready-to-go features. Check it out with the button below. <br>
        <br>
        <em>- AwfulMedia.com</em> </blockquote>
      <p><a class="btn" href="#">All Features &raquo;</a></p>
    </div>
  </div>
  <!--Start second row of columns-->
  <hr>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="<?php echo base_url();?>home/img/thumb-small01.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.You could summarize something here. Keep it simple. Just a few short sentences. Maybe one large one? No, a few short ones.</p>
    </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="<?php echo base_url();?>home/img/thumb-small02.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a> </div>
  </div>
  <div class="row">
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="<?php echo base_url();?>home/img/thumb-small01.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a> </div>
    <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="<?php echo base_url();?>home/img/thumb-small02.png" alt=""></a>
      <h3><a href="#">This Should Be Your Title.</a></h3>
      <p>This will be the description or something I guess. I don't know. Your choice.</p>
      <a href="#" class="btn">Details</a> </div>
  </div>
  <hr>
  
  <?php 
  include('footer.php');
  
  ?>