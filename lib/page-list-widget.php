<?php 
//Select a Pages to display

class preg_page_list_widget extends WP_Widget {
	
	public function __construct($id_base = false, $name = "", $widget_options = array(), $control_options = array()) {
        parent::__construct("preg-page-list-widget", "Custom Page List", array("description" => "Display a Custom Page list"));
		
    }
	
	//Front Facing display
    public function widget($args, $instance) {
        
		extract($args, EXTR_SKIP);

        $this->id = $widget_id;
		    		
			echo $before_widget;
              echo $before_title;
                echo $instance['title'];		
            echo $after_title;
               echo '<div class="preg-list">';
			echo '<ul>';
				  echo'<li> <a href="'.$instance['pageUrlOne'].'" title="'.$instance['pageNameOne'].'">'.$instance['pageNameOne'].'</a></li>';
				  echo'<li> <a href="'.$instance['pageUrlTwo'].'" title="'.$instance['pageNameTwo'].'">'.$instance['pageNameTwo'].'</a></li>';
				  echo'<li> <a href="'.$instance['pageUrlThree'].'" title="'.$instance['pageNameThree'].'">'.$instance['pageNameThree'].'</a></li>';	
				  
				  if ($instance['customLink'])
				   echo'<li> <a href="'.$instance['customLink'].'" title="'.$instance['customLinkName'].'">'.$instance['customLinkName'].'</a></li>';
				  			  				  				  
				echo '</ul>'; 
		/*			echo '<span><a href="'.$instance['pageUrlOne'].'">'.$instance['pageNameOne'].'</a></span>';
				echo '<br>';
				echo '<span><a href="'.$instance['pageUrlTwo'].'">'.$instance['pageNameTwo'].'</a></span>';
				echo '<br>';
				echo '<span><a href="'.$instance['pageUrlThree'].'">'.$instance['pageNameThree'].'</a></span>'; */
			   echo '</div>';
			
        echo $after_widget;

    }
	
	//Widget Form
    function form($instance) {
        $instance = wp_parse_args((array)$instance, $this->defaults);

		//Get the list of pages		
		$pageList = $this->grabPages(); ?>
		
        <p><label><h4>Title:</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
        <hr>
        </p> 
        
        	
		<p><h4>Item 1:</h4>
       
          <select id="<?php echo $this->get_field_id('pageUrlOne'); ?>" name="<?php echo $this->get_field_name('pageUrlOne'); ?>" class="widefat" style="width:150px;">

              <?php foreach($pageList as  $post_type) { 	  ?>

              <option <?php selected( $instance['pageUrlOne'], $post_type['link'] ); ?> value="<?php echo $post_type['link']; ?>"><?php echo $post_type['label']; ?></option>
              


 			<?php	} ?>
                

          </select>
        <label><h4>Display Name:</h4></label>
        <input class="widefat" id="<?php echo $this->get_field_id('pageNameOne'); ?>" name="<?php echo $this->get_field_name('pageNameOne'); ?>" type="text" value="<?php echo $instance['pageNameOne']; ?>" />  
       

        </p>
       
        <hr>
        
		<p> <label><h4>Item 2:</h4></label>
       
          <select id="<?php echo $this->get_field_id('pageUrlTwo'); ?>" name="<?php echo $this->get_field_name('pageUrlTwo'); ?>" class="widefat" style="width:150px;">

              <?php foreach($pageList as  $post_type) { 	  ?>

              <option <?php selected( $instance['pageUrlTwo'], $post_type['link'] ); ?> value="<?php echo $post_type['link']; ?>"><?php echo $post_type['label']; ?></option>

 			<?php	} ?>
                

          </select>
        
        <label><h4>Display Name:</h4></label>
        <input class="widefat" id="<?php echo $this->get_field_id('pageNameTwo'); ?>" name="<?php echo $this->get_field_name('pageNameTwo'); ?>" type="text" value="<?php echo $instance['pageNameTwo']; ?>" />  
       

        </p>
       
        <hr>
        
		<p><label><h4>Item 3:</h4></label>
       
          <select id="<?php echo $this->get_field_id('pageUrlThree'); ?>" name="<?php echo $this->get_field_name('pageUrlThree'); ?>" class="widefat" style="width:150px;">

              <?php foreach($pageList as  $post_type) { 	  ?>

              <option <?php selected( $instance['pageUrlThree'], $post_type['link'] ); ?> value="<?php echo $post_type['link']; ?>"><?php echo $post_type['label']; ?></option>

 			<?php	} ?>
                

          </select>
      
        <label><h4>Display Name:</h4></label>
        <input class="widefat" id="<?php echo $this->get_field_id('pageNameThree'); ?>" name="<?php echo $this->get_field_name('pageNameThree'); ?>" type="text" value="<?php echo $instance['pageNameThree']; ?>" />  
       

        </p>
       
        <hr>               
        <p><label>Custom Link:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('customLink'); ?>" name="<?php echo $this->get_field_name('customLink'); ?>" type="text" value="<?php echo $instance['customLink']; ?>" />
        </p>
        <p><label>Custom Link Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('customLinkName'); ?>" name="<?php echo $this->get_field_name('customLinkName'); ?>" type="text" value="<?php echo $instance['customLinkName']; ?>" />
        </p>        
        
        <?php
    }

//Updates with the new information
    function update($new_instance, $old_instance) {
   
        $instance = $old_instance;

        $instance["title"] = strip_tags(($new_instance["title"]));
		$instance["pageUrlOne"] = esc_url_raw( $new_instance["pageUrlOne"]);
		$instance["pageNameOne"] = strip_tags(($new_instance["pageNameOne"]));
		$instance["pageUrlTwo"] = esc_url_raw( $new_instance["pageUrlTwo"]);
		$instance["pageNameTwo"] = strip_tags(($new_instance["pageNameTwo"]));		
		$instance["pageUrlThree"] = esc_url_raw( $new_instance["pageUrlThree"]);
		$instance["pageNameThree"] = strip_tags(($new_instance["pageNameThree"]));	
		$instance["customLink"] = esc_url_raw( $new_instance["customLink"]);	
		$instance["customLinkName"] = strip_tags(($new_instance["customLinkName"]));

        return $instance;
    }	
	
//Function to grab the list of pages from the database	
function grabPages(){

	global $post; 
		//Create the array to hold the page list
		$pregPages = array();
		
		
		   // Query for Page List  
			$posts = get_posts( array(  
				'post_type' => 'page',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order'   => 'ASC',  
			) );  
	
	
	
	//Loop the the results and store the Title and The Permalink 
    foreach ($posts as $post): setup_postdata($post);  
        // Initialise Page List array  
        $pregPage = array();  
        $pregPage['label'] = esc_html($post->post_title);  
        $pregPage['link'] = get_permalink();  
  
        // Add page data to the pages array  
        $pregPages[]= $pregPage; 
		 
    endforeach;  
		
		return $pregPages;		
	
	}

	
} //end preg_page_list_widget class


?>