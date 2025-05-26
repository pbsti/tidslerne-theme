<?php
function thistle_load_resources() {
    
    wp_enqueue_style("styles", get_template_directory_uri() . "/css/styles.css");
}
add_action("wp_enqueue_scripts", "thistle_load_resources");