<?php
/**
 * Footer widget area template
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (
	! is_active_sidebar( 'footer-first-widget-area' ) &&
	! is_active_sidebar( 'footer-second-widget-area' ) &&
	! is_active_sidebar( 'footer-third-widget-area' ) &&
  	! is_active_sidebar( 'footer-fourth-widget-area' ) &&
  	! is_active_sidebar( 'footer-fifth-widget-area' ) &&
	! is_active_sidebar( 'footer-sixth-widget-area' )
) {
	return;
}
?>

<div class="footer-widget-area">
<?php
	$sidebar_number = array( 'first', 'second', 'third', 'fourth', 'fifth', 'sixth' );

	foreach ( $sidebar_number as &$value ) {
		$widget_switch = viva_get_option( 'tek-footer-'.$value.'-widget-switch' );
		if ( ! class_exists( 'ReduxFramework' ) ) {
		  $widget_switch = true;
		}
		$widget_width = viva_get_option( 'tek-footer-'.$value.'-widget-width' );
		$widget_text_align = viva_get_option( 'tek-footer-'.$value.'-widget-text-align' );
		$widget_width_class = 'footer-widget-column col-xs-12 col-sm-12 col-md-'.$widget_width.' col-lg-'.$widget_width;
		$widget_wrapper_class = implode( ' ', array( $value.'-widget-area', $widget_width_class, $widget_text_align ) );

		$widget_area_name = 'footer-'.$value.'-widget-area';
		if ( is_active_sidebar( $widget_area_name ) && $widget_switch ) : ?>
			<div class="<?php echo esc_attr( trim( $widget_wrapper_class ) ); ?>">
				<?php dynamic_sidebar( $widget_area_name ); ?>
			</div>
		<?php endif;
	}
?>
</div>
