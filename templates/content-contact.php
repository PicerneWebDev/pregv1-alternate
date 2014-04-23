<div class="row-fluid page-main-wrap">
<?php while (have_posts()) : the_post();


	   if ( shortcode_exists( 'display_gmap' ) ) { 
			 echo do_shortcode('[display_gmap]');
	   } 
?> 
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
  
  
<?php endwhile; ?>


</div> <!-- end row-fluid -->