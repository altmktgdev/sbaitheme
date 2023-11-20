<?php
/**
 * Template Name: category news
 *
 * @package wpboilerplate
 */

get_header(); ?>
<div class="content-info-column">
	<div class="content-info-column__item">
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="News" title="News"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="NFL" title="NFL"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="NBA" title="NBA"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="MLB" title="MLB"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="NHL" title="NHL"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="UFC" title="UFC"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="Champions League" title="Champions League"]'); ?>
		<?php echo do_shortcode('[main_mid_slider top="9" tag="" category="NCAAF" title="NCAAF"]'); ?>
	</div>
	<div class="content-info-column__item">
		<div class="content-info-column__sidebar-container">
		<?php dynamic_sidebar( 'aside-widget' );?>
			<?php echo do_shortcode('[sd-widgets widget="nextGames" sport="baseball" league="mlb" class="side-widget-1"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
