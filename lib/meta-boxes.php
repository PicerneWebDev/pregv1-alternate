<?php
/**
 * Meta Boxes for Custom Post Types (CPT)
 * @package   Preg_Meta 
 * @since:  v1.0 
 * @author: Jonathan Rivera  <jrivera@picernefl.com>
 * @copyright 2013 Picerne Real Estate Group
 */
 
 
/**
 * Initialize the Meta Boxes Class
 */ 
function preg_metaInit(){
	
	return new Preg_Meta();
}

	// Add the action if the user is logged in
	if ( is_admin() )
	  add_action( 'admin_menu', 'preg_metaInit' );


/**
 *
 * @package Preg_Meta
 * @author  Jonathan Rivera <jrivera@picernefl.com>
 */
class Preg_Meta{
	
	
	/**
	 * Initialize the Preg_Meta class by hooking our functions. 
	 *
	 * @since     1.0.0
	 */
	public function __construct() {
		
		add_action( 'add_meta_boxes', array($this, 'add_preg_meta_box' ) );  //Add our Meta Boxes
		add_action('save_post', array($this, 'save_custom_meta' ) );        // Save the Meta Box data
		
	}
	
	/**
	 * Adds Meta Boxes for our CPT's. Add meta boxes for more post types in here.
	 * @author Jonathan Rivera
	 * @since v1.0	 
	 */
	public function add_preg_meta_box(){
	
	   /**
	    * Add Meta Boxes for our Slider CPT
		*/
	    add_meta_box(  
        	'slide_meta_box', // $id  
        	'Slide Data', // $title   
       		array($this, 'show_meta_box' ), // $callback  
        	'slider', // $page  
        	'normal', // $context  
        	'high' // $priority  	
			); 
		
	}
	
	/**
	 * Setup The Fields For Our Slider CPT. Copy and alter this function for other CPT's
	 * @author Jonathan Rivera
	 * @since v1.0
	 */
    public function slider_fields(){
			 
		// Slider Array  
		$prefix = 'slider_';  
		$slider_meta_fields = array(  
			array(  
				'label'=> 'Enable Slider Ad Area',  
				'desc'  => 'Check if you want to include the advertising area on this slide.',  
				'id'    => $prefix.'content_enable',  
				'type'  => 'checkbox'  
			), 			
			array(  
				'label'=> 'Slide Heading',  
				'desc'  => 'Input the Heading for your Slide',  
				'id'    => $prefix.'heading',  
				'type'  => 'text'  
			),  
			array(  
				'label'=> 'Slide Content',  
				'desc'  => 'Short and Sweet. HTML Is Permitted',  
				'id'    => $prefix.'content',  
				'type'  => 'textarea'  
			),  
			array(  
				'label'=> 'Include a link?',  
				'desc'  => 'Check if you want to include a link in your slide.',  
				'id'    => $prefix.'link_enable',  
				'type'  => 'checkbox'  
			),  
			array(  
				'label'=> 'Link URL',  
				'desc'  => 'Enter the URL for the Link',  
				'id'    => $prefix.'link_url',  
				'type'  => 'text'  
			),
			array(  
				'label'=> 'Link Title',  
				'desc'  => 'Describle what it is you\'re linking to',  
				'id'    => $prefix.'link_title',  
				'type'  => 'text'  
			), 		
			array(  
				'label'=> 'Button Title',  
				'desc'  => 'Verbiage to display on the button',  
				'id'    => $prefix.'button_title',  
				'type'  => 'text'  
			), 				 			
			array(  
				'label'=> 'Link Color',  
				'desc'  => 'Select what color you\'d your link to be.',  
				'id'    => $prefix.'link_color',  
				'type'  => 'select',  
				'options' => array (  
				    'black' => array (
					    'label' => 'Black',
						'value' => 'btn-inverse',
					),
					'dark-blue' => array (  
						'label' => 'Blue',  
						'value' => 'btn-blue'  
					),  
					'green' => array (  
						'label' => 'Green',  
						'value' => 'btn-green'  
					),
					'maroon' => array (  
						'label' => 'Maroon',  
						'value' => 'btn-maroon'  					  
					),				
					'orange' => array (  
						'label' => 'Orange',  
						'value' => 'btn-orange'  					  
					),  
					'red' => array (  
						'label' => 'Red',  
						'value' => 'btn-danger' 
					), 
					'rust' => array (
					    'label' => 'Rust',
						'value' => 'btn-rust'
				   ),
					'teal' => array (  
						'label' => 'Teal',  
						'value' => 'btn-info'  
					)  
				)  
			)  
		);  
		
		return $slider_meta_fields;	
		
	}
	

	/**
	 * The Callback to show a Meta Box.
	 * @author Jonathan Rivera
	 * @since v1.0
	 */
		public function show_meta_box() {  
		
	      if ( 'slider' == get_post_type($post_id) ) 
		  	 $meta_box_fields = $this->slider_fields();
		
		  global $post;  
			// Use nonce for verification  
			echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
				  
			// Begin the field table and loop  
			echo '<table class="form-table">';  
			
			foreach ($meta_box_fields as $field) {  
			
				// get value of this field if it exists for this post  
				$meta = get_post_meta($post->ID, $field['id'], true);  
				
				// begin a table row   
				echo '<tr> 
						<th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
						<td>';  
						switch($field['type']) {  
							
							// Case statements for each type of Input field
							// text  
							case 'text':  
								echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /> 
									<br /><span class="description">'.$field['desc'].'</span>';  
							break;  	
							
							// textarea  
							case 'textarea':  
								echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea> 
									<br /><span class="description">'.$field['desc'].'</span>';  
							break; 	
							
							// checkbox  
							case 'checkbox':  
								echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/> 
									<label for="'.$field['id'].'">'.$field['desc'].'</label>';  
							break;  
							
							// select  
							case 'select':  
								echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';  
								foreach ($field['options'] as $option) {  
									echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';  
								}  
								echo '</select><br /><span class="description">'.$field['desc'].'</span>';  
							break; 					
							
						} //end switch  
				echo '</td></tr>';  
			} // end foreach  
			echo '</table>'; // end table  
		}  

	/**
	 * Save Custom Meta Data. Uses conditional statements that determine post type to avoid duplicating code to scale this class to other post types. 
	 * @author Jonathan Rivera
	 * @since v1.0
	 */		
		// Save the Data  
		public function save_custom_meta($post_id) {  
		
		  //If the post we are on is a slider, get the array of fields
		   if ( 'slider' == get_post_type($post_id) ) 
		      $custom_meta_fields = $this->slider_fields();
		   
			  
			// verify nonce  
			if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
				return $post_id;  
			// check autosave  
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
				return $post_id;  
			// check permissions  
			if ('page' == $_POST['post_type']) {  
				if (!current_user_can('edit_page', $post_id))  
					return $post_id;  
				} elseif (!current_user_can('edit_post', $post_id)) {  
					return $post_id;  
			}  
			  
			// loop through fields and save the data  
			foreach ($custom_meta_fields as $field) {  
				$old = get_post_meta($post_id, $field['id'], true);  
				$new = $_POST[$field['id']];  
				if ($new && $new != $old) {  
					update_post_meta($post_id, $field['id'], $new);  
				} elseif ('' == $new && $old) {  
					delete_post_meta($post_id, $field['id'], $old);  
				}  
			} // end foreach  
		}  
  
}