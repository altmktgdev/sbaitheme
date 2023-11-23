<?php
//Top Sliders
function mainMidSlider($atts){

$atts = shortcode_atts(array(
	'top'       => '',
	'tag'       => '',
	'category'  => '',
	'title'     => ''
), $atts);

	$args_news = array(
		'posts_per_page'  => $atts['top'],
		'tag'             => $atts['tag'],
		"category_name"   => $atts['category'],
		'orderby'         => 'post_date',
		'order'           => 'DESC',
		'post_status'     => 'publish'
		);

		//get data
		$array_news = new WP_Query($args_news);

		$category = get_category_by_slug($args_news['category_name']);

		if (!$category) {
			$category_name    = $args_news['category_name'];
			$category_parts   = explode('/', $category_name);
			$category_slug    = @$category_parts[1];
			$category         = @get_category_by_slug($category_slug);
			
			$category_title = @$category->name;
			$category_link = @get_category_link($category->term_id);
		}else{
			$category_title = null;
			$category_link = get_category_link($category->term_id);
		}
		
		$html = null;
		$html .= '
		
		<section class="slider-module">
		<div class="slider-title">
		<div class="slider-title__title-container">
		<div class="slider-title__title-item">
			<h2 class="slider-title__title-head">'.$atts['title'].'</h2>
		</div>
		<div class="slider-title__title-item"><a class="slider-title__title-anchor" href="' . $category_link . '"> <span>See All </span><span>'.$atts['title'].'</span></a></div>
		</div>
	</div>';

		
		$html .= '<div class="mid-size-slider-section"> 
				<div class="swiper mid-size-slider">
					<div class="swiper-wrapper">';
					
		while ($array_news->have_posts()):
		$array_news->the_post();
		$image_url = wp_get_attachment_image_src(get_post_thumbnail_id() , 'news_carousel') [0];
		$categories = get_the_category();
		$category = '';
		if (!empty($categories))
		{
			$category = esc_html($categories[0]->name);
		}
		$category_link = get_category_link($categories[0]->term_id);
		
		
		$html .= '<a class="swiper-slide mid-size-slider__item" href="'.get_permalink().'" style="background-image: url('.$image_url.')">
						<div class="mid-size-slider__text-cointainer">
						<span class="mid-size-slider__item-title">'.get_the_title().'</span>
						<span class="mid-size-slider__item-date">'.get_time_ago(strtotime(get_the_date())).'</span>
						</div>
					</a>';
		
		endwhile;
		wp_reset_postdata();
					
		$html .= '</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
				</div>
				</section>
				
				';
		
		return $html;

}
add_shortcode('main_mid_slider', 'mainMidSlider');
