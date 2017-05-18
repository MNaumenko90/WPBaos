<?php 
	
function wpbaos_setup() {
	load_theme_textdomain('wpbaos');
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height' => 133, 
		'width' => 200,
		'flex-height' => true));

	add_theme_support('post-thumbnails');
	//set_post_thumbnails_size();

	add_theme_support('html5', array(
		'search_form', 
		'comment-form',
		'caption',));

	//add_theme_support('menus');
	register_nav_menu('primary', 'Primary menu');
	
}
add_action('after_setup_theme', 'wpbaos_setup');

function wpbaos_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery');
}
add_action( 'wp_enqueue_scripts', 'wpbaos_scripts' );
?>