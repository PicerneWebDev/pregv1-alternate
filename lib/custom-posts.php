<?php 
/* Setup Custom Post Types */
function preg_slider() {

	register_post_type( 'slider',

                array( 

				'label' => __('Slides'), 

				'singular_label' => __('Slide', 'roots'),

				'_builtin' => false,

				'exclude_from_search' => true, // Exclude from Search Results

				'capability_type' => 'page',

				'public' => true, 

				'show_ui' => true,

				'show_in_nav_menus' => false,

				'rewrite' => array(

					'slug' => 'slide-view',

					'with_front' => FALSE,

				),

				'query_var' => "slide", // This goes to the WP_Query schema

				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_slides.png',

				'supports' => array(

						'title',

						'custom-fields',

            'thumbnail')

					) 

				);

}



add_action('init', 'preg_slider');


?>