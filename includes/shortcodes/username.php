<?php

add_shortcode( 'lgg_name', function () {
	
    $current_user = wp_get_current_user();
       
    return $current_user->display_name;
       
});