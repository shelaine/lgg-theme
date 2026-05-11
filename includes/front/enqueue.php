<?php

function lgg_enqueue_assets() {

	wp_enqueue_style('lgg-styles', get_theme_file_uri('/assets/dist/styles.css'));
	wp_enqueue_script('lgg-scripts', get_theme_file_uri() . '/assets/dist/main.js', null, filemtime(get_theme_file_path() . '/assets/dist/main.js'), true);
}
add_action('wp_enqueue_scripts', 'lgg_enqueue_assets');
