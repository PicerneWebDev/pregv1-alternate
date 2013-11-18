<?php 
//Display Bootstrap Thumbnails as widgets

class preg_thumb_widget extends WP_Widget {
	
	public function __construct($id_base = false, $name = "", $widget_options = array(), $control_options = array()) {
        parent::__construct("preg-thumbnail-widget", "Bootstrap Thumbnail Widgets", array("description" => "Customizeable Bootstrap Thumbnail Widgets"));
		
		//Init the mediaUploader function
		add_action( 'admin_enqueue_scripts', array($this, 'mediaUploader'));
    }
	
    public function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        $this->id = $widget_id;
		
		$clickableThumb = isset($instance['images']) ? $instance['images'] : true;
		
		echo '<li class="span4"> <!-- begin span4 -->';
		  echo '<div class="widget-thumb thumbnail">'; 
		    
			  echo '<img data-src="holder.js/300x200" alt="Alternative Text Here" src="'.$instance['url'].'">';
			
			echo $before_widget;
              echo $before_title;
                echo $instance['title'];
            echo $after_title;
			
			//If the Thumbnail has a caption
 			if($instance['caption']){
			  echo '<p class="caption">';
			      echo $instance['caption'];
				 echo '</p>';
			}
				if($instance['pageUrl']){
				
				echo '<span><a href="'.$instance['pageUrl'].'" class="btn btn-block btn-blue">'.$instance['linkText'].'</a></span>';
				
				}
        echo $after_widget;
		  echo '</div> <!-- end thumbnail -->';
		echo '</li>  <!-- end span4 -->';
    }

	/**
	 * Takes in the Widget ID and displays a clickable Thumbnail Widget
	 */
	private function clickable_thumbnail( $id ){
	  	
	}

    function form($instance) {
        $instance = wp_parse_args((array)$instance, $this->defaults);

        ?>
		<div class="section-<?php echo $this->id;?> section-upload">
        <p><label>Thumbnail Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
        </p> 
        <p>       
        <label for="upload_thumb">Select or upload an image</label>
            <input id="thumb-id-<?php echo $this->id; ?>" class="thumb-url" type="text" size="36" name="<?php echo $this->get_field_name('url'); ?>" value="<?php echo $instance["url"]; ?>" /> 
            <input id="<?php echo $this->id; ?>" class="upload-button button button-primary" type="button" value="Upload Image" />
        </p>  
        
         <p><label>Thumbnail Caption:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('caption'); ?>" name="<?php echo $this->get_field_name('caption'); ?>"><?php echo $instance['caption']; ?></textarea>
        </p>
	
		<p><label>Enter URL to link to:</label>
           <input class="widefat" id="<?php echo $this->get_field_id('pageUrl'); ?>" name="<?php echo $this->get_field_name('pageUrl'); ?>" type="text" value="<?php echo $instance['pageUrl']; ?>" />
        </p>
        
        <p><label>Link Text </label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkText'); ?>" name="<?php echo $this->get_field_name('linkText'); ?>" type="text" value="<?php echo $instance['linkText']; ?>" />
        </p>
        
        <p>
	   		<input class="checkbox" type="checkbox" <?php checked($instance['clickable'], true) ?> id="<?php echo $this->get_field_id('clickable'); ?>" name="<?php echo $this->get_field_name('clickable'); ?>" />
			<label for="<?php echo $this->get_field_id('clickable'); ?>"><?php _e('Make Thumbnail a clickable link?'); ?></label><br />
        </p>
    	</div>
        
        <?php
    }

    function update($new_instance, $old_instance) {
   
        $instance = $old_instance;

		$new_instance = wp_parse_args( (array) $new_instance, array( 'title' => '', 'caption' => '', 'linkText' => '', 'url' => '', 'pageUrl' => '' , 'clickable' => 0) );

        $instance["title"] = strip_tags(($new_instance["title"]));
        $instance["caption"] = strip_tags(stripslashes($new_instance["caption"]));
		$instance["linkText"] = strip_tags(stripslashes($new_instance["linkText"]));
		$instance["url"] = $new_instance["url"];
		$instance["pageUrl"] = esc_url_raw( $new_instance["pageUrl"]);
		
		$instance['clickable'] = $new_instance['clickable'] ? 1 : 0;

        return $instance;
    }	
	
	
	//Setup the media uploader only on the widgets.php page. This avoids a conflict with Theme Options Framework.
	function mediaUploader($hook){
		if( 'widgets.php' != $hook )
          return;		
		
		wp_enqueue_media();
        wp_register_script('i4mediaUploadz', '/'.THEME_PATH.'/assets/js/custom-media-uploader.js', array('jquery'));
        wp_enqueue_script('i4mediaUploadz');
			

	}
	
	
} //end preg_thumb_widget class


?>