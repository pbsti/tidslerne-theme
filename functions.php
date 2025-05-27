<?php
function thistle_load_resources() {
    
    wp_enqueue_style("styles", get_template_directory_uri() . "/css/styles.css");
}
add_action("wp_enqueue_scripts", "thistle_load_resources");

function enqueue_main_js() {
    wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/js/main.js', 
        array(), 
        null, 
        true 
    );
}
add_action('wp_enqueue_scripts', 'enqueue_main_js');
