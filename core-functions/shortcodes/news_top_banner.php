<?php

function newsTopBanner($atts){

  $atts = shortcode_atts(array(
    'tag'       => '',
    'category'  => ''
  ), $atts);

  $args = array(
    'numberposts' => 1,
    'category_name' => $atts['category'],
    'tag' => $atts['tag'],
  );

  $latest_posts = get_posts($args);

  $latest_post_title = !empty($latest_posts) ? $latest_posts[0]->post_title : 'No Posts Found';

  // Get the category and sub-category names
  $categories = get_the_category($latest_posts[0]->ID);
  $category_name = 'news';
  $sub_category_name = '';

  foreach ($categories as $category) {
    if ($category->parent != 0) {
      $sub_category_name = $category->name;
    } else {
      $category_name = $category->name;
    }
  }

  // Si el nombre de la categoría es 'Uncategorized', reemplázalo con el nombre de la categoría actual
  if ($category_name === 'Uncategorized') {
    $category_name = single_cat_title('', false); // Obten el nombre de la categoría actual
  }

  // Obtén el nombre de la categoría actual
  $current_cat = single_cat_title('', false);


  // Get human readable time difference
  $post_time = strtotime($latest_posts[0]->post_date);
  $human_time_diff = human_time_diff($post_time, current_time('timestamp')) . ' ago';

  // Get the excerpt of the post
  $post_excerpt = get_the_excerpt($latest_posts[0]);

  // Trim the excerpt to 300 characters
  $trimmed_excerpt = substr($post_excerpt, 0, 300);
  if (strlen($post_excerpt) > 300) {
    $trimmed_excerpt .= '...';
  }

  // Get the post link
  $post_link = get_permalink($latest_posts[0]->ID);

  // Get the post thumbnail
  $post_thumbnail = get_the_post_thumbnail_url($latest_posts[0], 'full');

  $html = '      
		<section class="top-last-post">
			<a href="'.$post_link.'" class="top-last-post__container" style="background-image: url('.$post_thumbnail.')"></a>
			<div class="top-last-post__info">
				<div class="top-last-post__breadcrumb-container">
					<a class="top-last-post__breadcrumb" href="https://www.google.com/">lorem </a>/  
					<a class="top-last-post__breadcrumb" href="https://www.google.com/">lorem </a>/  
					</div>
				<span class="top-last-post__content-title">'.$latest_post_title.'</span>
				<span class="top-last-post__content">'.$trimmed_excerpt.'</span>
				<a href""></a>
				<a href="'.$post_link.'" class="top-last-post__anchor">Read More</a>
			</div>
		</section>';
return $html;
}
add_shortcode('news_top_banner', 'newsTopBanner');
