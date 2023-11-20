<?php
// Función que maneja el shortcode
function scName2() {
	$html = null;
	$html .= '<h1>This is a ShortCode sName2</h1>';
	return $html;
}
// Registrando el shortcode en WordPress
add_shortcode('sc_name2', 'scName2');
