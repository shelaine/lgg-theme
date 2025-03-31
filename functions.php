<?php


// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/theme/custom-buttons.php'));
include(get_theme_file_path('/includes/theme/menus.php'));
include(get_theme_file_path('/includes/front/pw-protected.php'));


// Shortcodes
include(get_theme_file_path('/includes/shortcodes/guest.php'));
include(get_theme_file_path('/includes/shortcodes/forum-links.php'));
include(get_theme_file_path('/includes/shortcodes/mailchimp-signup.php'));
include(get_theme_file_path('/includes/shortcodes/menu.php'));
include(get_theme_file_path('/includes/shortcodes/siteurl.php'));
include(get_theme_file_path('/includes/shortcodes/username.php'));


// Hooks
add_action('wp_enqueue_scripts', 'lgg_add_theme_assets', 9);
add_action( 'enqueue_block_editor_assets', 'lgg_add_theme_assets' );


// Tracking Codes
include(get_theme_file_path('/includes/tracking/google-analytics.php'));
include(get_theme_file_path('/includes/tracking/meta-pixel.php'));
