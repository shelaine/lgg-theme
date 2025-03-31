<?php

add_shortcode( 'mc_signup', function () {

	$out = '<div id="mc_embed_signup">
            <form id="mc-embedded-subscribe-form" class="validate" action="//drbrookestuart.us3.list-manage.com/subscribe/post?u=eb242fe07c1bad39415f74bfc&amp;id=2dcb6abb7b" method="post" name="mc-embedded-subscribe-form" novalidate="novalidate" target="_blank">
            <div class="mc-field-group">
            <p style="text-align: center;"><input id="mce-EMAIL" class="required email" name="Email" type="text" placeholder="Email" aria-required="true"><input id="mc-embedded-subscribe heartbeat-button" class="button heartbeat-button heartbeat-btn" name="subscribe" type="submit" value="Sign Up"></p>

            </div>
            </form></div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input name="b_eb242fe07c1bad39415f74bfc_c3992a786f" type="text" value="" tabindex="-1"></div>';

	return $out;
} );