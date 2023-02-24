<?php
  // Do not allow directly accessing this file.
  if ( ! defined( 'ABSPATH' ) ) {
  	exit( 'Direct script access denied.' );
  }

  $wrapper_class = $animation_class = '';

  // Wrapper class
  $position = viva_get_option( 'tek-backtotop-position' );
  $backtotop_switch = viva_get_option( 'tek-backtotop-scroll-position' );
  if ( $backtotop_switch ) {
    $animation_class = 'scroll-position-style';
  }
  $wrapper_class = implode( ' ', array( 'back-to-top', $position, $animation_class ) );
?>
<div class="<?php echo esc_attr( trim( $wrapper_class ) ); ?>">
  <i class="fa fa-chevron-up"></i>
  <?php if ( $backtotop_switch ) : ?>
    <svg height="50" width="50"><circle cx="25" cy="25" r="24" /></svg>
  <?php endif; ?>
</div>
