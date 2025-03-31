<?php

add_shortcode('GUEST','show_guest_content');
function show_guest_content($atts,$content){
    if (!is_user_logged_in()){
        return $content;
    }
        return '';
}