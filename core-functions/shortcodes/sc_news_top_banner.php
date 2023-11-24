<?php

function scNewsTopBanner($atts) {
	// Atributos predeterminados
	$atts = shortcode_atts(array(
		'tag'       => '',
		'category'  => ''
	), $atts);
	// Argumentos para obtener los posts
	$args = array(
		'numberposts' => 1,
		'category_name' => $atts['category'],
		'tag' => $atts['tag'],
	);
	// Obtener los últimos posts
	$latest_posts = get_posts($args);
	// Título del último post
	$latest_post_title = !empty($latest_posts) ? $latest_posts[0]->post_title : 'No Posts Found';
	// Inicializar variables para el breadcrumb
	$breadcrumb = '<a href="'.esc_url(home_url()).'">Home</a><span> / </span>';
	// Construir el breadcrumb si hay posts
	if (!empty($latest_posts)) {
		$post_categories = get_the_category($latest_posts[0]->ID);
		foreach ($post_categories as $category) {
			$cat_link = get_category_link($category->term_id);
			$breadcrumb .= '<a href="' . esc_url($cat_link) . '">' . esc_html($category->name) . '</a><span> / </span>';
		}
		$breadcrumb .= '<a>' . esc_html($latest_post_title) . '</a>';
	}
	// Obtener el tiempo en formato legible por humanos
	$post_time = strtotime($latest_posts[0]->post_date);
	$human_time_diff = human_time_diff($post_time, current_time('timestamp')) . ' ago';
	// Obtener y recortar el extracto del post
	$post_excerpt = get_the_excerpt($latest_posts[0]);
	$trimmed_excerpt = substr($post_excerpt, 0, 300);
	if (strlen($post_excerpt) > 300) {
		$trimmed_excerpt .= '...';
	}
	// Obtener el enlace y la imagen del post
	$post_link = get_permalink($latest_posts[0]->ID);
	$post_thumbnail = get_the_post_thumbnail_url($latest_posts[0], 'full');
	// Construir el HTML completo
	$html = '      
		<section class="top-last-post">
			<a href="'.$post_link.'" class="top-last-post__container" style="background-image: url('.$post_thumbnail.')"></a>
			<div class="top-last-post__info">
				<div class="article-breadcrumb">'.
					$breadcrumb
				.'</div>
				<span class="top-last-post__content-title">'.$latest_post_title.'</span>
				<span class="top-last-post__content">'.$trimmed_excerpt.'</span>
				<a href="'.$post_link.'" class="top-last-post__anchor">Read More</a>
			</div>
		</section>';
	return $html;
}
add_shortcode('sc_news_top_banner', 'scNewsTopBanner');
