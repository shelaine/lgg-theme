<?php

add_shortcode( 'login_link', function () {
	
    if ( is_user_logged_in() ) {
      return '<a href="'.wp_logout_url().'">Logout</a>';
    } else {
      return '<a href="'.wp_login_url().'">Login</a>';
    }
        
});
    
add_shortcode( 'profile_reg', function () {
        
    if ( is_user_logged_in() ) {
        return '<a href="'.site_url().'/my-profile/">My Profile</a>';
    } else {
        return '<a href="'.site_url().'/programs/free-membership/join/">Register</a>';
    }
    
});
    