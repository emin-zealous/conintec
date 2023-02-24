<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<?php
$kd_post_content = $blog_template_class = $page_layout = $sticky_sidebar = $blog_active_widgets = $blog_sidebar = $blog_template = $wrapper_class = '';

$blog_sidebar = apply_filters( 'viva_blog_listing_sidebar_switch', viva_get_option( 'tek-blog-sidebar' ) );
$blog_template = apply_filters( 'viva_blog_listing_template', viva_get_option( 'tek-blog-template' ) );

if ( viva_get_option( 'tek-blog-listing-sticky-sidebar' ) ) {
    $sticky_sidebar = 'post-sticky-sidebar';
}

/* Clean install defaults */
if ( !class_exists( 'ReduxFramework' ) ) {
    /* Blog list default template */
    $kd_post_content = "img-top-list";
    $blog_template_class = 'blog-'.$kd_post_content;
    /* Enable blog sidebar */
    if ( '' == $blog_sidebar ) {
  		$blog_sidebar = 1;
  	}
} elseif ( '' != $blog_template ) {
    $kd_post_content = $blog_template;
    $blog_template_class = 'blog-'.$blog_template;
}

if ( $blog_sidebar ) {
    $page_layout = "use-sidebar";
}

$blog_active_widgets = is_active_sidebar( 'blog-sidebar' );

$wrapper_classes[] = 'container';
$wrapper_classes[] = $page_layout;
$wrapper_classes[] = $blog_template_class;

// Wrapper class
$wrapper_class = implode( ' ', $wrapper_classes );
?>

<div id="posts-content" class="<?php echo esc_attr( trim( $wrapper_class ) ); ?>" >
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	<?php } else { ?>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12 BlogFullWidth">
	<?php } ?>
	<?php if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) : the_post();

			get_template_part( 'core/templates/post/blog', $kd_post_content );

		endwhile;

        /* Numeric posts pagination */
        viva_numeric_posts_nav();

		else :
			get_template_part( 'core/templates/post/content', 'none' );
		endif;
	?>
	</div>
    <?php if ( $blog_sidebar && $blog_active_widgets ) : ?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo esc_attr( $sticky_sidebar ); ?>">
            <div class="right-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
