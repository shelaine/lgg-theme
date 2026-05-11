<?php

function create_events_post_type() {

  register_post_type(
    'event',
    array(
      'labels' => array(
        'name' => __('Events', 'lgg-blocks'),
        'singular_name' => __('Event', 'lgg-blocks'),
        'add_new' => __('Add Event', 'lgg-blocks'),
        'add_new_item' => __('Add Event', 'lgg-blocks'),
        'edit' => __('Edit', 'lgg-blocks'),
        'edit_item' => __('Edit Event', 'lgg-blocks'),
        'new_item' => __('New Event', 'lgg-blocks'),
        'view_item' => __('View Event', 'lgg-blocks'),
        'view_items' => __('View All Event', 'lgg-blocks'),
        'search_items' => __('Search Events', 'lgg-blocks'),
        'not_found' => __('No Events Found', 'lgg-blocks'),
        'not_found_in_trash' => __('No Events found in Trash', 'lgg-blocks'),
        // 'featured_image' => __('Main Image', 'lgg-blocks'),
        // 'set_featured_image' => __('Set Newsletter post Main / Hero Image (min. width 1440px)', 'lgg-blocks'),
        // 'remove_featured_image' => __('Remove Newsletter Main Image', 'lgg-blocks'),
        // 'use_featured_image' => __('Use as Newsletter Main Image', 'lgg-blocks'),
        'archives' => __('Events Archives', 'lgg-blocks'),
        'attributes' => __('Events Attributes', 'lgg-blocks'),
        'item_published' => __('Events published.', 'lgg-blocks'),
      ),
      'description' => 'Events.',
      'public' => true,
      'show_in_rest' => true,
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'rest_base' => 'event',
      'template_lock' => true,
      /*
      'template' => array(
        array(
          'lgg-blocks/event-job-title'
        ),
        array(
            'core/paragraph',
            array(
                'placeholder' => 'Event Description',
            ),
        ),
      ),
      */
      'hierarchical' => false,
      'has_archive' => true,
      'can_export' => true,
      'menu_position' => 3,
      'menu_icon' => 'dashicons-calendar-alt',
      'rewrite' => array('slug' => 'Event', 'with_front' => false),
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'custom-fields',
        'page-attributes'
      ),
      'query_var' => true,
    )
  );

  
  register_taxonomy(
      'event-cat',
      'event',
      array(
        'labels' => array(
          'name' => __('Event Category', 'lgg-blocks'),
          'singular_name' => __('Event Category', 'lgg-blocks'),
          'search_items' => __('Search Event Categories', 'lgg-blocks'),
          'all_items' => __('All Event Categories', 'lgg-blocks'),
          'edit_item' => __('Edit Event Category', 'lgg-blocks'),
          'update_item' => __('Update Event Category', 'lgg-blocks'),
          'add_new_item' => __('Add New Event Category', 'lgg-blocks'),
          'new_item_name' => __('New Event Category Name', 'lgg-blocks'),
          'menu_name' => __('Event Categories', 'lgg-blocks'),
        ),
        'public' => true,
        'hierarchical' => true, // like tags; set to true if you want it to behave like categories
        'show_in_rest' => true, // enables Gutenberg support
        'show_admin_column' => true, // shows in the admin list table
        'rewrite' => array('slug' => 'Event Category'),
      )
  );

}
add_action('init', 'create_events_post_type', 0);


// Customize Text for Post Type Title
function change_event_title_placeholder($input) {
  if (get_post_type() === 'event') {
    return __('Event Title');
  }
  return $input;
}
add_filter('enter_title_here', 'change_event_title_placeholder');
  

/*
add_filter('allowed_block_types_all', 'events_blocks', 10, 2);
function events_blocks( $allowed_blocks, $context ) {

    if(get_post_type() === 'event') :
			$allowed_blocks = array(
				'core/paragraph',
                'lgg-blocks/custom block here'
			);
    endif;
    return $allowed_blocks;
 
}
*/