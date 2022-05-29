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
	wp_enqueue_style('amias_calendly_widget_css', 'https://assets.calendly.com/assets/external/widget.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'amias_styles');

function amias_scripts() {
	wp_enqueue_script('amias-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
	wp_enqueue_script('amias-dark-mode', get_template_directory_uri() . '/assets/js/dark-mode.js', array(), null, true);
	wp_enqueue_script('amias-content-scroll', get_template_directory_uri() . '/assets/js/scroll-to-content.js', array(), null, true);
	wp_enqueue_script('amias_calendly_widget_js', 'https://assets.calendly.com/assets/external/widget.js', array(), null, true);
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
	$wp_customize->add_setting('amias_contact_page');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_contact_page', array(
		'label' => 'Contact Page',
		'section' => 'amias_contact_section',
		'settings' => 'amias_contact_page',
		'type' => 'dropdown-pages'
	)));
}

add_action('customize_register', 'amias_contact');

function amias_enable_vcard( $mime_types ) {
	$mime_types['vcf'] = 'text/x-vcard';
	$mime_types['vcard'] = 'text/x-vcard';
	return $mime_types;
}

add_action('upload_mimes', 'amias_enable_vcard');

function amias_services($wp_customize) {
	$wp_customize->add_section('amias_services_section', array(
		'title' => __('Services'),
		'description' => 'Keep the homepage services up to date',
		'panel' => 'amias_panel'
	));
}

add_action('customize_register', 'amias_services');

function amias_service_one($wp_customize) {
	$wp_customize->add_setting('amias_services_title_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_title_one', array(
		'label' => 'First Service Title',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_title_one'
	)));
	$wp_customize->add_setting('amias_services_excerpt_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_excerpt_one', array(
		'label' => 'First Service Excerpt',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_excerpt_one'
	)));
	$wp_customize->add_setting('amias_services_benefit_first_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_first_one', array(
		'label' => 'First Service Benefit No. 1',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_first_one'
	)));
	$wp_customize->add_setting('amias_services_benefit_second_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_second_one', array(
		'label' => 'First Service Benefit No. 2',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_second_one'
	)));
	$wp_customize->add_setting('amias_services_price_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_price_one', array(
		'label' => 'First Service Price',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_price_one'
	)));
	$wp_customize->add_setting('amias_services_location_one');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_location_one', array(
		'label' => 'First Service Link',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_location_one',
		'type' => 'dropdown-pages'
	)));
}

add_action('customize_register', 'amias_service_one');

function amias_service_two($wp_customize) {
	$wp_customize->add_setting('amias_services_title_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_title_two', array(
		'label' => 'Second Service Title',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_title_two'
	)));
	$wp_customize->add_setting('amias_services_excerpt_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_excerpt_two', array(
		'label' => 'Second Service Excerpt',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_excerpt_two'
	)));
	$wp_customize->add_setting('amias_services_benefit_first_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_first_two', array(
		'label' => 'Second Service Benefit No. 1',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_first_two'
	)));
	$wp_customize->add_setting('amias_services_benefit_second_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_second_two', array(
		'label' => 'Second Service Benefit No. 2',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_second_two'
	)));
	$wp_customize->add_setting('amias_services_price_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_price_two', array(
		'label' => 'Second Service Price',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_price_two'
	)));
	$wp_customize->add_setting('amias_services_location_two');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_location_two', array(
		'label' => 'Second Service Link',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_location_two',
		'type' => 'dropdown-pages'
	)));
}

add_action('customize_register', 'amias_service_two');

function amias_service_three($wp_customize) {
	$wp_customize->add_setting('amias_services_title_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_title_three', array(
		'label' => 'Third Service Title',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_title_three'
	)));
	$wp_customize->add_setting('amias_services_excerpt_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_excerpt_three', array(
		'label' => 'Third Service Excerpt',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_excerpt_three'
	)));
	$wp_customize->add_setting('amias_services_benefit_first_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_first_three', array(
		'label' => 'Third Service Benefit No. 1',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_first_three'
	)));
	$wp_customize->add_setting('amias_services_benefit_second_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_benefit_second_three', array(
		'label' => 'Third Service Benefit No. 2',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_benefit_second_three'
	)));
	$wp_customize->add_setting('amias_services_price_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_price_three', array(
		'label' => 'Third Service Price',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_price_three'
	)));
	$wp_customize->add_setting('amias_services_location_three');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_services_location_three', array(
		'label' => 'Third Service Link',
		'section' => 'amias_services_section',
		'settings' => 'amias_services_location_three',
		'type' => 'dropdown-pages'
	)));
}

add_action('customize_register', 'amias_service_three');

function amias_calendly_section($wp_customize) {
	$wp_customize->add_section('amias_calendly_section', array(
		'title' => __('Calendly Badge'),
		'description' => 'Update calendly link and content',
		'panel' => 'amias_panel'
	));
}

add_action('customize_register', 'amias_calendly_section');

function amias_calendly($wp_customize) {
	$wp_customize->add_setting('amias_calendly_url');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_calendly_url', array(
		'label' => 'Link to Calendly Event',
		'section' => 'amias_calendly_section',
		'settings' => 'amias_calendly_url'
	)));
	$wp_customize->add_setting('amias_calendly_text');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_calendly_text', array(
		'label' => 'Button text',
		'section' => 'amias_calendly_section',
		'settings' => 'amias_calendly_text'
	)));
	$wp_customize->add_setting('amias_calendly_colour');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_calendly_colour', array(
		'label' => 'HEX colour value for the background',
		'section' => 'amias_calendly_section',
		'settings' => 'amias_calendly_colour'
	)));
	$wp_customize->add_setting('amias_calendly_text_colour');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_calendly_text_colour', array(
		'label' => 'HEX colour value for the text',
		'section' => 'amias_calendly_section',
		'settings' => 'amias_calendly_text_colour'
	)));
	$wp_customize->add_setting('amias_calendly_branding');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amias_calendly_branding', array(
		'label' => 'check this for your custom branding',
		'section' => 'amias_calendly_section',
		'settings' => 'amias_calendly_branding',
		'type' => 'checkbox'
	)));
}

add_action('customize_register', 'amias_calendly');

function amias_footer_widget() {
	register_sidebar(array(
		'name' => __('Footer Widget', 'textdomain'),
		'id' => 'footer-widget'
	));
}

add_action('widgets_init', 'amias_footer_widget');

?>
