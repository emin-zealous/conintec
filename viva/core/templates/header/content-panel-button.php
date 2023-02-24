<?php

  /* Button style and color scheme */
  $btn_wrapper_class = $button_style_class = $button_color_class = $button_hover_class = $button_extra_class = '';

  if ( viva_get_option( 'tek-panel-button-style' ) == 'solid-button') {
    $button_style_class = 'tt_primary_button';
  } elseif ( viva_get_option( 'tek-panel-button-style' ) == 'outline-button') {
    $button_style_class = 'tt_secondary_button';
  } else {
    $button_style_class = 'tt_primary_button';
  }

  if ( viva_get_option( 'tek-panel-button-color' ) == 'primary-color') {
    $button_color_class = 'btn_primary_color';
  } elseif ( viva_get_option( 'tek-panel-button-color' ) == 'secondary-color') {
    $button_color_class = 'btn_secondary_color';
  } elseif ( viva_get_option( 'tek-panel-button-color' ) == 'gradient') {
    $button_color_class = 'btn_gradient_color';
  } else {
    $button_color_class = 'btn_primary_color';
  }

  if ( '' != viva_get_option( 'tek-panel-button-hover-style' ) ) {
    $button_hover_class = viva_get_option( 'tek-panel-button-hover-style' );
  }

  if ( viva_get_option( 'tek-panel-button-css-class' ) != '' ) {
    $button_extra_class = viva_get_option( 'tek-panel-button-css-class' );
  }

  $btn_wrapper_class = implode( ' ', array( 'modal-menu-item', 'tt_button', $button_style_class, $button_color_class, $button_hover_class, $button_extra_class ) );
?>

<?php if ( viva_get_option( 'tek-panel-button' ) &&  viva_get_option( 'tek-panel-button-action' ) == '1' ) : ?>
   <a class="<?php echo esc_attr($btn_wrapper_class); ?> panel-trigger-btn" data-text="<?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?>"><span class="prim_text"><?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?></span></a>
<?php elseif ( viva_get_option( 'tek-panel-button' ) &&  viva_get_option( 'tek-panel-button-action' ) == '2' ) : ?>
  <?php if ( '' != viva_get_option( 'tek-panel-scroll-id' ) ) : ?>
     <a class="<?php echo esc_attr($btn_wrapper_class); ?> scroll-section" href="<?php if( is_front_page()) { echo esc_attr( viva_get_option( 'tek-panel-scroll-id' ) ); } else { echo esc_url(site_url()) . esc_attr( viva_get_option( 'tek-panel-scroll-id' ) );} ?>" data-text="<?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?>"><span class="prim_text"><?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?></span></a>
  <?php endif; ?>
<?php elseif ( viva_get_option( 'tek-panel-button' ) && viva_get_option( 'tek-panel-button-action' ) == '3' ) : ?>
  <?php if ( '' != viva_get_option( 'tek-panel-button-new-page' ) ) : ?>
   <a class="<?php echo esc_attr($btn_wrapper_class); ?>" <?php echo ( viva_get_option( 'tek-panel-button-target' ) == 'new-page') ? 'target="_blank"' : 'target="_self"'; ?> href="<?php echo esc_url( viva_get_option( 'tek-panel-button-new-page' ) ); ?>" data-text="<?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?>"><span class="prim_text"><?php echo esc_html( viva_get_option( 'tek-panel-button-text' ) );?></span></a>
  <?php endif; ?>
<?php endif; ?>
