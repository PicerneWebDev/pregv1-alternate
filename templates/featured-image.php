<?php 
/*
*Displays the Posts Featured Image
*
*/


  //Retrieve necessary information
  $postID = get_the_ID();
  $thumb = get_post_thumbnail_id();
  $img_url = wp_get_attachment_url( $thumb,'small'); //get img URL	
  
  $image = aq_resize($img_url, 150,150, true); //resize & crop img
  
  ?>
  <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" class="img-circle"/>

