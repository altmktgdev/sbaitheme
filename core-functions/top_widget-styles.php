
<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('my-custom-style', get_theme_file_uri('widgets.css'), array(), '1.0.2', false);

    // Agrega un filtro para añadir el atributo 'defer' al tag de CSS
    add_filter('style_loader_tag', 'add_async_attribute_to_css', 10, 2);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function add_async_attribute_to_css($html, $handle) {
    if ('my-custom-style' === $handle) {
        return str_replace("rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $html);
    }
    return $html;
}
