<?php
/*
 * Custom functions
 * @since Version 1.0.0 
 */
 
/********************* Begin ***************/
/*******************************************/

/* 
 * Loads the Options Panel
 * @author    Jonathan Rivera <jrivera@picernefl.com>
 * @since Version 1.0.0 
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin-options/' );
	require_once dirname( __FILE__ ) . '/../admin-options/options-framework.php';
}


/**
 * Remove Certain Default WordPress WIdgets
 *
 * @author    Jonathan Rivera <jrivera@picernefl.com>
 * @since Version 1.0.0
 *
 * To register any of the Widgets again, just simply comment out or remove line of code
 * for the Widget you need.
 */
function preg_unregister_widgets(){
   
   //Archives Widget
   unregister_widget('WP_Widget_Archives');
   unregister_widget('WP_Widget_Calendar');   
   unregister_widget('WP_Widget_Categories');
   unregister_widget('WP_Nav_Menu_Widget');     
   unregister_widget('WP_Widget_Meta');   
   unregister_widget('WP_Widget_RSS');
   unregister_widget('WP_Widget_Pages');
   unregister_widget('WP_Widget_Recent_Posts');
   unregister_widget('WP_Widget_Recent_Comments');
   unregister_widget('WP_Widget_Tag_Cloud');
   
   
   
}

add_action('widgets_init', 'preg_unregister_widgets', 11);