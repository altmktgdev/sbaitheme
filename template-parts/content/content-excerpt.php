<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="title-div">
        <header class="entry-header">
            <h2 class="entry-title default-max-width"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
    </div>

    <div class="image-excerpt-div">
        <div class="featured-image-div">
            <?php
            if (has_post_thumbnail()) {
                $featured_image = get_the_post_thumbnail_url(null, 'full');
                echo '<img src="' . esc_url($featured_image) . '" class="custom-featured-image" alt="' . esc_attr(get_the_title()) . '">';
            }
            ?>
        </div>
        <div class="excerpt-div">
            <div class="entry-content">
                <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
            </div><!-- .entry-content -->
            <footer class="entry-footer default-max-width">
                <?php twenty_twenty_one_entry_meta_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
