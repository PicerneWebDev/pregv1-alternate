<?php
/**
 * Register sidebars and widgets
 */
 
require_once('thumbnail-widget.php');
require_once('page-list-widget.php');
require_once('amenities-widget.php');


function roots_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary Sidebar', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Main Widget Area', 'roots'),
	'description'   => 'Widgets placed here will be located below the slider',
    'id'            => 'main-widget',
    'before_widget' => '<div class="caption">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  
  register_sidebar(array(
    'name'          => __('Middle Widget Area', 'roots'),
	'description'   => 'Widgets placed will be located below the main widget area and offset to the right',
    'id'            => 'middle-widget',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));  
  
    register_sidebar(array(
    'name'          => __('Bottom Widget Area', 'roots'),
	'description'   => 'Widgets placed will be located below the middle widget area and above the footer',
    'id'            => 'bottom-widget',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ));  

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="foot-widg-wrap span3 %1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="footer-title"><h4>',
    'after_title'   => '</h4></div>',
  ));

  // Widgets  
  register_widget('preg_thumb_widget');
    
  register_widget('preg_page_list_widget');
  
  register_widget('preg_amenities_widget');  
  
}
add_action('widgets_init', 'roots_widgets_init');

