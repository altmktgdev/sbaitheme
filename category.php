<?php
/**
 * Template Name: category pages
 *
 * @package wpboilerplate
 */

get_header(); 

$current_category = get_queried_object();
if ($current_category instanceof WP_Term) {
    $category_slug = $current_category->slug;
}

$is_news_category = ($category_slug === 'news');
?>
<div class="content-info-column">
	<div class="content-info-column__item">
		<h1><span style="text-transform:uppercase"><?php echo esc_html($category_slug); ?></span>  Picks News</h1>
		<?php
                if (!$is_news_category) {
                    echo do_shortcode('[news_top_banner tag="" category="' . $category_slug . '"]');
                    echo do_shortcode('[main_mid_slider top="9" tag="" category="'. $category_slug.'" title="<span>'. $category_slug.'</span>"]');
                    echo do_shortcode('[home_banner]');
                    echo do_shortcode('[show_more_component tag="" category="' . $category_slug . '"]');
                }

                // Código para mostrar la descripción de la categoría
                if ($current_category instanceof WP_Term) {
                    echo '<div class="category-description">';
                    echo category_description($current_category->term_id);
                    echo '</div>';
                }
                ?>
	</div>
	<div class="content-info-column__item">
		<div class="content-info-column__sidebar-container">
		<?php dynamic_sidebar( 'aside-widget' );?>
			<?php echo do_shortcode('[sd-widgets widget="nextGames" sport="baseball" league="mlb" class="side-widget-1"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
