<?php
function stedelijk_load_styles_scripts(){
    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/stedelijk.css');
}
add_action('wp_enqueue_scripts','stedelijk_load_styles_scripts');