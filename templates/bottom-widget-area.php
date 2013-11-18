<?php 
/* 
* Displays bottom widget area used on the home page.
*/
?>

   <div class="widgetWrapper1"> <!-- Bottom Widget Area Fullwidth Wrapper -->
     <div class="container"> <!-- wrapping container for Widget Area 1 -->
       <div class="widget-heading span12">
          <div class="title-line span3"></div>
          <div class="title span4"><h3><?php echo get_bloginfo( 'name' ); ?> At a Glance</h3></div>
          <div class="title-line span3"></div>    
            
        </div>
       <div class="row-fluid"> <!-- Begin row-fluid -->
         <ul class="thumbnails">
          <?php dynamic_sidebar('bottom-widget') ; //Output the Bottom Widget area ?>
	     </ul>	  	
       </div> <!-- end row-fluid -->
     </div> <!-- end container -->
   </div> <!-- end Bottom Widget Area Wrapper -->
   