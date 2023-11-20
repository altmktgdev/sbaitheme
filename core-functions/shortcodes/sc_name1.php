<?php
// Función que maneja el shortcode
function scName1() {
    return '<h1>This is a ShortCode sName1</h1>';
}

// Registrando el shortcode en WordPress
add_shortcode('sc_name1', 'scName1');
