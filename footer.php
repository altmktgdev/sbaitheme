<?php
  /**
   * The template for displaying the footer
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package WordPress
   * @subpackage Twenty_Twenty_One
   * @since Twenty Twenty-One 1.0
   */
?>
	</section>
		<footer class="main-footer">
			<div class="main-footer__item">
			<?php
				$f_logo = get_theme_file_uri()."/images/logo_sbai_white.svg";
				if(esc_url(wp_get_attachment_url(get_theme_mod('custom_logo')))){
				$f_logo = esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); 
			}
			?>
				<a href="<?php echo home_url(); ?>">
					<img class="main-footer__logo" src="<?php echo $f_logo; ?>" alt="Sport Betting AI logo">
				</a>
			</div>
			<div class="main-footer__item">
				<div class="main-footer__nav-container">
					<?php get_template_part( 'template-parts/footer-menu' );?>
					<?php get_template_part( 'template-parts/footer-menu-social' );?>
					
				</div>
			</div>
			<div class="main-footer__item">
				<span class="main-footer__copy">Sport Betting AI 2023 All Rights Reserved</span>
			</div>
		</footer>
	</main>
	<script src="<?php echo get_theme_file_uri(); ?>/swiper-bundle.min.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>
