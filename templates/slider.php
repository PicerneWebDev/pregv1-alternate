<?php //Slider ?>

<?php 
/*** BootStrap Slider - For demo on how to implement Bootstrap carousel visit http://twitter.github.com/bootstrap/ ****/


/* Setup WP_Query args */
$args = array(
	'post_type' => 'slider',
	'posts_per_page' => -1,
	'post_status' => 'publish'
);


$querySlide = new WP_Query( $args );



//Start the counter. We want to label the most recent slide as the "active" item
$counter = 0;

//Set Enabled to False. Will be set to true if a user opts to use a Caption for a slide
$enabled = false;

// The Loop
while( $querySlide->have_posts() ): 
	$querySlide->next_post();
	
	//Increment the counter per slide
	$counter++;

	//Grab the Post ID
	$postID = $querySlide->post->ID;
	
	$attachmentID = get_post_thumbnail_id($postID);
	
	$i4_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'slider-post-thumbnail');
	
	//Check if the Slider Caption Area is Enabled and if it is grab the necessary data
	if ( get_post_meta($postID, 'slider_content_enable', true) == 'on' ){
	    
	$enabled = true;
	
	//Get Slide Header
	$heading = get_post_meta($postID, 'slider_heading', true);
	
	//Get Slide Caption
	$content = get_post_meta($postID, 'slider_content', true);
	
	//If the user opts to include a Link
	if (get_post_meta($postID, 'slider_link_enable', true) == 'on'){
		$linkUrl = get_post_meta( $postID, 'slider_link_url', true);	
		$linkColor = get_post_meta($postID, 'slider_link_color', true);
		$linkTitle = get_post_meta($postID, 'slider_link_title', true);
		$buttonTitle = get_post_meta($postID, 'slider_button_title', true);
	}
	
	
	}	
	//Get the alt for the image
	$alt = trim(strip_tags( get_post_meta($attachmentID, '_wp_attachment_image_alt', true) ));
	

	//if Counter is == 1, set that slide as active
	if ($counter == 1 )
		echo '<div class = "active item">';
		
	//if not equal, set the slide as a regular item
		else
			echo '<div class="item">'; ?>
			 
				<?php 	// Output Image slide
					echo '<img src="'. $i4_image_url[0] .'" alt="'.$alt .'"/>';

				
                    //If the Slider Caption Area is Enabled by the user... display the caption 
                  if( $enabled == true){ ?>
					<div class="carousel-caption">
					  <h4><?php echo $heading; ?></h4>
					    <p><?php echo stripslashes(htmlspecialchars_decode($content)); ?></p>
                     
                      <?php if (get_post_meta($postID, 'slider_link_enable', true) == 'on'){ ?>
                      <div class="caption-link">
                       
                        <a href="<?php echo $linkUrl;?>" class="btn <?php echo $linkColor;?>" title="<?php echo $linkTitle;?>"><?php echo $buttonTitle;?></a>
                      </div>
                      <?php } ?>
					</div> <!-- End Carousel-caption -->
                                        
            <?php } ?>
			  </div> <!-- end item -->
    
    <?php $enabled = false; //Reset enabled to false. ?>
<?php 
endwhile;


// Restore original Post Data
wp_reset_postdata();


?>