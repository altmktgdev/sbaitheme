<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php $sub_category_slug = get_subcategory_slug(); ?>
<h1 class="post-title-centered"><span style="text-transform:uppercase"><?php echo esc_html($sub_category_slug); ?></span> Picks News</h1>

<div class="content-info-column">
    <div class="content-info-column__item category-description" >
        <header class="entry-header alignwide">
            <?php twenty_twenty_one_post_thumbnail(); ?>
            <div class="article-breadcrumb">
                <?php 
                    echo '<a href="'.esc_url( home_url() ).'">Home</a><span> / </span>';
                    echo get_the_category_list( '<span> / </span>' );
                    echo '<span> / </span>';
                    echo '<a>'.get_the_title().'</a>';
                ?>
            </div>
            <h2><?php the_title(); ?></h2> <!-- Modificación aquí para el título -->
        </header><!-- .entry-header -->
        <?php the_content();?>
    </div>
    <div class="content-info-column__item">
        <div class="content-info-column__sidebar-container">
            <?php dynamic_sidebar( 'aside-widget' );?>
            <?php echo do_shortcode('[sd-widgets widget="nextGames" sport="baseball" league="mlb" class="side-widget-1"]'); ?>
        </div>
    </div>
</div>

<?php
// Función para obtener el slug de la subcategoría a la que pertenece el post
function get_subcategory_slug() {
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
            // Verificar si la categoría es una subcategoría
            if ( $category->parent > 0 ) {
                return $category->slug; // Devolver el slug de la subcategoría
            }
        }
    }

    return ''; // Si no se encuentra ninguna subcategoría, devolver cadena vacía
}
?>
