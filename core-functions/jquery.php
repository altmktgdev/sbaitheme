<?php
function modify_jquery_and_optimize_scripts() {
    if (!is_admin()) {
        // Optimiza jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, NULL, true);
        wp_enqueue_script('jquery');

        // Ejemplo para desencolar un script no utilizado en la homepage
        if (is_front_page() || is_home()) {
            wp_dequeue_script('unneeded-script-handle');
        }
    }
}
add_action('wp_enqueue_scripts', 'modify_jquery_and_optimize_scripts');
