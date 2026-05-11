<?php

if (function_exists('add_theme_support')) {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
		'main-nav' => __('Main Nav'),
        'footer-nav' => __('Footer Nav'),
	));

	// Localisation Support
	load_theme_textdomain(get_stylesheet());

}