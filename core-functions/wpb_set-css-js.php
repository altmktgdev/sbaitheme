<?php

// Salir si se intenta acceder directamente al archivo
if (!defined('ABSPATH')) {
    exit;
}

// Función para encolar estilos - Modificada para usar preload y defer
if (!function_exists('wpb_enqueue_styles')) :

	function wpb_enqueue_styles() {
		// Desencolar estilos del tema padre
		wp_dequeue_style('twenty-twenty-one-style');
		wp_deregister_style('twenty-twenty-one-style');
	
		// Encolar CSS personalizado del tema hijo con el atributo 'preload'
		$child_theme_css_path = get_stylesheet_directory() . '/theme-styles.css';
		if (file_exists($child_theme_css_path)) {
			wp_enqueue_style(
				'child-theme-styles',
				get_stylesheet_directory_uri() . '/theme-styles.css',
				[],
				filemtime($child_theme_css_path)
			);
	
			// Modificar la etiqueta de carga para usar preload y defer
			add_filter('style_loader_tag', function($tag, $handle) {
				if ('child-theme-styles' !== $handle) {
					return $tag;
				}
				return str_replace("rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $tag);
			}, 10, 2);
		}
	}
	
	endif;
	
	// Función para encolar scripts - Modificada para usar defer
	if (!function_exists('wpb_enqueue_scripts')) :
	
	function wpb_enqueue_scripts() {
		// Encolar JS personalizado del tema hijo con el atributo 'defer'
		$child_theme_js_path = get_stylesheet_directory() . '/theme-scripts.js';
		if (file_exists($child_theme_js_path)) {
			wp_enqueue_script(
				'child-theme-scripts', // Handle
				get_stylesheet_directory_uri() . '/theme-scripts.js', // Ruta al archivo JS del tema hijo
				['jquery'], // Un array de scripts de los que depende
				filemtime($child_theme_js_path), // Número de versión para el control de cache
				true // Cargar en el footer
			);
	
			// Agregar el atributo 'defer' al script
			add_filter('script_loader_tag', function($tag, $handle) {
				if ('child-theme-scripts' !== $handle) {
					return $tag;
				}
				return str_replace(' src', ' defer="defer" src', $tag);
			}, 10, 2);
		}
	}
	
	endif;
	
	// Agregar las acciones con prioridad 20 para asegurarnos de que se ejecutan después de que el tema padre haya encolado sus estilos y scripts
	add_action('wp_enqueue_scripts', 'wpb_enqueue_styles', 20);
	add_action('wp_enqueue_scripts', 'wpb_enqueue_scripts', 20);
	