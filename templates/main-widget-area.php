<?php 
/* Use: Displays the main home page widgets 
*  Default Location: Directly below the slider on the homepage. 
*/
?>

   <div class="widgetWrapper1 -main-bg-color"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img class="img-circle" src="<?php echo get_bloginfo('url');?>/assets/timber-point-pool.png">
          </div>
          <div class="span9">
          
            <h3>Choose the floor plan for you</small></h3>
            <p>With your comfort in mind, we have created an online application which allows you to pre-apply on your time. Our one, two, and three bedroom apartments are sure to be a great fit for you and your family.</p>
            <a href="<?php echo get_bloginfo('url');?>/floor-plans" class="btn btn-white widget-btn">Apply Today</a>
            
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
            <img class="img-circle" src="<?php echo get_bloginfo('url');?>/assets/timber-point-online-pay.png">
          </div>
          <div class="span9">
          
            <h3 class="text-white">Online Work Orders and Rent Payments<br /><small class="text-white">Easily pay your rent online and request maintenance here</small></h3>
            
            <a href="https://timberpointapartments.securecafe.com/residentservices/timber-point-apartments/userlogin.aspx" class="btn btn-grey widget-btn" target="_blank">Resident Sign-in</a>
            
          </div>
             
            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->
   
      <div class="widgetWrapper1 -white"> <!-- Widget Area 1 Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
     	<div class="widget-content row">
          <div class="span3">
            <img class="img-circle" src="<?php echo get_bloginfo('url');?>/assets/timber-point-front-entrance.png">
          </div>
          <div class="span9">
          
		  <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>          

            
            <div class="widget-button"><a href="<?php echo get_bloginfo('url');?>/amenities" class="btn btn-blue widget-btn">View Amenities</a> </div>             
            
          </div>
          

            
        </div>
     </div> <!-- end container -->
   </div> <!-- end Widget Area 1 Wrapper -->   

