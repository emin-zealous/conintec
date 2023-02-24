<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php $error_page_image = viva_get_option( 'tek-404-image' );

if ( viva_get_option( 'tek-404-title' ) ) {
	$page_title = viva_get_option( 'tek-404-title' );
} else {
	$page_title = __( '404 - Page Not Found', 'viva' );
}

if ( viva_get_option( 'tek-404-subtitle' ) ) {
	$page_subtitle = viva_get_option( 'tek-404-subtitle' );
} else {
	$page_subtitle = __( 'The page you are looking for does not exist.', 'viva' );
}

if ( viva_get_option( 'tek-404-back' ) ) {
	$button_text = viva_get_option( 'tek-404-back' );
} else {
	$button_text = __( 'Back to homepage', 'viva' );
}
?>

<section class="page-404">
	<div class="container">
	    <div class="row" >
				<?php if ( isset( $error_page_image['url'] ) && '' != $error_page_image['url'] ) : ?>
					<div class="error-page-image-wrapper">
						<img class="error-page-image" src="<?php echo esc_url( $error_page_image['url'] ); ?>" />
					</div>
				<?php endif; ?>
				<h1 class="section-heading"><?php echo esc_html( $page_title ); ?></h1>
        <h6 class="section-subheading"><?php echo esc_html( $page_subtitle ); ?></h6>
				<a href="<?php echo esc_url( get_site_url() ); ?>" class="tt_button tt_primary_button btn_gradient_color reverse_gradient" data-text="<?php echo esc_attr( $button_text ); ?>"><span class="prim_text"><?php echo esc_html( $button_text ); ?></span></a>
	    </div>
    </div>
</section>

<?php get_footer(); ?>
