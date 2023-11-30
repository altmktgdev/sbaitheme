
<?php

function my_theme_enqueue_scripts() {
    wp_enqueue_script('swiper-js', get_theme_file_uri('swiper-bundle.min.js'), array(), '1.0.2', true);
    add_filter('script_loader_tag', 'add_defer_attribute_to_swiper', 10, 2);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function add_defer_attribute_to_swiper($tag, $handle) {
    if ('swiper-js' === $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}
