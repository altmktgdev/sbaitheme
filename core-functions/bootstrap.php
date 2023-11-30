<?php
function optimize_bootstrap_css() {
    // Deregister the original Bootstrap CSS
    wp_deregister_style('bootstrap-css'); // Asegúrate de reemplazar 'bootstrap-css' con el handle correcto usado en tu tema

    // Register Bootstrap CSS again with defer attribute
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/path/to/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-css');

    // Agrega un filtro para añadir el atributo 'defer' al tag de Bootstrap
    add_filter('style_loader_tag', 'add_defer_attribute', 10, 2);
}
add_action('wp_enqueue_scripts', 'optimize_bootstrap_css');

function add_defer_attribute($html, $handle) {
    if ('bootstrap-css' === $handle) {
        return str_replace('rel=', 'rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'" ', $html);
    }
    return $html;
}
