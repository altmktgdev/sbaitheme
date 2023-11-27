<?php
function custom_excerpt($content, $limit = 25, $more_link_text = '', $post_link = '') {
    $excerpt = wp_trim_words($content, $limit, '...');
    $excerpt .= ' <a href="' . $post_link . '">' . $more_link_text . '</a>';
    return $excerpt;
}

function generate_news_grid($posts_query) {
    $html = '';
    while ($posts_query->have_posts()) {
        $posts_query->the_post();

        $post_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $post_title = get_the_title();
        $post_content = custom_excerpt(get_the_content(), 25, '', get_permalink());
        $post_link = get_permalink();

        $html .= '<div class="news-show-more__grid">';
        $html .= '    <div class="news-show-more__grid-item" style="background-image: url(\'' . $post_thumbnail . '\')" onclick="location.href=\'' . $post_link . '\'"></div>';
        $html .= '    <div class="news-show-more__grid-item" onclick="location.href=\'' . $post_link . '\'">
                        <span class="news-show-more__date">' . get_time_ago(strtotime(get_the_date())) . '</span>
                        <span class="news-show-more__title">' . $post_title . '</span>
                        <span class="news-show-more__content">' . $post_content . '</span>
                        <a class="news-show-more__anchor" href="' . $post_link . '"> Read More…</a>
                    </div>';
        $html .= '</div>';
    }
    wp_reset_postdata();
    return $html;
}

function showMoreComponent($atts = []) {
    $current_url = $_SERVER['REQUEST_URI'];
    $url_parts = explode('/', trim($current_url, '/'));
    $subcategory = 'nfl'; // Valor por defecto
    foreach ($url_parts as $index => $part) {
        if ($part == 'news' && isset($url_parts[$index + 1])) {
            $subcategory = $url_parts[$index + 1];
            break;
        }
    }

    $paged = isset($atts['page']) ? intval($atts['page']) : 1;

    $args = array(
        'category_name'  => $subcategory,
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged
    );

    $posts_query = new WP_Query($args);
    $html = '<section class="news-show-more">
				<div class="news-show-more__container">
					<div class="news-show-more__main-title-container">
						<span class="news-show-more__main-title">Latest 
							<span class="news-show-more__slug-league">' . $subcategory . ' </span> Betting News
						</span>
					</div>';
			$html .= generate_news_grid($posts_query);

		$html .= '</div>
				<div class="news-show-more__button-expand-container">
					<button class="news-show-more__button-expand">expand</button>
				</div>
			</section>';
		return $html;
}
add_shortcode('show_more_component', 'showMoreComponent');

function load_more_posts() {
    $page_number = isset($_POST['page_number']) ? intval($_POST['page_number']) : 1;
    $category = isset($_POST['category']) ? $_POST['category'] : '';

    $args = array(
        'category_name'  => $category,
        'posts_per_page' => 5,
        'paged'          => $page_number, // Asegúrate de que esto esté configurado correctamente
        'orderby'        => 'date',
        'order'          => 'DESC'
    );
    $posts_query = new WP_Query($args);

    echo generate_news_grid($posts_query);
    wp_die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts'); // Si el usuario está autenticado
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts'); // Si el usuario no está autenticado

function my_enqueue_scripts() {
    global $wp_query;
    $current_category = ''; // Inicializar como vacío

    // Lógica para determinar la categoría actual
    $current_url = $_SERVER['REQUEST_URI'];
    $url_parts = explode('/', trim($current_url, '/'));
    foreach ($url_parts as $index => $part) {
        if ($part == 'news' && isset($url_parts[$index + 1])) {
            $current_category = $url_parts[$index + 1];
            break;
        }
    }

    wp_enqueue_script('my-ajax-script', get_stylesheet_directory_uri() . '/js/my-ajax-script.js', array('jquery'), '1.0.1', true);
    wp_localize_script('my-ajax-script', 'my_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'category' => $current_category // Agrega la categoría actual
    ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
