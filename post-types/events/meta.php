<?php

function lgg_register_event_meta() {
	register_post_meta('event', 'start_date', [
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
	]);

	register_post_meta('event', 'end_date', [
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
	]);

	register_post_meta('event', 'all_day', [
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
	]);
}
add_action('init', 'lgg_register_event_meta');
