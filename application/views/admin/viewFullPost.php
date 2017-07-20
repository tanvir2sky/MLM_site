<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Post By: <?php echo $facebook->useremail; ?> </br>
  
          
          </h1>
            
            <h3> Full Post is given Below: </h3>
            
            
            
          
        </section>
         <section class="content">
             <p style="text-align: center">
             <?php echo $facebook->text; ?> </p>
             
             <h1 style="color:red">Total Words :<?php echo str_word_count($facebook->text);?></h1>
         </section>
      </div><!-- /.co