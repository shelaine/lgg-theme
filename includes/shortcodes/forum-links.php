<?php

add_shortcode( 'lgg-mbr-forum-link', function () {

    return '<a href="'.site_url().'/community/forum/mind-body-reset/" class="hidden-forum-link">Mind Body Reset</a>';
    
});

add_shortcode( 'lgg-free-forum-link', function () {
    
    return '<a href="'.site_url().'/community/forum/lgg-free/" class="hidden-forum-link">Fre Membership</a>';
    
});

add_shortcode( 'lgg-toolkit-forum-link', function () {
    
    return '<a href="'.site_url().'/community/forum/lgg-toolkit/">LG&G Toolkit</a>';
    
});

add_shortcode( 'lgg-foundations-forum-link', function () {
    
    return '<a href="'.site_url().'/community/forum/lgg-foundations/">LG&G Foundations</a>';
    
});