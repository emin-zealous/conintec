<?php
  $title_align_class = $single_page_title_align = $values = $titlebar_bg = $shop_titlebar_bg = $shop_title_bar_text_align = $blog_title_switch = $enable_topbar_mobile = '';
  $title_bar_style = $blog_archive_style = $page_heading_style = $shop_page_header_style = $metabox_top_padding_class = '';

  // Blog page title markup
  $blog_title = get_the_title( get_option('page_for_posts', true) );
  if (is_home() && is_front_page()) {
    $blog_title = get_bloginfo();
    $description = get_bloginfo( 'description', 'display' );
  }
  $viva_blog_page_title = '<h1 class="section-heading">' . apply_filters( 'viva_single_page_title', $blog_title ) . '</h1>';

  $keydesign_header_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full', false );

  if ( is_array( $keydesign_header_image ) ) {
    $blog_archive_style .= 'background-image:url('.esc_url($keydesign_header_image[0]) .');';
  }

  if ( viva_get_option( 'tek-blog-featured-background-size' ) ) {
    $blog_archive_style .= 'background-size: '.viva_get_option( 'tek-blog-featured-background-size' ).';';
  }

  if ( viva_get_option( 'tek-blog-featured-background-position' ) ) {
    $blog_archive_style .= 'background-position: '.viva_get_option( 'tek-blog-featured-background-position' ).';';
  }

  $page_subtitle = get_post_meta( get_the_ID(), 'keydesign_page_subtitle', true );
  $themetek_page_showhide_title_section = get_post_meta( get_the_ID(), 'keydesign_page_showhide_title_section', true );
  $themetek_page_showhide_breadcrumbs = get_post_meta( get_the_ID(), 'keydesign_page_showhide_breadcrumbs', true );
  $themetek_page_title_color = get_post_meta( get_the_ID(), 'keydesign_page_title_color', true );
  $themetek_page_title_subtitle_color = ' color:'.$themetek_page_title_color;
  $themetek_page_titlebar_background = get_post_meta( get_the_ID(), 'keydesign_page_titlebar_background', true );
  $themetek_post_id = get_the_ID();
  $themetek_header_image = wp_get_attachment_image_src( get_post_thumbnail_id($themetek_post_id), 'full', false );
  $header_bg_image_size = get_post_meta( get_the_ID(), 'keydesign_header_background_image_size', true );
  $header_bg_image_position = get_post_meta( get_the_ID(), 'keydesign_header_background_image_position', true );

  /* Single page header bar background image settings */

  if ( is_array( $themetek_header_image ) ) {
    $page_heading_style .= 'background-image:url('.esc_url($themetek_header_image[0]) .');';
  }

  if ( $header_bg_image_size ) {
    $page_heading_style .= 'background-size: '.$header_bg_image_size.';';
  }

  if ( $header_bg_image_position ) {
    $page_heading_style .= 'background-position: '.$header_bg_image_position.';';
  }

  /* Single Page title bar background color */
  if ( $themetek_page_titlebar_background != '' ) {
    $titlebar_bg = $themetek_page_titlebar_background;
  }

  /* Title bar inline style */
  if ( is_page() || is_singular( 'portfolio' ) ) {
    $title_bar_top_padding = get_post_meta( get_the_ID(), 'keydesign_title_bar_top_padding', true );
    $title_bar_bottom_padding = get_post_meta( get_the_ID(), 'keydesign_title_bar_bottom_padding', true );

    if ( $title_bar_top_padding != '' ) {
      $metabox_top_padding_class = "has-top-padding";
    }

    if ( '' !== $title_bar_top_padding ) {
      $title_bar_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $title_bar_top_padding ) ? $title_bar_top_padding : $title_bar_top_padding . 'px' ) . ';';
    }
    if ( '' !== $title_bar_bottom_padding ) {
      $title_bar_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $title_bar_bottom_padding ) ? $title_bar_bottom_padding : $title_bar_bottom_padding . 'px' ) . ';';
    }
    if ( '' != $titlebar_bg ) {
      $title_bar_style .= 'background-color:' . $titlebar_bg . ';';
    }
  }
  /* END Title bar top and bottom padding */

  if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {
    $shop_page_id = wc_get_page_id( 'shop' );
    /* Shop page title color */
    $shop_page_title_color = get_post_meta( $shop_page_id, 'keydesign_page_title_color', true );
    if ( '' != $shop_page_title_color ) {
      $shop_title_color = 'color:'.$shop_page_title_color;
    }

    /* Shop page title align */
    $shop_page_title_align = get_post_meta( $shop_page_id, 'keydesign_page_title_align', true );
    if ( $shop_page_title_align == "left" ) {
      $shop_title_bar_text_align = 'blog-title-left';
    } elseif ( $shop_page_title_align == "center" ) {
      $shop_title_bar_text_align = 'blog-title-center';
    }

    /* Shop page header image */
    $shop_page_header_image = wp_get_attachment_image_src( get_post_thumbnail_id($shop_page_id), 'full', false );

    /* Shop page title bar background color */
    $shop_page_titlebar_background = get_post_meta( $shop_page_id, 'keydesign_page_titlebar_background', true );
    if ($shop_page_titlebar_background != '') {
      $shop_titlebar_bg = $shop_page_titlebar_background;
    }

    /* Shop page show/hide title */
    $shop_page_showhide_title_section = get_post_meta( $shop_page_id, 'keydesign_page_showhide_title_section', true );

    /* Shop page show/hide breadcrumbs */
    $shop_page_showhide_breadcrumbs = get_post_meta( $shop_page_id, 'keydesign_page_showhide_breadcrumbs', true );

    /* Shop page subtitle */
    $shop_page_subtitle = get_post_meta( $shop_page_id, 'keydesign_page_subtitle', true );

    /* Shop page header bar background image settings */
    $shop_page_header_bg_image_size = get_post_meta( $shop_page_id, 'keydesign_header_background_image_size', true );
    $shop_page_header_bg_image_position = get_post_meta( $shop_page_id, 'keydesign_header_background_image_position', true );

    if ( is_array( $shop_page_header_image ) ) {
      $shop_page_header_style .= 'background-image:url('.esc_url( $shop_page_header_image[0] ) .');';
    }

    if ( $shop_page_header_bg_image_size ) {
      $shop_page_header_style .= 'background-size: '.$shop_page_header_bg_image_size.';';
    }

    if ( $shop_page_header_bg_image_position ) {
      $shop_page_header_style .= 'background-position: '.$shop_page_header_bg_image_position.';';
    }

    // Shop page title markup
    $viva_shop_page_title = '<h1 class="section-heading" '.(!empty( $shop_title_color ) ? 'style="'.esc_attr( $shop_title_color ).'"' : '').'>' . apply_filters( 'viva_single_page_title', get_the_title( get_option( 'woocommerce_shop_page_id' ) ) ) . '</h1>';
  }

  if (!is_404()) {
    $keydesign_page_title_align = get_post_meta( get_the_ID(), 'keydesign_page_title_align', true );
    if ( $keydesign_page_title_align == "left" ) {
      $single_page_title_align = 'blog-title-left';
    } elseif ( $keydesign_page_title_align == "center" ) {
      $single_page_title_align = 'blog-title-center';
    }
  }

  if ( '' != viva_get_option( 'tek-blog-header-text-align' ) ) {
    $title_align_class = viva_get_option( 'tek-blog-header-text-align' );
  }

  $blog_single_sidebar = apply_filters( 'viva_blog_single_sidebar_switch', viva_get_option( 'tek-blog-single-sidebar' ) );

  if ( '' == $blog_single_sidebar ) {
    $blog_single_sidebar = 1;
  }

  if ( is_single() && $blog_single_sidebar == 0 ) {
    $title_align_class = 'blog-title-center';
  } elseif ( is_single() && $blog_single_sidebar == 1 && is_active_sidebar( 'blog-sidebar' ) ) {
    $title_align_class = 'blog-title-left';
  }

  $blog_title_switch = viva_get_option( 'tek-blog-title-switch' );

  if ( viva_get_option( 'tek-topbar' ) == '1' && viva_get_option( 'tek-topbar-mobile' ) == '1') {
    $enable_topbar_mobile = 'with-topbar-mobile';
  }

  // Product page title align
  $product_title_bar_text_align = viva_get_option( 'tek-woo-single-header-text-align' );

  // Page title markup
  $viva_page_title = '<h1 class="section-heading" '.(!empty( $themetek_page_title_color ) ? 'style="'.esc_attr( $themetek_page_title_subtitle_color ).'"' : '').'>' . apply_filters( 'viva_single_page_title', get_the_title() ) . '</h1>';

?>

<?php if ( class_exists( 'bbPress' ) && is_bbpress() ) : ?>
   <header class="entry-header blog-header bbpress-header blog-title-center">
      <div class="container">
      <h1 class="section-heading"><?php the_title(); ?></h1>
      <div class="bbpress-breadcrumbs"></div>
      </div>
    </header>

<?php elseif ( class_exists( 'Tribe__Events__Main' ) && ( ( tribe_is_event() || tribe_is_event_category() || tribe_is_in_main_loop() || tec_is_view() || is_post_type_archive( 'tribe_events' ) || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' ) ) ) ) : ?>
   <header class="entry-header blog-header events-calendar-header <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>">
   </header>

<?php elseif ( class_exists( 'WooCommerce' ) && is_woocommerce() ) : ?>
  <?php if ( !(viva_get_option( 'tek-woo-single-header' ) == '0' && is_product()) ) : ?>
    <header class="entry-header blog-header <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>" <?php if ( $shop_titlebar_bg != '' ) { echo 'style="background-color: '.$shop_titlebar_bg.';"'; } ?>>
        <div class="row blog-page-heading <?php if ( ! is_product() ) { echo esc_attr($shop_title_bar_text_align); } ?> <?php if (is_product()) { echo esc_attr($product_title_bar_text_align); } ?>">
          <?php if ( is_shop() && $shop_page_header_image != '' && is_array( $shop_page_header_image ) ) : ?>
            <div class="header-overlay parallax-overlay" style="<?php echo esc_attr( $shop_page_header_style ); ?>"></div>
          <?php endif; ?>
          <div class="container">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
              <?php if ( empty( $shop_page_showhide_title_section ) ) {
                echo apply_filters( 'viva_page_title_markup', $viva_shop_page_title );
              } ?>
              <?php do_action( 'woocommerce_archive_description' ); ?>
            <?php endif; ?>
            <?php if ( is_shop() && $shop_page_subtitle != '' ) : ?>
              <h6 class="section-subheading" <?php if ( !empty( $shop_title_color ) ) : ?> style="<?php echo esc_attr($shop_title_color); ?>" <?php endif; ?>><?php echo esc_html($shop_page_subtitle); ?></h6>
            <?php endif; ?>
            <?php if( function_exists('bcn_display') && empty( $shop_page_showhide_breadcrumbs ) ) : ?>
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" <?php if ( !empty( $shop_title_color ) ) : ?> style="<?php echo esc_attr( $shop_title_color ); ?>" <?php endif; ?>>
                <?php bcn_display(); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
    </header>
  <?php else: ?>
    <header class="single-product-no-title"></header>
  <?php endif; ?>

<?php elseif(is_home() || is_search() || ( is_archive() && !is_tax( 'portfolio-category' ) ) || is_single() && !is_singular( 'portfolio' )) : ?>
  <header class="entry-header blog-header <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>">
     <div class="row blog-page-heading <?php echo esc_attr($title_align_class); ?>">
        <?php if (!is_single()) : ?>
          <?php if ( viva_get_option( 'tek-blog-header-template' ) == 'blog-header-titlebar' && is_array( $keydesign_header_image ) ) : ?>
            <div class="header-overlay parallax-overlay" style="<?php echo esc_attr( $blog_archive_style ); ?>"></div>
          <?php endif; ?>
        <?php endif; ?>
        <div class="container">
          <?php if ( is_home() ) : ?>
            <?php if ( isset( $blog_title_switch ) ) : ?>
              <?php if ( $blog_title_switch != '0') : ?>
                <?php echo apply_filters( 'viva_page_title_markup', $viva_blog_page_title ); ?>
              <?php endif; ?>
            <?php else: ?>
              <?php echo apply_filters( 'viva_page_title_markup', $viva_blog_page_title ); ?>
              <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
          <?php elseif ( is_search() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_search_query_title', __("Search results for:", "viva") ); ?> <?php the_search_query(); ?></h1>
          <?php elseif ( is_category() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_single_cat_title', __("Currently browsing:", "viva") ); ?> <?php single_cat_title(); ?></h1>
          <?php elseif ( is_tag() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_single_tag_title', __("All posts tagged:", "viva") ); ?> <?php single_tag_title(); ?></h1>
          <?php elseif ( is_author() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_author_archive_title', __("All posts by", "viva") ); ?> <?php echo esc_html( get_userdata( get_query_var( 'author' ) )->display_name ); ?></h1>
          <?php elseif ( is_day() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_day_archive_title', __("Posts archive for", "viva") ); ?> <?php echo get_the_date('F jS, Y'); ?></h1>
          <?php elseif ( is_month() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_month_archive_title', __("Posts archive for", "viva") ); ?> <?php echo get_the_date('F, Y'); ?></h1>
          <?php elseif ( is_year() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'kd_year_archive_title', __("Posts archive for", "viva") ); ?> <?php echo get_the_date('Y'); ?></h1>
          <?php elseif ( get_page( get_option('page_for_posts') ) && !is_single() ) : ?>
            <h1 class="section-heading"><?php echo apply_filters( 'the_title', get_page( get_option('page_for_posts') )->post_title ); ?></h1>
          <?php elseif ( !is_single() ) : ?>
            <h1 class="section-heading"><?php echo esc_html( get_the_title( get_queried_object_id() ) ); ?></h1>
          <?php endif; ?>

          <?php if ( '' != viva_get_option( 'tek-blog-subtitle' ) && is_home() ) : ?>
            <h6 class="section-subheading"><?php echo esc_html( viva_get_option( 'tek-blog-subtitle' ) ); ?></h6>
          <?php endif; ?>

          <?php if(function_exists('bcn_display')) : ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"><?php bcn_display(); ?></div>
          <?php endif; ?>
        </div>
      </div>
  </header>
<?php elseif( is_tax( 'portfolio-category' ) ) : ?>
  <header class="entry-header single-page-header portfolio-category-header <?php echo esc_attr($metabox_top_padding_class); ?> <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>" <?php if ( $title_bar_style != '' ) { echo 'style="' . $title_bar_style . '"'; } ?>>
    <div class="row single-page-heading blog-title-center">
        <div class="container">
          <h1 class="section-heading"><?php echo apply_filters( 'kd_portfolio_cat_title', esc_html__("Currently browsing:", "viva") ); ?> <?php single_cat_title(); ?></h1>
          <?php if( function_exists('bcn_display') ) : ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"><?php bcn_display(); ?></div>
          <?php endif; ?>
      </div>
    </div>
  </header>
<?php elseif( !is_404() && !is_singular( 'portfolio' ) && !post_password_required() ) : ?>
  <?php if ( empty($themetek_page_showhide_title_section) && !is_single()) : ?>
    <header class="entry-header single-page-header <?php echo esc_attr($metabox_top_padding_class); ?> <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>" <?php if ( $title_bar_style != '' ) { echo 'style="' . $title_bar_style . '"'; } ?>>
      <div class="row single-page-heading <?php echo esc_attr($single_page_title_align); ?>">
        <?php if (!empty($themetek_header_image) && !is_single() && is_array( $themetek_header_image ) ) : ?>
          <div class="header-overlay parallax-overlay" style="<?php echo esc_attr( $page_heading_style ); ?>"></div>
        <?php endif; ?>
          <div class="container">
            <?php echo apply_filters( 'viva_page_title_markup', $viva_page_title ); ?>
            <?php if ( $page_subtitle && !is_single() ) : ?>
              <h6 class="section-subheading" <?php if ( !empty( $themetek_page_title_color ) ) : ?> style="<?php echo esc_attr($themetek_page_title_subtitle_color); ?>" <?php endif; ?>><?php echo esc_html($page_subtitle); ?></h6>
            <?php endif; ?>
            <?php if( function_exists('bcn_display') && empty( $themetek_page_showhide_breadcrumbs ) ) : ?>
              <div <?php echo ( !empty( $themetek_page_title_color ) ? 'style="color: '.$themetek_page_title_color.';"' : ''); ?> class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php bcn_display(); ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
    </header>
  <?php endif; ?>
<?php elseif( is_singular( 'portfolio' ) ) : ?>
  <?php if ( empty( $themetek_page_showhide_title_section ) ) : ?>
    <header class="entry-header single-page-header <?php echo esc_attr( $metabox_top_padding_class ); ?> <?php echo esc_attr( $enable_topbar_mobile ); ?> <?php if ( viva_get_option( 'tek-topbar' ) == '1') { echo esc_attr( 'with-topbar' ); } ?>" <?php if ( $title_bar_style != '' ) { echo 'style="' . $title_bar_style . '"'; } ?>>
      <div class="row single-page-heading <?php echo esc_attr($single_page_title_align); ?>">
          <div class="container">
            <?php echo apply_filters( 'viva_page_title_markup', $viva_page_title ); ?>
            <?php if ( $page_subtitle ) : ?>
              <h6 class="section-subheading" <?php if ( !empty( $themetek_page_title_color ) ) : ?> style="<?php echo esc_attr( $themetek_page_title_subtitle_color ); ?>" <?php endif; ?>><?php echo esc_html($page_subtitle); ?></h6>
            <?php endif; ?>
            <?php if( function_exists('bcn_display')&& empty($themetek_page_showhide_breadcrumbs) ) : ?>
              <div <?php echo (!empty($themetek_page_title_color) ? 'style="color: '.$themetek_page_title_color.';"' : ''); ?> class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php bcn_display(); ?>
              </div>
            <?php endif; ?>
        </div>
      </div>
    </header>
  <?php endif; ?>
<?php endif; ?>
