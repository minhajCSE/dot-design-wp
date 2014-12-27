<?php

add_theme_support( 'post-thumbnails', array( 'post', 'slider', 'promo') );
add_image_size( 'slider-image', 940, 341, true );
add_image_size( 'promo-image', 300,179, true );
 /* Register Custom Post Types*********************************** */
	
	function create_post_type() {
		register_post_type( 'slider',
			array(
				'labels' => array(
					'name' => __( 'Slides' ),
					'singular_name' => __( 'Slide' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Slide' ),
					'edit_item' => __( 'Edit Slide' ),
					'new_item' => __( 'New Slide' ),
					'view_item' => __( 'View Slide' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Slide you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'slide' ),
			'supports' => array( 'title', 'thumbnail' )
			)
		);	
     register_post_type( 'promo',
			array(
				'labels' => array(
					'name' => __( 'Promo Image' ),
					'singular_name' => __( 'promo' ),
					'add_new' => __( 'Add New Promo Image' ),
					'add_new_item' => __( 'Add New Promo Image' ),
					'edit_item' => __( 'Edit promo' ),
					'new_item' => __( 'New promo' ),
					'view_item' => __( 'View promo' ),
					'not_found' => __( 'Sorry, we couldn\'t find the promo image you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
//			'show_in_menu' => false,
			'menu_position' => 14,
			'has_archive' => false,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'promo' ),
			'supports' => array( 'title', 'thumbnail' )
			)
		);	
        }		
	add_action( 'init', 'create_post_type' );

/* WordPress 3.0 Menu Editor ********************************************/

	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'dotdesign' ) );
		}
	}
	function wpj_default_menu() {
		echo '<ul id="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
	register_nav_menu( 'menu_footer', __( 'Footer Menu', 'dotdesign' ) );
	
	
/**
   Activated  Options Framework
 */
require_once ('admin/index.php');

// Shortcode Register
 function button( $atts, $content = null ) {
    return '<div class="button"></div>';
}
add_shortcode( 'button', 'button' );

// Register widget in our theme

function dotdesign_widget_areas() {

		
   	    register_sidebar( array(
			'name' => __( 'Contenporary Widget', 'dotdesign' ),
			'id' => 'contenporary',
			'before_widget' => '<div class="fix single-promo floatleft">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
		
		register_sidebar( array(
			'name' => __( 'Traditional Widget', 'dotdesign' ),
			'id' => 'traditional',
			'before_widget' => '<div class="fix single-promo1 floatleft">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
		register_sidebar( array(
			'name' => __( 'Interiors Widget', 'dotdesign' ),
			'id' => 'interiors',
			'before_widget' => '<div class="fix single-promo2 floatleft">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
		register_sidebar( array(
			'name' => __( 'Visual Widget', 'dotdesign' ),
			'id' => 'visual',
			'before_widget' => '<div id="no-margin" class="fix single-promo3 floatleft">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
		register_sidebar( array(
			'name' => __( 'Twitter Widget', 'dotdesign' ),
			'id' => 'twitter-post',
			'before_widget' => '<div class="fix footer-top-promo1 floatleft">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );	

	}
	add_action('widgets_init', 'dotdesign_widget_areas');
 
?>