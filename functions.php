<?php

function amias_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_post_type_support('post', 'excerpt');
}

add_action('after_setup_theme', 'amias_theme_support');

function amias_menus() {
	$locations = array(
		'primary' => 'primary',
		'main' => 'main_menu',
		'socials' => 'social',
		'footer' => 'footer_menu'
	);
	register_nav_menus($locations);
}

add_action('init', 'amias_menus');

function amias_styles() {
	wp_enqueue_style('amias_style', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'amias_styles');

function amias_scripts() {
	wp_enqueue_script('amias_calendly', 'https://assets.calendly.com/assets/external/widget.css', array(), null, true);
	wp_enqueue_script('amias_calendly_async', 'https://assets.calendly.com/assets/external/widget.js', array(), null, true);
	wp_enqueue_script('amias_calendly_styling', get_template_directory_uri() . '/assets/js/calendly.js', array(), null, true);
	wp_enqueue_script('amias_cookies', get_template_directory_uri() . '/assets/js/cookies.js', array(), null, true);
	wp_enqueue_script('amias_main_js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'amias_scripts');

function amias_open_graph($wp_customize) {
	$wp_customize->add_section('amias_open_graph_section', array(
		'title' => __('Open Graph Controls')
	));
	$wp_customize->add_setting('amias_open_graph_image');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'amias_open_graph_image', array(
		'label' => 'Open Graph Image',
		'section' => 'amias_open_graph_section',
		'settings' => 'amias_open_graph_section'
	)));
}

add_action('customize_register', 'amias_open_graph');

?>
