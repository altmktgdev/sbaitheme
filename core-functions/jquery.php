<?php
function modify_jquery_and_optimize_scripts() {
    if (!is_admin()) {
        // Cargar la versión "slim" de jQuery asincrónicamente
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', false, '3.6.0', true);
        wp_enqueue_script('jquery');

        // Ejemplo para desencolar un script no utilizado en la homepage
        if (is_front_page() || is_home()) {
            wp_dequeue_script('unneeded-script-handle');
        }
    }
}
add_action('wp_enqueue_scripts', 'modify_jquery_and_optimize_scripts');
