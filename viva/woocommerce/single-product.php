<?php
/**
 * The Template for displaying all single products
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }

$single_sidebar = $sidebar_position = $image_position = $gallery_template = $shop_active_widgets = '';

$shop_active_widgets = is_active_sidebar( 'shop-sidebar' );

if ( !$shop_active_widgets ) {
  $single_sidebar = 0;
}

if ( viva_get_option( 'tek-woo-single-sidebar' ) ) {
	$single_sidebar = apply_filters( 'viva_shop_single_sidebar_switch', viva_get_option( 'tek-woo-single-sidebar' ) );
}

if ( viva_get_option( 'tek-woo-single-sidebar-position' ) ) {
	$sidebar_position = apply_filters( 'viva_shop_single_sidebar_position', viva_get_option( 'tek-woo-single-sidebar-position' ) );
}

if ( viva_get_option( 'tek-woo-single-image-position' ) ) {
  $image_position = apply_filters( 'viva_shop_single_image_position', viva_get_option( 'tek-woo-single-image-position' ) );
}

if ( viva_get_option( 'tek-woo-single-gallery' ) ) {
  $gallery_template = apply_filters( 'viva_shop_single_gallery_template', viva_get_option( 'tek-woo-single-gallery' ) );
}

get_header(); ?>

<div class="container <?php echo esc_attr( $image_position ); ?> <?php echo esc_attr( $gallery_template ); ?>" id="product-content">
  <?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <?php if ($sidebar_position == 'woo-single-sidebar-left') : ?>
    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="woo-sidebar">
          <?php dynamic_sidebar( 'shop-sidebar' ); ?>
        </div>
    	</div>
  	<?php endif; ?>
  <?php endif; ?>

  <?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
  <?php else : ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
  		<?php wc_get_template_part( 'content', 'single-product' ); ?>
  	<?php endwhile; // end of the loop. ?>
	</div>

	<?php if ( isset( $single_sidebar ) && ( $single_sidebar == '1' ) && isset( $sidebar_position ) ) : ?>
    <?php if ($sidebar_position == 'woo-single-sidebar-right') : ?>
    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="woo-sidebar">
          <?php dynamic_sidebar( 'shop-sidebar' ); ?>
        </div>
    	</div>
  	<?php endif; ?>
  <?php endif; ?>
</div>

<div class="kd-shop-related">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php do_action( 'woocommerce_after_main_content' );	?>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
