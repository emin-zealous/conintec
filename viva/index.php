<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

<?php $kd_post_content = $blog_template_class = $page_layout = $section_style = $sticky_sidebar = $blog_active_widgets = $blog_sidebar = $blog_template = '';

$themetek_page_top_padding = get_post_meta( get_the_ID(), 'keydesign_page_top_padding', true );
$themetek_page_bottom_padding = get_post_meta( get_the_ID(), 'keydesign_page_bottom_padding', true );

if ( '' !== $themetek_page_top_padding ) {
    $section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_top_padding ) ? $themetek_page_top_padding : $themetek_page_top_padding . 'px' ) . ';';
}
if ( '' !== $themetek_page_bottom_padding ) {
    $section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_bottom_padding ) ? $themetek_page_bottom_padding : $themetek_page_bottom_padding . 'px' ) . ';';
}

$blog_sidebar = apply_filters( 'viva_blog_listing_sidebar_switch', viva_get_option( 'tek-blog-sidebar' ) );
$blog_template = apply_filters( 'viva_blog_listing_template', viva_get_option( 'tek-blog-template' ) );

if ( '' == $blog_sidebar ) {
    $blog_sidebar = 1;
}

if ( !class_exists( 'ReduxFramework' ) ) {
    $kd_post_content .= "img-top-list";
    $blog_template_class .= "blog-img-top-list";
} elseif ( '' != $blog_template ) {
    $kd_post_content .= $blog_template;
    $blog_template_class .= 'blog-'.$blog_template;
}

if ( $blog_sidebar ) {
    $page_layout .= "use-sidebar";
}

if ( viva_get_option( 'tek-blog-listing-sticky-sidebar' ) ) {
    $sticky_sidebar = 'post-sticky-sidebar';
}

$blog_active_widgets = is_active_sidebar( 'blog-sidebar' );
?>

<?php if ( is_home() ) : ?>
    <div id="posts-content" class="container <?php echo esc_attr( $page_layout ); ?> <?php echo esc_attr( $blog_template_class ); ?>" >
    <?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <?php } else { ?>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 BlogFullWidth">
    <?php } ?>
        <?php
            if ( have_posts() ) :
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
    <?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo esc_attr( $sticky_sidebar ); ?>">
            <div class="right-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    <?php } ?>
    </div>
<?php else : ?>
    <div id="primary" class="content-area" style="<?php echo esc_attr( $section_style ); ?>">
        <main id="main" class="site-main">
        <?php // Show the selected frontpage content.
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'core/templates/page/content', 'front-page' );
                endwhile;
            else :
                get_template_part( 'core/templates/post/content', 'none' );
            endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php endif; ?>

<?php get_footer(); ?>
