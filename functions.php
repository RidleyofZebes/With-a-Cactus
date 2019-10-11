<?php 

function withacactus_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'withacactus_resources');

// Theme Setup
function withacactus_setup() {
	
	// Navigation Menus
	register_nav_menus( array(
		'primary-nav' => 'Primary Menu',
		'footer-nav' => 'Footer Menu',
	));	
	
	// Add Featured Image Support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('large-thumbnail', 350, 225, true);
	add_image_size('banner-image', 920, 210, true);
	
	// Add Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'video'));
}

add_action('after_setup_theme', 'withacactus_setup');

// Add Widget Locations
function widgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		//'before_widget' => '<div class="widget-item">',
		//'after_widget' => '</div>',
		//'before_title' => '<h1>',
		//'after_title' => '</h1>'
	));
	register_sidebar( array(
		'name' => 'Left Footer',
		'id' => 'footer1'
	));
	register_sidebar( array(
		'name' => 'Middle Footer',
		'id' => 'footer2'
	));
	register_sidebar( array(
		'name' => 'Right Footer',
		'id' => 'footer3'
	));
}

add_action('widgets_init', 'widgetsInit');

// Customize Excerpt Length
function custom_excerpt() {
	return 55;
}

add_filter('excerpt_length', 'custom_excerpt');
add_filter('excerpt_more','__return_false');
?>