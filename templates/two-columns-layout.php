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
		<div class="content-info-column__sidebar-container">
		<?php dynamic_sidebar( 'aside-widget' );?>
			<?php echo do_shortcode('[sd-widgets widget="nextGames" sport="baseball" league="mlb" class="side-widget-1"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
