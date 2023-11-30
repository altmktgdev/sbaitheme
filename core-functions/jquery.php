<?php
function modify_jquery() {
    if (!is_admin()) {
        // Deregister default jQuery
        wp_deregister_script('jquery');
        
        // Register the script again, but with defer or async attribute
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, NULL, true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'modify_jquery');
