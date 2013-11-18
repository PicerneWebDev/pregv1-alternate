<?php
/* 
* Displays middle widget area used on the home page.
*/
?>

<div class="row-fluid mid-widget-area">
 <div class="mid-widget-main container"> <!-- wrapping container -->
  <div class="span7 main-home">
    <h3>Welcome to <?php echo bloginfo('name'); ?></h3>
	  <figure class="pull-left feat-thumb">
       <?php get_template_part('templates/featured-image'); //Display the Featured image of the home page ?> 
      </figure>
	  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
  </div> <!-- end span7 -->
  
  <div class="mid-widget-aside span3 offset2">
  
  <?php dynamic_sidebar('middle-widget') ; //Output the Main Widget area ?>
  
  </div> <!-- end span4 offset1 -->
 </div> <!-- end container -->
</div>