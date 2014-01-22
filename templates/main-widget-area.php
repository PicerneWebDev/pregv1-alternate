<?php 
/* Use: Displays the main home page widgets 
*  Default Location: Directly below the slider on the homepage. 
*/
?>

   <div class="widgetWrapper1 -main-bg-color"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/laurel-point-floor-plan-icon.png">
          </div>
          <div class="span9">
          
            <h3 class="text-white">Apartment Home Living At Its Finest<br /><small>Come Home to Parkside Point Apartments</small></h3>
            
            <a href="<?php echo get_bloginfo('url');?>/floor-plans" class="btn btn-grey widget-btn">Apply Today</a>
            
          </div>
             
            
        </div>
       <div class="row-fluid"> <!-- Begin row-fluid -->
         <ul class="thumbnails">
          <?php // dynamic_sidebar('main-widget') ; //Output the Main Widget area ?>
	     </ul>	  	
       </div> <!-- end row-fluid -->
     </div> <!-- end container -->

   </div> <!-- end Widget Area 1 Wrapper -->
   

      <div class="widgetWrapper1 -secondary-bg-color"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/laurel-point-online-icon.png">
          </div>
          <div class="span9">
          
            <h3>Online Work Orders and Rent Payments<br /><small class="text-brown">Convenience at your fingertips</small></h3>
            
            <a href="https://clearwoodapartments.securecafe.com/residentservices/the-clearwood-villas/userlogin.aspx" class="btn btn-maroon widget-btn" target="_blank">Resident Sign-in</a>
            
          </div>
             
            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->
   
      <div class="widgetWrapper1 -white"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img src="<?php echo get_bloginfo('url');?>/assets/parkside-logo.png">
          </div>
          <div class="span9">
          
		  <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>          

            
            <div class="widget-button"><a href="<?php echo get_bloginfo('url');?>/amenities" class="btn btn-maroon widget-btn">View Amenities</a> </div>             
            
          </div>
          

            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->   

