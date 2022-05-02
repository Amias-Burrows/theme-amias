<?php

function amias_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_post_type_support('page', 'excerpt');
}

add_action('after_setup_theme', 'amias_theme_support');

function amias_menus() {
	$locations = array(
		'main' => 'Main Menu',
		'socials' => 'Social Menu',
		'footer' => 'Footer Menu'
	);
	register_nav_menus($locations);
}

add_action('init', 'amias_menus');

function amias_styles() {
	wp_enqueue_style('amias-page', get_template_directory_uri() . '/assets/css/root.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'amias_styles');

function amias_scripts() {
	wp_enqueue_script('amias-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
	wp_enqueue_script('amias-dark-mode', get_template_directory_uri() . '/assets/js/dark-mode.js', array(), null, true);
	wp_enqueue_script('amias-content-scroll', get_template_directory_uri() . '/assets/js/scroll-to-content.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'amias_scripts');

function amias_panel($wp_customize) {
	$wp_customize->add_panel('amias_panel', array(
		'title' => __('Custom Settings', 'amias')
	));
}

add_action('customize_register', 'amias_panel');

function amias_open_graph($wp_customize) {
	$wp_customize->add_section('amias_open_graph_section', array(
		'title' => __('Open Graph Controls'),
		'description' => 'When sharing the website the open graph meta tags are what the social media page finds',
		'panel' => 'amias_panel'
	));
	$wp_customize->add_setting('amias_open_graph_image');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'amias_open_graph_image', array(
		'label' => 'Open Graph Image',
		'section' => 'amias_open_graph_section',
		'settings' => 'amias_open_graph_image'
	)));
	$wp_customize->add_setting('amias_open_graph_excerpt');
	$wp_customize->add_control('amias_open_graph_excerpt', array(
		'label' => 'Site Excerpt',
		'section' => 'amias_open_graph_section',
		'setting' => 'amias_open_graph_excerpt'
	));
}

add_action('customize_register', 'amias_open_graph');

function amias_contact($wp_customize) {
	$wp_customize->add_section('amias_contact_section', array(
		'title' => __('Contact Details'),
		'panel' => 'amias_panel'
	));
	$wp_customize->add_setting('amias_contact_phone');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_contact_phone', array(
		'label' => 'Phone Number',
		'section' => 'amias_contact_section',
		'settings' => 'amias_contact_phone'
	)));
	$wp_customize->add_setting('amias_contact_email');
	$wp_customize->add_control(new wp_Customize_Control($wp_customize, 'amias_contact_email', array(
		'label' => 'Email Address',
		'section' => 'amias_contact_section',
		'settings' => 'amias_contact_email'
	)));
	$wp_customize->add_setting('amias_contact_contact');
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'amias_contact_contact', array(
		'label' => 'Contact VCF file',
		'section' => 'amias_contact_section',
		'settings' => 'amias_contact_contact'
	)));
}

add_action('customize_register', 'amias_contact');

?>
