<?php
// ------------------------------------------------------------------------
// Register widgetized areas
// ------------------------------------------------------------------------

  if( ! function_exists( 'viva_sidebars_register' ) ) {
    function viva_sidebars_register() {
  		register_sidebar(
        array(
          'name' => esc_html__( 'Blog Sidebar', 'viva' ),
          'id' => 'blog-sidebar',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the blog sidebar area. If none added, default sidebar widgets will be used.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Shop Sidebar', 'viva' ),
          'id' => 'shop-sidebar',
          'class' => '',
          'description' => esc_html__( 'A sidebar that only appears on WooCommerce Shop pages.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      if ( class_exists( 'bbPress' ) ) {
        register_sidebar(
          array(
            'name' => esc_html__( 'bbPress Sidebar', 'viva' ),
            'id' => 'bbpress-sidebar',
            'class' => '',
            'description' => esc_html__( 'A sidebar that only appears on bbPress pages.', 'viva' ),
            'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title"><span>',
            'after_title' => '</span></h5>',
          )
        );
      }

      register_sidebar(
        array(
          'name' => esc_html__( 'Page Sidebar', 'viva' ),
          'id' => 'page-sidebar',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the single page sidebar area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer first widget area', 'viva' ),
          'id' => 'footer-first-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the first footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer second widget area', 'viva' ),
          'id' => 'footer-second-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the second footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer third widget area', 'viva' ),
          'id' => 'footer-third-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the third footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer fourth widget area', 'viva' ),
          'id' => 'footer-fourth-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the fourth footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer fifth widget area', 'viva' ),
          'id' => 'footer-fifth-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the fifth footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer sixth widget area', 'viva' ),
          'id' => 'footer-sixth-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the sixth footer widget area.', 'viva' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );
    }
  }

  add_action( 'widgets_init', 'viva_sidebars_register' );
