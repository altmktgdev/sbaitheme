<?php
/**
 * Template Name: two columns
 *
 * @package wpboilerplate
 */

get_header(); ?>
<div class="content-info-column">
	<div class="content-info-column__item">
		<?php the_content();?>
	</div>
	<div class="content-info-column__item">
		<img class="side-image" src="<?php echo get_theme_file_uri(); ?>/images/right_widget_1.png" alt="">
	</div>
</div>
<?php get_footer(); ?>
