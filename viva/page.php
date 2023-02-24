<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<?php $section_style = '';
$top_padding = get_post_meta( get_the_ID(), 'keydesign_page_top_padding', true );
$bottom_padding = get_post_meta( get_the_ID(), 'keydesign_page_bottom_padding', true );

if ( '' !== $top_padding ) {
    $section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $top_padding ) ? $top_padding : $top_padding . 'px' ) . ';';
}
if ( '' !== $bottom_padding ) {
    $section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $bottom_padding ) ? $bottom_padding : $bottom_padding . 'px' ) . ';';
}
?>

<div id="primary" class="content-area" style="<?php echo esc_attr( $section_style ); ?>">
	<main id="main" class="site-main">

		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/page/content', 'page' );
				get_template_part( 'core/templates/post/partials/content', 'comments' );
			endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
