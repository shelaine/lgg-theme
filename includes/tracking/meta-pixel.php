<?php

function add_facebook_domain_verification_meta() {
    echo '<meta name="facebook-domain-verification" content="nb6uspti18391ex5xt9xe6naxks0cp" />' . "\n";
}
add_action('wp_head', 'add_facebook_domain_verification_meta');