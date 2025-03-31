<?php

function lgg_add_theme_assets() {

	wp_enqueue_style('main-css', get_theme_file_uri('/assets/css/main.css'));
	wp_enqueue_style('nav-css', get_theme_file_uri('/assets/css/nav.css'));
	wp_enqueue_style('editor-css', get_theme_file_uri('/assets/css/editor.css'));

	// script.js
	//wp_enqueue_script('script', get_theme_file_uri() . '/assets/js/main.min.js', null, filemtime(get_theme_file_path() . '/assets/js/main.min.js'), true);
}

