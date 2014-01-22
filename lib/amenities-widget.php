<?php
/* Widget to display your top Amenities */
?><?php 

class preg_amenities_widget extends WP_Widget {
	
	public function __construct($id_base = false, $name = "", $widget_options = array(), $control_options = array()) {
        parent::__construct("preg-amenities-widget", "Amenities", array("description" => "Display your top 3 Amenities"));
		
    }
	
	//Front Facing display
    public function widget($args, $instance) {
        
		extract($args, EXTR_SKIP);

        $this->id = $widget_id;
		    		
			echo $before_widget;
			 echo '<hr>';
              echo $before_title;
                echo $instance['title'];		
            echo $after_title;
               echo '<div class="amenities-widget">';
				echo '<ul class="amenities-list">';
				  echo'<li><i class="check-icon"></i>'.$instance['amenityOne'].'</li>';
				  echo'<li><i class="check-icon"></i>'.$instance['amenityTwo'].'</li>';
				  echo'<li><i class="check-icon"></i>'.$instance['amenityThree'].'</a></li>';
				  echo'<li><i class="check-icon"></i>'.$instance['amenityFour'].'</a></li>';				  				  				  
				echo '</ul>';
				echo ' <a class="btn btn-block btn-blue" href="'.$instance['applyLink'].'">Get Started Today!</a>';
			   echo '</div>';
			
        echo $after_widget;

    }
	
	//Widget Form
    function form($instance) {
        $instance = wp_parse_args((array)$instance, $this->defaults); ?>
		
        <p><label><h4>Title:</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
        
        </p>
        
       <p><label><h4>Amenity #1:</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('amenityOne'); ?>" name="<?php echo $this->get_field_name('amenityOne'); ?>" type="text" value="<?php echo $instance['amenityOne']; ?>" />
        
        </p>       
        
       <p><label><h4>Amenity #2</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('amenityTwo'); ?>" name="<?php echo $this->get_field_name('amenityTwo'); ?>" type="text" value="<?php echo $instance['amenityTwo']; ?>" />
        
        </p>         
        
       <p><label><h4>Amenity #3</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('amenityThree'); ?>" name="<?php echo $this->get_field_name('amenityThree'); ?>" type="text" value="<?php echo $instance['amenityThree']; ?>" />
        
        </p>  
       <p><label><h4>Amenity #4</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('amenityFour'); ?>" name="<?php echo $this->get_field_name('amenityFour'); ?>" type="text" value="<?php echo $instance['amenityFour']; ?>" />
        
        </p>          
        
       <p><label><h4>Apply Now Link:</h4></label>

            <input class="widefat" id="<?php echo $this->get_field_id('applyLink'); ?>" name="<?php echo $this->get_field_name('applyLink'); ?>" type="text" value="<?php echo $instance['applyLink']; ?>" />
        
        </p>                   

        
        <?php
    }

//Updates with the new information
    function update($new_instance, $old_instance) {
   
        $instance = $old_instance;

        $instance["title"] = strip_tags(($new_instance["title"]));

		$instance["amenityOne"] = strip_tags(($new_instance["amenityOne"]));

		$instance["amenityTwo"] = strip_tags(($new_instance["amenityTwo"]));		

		$instance["amenityThree"] = strip_tags(($new_instance["amenityThree"]));	

		$instance["amenityFour"] = strip_tags(($new_instance["amenityFour"]));			
		
		$instance["applyLink"] = esc_url_raw($new_instance["applyLink"]);			

        return $instance;
    }	
	

	
} //end preg_amenities_widget class


?>