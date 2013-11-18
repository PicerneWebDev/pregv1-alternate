<?php 
/* Use: Displays the main home page widgets 
*  Default Location: Directly below the slider on the homepage. 
*/
?>

   <div class="widgetWrapper1 -rust"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/clearwood-floor-plan-icon.png">
          </div>
          <div class="span9">
          
            <h3>Choose a Floor Plan. Apply Online<br /><small>It's that easy.</small></h3>
            
            <a href="<?php echo get_bloginfo('url');?>/floor-plans" class="btn btn-orange widget-btn">Apply Today</a>
            
          </div>
             
            
        </div>
       <div class="row-fluid"> <!-- Begin row-fluid -->
         <ul class="thumbnails">
          <?php // dynamic_sidebar('main-widget') ; //Output the Main Widget area ?>
	     </ul>	  	
       </div> <!-- end row-fluid -->
     </div> <!-- end container -->

   </div> <!-- end Widget Area 1 Wrapper -->
   

      <div class="widgetWrapper1 -beige"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/clearwood-online-icon.png">
          </div>
          <div class="span9">
          
            <h3>One Place For All Your Resident Needs.<br /><small class="text-brown">No Hours. Just Convenience</small></h3>
            
            <a href="https://clearwoodapartments.securecafe.com/residentservices/the-clearwood-villas/userlogin.aspx" class="btn btn-maroon widget-btn" target="_blank">Resident Sign-in</a>
            
          </div>
             
            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->
   
      <div class="widgetWrapper1 -white"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/clearwood-villas-icon.png">
          </div>
          <div class="span9">
          
		  <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>          

            
            <div class="widget-button"><a href="<?php echo get_bloginfo('url');?>/amenities" class="btn btn-rust widget-btn">View Amenities</a> </div>             
            
          </div>
          

            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->   

