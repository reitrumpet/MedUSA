<?php

function load_scripts(){
	wp_enqueue_script('uikit-js', 'https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js', array('jquery'), '3.6.18', false);
	wp_enqueue_script('uikit-icons-js', 'https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js', array('jquery'), '3.6.18', false);
	wp_enqueue_style('uikit-css', 'https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css', array(), '3.6.18', 'all');
	wp_enqueue_script('template', get_template_directory_uri(). '/js/template.js', array(), '1.0', 'all');
	wp_enqueue_style('template', get_template_directory_uri(). '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function medusa_config(){
	register_nav_menus(
		array(
			'top_menu' => 'Main Menu Top',
			'my_main_menu' => 'Main Menu',
			'footer_menu_1' => 'Main Menu Footer block 1',
			'footer_menu_2' => 'Main Menu Footer block 2',
			'footer_menu_3' => 'Main Menu Footer block 3',
			'packages_menu' => 'Main Menu Packages',
			'bottom_menu' => 'Main menu Bottom Bar',
			'offcanvas_menu' => 'Main menu Offcanvas'
		)
	);

	add_theme_support( 'custom-logo', array(
		'height' => 480,
		'width'  => 720,
	) );
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('video', 'image'));


}
add_action( 'after_setup_theme' , 'medusa_config' , 0 );