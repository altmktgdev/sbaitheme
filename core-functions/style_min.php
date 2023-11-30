<?php
function remove_block_library_styles() {
    wp_dequeue_style('wp-block-library'); // Desencola el archivo de estilos de la librería de bloques
}
add_action('wp_enqueue_scripts', 'remove_block_library_styles', 100);
