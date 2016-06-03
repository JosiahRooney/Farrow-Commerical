<?php

// Enqueue Scripts and Styles

function loadjquery() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'loadjquery' );

function farrow_theme_assets() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css' );
	wp_enqueue_style( 'bxslider-css', get_template_directory_uri() . '/assets/css/vendor/jquery.bxslider.css' );
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/vendor/jquery.fancybox.css' );
	wp_enqueue_style( 'fancybox-buttons-css', get_template_directory_uri() . '/assets/css/vendor/jquery.fancybox-buttons.css' );
	wp_enqueue_style( 'fancybox-thumbs-css', get_template_directory_uri() . '/assets/css/vendor/jquery.fancybox-thumbs.css' );
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" );

	wp_enqueue_script( 'jquery-fancybox-js', get_template_directory_uri(). '/assets/js/vendor/jquery.fancybox.js' );
	// wp_enqueue_script( 'jquery-fancybox-pack-js', get_template_directory_uri(). '/assets/js/vendor/jquery.fancybox.pack.js' ); minified
	wp_enqueue_script( 'jquery-fancybox-buttons-js', get_template_directory_uri(). '/assets/js/vendor/jquery.fancybox-buttons.js' );
	wp_enqueue_script( 'jquery-fancybox-media-js', get_template_directory_uri(). '/assets/js/vendor/jquery.fancybox-media.js' );
	wp_enqueue_script( 'jquery-fancybox-thumbs-js', get_template_directory_uri(). '/assets/js/vendor/jquery.fancybox-thumbs.js' );
	wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/jquery.scripts.js');
	wp_enqueue_script( 'jquery-bxslider', get_template_directory_uri() . '/assets/js/vendor/jquery.bxslider.js');
}
add_action( 'wp_enqueue_scripts', 'farrow_theme_assets' );


// Menus

function register_menus() {
	register_nav_menu( 'main_menu', __( 'Main Menu', 'farrow' ) );
	register_nav_menu( 'secondary_menu', __( 'Secondary Menu', 'farrow' ) );
	register_nav_menu( 'mobile_menu', __( 'Mobile Menu', 'farrow' ) );
	register_nav_menu( 'footer_menu', __( 'Footer Menu', 'farrow' ) );
}
add_action( 'after_setup_theme', 'register_menus' );



// Advanced Custom Fields options page

// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Theme General Settings',
// 		'menu_title'	=> 'Theme Settings',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 		));	
// }
