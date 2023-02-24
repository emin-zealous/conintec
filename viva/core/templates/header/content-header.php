<?php
  $logo_alignment = '';
  $main_nav_alignment = $header_bttns_wrapper = '';

  $logo_alignment = viva_get_option( 'tek-logo-alignment' );

  if ( viva_get_option( 'tek-menu-alignment' ) == 'main-nav-left') {
    $main_nav_alignment = 'main-nav-left';
  } elseif (  viva_get_option( 'tek-menu-alignment' ) == 'main-nav-center' ) {
    $main_nav_alignment = 'main-nav-center';
  } elseif ( viva_get_option( 'tek-menu-alignment' ) == 'main-nav-right' ) {
    $main_nav_alignment = 'main-nav-right';
  } else {
    $main_nav_alignment = 'main-nav-right';
  }

  if ( viva_get_option( 'tek-modal-button' ) || viva_get_option( 'tek-panel-button' ) ) {
    $header_bttns_wrapper = true;
  }

  // Hide header metabox
  $hide_header_mb = get_post_meta( get_the_ID(), 'keydesign_hide_header', true );

?>

<?php if ( empty( $hide_header_mb ) ) : ?>
  <nav class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'viva_navbar_class', array() ) ) ); ?>" >
    <?php /* Topbar template */ ?>
    <?php if ( viva_get_option( 'tek-topbar' ) == 1 ) : ?>
      <?php get_template_part( 'core/templates/header/content', 'topbar' ); ?>
    <?php endif; ?>
    <?php /* END Topbar template */ ?>

    <?php
      $primary_logo = viva_get_option( 'tek-logo' );
      $secondary_logo = viva_get_option( 'tek-logo2' );
      $logo_width = viva_get_option( 'tek-logo-image-size' );
      $logo_height = viva_get_option( 'tek-logo-image-height' );
      $text_logo = viva_get_option( 'tek-text-logo' );

      $logo_img_attr = array();

      if ( isset( $logo_width ) && '' != $logo_width ) {
        $logo_img_attr[] = 'width="' . esc_attr( $logo_width ) .'"';
      }

      if ( isset( $logo_height ) && '' != $logo_height ) {
        $logo_img_attr[] = 'height="' . esc_attr( $logo_height ) .'"';
      }
    ?>

    <div class="menubar <?php echo esc_attr($main_nav_alignment); ?>">
      <div class="container">
       <div id="logo">
         <?php if ( '' != viva_get_option( 'tek-logo-style' ) ) : ?>
           <?php if ( viva_get_option( 'tek-logo-style' ) == '1') : ?>
             <?php /* Image logo */ ?>
             <a class="logo" href="<?php echo esc_url(home_url()); ?>">
               <?php if ( isset( $primary_logo['url'] ) && '' != $primary_logo['url'] ) { ?>
                 <img class="fixed-logo" src="<?php echo esc_url( $primary_logo['url'] ); ?>" <?php echo ( implode( ' ', $logo_img_attr ) ); ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />

                 <?php if ( isset( $secondary_logo['url'] ) && '' != $secondary_logo['url'] ) { ?>
                 <img class="nav-logo" src="<?php echo esc_url( $secondary_logo['url'] ); ?>" <?php echo ( implode( ' ', $logo_img_attr ) ); ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                 <?php } ?>

               <?php } else { ?>
                 <img class="fixed-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo.svg'); ?>" width="69" height="22" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                 <img class="nav-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo-2.svg'); ?>" width="69" height="22" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
               <?php } ?>
             </a>
           <?php elseif ( viva_get_option( 'tek-logo-style' ) == '2') : ?>
             <?php /* Text logo */ ?>
             <a class="logo" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_html( viva_get_option( 'tek-text-logo' ) );?></a>
           <?php endif; ?>
         <?php endif; ?>
         <?php if ( !class_exists( 'ReduxFramework' ) ) : ?>
            <a class="logo blog-info-name" href="<?php echo esc_url(site_url()); ?>"><?php bloginfo( 'name' ); ?></a>
         <?php endif; ?>
       </div>
       <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>

                <?php do_action( 'viva_header_wishlist' ); ?>

                <div class="mobile-cart">
                  <?php if ( viva_get_option( 'tek-woo-display-cart-icon' ) == '1' ) {
                      if ( class_exists( 'WooCommerce' ) ) {
                          $keydesign_minicart = '';
                          $keydesign_minicart = viva_add_cart_in_menu();
                          echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
                      }
                    } ?>
                </div>
                <?php if( viva_get_option( 'tek-topbar-search' ) == 1 ) : ?>
                    <div class="topbar-search mobile-search">
                       <span class="toggle-search viva-search-header fa"></span>
                       <div class="topbar-search-container">
                         <?php viva_get_search_form(); ?>
                       </div>
                    </div>
                <?php endif; ?>
        </div>
        <?php if ( $logo_alignment == 'logo-center' ) : ?>
          <div class="logo-center-group-fix">
        <?php endif; ?>
          <div id="main-menu" class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'viva_main_menu_class', array() ) ) ); ?>">
             <?php do_action( 'viva_header_menu' ); ?>
          </div>
          <div class="main-nav-extra-content">
            <div class="search-cart-wrapper">
              <?php do_action( 'viva_header_desktop_icons' ); ?>
            </div>
            <?php if ( $header_bttns_wrapper ) : ?>
              <div class="header-bttn-wrapper">
                  <?php if ( viva_get_option( 'tek-modal-button' ) ) {
                      get_template_part( 'core/templates/header/content', 'modal-button' );
                  } ?>
                  <?php if ( viva_get_option( 'tek-panel-button' ) ) {
                      get_template_part( 'core/templates/header/content', 'panel-button' );
                  } ?>
              </div>
            <?php endif; ?>
          </div>
        <?php if ( $logo_alignment == 'logo-center' ) : ?>
        </div>
        <?php endif; ?>
        </div>
     </div>
  </nav>
<?php endif; ?>
