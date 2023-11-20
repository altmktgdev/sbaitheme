<?php
// Función que maneja el shortcode
function scTopLastPost() {
	$html = null;
	$html .= '
		<section class="top-last-post">
			<div class="top-last-post__container" style="background-image: url(\'' . get_theme_file_uri() . '/images/slide_item1.jpg\')"></div>
			<div class="top-last-post__info">
				<div class="top-last-post__breadcrumb-container">
					<a class="top-last-post__breadcrumb" href="https://www.google.com/">lorem </a>	/  
					<a class="top-last-post__breadcrumb" href="https://www.google.com/">lorem </a>/  
				</div>
				<span class="top-last-post__content-title">
					Lorem ipsum dolor sit amet consectetur adipiscing elit duis facilisis
				</span>
				<span class="top-last-post__content">
					There are a number of different scenarios that could play out when the first round of the NFL Draft kicks…There are a number of different scenarios that could play out when the first round of the NFL Draft kicks…
				</span>
				<a class="top-last-post__anchor" href="#">
					Read More
				</a>
			</div>
		</section>
	';
	return $html;
}
// Registrando el shortcode en WordPress
add_shortcode('sc_top_last_post', 'scTopLastPost');
