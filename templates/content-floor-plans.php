<div class="row-fluid page-main-wrap">

<?php while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>


<div class="availability-wrapper row">
         
      <?php if ( function_exists('yardi_api_display') ) {
  		yardi_api_display('floorplan');
} ?>


  
</div> <!-- end availability wrapper -->
    
</div> <!-- end row-fluid -->
