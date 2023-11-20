<?php
//Mid Slider
function scMainMidSlider() {
	$html = null;
	$html .= '
	<section class="slider-module">
		<div class="slider-title">
			<div class="slider-title__title-container">
				<div class="slider-title__title-item">
					<h1 class="slider-title__title-head">
						NFL
					</h1>
				</div>
				<div class="slider-title__title-item">
					<a class="slider-title__title-anchor" href="#"> 
						<span>See All</span>
						<span>NFL</span>
					</a>
				</div>
			</div>
		</div>
		<div class="mid-size-slider-section">
			<div class="swiper mid-size-slider">
				<div class="swiper-wrapper">
					<a class="swiper-slide mid-size-slider__item" href="https://www.google.com/" style="background-image: url(\'' . get_theme_file_uri() . '/images/test1.jpg\')">
						<div class="mid-size-slider__text-cointainer">
							<span class="mid-size-slider__item-title">
								Missouri Tigers vs. Arkansas Razorbacks Best Bets
							</span>
							<span class="mid-size-slider__item-date">
								10 HOURS AGO
							</span>
						</div>
					</a>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>';
	return $html;
}

// Registrando el shortcode en WordPress
add_shortcode('sc_main_mid_slider', 'scMainMidSlider');
