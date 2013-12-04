<div class="row-fluid page-main-wrap">
<?php while (have_posts()) : the_post(); ?>
  
  <div class="contact-left span6">
  <?php if (has_post_thumbnail()){ //Post Thumbnail check?>
  
  
  <figure class="pull-left feat-thumb">
   <?php get_template_part('templates/featured-image'); //Display the Featured image of the home page ?> 
  </figure>
  
  <?php } ?>
	<h3>Want us to get back to you?</h3>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
  </div> <!-- end span6 -->
  
  <div class="contact-right span6">
   <div class="connect-wrap span9">
     <h2>Connect With us</h2>
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object img-circle" data-src="holder.js/64x64" src="<?php echo get_bloginfo('url');?>/assets/phone-icon.png" alt="Call Parkside Point Apartment Homes"/>
          </a>
          <div class="media-body">
            <h5 class="media-heading">Give us a call</h5>
            <p>(832) 200-9947</p>
          </div>
        </div>     
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object img-circle" data-src="holder.js/64x64" src="<?php echo get_bloginfo('url');?>/assets/mail-icon.png" alt="Email Parkside Point Apartment Homes"/>
          </a>
          <div class="media-body">
            <h5 class="media-heading">Email</h5>
            <p>Send us an email: <a href="mailto:parkside_p@picernefl.com">parkside_p@picernefl.com</a></p>
          </div>
        </div>    
        <!-- <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object img-circle" data-src="holder.js/64x64" src="<?php // echo get_stylesheet_directory_uri();?>/assets/img/facebook-icon-1.png"/>
          </a>
         <div class="media-body">
            <h5 class="media-heading">Facebook</h5>
            <p>Keep up with the latest news and events on our <a href="https://www.facebook.com/oasisatwekiva" target="_blank">Facebook Page</a></p>
          </div>
        </div>   -->          
              
     
   </div>
  </div>
  
<?php endwhile; ?>


</div> <!-- end row-fluid -->