<?php
  $panel_wrapper_class = $button_hover_class = $panel_css_class = $social_profiles = $panel_position_class = $panel_header_position_class = '';

  $social_profiles = viva_get_option( 'tek-social-profiles' );
  $panel_position = viva_get_option( 'tek-panel-position' );

  // Strip empty spaces from phone and email strings
  $business_phone = str_replace(' ', '', viva_get_option( 'tek-business-phone' ) );
  $secondary_business_phone = str_replace(' ', '', viva_get_option( 'tek-secondary-business-phone' ) );
  $business_email = str_replace(' ', '', viva_get_option( 'tek-business-email' ) );

  if ( '' != viva_get_option( 'tek-panel-css-class' ) ) {
      $panel_css_class = viva_get_option( 'tek-panel-css-class' );
  }

  if ( '' != viva_get_option( 'tek-btn-effect') ) {
    $button_hover_class = viva_get_option( 'tek-btn-effect' );
  }

  $panel_position_class = 'kd-panel-'.$panel_position;

  if ( $panel_position == 'top' ) {
    $panel_header_position_class = 'container';
  }

  $panel_header_class = implode( ' ', array( 'kd-panel-header', $panel_header_position_class ) );
  $panel_wrapper_class = implode( ' ', array( 'kd-side-panel', $panel_position_class, $button_hover_class, $panel_css_class ) );
?>
  <div class="panel-screen-overlay"></div>
  <div class="<?php echo esc_attr( $panel_wrapper_class ); ?>">
    <div class="kd-panel-wrapper">
      <div class="<?php echo esc_attr( $panel_header_class ); ?>">
        <div class="kd-panel-info-wrapper">
          <?php if ( '' != viva_get_option( 'tek-panel-title' ) ) : ?>
              <h3 class="kd-panel-title"><?php echo esc_html( viva_get_option( 'tek-panel-title' ) ); ?></h3>
          <?php endif; ?>
          <?php if ( '' != viva_get_option( 'tek-panel-subtitle' ) ) : ?>
              <div class="kd-panel-subtitle">
                <?php echo wp_kses( viva_get_option( 'tek-panel-subtitle' ), viva_allowed_html_tags() ); ; ?>
              </div>
          <?php endif; ?>
          <?php if ( false != viva_get_option( 'tek-panel-contact-links' ) ) : ?>
            <div class="kd-panel-phone-email">
            <?php if ( '' != viva_get_option( 'tek-business-phone' ) ) : ?>
                <div class="kd-panel-phone">
                    <i class="fa viva-phone-topbar"></i>
                    <a href="tel:<?php echo esc_attr( $business_phone ); ?>"><?php echo esc_html( viva_get_option( 'tek-business-phone' ) ); ?></a>
                </div>
            <?php endif; ?>
            <?php if ( '' != viva_get_option( 'tek-secondary-business-phone' ) ) : ?>
                <div class="kd-panel-phone panel-secondary-phone">
                    <i class="fa viva-phone-topbar"></i>
                    <a href="tel:<?php echo esc_attr( $secondary_business_phone ); ?>"><?php echo esc_html( viva_get_option( 'tek-secondary-business-phone' ) ); ?></a>
                </div>
            <?php endif; ?>
            <?php if ( '' != viva_get_option( 'tek-business-email' ) ) : ?>
                <div class="kd-panel-email">
                    <i class="fa viva-mail-topbar"></i>
                    <a href="mailto:<?php echo esc_attr( $business_email ); ?>"><?php echo esc_html( viva_get_option( 'tek-business-email' ) ); ?></a>
                </div>
            <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ( viva_get_option( 'tek-panel-socials' ) && $panel_position == "top" ) : ?>
            <div class="kd-panel-social-list">
              <?php viva_social_icons(); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="kd-panel-contact">
          <?php if ( '' != viva_get_option( 'tek-panel-form-select' ) ) : ?>
               <?php if ( viva_get_option( 'tek-panel-form-select' ) == '1' && viva_get_option( 'tek-panel-contactf7-formid' ) != '') : ?>
                 <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( viva_get_option( 'tek-panel-contactf7-formid' ) ).'"]'); ?>
               <?php elseif ( viva_get_option( 'tek-panel-form-select' ) == '2' && viva_get_option( 'tek-panel-ninja-formid' ) != '') : ?>
                 <?php echo do_shortcode('[ninja_form id="'. esc_attr( viva_get_option( 'tek-panel-ninja-formid' ) ).'"]'); ?>
               <?php elseif ( viva_get_option( 'tek-panel-form-select' ) == '3' && viva_get_option( 'tek-panel-gravity-formid' ) != '') : ?>
                 <?php echo do_shortcode('[gravityform id="'. esc_attr( viva_get_option( 'tek-panel-gravity-formid' ) ).'" ajax="true"]'); ?>
               <?php elseif ( viva_get_option( 'tek-panel-form-select' ) == '4' && viva_get_option( 'tek-panel-wp-formid' ) != '') : ?>
                 <?php echo do_shortcode('[wpforms id="'. esc_attr( viva_get_option( 'tek-panel-wp-formid' ) ).'"]'); ?>
               <?php elseif ( viva_get_option( 'tek-panel-form-select' ) == '5' && viva_get_option( 'tek-panel-other-form-shortcode' ) != '') : ?>
                 <?php echo do_shortcode( viva_get_option( 'tek-panel-other-form-shortcode' ) ); ?>
               <?php endif; ?>
          <?php endif; ?>
      </div>
      </div>

      <?php if ( viva_get_option( 'tek-panel-socials' ) && in_array( $panel_position, array( 'left','right' ), true ) ) : ?>
        <div class="kd-panel-social-list">
          <?php if ( isset( $social_profiles ) && '' != $social_profiles ) {
            viva_social_icons();
          } ?>
        </div>
      <?php endif; ?>
      <button type="button" class="panel-close" data-dismiss="side-panel"><span class="fa viva-times"></span></button>
  </div>
</div>
