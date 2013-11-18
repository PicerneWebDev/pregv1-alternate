<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
 <div class="wrap"> 
   <div class="sliderWrapper">

     <div id="myCarousel" class="carousel slide">
       <div class="carousel-inner">
         <?php get_template_part('templates/slider'); //load the slider?>
       </div> <!-- End Carousel-inner -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                        
     </div> <!-- end myCarousel -->


   </div> <!-- end sliderWrapper -->
  

   	 <?php get_template_part('templates/main-widget-area'); //load widgets below the slider?>
     
     <?php //get_template_part('templates/bottom-widget-area'); //load the middle widgets ?>
   
     <?php get_template_part('templates/footer'); ?>

</body>
</html>