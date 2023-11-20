<?php
// Función que maneja el shortcode
function scShowMore() {
	$html = null;
	$html .= '	
		<section class="news-show-more">
			<div class="news-show-more__main-title-container"> 
				<span class="news-show-more__main-title"> Latest 
					<span class="news-show-more__slug-league">nfl </span>
					Betting News
				</span>
			</div>
			<div class="news-show-more__container">
				<div class="news-show-more__grid">
					<div class="news-show-more__grid-item"style="background-image: url(\'' . get_theme_file_uri() . '/images/slide_item1.jpg\')"></div>
					<div class="news-show-more__grid-item">
						<span class="news-show-more__date">
							10 HOURS AGO
						</span>
						<span class="news-show-more__title">
							NFL Draft 2023: Will the first three picks in the 2023 NFL Draft be quarterbacks?
						</span>
						<span class="news-show-more__content">
							There are a number of different scenarios that could play out when the first round of the NFL Draft kicks…
						</span>
						<a class="news-show-more__anchor" href="https://www.google.com/">
							Read More
						</a>
					</div>
				</div>
			</div>
			<div class="news-show-more__button-expand-container">
				<button class="news-show-more__button-expand">
					expand
				</button>
			</div>
		</section>
	';
	return $html;
}

// Registrando el shortcode en WordPress
add_shortcode('sc_show_more', 'scShowMore');
