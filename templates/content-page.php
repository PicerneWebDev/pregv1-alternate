<div class="row-fluid page-main-wrap">
<?php while (have_posts()) : the_post(); ?>

  <?php if (has_post_thumbnail()){ //Post Thumbnail check?>
  
  <figure class="pull-left feat-thumb">
   <?php get_template_part('templates/featured-image'); //Display the Featured image of the home page ?> 
  </figure>
  
  <?php } ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>


</div> <!-- end row-fluid -->