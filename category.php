<?php
/**
 * Template Name: category news
 *
 * @package wpboilerplate
 */

get_header(); ?>

<div class="content-info-column">
	<div class="content-info-column__item">
		<?php
		// Obtener todas las categorías de WordPress
		$categories = get_categories();

		// Recorrer las categorías y mostrar el shortcode para cada una
		foreach ($categories as $category) {
			$category_name = $category->slug; // Obtener el nombre de la categoría
			$category_title = $category->name; // Obtener el título de la categoría
			echo do_shortcode("[main_mid_slider top='9' tag='' category='$category_name' title='$category_title']");
		}
		?>
	</div>
	<div class="content-info-column__item">
		<div class="content-info-column__sidebar-container">
			<?php dynamic_sidebar('aside-widget'); ?>
			<?php echo do_shortcode('[sd-widgets widget="nextGames" sport="baseball" league="mlb" class="side-widget-1"]'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
