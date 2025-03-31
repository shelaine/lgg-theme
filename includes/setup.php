<?php

/* might delete later, not currently using it 
** using add_action( 'enqueue_block_editor_assets', '' ) instead
**
*/

function lgg_setup_theme() {

    add_theme_support('editor-styles');

    add_editor_style('assets/css/main.css');

}

