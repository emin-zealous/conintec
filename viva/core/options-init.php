<?php
  /*
  * ReduxFramework Options Config
  */

  if ( ! class_exists( 'Redux' ) ) {
    return;
  }

  $opt_name = 'redux_ThemeTek';

  $args = array(
    'opt_name' => $opt_name,
    'display_name' => 'Viva',
    'display_version' => VIVA_THEME_VERSION,
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__( 'Theme Options', 'viva' ),
    'page_title' => esc_html__( 'Theme Options', 'viva' ),
    'async_typography' => true,
    'admin_bar' => true,
    'dev_mode' => true,
    'update_notice' => false,
    'show_options_object' => false,
    'customizer' => false,
    'page_parent' => 'viva-dashboard',
    'page_slug' => 'theme-options',
    'page_permissions' => 'manage_options',
    'admin_theme' => 'classic',
    'save_defaults' => true,
    'show_import_export' => true,
    'network_sites' => '1',
    'transient_time' => 60 * MINUTE_IN_SECONDS,
  );

  Redux::set_args( $opt_name, $args );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Management',
    'title' => esc_html__('Business Info', 'viva'),
    'desc' => esc_html__('Edit the contact details for your company/organization. These details are listed in Theme Options > Header > Topbar / Popup Modal / Panel.', 'viva'),
    'fields' => array(
        array(
            'id' => 'tek-business-phone',
            'type' => 'text',
            'title' => esc_html__('Business Phone', 'viva'),
            'subtitle' => 'Edit business phone.',
            'default' => '(222) 400-630',
        ),
        array(
            'id' => 'tek-secondary-business-phone',
            'type' => 'text',
            'title' => esc_html__('Secondary Business Phone', 'viva'),
            'subtitle' => 'Edit secondary business phone.',
            'default' => '',
        ),
        array(
            'id' => 'tek-business-email',
            'type' => 'text',
            'title' => esc_html__('Business Email', 'viva'),
            'subtitle' => 'Edit business email.',
            'default' => 'hello@viva-theme.com',
        ),
        array(
            'id' => 'tek-business-opening-hours',
            'type' => 'text',
            'title' => esc_html__('Business Opening Hours', 'viva'),
            'subtitle' => 'Edit business opening hours.',
            'default' => 'Mon - Fri: 10:00 - 18:00',
        ),
        array(
            'id' => 'tek-social-profiles',
            'type' => 'social_profiles',
            'title' => 'Social Icons',
            'subtitle' => 'Click on icon to activate it, drag and drop to change the icon order.',
            'icons' => array(
                array(
                    'id' => 'airbnb',
                    'icon' => 'fab fa-airbnb',
                    'enabled' => false,
                    'name' => __( 'Airbnb', 'viva' ),
                ),
                array(
                    'id' => 'deezer',
                    'icon' => 'fab fa-deezer',
                    'enabled' => false,
                    'name' => __( 'Deezer', 'viva' ),
                ),
                array(
                    'id' => 'discord',
                    'icon' => 'fab fa-discord',
                    'enabled' => false,
                    'name' => __( 'Discord', 'viva' ),
                ),
                array(
                    'id' => 'ebay',
                    'icon' => 'fab fa-ebay',
                    'enabled' => false,
                    'name' => __( 'eBay', 'viva' ),
                ),
                array(
                    'id' => 'goodreads',
                    'icon' => 'fab fa-goodreads-g',
                    'enabled' => false,
                    'name' => __( 'Goodreads', 'viva' ),
                ),
                array(
                    'id' => 'houzz',
                    'icon' => 'fab fa-houzz',
                    'enabled' => false,
                    'name' => __( 'Houzz', 'viva' ),
                ),
                array(
                    'id' => 'kickstarter',
                    'icon' => 'fab fa-kickstarter',
                    'enabled' => false,
                    'name' => __( 'Kickstarter', 'viva' ),
                ),
                array(
                    'id' => 'medium',
                    'icon' => 'fab fa-medium',
                    'enabled' => false,
                    'name' => __( 'Medium', 'viva' ),
                ),
                array(
                    'id' => 'meta',
                    'icon' => 'fab fa-meta',
                    'enabled' => false,
                    'name' => __( 'Meta', 'viva' ),
                ),
                array(
                    'id' => 'patreon',
                    'icon' => 'fab fa-patreon',
                    'enabled' => false,
                    'name' => __( 'Patreon', 'viva' ),
                ),
                array(
                    'id' => 'quora',
                    'icon' => 'fab fa-quora',
                    'enabled' => false,
                    'name' => __( 'Quora', 'viva' ),
                ),
                array(
                    'id' => 'snapchat',
                    'icon' => 'fab fa-snapchat',
                    'enabled' => false,
                    'name' => __( 'Snapchat', 'viva' ),
                ),
                array(
                    'id' => 'snapchat-s',
                    'icon' => 'fab fa-square-snapchat',
                    'enabled' => false,
                    'name' => __( 'Snapchat Square', 'viva' ),
                ),
                array(
                    'id' => 'telegram',
                    'icon' => 'fab fa-telegram',
                    'enabled' => false,
                    'name' => __( 'Telegram', 'viva' ),
                ),
                array(
                    'id' => 'tiktok',
                    'icon' => 'fab fa-tiktok',
                    'enabled' => false,
                    'name' => __( 'TikTok', 'viva' ),
                ),
                array(
                    'id' => 'twitch',
                    'icon' => 'fab fa-twitch',
                    'enabled' => false,
                    'name' => __( 'Twitch', 'viva' ),
                ),
                array(
                    'id' => 'whatsapp',
                    'icon' => 'fab fa-whatsapp',
                    'enabled' => false,
                    'name' => __( 'WhatsApp', 'viva' ),
                ),
            ),
        ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Gear',
    'title' => esc_html__('Global Options', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Gears',
    'title' => esc_html__('Global Settings', 'viva'),
    'desc' => esc_html__('General settings that are applied site-wide.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
          'id' => 'tek-smooth-scroll',
          'type' => 'switch',
          'title' => esc_html__('Smooth Mouse Scroll', 'viva'),
          'subtitle' => esc_html__('Turn on to replace basic website scrolling effect with nice smooth scroll.', 'viva'),
          'default' => true
      ),
      array(
          'id' => 'tek-google-api',
          'type' => 'text',
          'title' => esc_html__('Google Map API Key', 'viva'),
          'default' => '',
          'subtitle' => esc_html__('Generate, copy and paste here Google Maps API Key.', 'viva'),
          'desc' => __('<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target=\"_blank\">Generate API key</a>', 'viva'),
      ),
      array(
          'id' => 'tek-disable-animations',
          'type' => 'switch',
          'title' => esc_html__('Disable Animations on Mobile', 'viva'),
          'subtitle' => esc_html__('Turn on/off element animation on mobile.', 'viva'),
          'default' => true
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Palette',
    'title' => esc_html__('Color Schemes', 'viva'),
    'desc' => esc_html__('General color schemes that are applied site-wide.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id'=>'tek-accent-colors-section-start',
        'type' => 'section',
        'title' => esc_html__('Theme Accent Colors', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-main-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Primary Accent Color', 'viva'),
        'subtitle' => esc_html__('Option for setting the primary color of the theme.', 'viva'),
        'default' => '#0066FF',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-secondary-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Secondary Accent Color', 'viva'),
        'subtitle' => esc_html__('Option for setting the secondary color of the theme.', 'viva'),
        'default' => '#F43FE2',
        'validate' => 'color'
      ),
      array(
          'id'=>'tek-accent-colors-section-end',
          'type' => 'section',
          'indent' => false,
      ),
      array(
        'id'=>'tek-gradient-colors-section-start',
        'type' => 'section',
        'title' => esc_html__('Theme Gradient Colors', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-gradient-start-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Gradient Start Color', 'viva'),
        'subtitle' => esc_html__('Select the gradient start color.', 'viva'),
        'default' => '#0066FF',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-gradient-end-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Gradient End Color', 'viva'),
        'subtitle' => esc_html__('Select the gradient end color.', 'viva'),
        'default' => '#F43FE2',
        'validate' => 'color'
      ),
      array(
          'id'=>'tek-gradient-colors-section-end',
          'type' => 'section',
          'indent' => false,
      ),
      array(
        'id'=>'tek-misc-colors-section-start',
        'type' => 'section',
        'title' => esc_html__('Theme Misc Colors', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-titlebar-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Title Bar Background Color', 'viva'),
        'default' => '',
        'subtitle' => esc_html__('Select the background color used for the single pages title bar section.', 'viva'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-titlebar-text-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Title Bar Text Color', 'viva'),
        'default' => '',
        'subtitle' => esc_html__('Select the single page title color.', 'viva'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-link-color',
        'type' => 'link_color',
        'title' => esc_html__( 'Links Color', 'viva' ),
        'subtitle' => esc_html__('Normal and hover states of default links.', 'viva'),
        'active' => false,
        'visited' => false,
      ),
      array(
        'id'=>'tek-misc-colors-section-end',
        'type' => 'section',
        'indent' => false,
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Loading-3',
    'title' => esc_html__('Preloader', 'viva'),
    'desc' => esc_html__('Preloader general settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-preloader',
        'type' => 'switch',
        'title' => esc_html__('Preloader', 'viva'),
        'subtitle' => esc_html__('Enable/Disable a preloader screen before loading the page.', 'viva'),
        'default' => true
      ),
      array(
        'id' => 'tek-preloader-bg-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Preloader Background Color', 'viva'),
        'subtitle' => esc_html__('Edit preloader background color.', 'viva'),
        'required' => array('tek-preloader','equals',true),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-preloader-image',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('Preloader Image', 'viva'),
        'subtitle' => esc_html__('Upload preloader image/logo.', 'viva'),
        'required' => array('tek-preloader','equals',true),
      ),
      array(
        'id' => 'tek-preloader-image-size-desktop',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Preloader Image Size', 'viva'),
        'subtitle' => esc_html__('Control the preloader image size (pixel value). Example: 200.', 'viva'),
        'required' => array('tek-preloader','equals',true),
      ),
      array(
        'id' => 'tek-preloader-image-size-mobile',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Preloader Mobile Image Size', 'viva'),
        'subtitle' => esc_html__('Control the preloader image size on mobile devices (pixel value). Example: 140.', 'viva'),
        'required' => array('tek-preloader','equals',true),
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Cursor-Click',
    'title' => esc_html__('Cursor', 'viva'),
    'desc' => esc_html__('Replace the default system cursor with an animated cursor.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
          'id' => 'tek-cursor',
          'type' => 'switch',
          'title' => esc_html__('Animated Cursor', 'viva'),
          'subtitle' => esc_html__('Turn on to enable the animated cursor effect.', 'viva'),
          'default' => false
      ),

      array(
        'id' => 'tek-cursor-effect',
        'type' => 'button_set',
        'title' => esc_html__('Cursor Effect', 'viva'),
        'subtitle' => esc_html__('Select the cursor effect.', 'viva'),
        'options' => array(
          'cursor-circle-point' => 'Circle + point',
          'cursor-small-point' => 'Small point',
          'cursor-point' => 'Transparent point',
         ),
         'required' => array('tek-cursor', 'equals', true),
         'default' => 'circle-point'
      ),

      array(
        'id' => 'tek-cursor-effect-color',
        'type' => 'button_set',
        'title' => esc_html__('Cursor Effect Color', 'viva'),
        'subtitle' => esc_html__('Select the cursor effect color.', 'viva'),
        'options' => array(
          'cursor-primary-color' => 'Primary color',
          'cursor-secondary-color' => 'Secondary color',
          'cursor-black-color' => 'Black color',
         ),
         'required' => array('tek-cursor', 'equals', true),
         'default' => 'cursor-primary-color'
      ),

      array(
          'id' => 'tek-cursor-grid',
          'type' => 'switch',
          'title' => esc_html__('Grid Hover Cursor', 'viva'),
          'subtitle' => esc_html__('Enable/disable displaying an animated custom cursor when hovering the post or masonry grid elements.', 'viva'),
          'required' => array('tek-cursor','equals',true),
          'default' => false
      ),

      array(
          'id' => 'tek-cursor-carousel',
          'type' => 'switch',
          'title' => esc_html__('Carousel Hover Cursor', 'viva'),
          'subtitle' => esc_html__('Enable/disable displaying an animated custom cursor when hovering the carousel type elements.', 'viva'),
          'required' => array('tek-cursor','equals',true),
          'default' => false
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Go-Top',
    'title' => esc_html__('Go to Top Button', 'viva'),
    'desc' => esc_html__('Go to top button general settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
          'id' => 'tek-backtotop',
          'type' => 'switch',
          'title' => esc_html__('Go to Top Button', 'viva'),
          'subtitle' => esc_html__('Turn on to enable the Go to Top Button which adds scrolling to top functionality.', 'viva'),
          'default' => true
      ),
      array(
        'id' => 'tek-backtotop-position',
        'type' => 'button_set',
        'title' => esc_html__('Go to Top Button Position', 'viva'),
        'subtitle' => esc_html__('Control the position of the "Go to top" button.', 'viva'),
        'options' => array(
          'left-aligned' => 'Left',
          'right-aligned' => 'Right'
         ),
         'required' => array('tek-backtotop','equals',true),
         'default' => 'right-aligned'
      ),
      array(
          'id' => 'tek-backtotop-scroll-position',
          'type' => 'switch',
          'title' => esc_html__('Scroll Position Animation', 'viva'),
          'subtitle' => esc_html__('Turn on to enable scroll position animation.', 'viva'),
          'default' => true
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Upload-Window',
    'title' => esc_html__('Header', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Settings-Window',
    'title' => esc_html__('Header Bar', 'viva'),
    'desc' => esc_html__('Edit header bar general settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id'=>'tek-header-bar-section-start',
        'type' => 'section',
        'title' => esc_html__('Header Bar Settings', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-menu-style',
        'type' => 'button_set',
        'title' => esc_html__('Header Bar Width', 'viva'),
        'subtitle' => esc_html__('Control the width of your main navigation menu:  Contained/Full Width.', 'viva'),
        'options' => array(
          '1' => 'Contained',
          '2' => 'Full-Width'
         ),
        'default' => '1'
      ),
      array(
        'id' => 'tek-menu-behaviour',
        'type' => 'button_set',
        'title' => esc_html__('Header Bar Behaviour', 'viva'),
        'subtitle' => esc_html__('select the header behavior when scrolling down the page', 'viva'),
        'options' => array(
            '1' => 'Sticky',
            '2' => 'Fixed'
         ),
        'default' => '1'
      ),
      array(
        'id' => 'tek-header-spacing',
        'type' => 'spinner',
        'title' => esc_html__('Header Bar Spacing', 'viva'),
        'subtitle' => esc_html__('Control the top and bottom padding for the header bar. Pixel value.', 'viva'),
        'min' => 0,
        'max' => 30,
        'default' => 0,
      ),
      array(
        'id' => 'tek-header-menu-bg',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Header Bar Background Color', 'viva'),
        'subtitle' => esc_html__('Select the background color for the fixed menu bar.', 'viva'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-bg-sticky',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Sticky Header Bar Background Color', 'viva'),
        'subtitle' => esc_html__('Select the background color for the sticky menu bar.', 'viva'),
        'default' => '',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id'=>'tek-header-bar-section-end',
        'type' => 'section',
        'indent' => false,
      ),
      array(
        'id'=>'tek-header-icons-section-start',
        'type' => 'section',
        'title' => esc_html__('Header Bar Icons', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-topbar-search',
        'type' => 'switch',
        'title' => esc_html__('Search Icon', 'viva'),
        'subtitle' => esc_html__('Turn on/off the search icon', 'viva'),
        'default' => true
      ),
      array(
        'id' => 'tek-woo-display-cart-icon',
        'type' => 'switch',
        'title' => esc_html__('Cart Icon', 'viva'),
        'subtitle' => esc_html__('Turn on/off the cart icon.', 'viva'),
        'default' => true,
      ),
      array(
        'id' => 'tek-woo-cart-icon-selector',
        'type' => 'button_set',
        'title' => esc_html__('Cart Icon', 'viva'),
        'subtitle' => esc_html__('Change cart icon style.', 'viva'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'shopping-cart' => 'Shopping cart',
            'shopping-bag' => 'Shopping bag',
        ),
        'required' => array('tek-woo-display-cart-icon','equals','1'),
        'default' => 'shopping-cart'
      ),
      array(
        'id' => 'tek-woo-display-wishlist-icon',
        'type' => 'switch',
        'title' => esc_html__('Wishlist Icon', 'viva'),
        'subtitle' => esc_html__('Turn on/off the wishlist icon.', 'viva'),
        'default' => true,
      ),
      array(
        'id'=>'tek-header-icons-section-end',
        'type' => 'section',
        'indent' => false,
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Favorite-Window',
    'title' => esc_html__('Logo', 'viva'),
    'desc' => esc_html__('General logo settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-logo-alignment',
        'type' => 'button_set',
        'title' => esc_html__('Logo Alignment', 'viva'),
        'subtitle' => esc_html__('Control the position of the logo.', 'viva'),
        'desc' => esc_html__('If set to "Center" the main menu will be automatically centered.', 'viva'),
        'options' => array(
          'logo-left' => 'Left',
          'logo-center' => 'Center',
         ),
        'default' => 'logo-left'
      ),
      array(
        'id' => 'tek-logo-spacing',
        'type' => 'spacing',
        'mode' => 'padding',
        'units' => array('em', 'px'),
        'left' => false,
        'right' => false,
        'title' => esc_html__('Logo Spacing', 'viva'),
        'subtitle' => esc_html__('Control the top and bottom padding for the logo element.', 'viva'),
        'required' => array('tek-logo-alignment','equals','logo-center'),
        'default' => array(
          'units' => 'px',
        )
      ),
      array(
        'id' => 'tek-logo-style',
        'type' => 'button_set',
        'title' => esc_html__('Logo Type', 'viva'),
        'subtitle' => esc_html__('Select the logo type: Text/Image.', 'viva'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            '1' => 'Image logo',
            '2' => 'Text logo'
        ),
        'default' => '1'
      ),
      array(
        'id' => 'tek-logo',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('Primary Image Logo', 'viva'),
        'subtitle' => esc_html__('Upload primary logo image. This logo is used with the fixed header bar.', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-logo2',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('Secondary Image Logo', 'viva'),
        'subtitle' => esc_html__('Upload secondary image logo.', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-sticky-nav-logo',
        'type' => 'select',
        'title' => esc_html__('Sticky Header Logo Image', 'viva'),
        'subtitle' => esc_html__('Select logo image for the sticky header bar.', 'viva'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'nav-primary-logo' => 'Primary logo image',
            'nav-secondary-logo' => 'Secondary logo image',
        ),
        'default' => 'nav-primary-logo',
        'required' => array(
          array ('tek-menu-behaviour', 'equals','1'),
          array ('tek-logo-style','equals','1'),
        ),
      ),
      array(
        'id' => 'tek-transparent-nav-logo',
        'type' => 'select',
        'title' => esc_html__('Transparent Header Logo Image', 'viva'),
        'subtitle' => esc_html__('Select logo image for the transparent header bar.', 'viva'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'nav-primary-logo' => 'Primary logo image',
          'nav-secondary-logo' => 'Secondary logo image',
        ),
        'default' => 'nav-primary-logo',
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id'=>'tek-logo-size-section-start',
        'type' => 'section',
        'title' => esc_html__('Logo Image Size', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-logo-image-size',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Logo Width', 'viva'),
        'subtitle' => esc_html__('Control the logo width (eg. 200).', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-logo-image-height',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Logo Height', 'viva'),
        'subtitle' => esc_html__('Control the logo height (eg. 60). Leave empty for auto height.', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-mobile-logo-image-size',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Mobile Logo Width', 'viva'),
        'subtitle' => esc_html__('Control the mobile logo width (eg. 140).', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-mobile-logo-image-height',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('Mobile Logo Height', 'viva'),
        'subtitle' => esc_html__('Control the mobile logo height (eg. 60). Leave empty for auto height.', 'viva'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id'=>'tek-logo-size-section-end',
        'type' => 'section',
        'indent' => false,
      ),
      array(
        'id' => 'tek-text-logo',
        'type' => 'text',
        'title' => esc_html__('Text Logo', 'viva'),
        'subtitle' => esc_html__('Name of your website displayed instead of the regular image logo', 'viva'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => 'Viva'
      ),
      array(
        'id' => 'tek-text-logo-typo',
        'type' => 'typography',
        'title' => esc_html__('Text Logo Font Settings', 'viva'),
        'subtitle' => esc_html__('Edit the typography settings of your text logo.', 'viva'),
        'required' => array('tek-logo-style','equals', '2'),
        'google' => true,
        'font-family' => true,
        'font-style' => true,
        'font-size' => true,
        'font-size' => true,
        'line-height' => false,
        'letter-spacing' => true,
        'color' => false,
        'text-align' => false,
        'all_styles' => false,
        'units' => 'px',
      ),
      array(
        'id' => 'tek-main-logo-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Primary Logo Text Color', 'viva'),
        'subtitle' => esc_html__('Default logo text color', 'viva'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-secondary-logo-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Secondary Logo Text Color', 'viva'),
        'subtitle' => esc_html__('Logo text color for sticky navigation', 'viva'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => '',
        'validate' => 'color'
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-One-Window',
    'title' => esc_html__('Main Menu', 'viva'),
    'desc' => esc_html__('Edit main menu general settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id'=>'tek-menu-settings-section-start',
        'type' => 'section',
        'title' => esc_html__('Main Menu Settings', 'viva'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-menu-alignment',
        'type' => 'button_set',
        'title' => esc_html__('Menu Alignment', 'viva'),
        'subtitle' => esc_html__('Control the position of the main menu.', 'viva'),
        'options' => array(
          'main-nav-left' => 'Left',
          'main-nav-center' => 'Center',
          'main-nav-right' => 'Right'
        ),
        'required' => array('tek-logo-alignment','equals','logo-left'),
        'default' => 'main-nav-right'
      ),
      array(
        'id' => 'tek-menu-typo',
        'type' => 'typography',
        'title' => esc_html__('Menu Font Settings', 'viva'),
        'subtitle' => esc_html__('Control the typography settings of the menu.', 'viva'),
        'google' => true,
        'font-style' => true,
        'font-size' => true,
        'line-height' => true,
        'text-transform' => true,
        'color' => false,
        'text-align' => false,
        'letter-spacing' => true,
        'all_styles' => false,
        'default' => array(
          'font-weight' => '',
          'font-family' => '',
          'font-size' => '',
          'text-transform' => '',
          'letter-spacing' => '',
        ),
        'units' => 'px',
      ),
      array(
        'id' => 'tek-header-menu-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Menu Link Color', 'viva'),
        'subtitle' => esc_html__('Select the default menu text color.', 'viva'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-hover',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Menu Link Hover Color', 'viva'),
        'subtitle' => esc_html__('Select the default menu text color on mouse over.', 'viva'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-sticky',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Sticky Menu Link Color', 'viva'),
        'subtitle' => esc_html__('Select the sticky menu text color.', 'viva'),
        'default' => '',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-sticky-hover',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Sticky Menu Link Hover Color', 'viva'),
        'subtitle' => esc_html__('Select the sticky menu text color on mouse over.', 'viva'),
        'default' => '',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-dropdown-nav-hover',
        'type' => 'button_set',
        'title' => esc_html__('Dropdown Menu Link Hover Effect', 'viva'),
        'subtitle' => esc_html__('Select the hover effect on dropdown menu links.', 'viva'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'default-dropdown-effect' => 'Default',
            'background-dropdown-effect' => 'Background color',
            'underline-effect' => 'Underline animation',
        ),
        'default' => 'background-dropdown-effect',
      ),
      array(
        'id'=>'tek-menu-settings-section-end',
        'type' => 'section',
        'indent' => false,
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Add-Window',
    'title' => esc_html__('Top Bar', 'viva'),
    'desc' => esc_html__('Edit topbar general settings.', 'viva'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-topbar',
        'type' => 'switch',
        'title' => esc_html__('Enable Topbar', 'viva'),
        'subtitle' => esc_html__('Enable/Disable the topbar.', 'viva'),
        'default' => true
      ),
      array(
        'id' => 'tek-topbar-sticky',
        'type' => 'switch',
        'title' => esc_html__('Sticky Topbar', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'subtitle' => esc_html__('Enable/Disable sticky topbar.', 'viva'),
        'default' => false
      ),
      array(
        'id' => 'tek-topbar-mobile',
        'type' => 'switch',
        'title' => esc_html__('Enable Topbar on Mobile', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'subtitle' => esc_html__('Show/hide the topbar  on mobile devices.', 'viva'),
        'default' => true
      ),
      array(
        'id' => 'tek-topbar-left-content',
        'type' => 'button_set',
        'title' => esc_html__('Topbar Left Content', 'viva'),
        'subtitle' => esc_html__('Select the content for the topbar left section.', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'contact-info' => 'Contact info',
          'social-links' => 'Social links',
          'navigation' => 'Navigation',
          'empty' => 'Empty',
        ),
        'default' => 'social-links',
      ),
      array(
        'id' => 'tek-topbar-right-content',
        'type' => 'button_set',
        'title' => esc_html__('Topbar Right Content', 'viva'),
        'subtitle' => esc_html__('Select the content for the topbar right section.', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'contact-info' => 'Contact info',
          'social-links' => 'Social links',
          'navigation' => 'Navigation',
          'empty' => 'Empty',
        ),
        'default' => 'contact-info',
      ),
      array(
        'id' => 'tek-topbar-content-design',
        'type' => 'button_set',
        'title' => esc_html__('Topbar Content Design', 'viva'),
        'subtitle' => esc_html__('Select the topbar content design.', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'tb-default-design' =>'No Borders',
          'tb-border-design' => 'With Borders',
        ),
        'default' => 'tb-default-design',
      ),
      array(
        'id' => 'tek-topbar-typo',
        'type' => 'typography',
        'title' => esc_html__('Topbar Font Settings', 'viva'),
        'subtitle' => esc_html__('Select topbar font weight and size.', 'viva'),
        'required' => array('tek-topbar','equals', true),
        'google' => true,
        'font-family' => false,
        'font-style' => true,
        'font-size' => true,
        'line-height' => false,
        'color' => false,
        'text-align' => false,
        'all_styles' => false,
        'units' => 'px',
      ),
      array(
        'id' => 'tek-topbar-bg-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Topbar Background Color', 'viva'),
        'subtitle' => esc_html__('Select topbar background color.', 'viva'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
      array(
        'id' => 'tek-topbar-border-color',
        'type' => 'color_rgba',
        'transparent' => false,
        'title' => esc_html__('Topbar Border Color', 'viva'),
        'subtitle' => esc_html__('Select topbar border color.', 'viva'),
        'default' => '',
        'options' => array(
          'clickout_fires_change' => true,
        ),
        'required' => array('tek-topbar','equals', true),
      ),
      array(
        'id' => 'tek-topbar-text-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Topbar Text Color', 'viva'),
        'subtitle' => esc_html__('Edit  topbar text & links color.', 'viva'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
      array(
        'id' => 'tek-topbar-hover-text-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('Topbar Text Hover Color', 'viva'),
        'subtitle' => esc_html__('Edit  topbar links color on mouse over.', 'viva'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
    )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Window',
      'title' => esc_html__('Popup Modal', 'viva'),
      'desc' => esc_html__('Control the settings of the popup modal used to display additional content on all pages and posts, without sacrificing space. The modal box can be triggered using the button displayed near the Main Menu. This button can also be used to open a new page or smooth scroll to a page section ID.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-btn-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Button Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-modal-button',
              'type' => 'switch',
              'title' => esc_html__('Enable Header Button', 'viva'),
              'subtitle' => esc_html__('Enable/disable the header button. The button will be displayed near the main navigation area to the right.', 'viva'),
              'default' => false
          ),
          array(
              'id' => 'tek-header-button-text',
              'type' => 'text',
              'title' => esc_html__('Button Text', 'viva'),
              'subtitle' => esc_html__('Edit header button text.', 'viva'),
              'default' => 'Get a quote'
          ),
          array(
              'id' => 'tek-header-button-color',
              'type' => 'button_set',
              'title' => esc_html__('Button Color Scheme', 'viva'),
              'subtitle' => esc_html__('Edit header button color scheme. Color selections can be made in Theme Options > Global Options > Color schemes.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
                  'gradient' => 'Gradient',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-header-button-style',
              'type' => 'button_set',
              'title' => esc_html__('Button Style', 'viva'),
              'subtitle' => esc_html__('Edit header button style.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'required' => array('tek-header-button-color','!=','gradient'),
              'default' => 'outline-button'
          ),
          array(
              'id' => 'tek-header-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('Button Hover State', 'viva'),
              'subtitle' => esc_html__('Edit header button style on mouse over.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  "hover_solid_white" => "Solid - White color",
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
                  "hover_outline_white" => "Outline - White color",
                  "reverse_gradient" => "Reverse gradient",
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-header-button-action',
              'type' => 'button_set',
              'title' => esc_html__('Button Action', 'viva'),
              'subtitle' => esc_html__('Select button action: Open modal / Scroll to a section / Open a new page.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open Modal Box',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-modal-button-css-class',
              'type' => 'text',
              'title' => esc_html__('Extra CSS Class', 'viva'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-btn-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-modal-section-start',
              'type' => 'section',
              'title' => esc_html__('Modal Box Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-modal-title',
              'type' => 'text',
              'title' => esc_html__('Modal Heading', 'viva'),
              'subtitle' => esc_html__('Heading text for the modal.', 'viva'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => 'Let\'s get in touch'
          ),
          array(
              'id' => 'tek-modal-subtitle',
              'type' => 'editor',
              'title' => esc_html__('Modal Contents', 'viva'),
              'subtitle' => esc_html__('Content text for the modal. HTML is allowed.', 'viva'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
              'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
              ),
          ),
          array(
              'id' => 'tek-modal-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('Modal Background Image', 'viva'),
              'subtitle' => esc_html__('Upload modal background image.', 'viva'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
          ),
          array(
              'id' => 'tek-modal-contact-links',
              'type' => 'switch',
              'title' => esc_html__('Contact Links', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the phone and email links. The links can be configured in the Business Info panel.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-socials',
              'type' => 'switch',
              'title' => esc_html__('Social Icons', 'viva'),
              'subtitle' => esc_html__('Enable/Disable social icons list. The list can be configured in the Business Info panel.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'viva'),
              'subtitle' => esc_html__('Display a contact form inside the Modal Box. Select the contact vendor from the dropdown list.', 'viva'),
              'required' => array('tek-header-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-modal-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'viva'),
              'subtitle' => esc_html__('Select the Contact Form 7 from the dropdown. The list is automatically populated.', 'viva'),
              'required' => array('tek-modal-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'viva'),
              'required' => array('tek-modal-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'viva'),
              'required' => array('tek-modal-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'viva'),
              'required' => array('tek-modal-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('Form Shortcode', 'viva'),
              'subtitle' => esc_html__('Insert the shortcode for a custom contact form plugin.', 'viva'),
              'required' => array('tek-modal-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-css-class',
              'type' => 'text',
              'title' => esc_html__('CSS Class', 'viva'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-modal-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('Scroll Section Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-scroll-id',
              'type' => 'text',
              'title' => esc_html__('Scroll to Section ID', 'viva'),
              'required' => array('tek-header-button-action','equals','2'),
              'default' => '#download-viva'
          ),
          array(
              'id'=>'tek-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('New Page Link Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-button-new-page',
              'type' => 'text',
              'title' => esc_html__('Button Link', 'viva'),
              'required' => array('tek-header-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-button-target',
              'type' => 'button_set',
              'title' => esc_html__('Link Target', 'viva'),
              'required' => array('tek-header-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','3'),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Sidebar-Window',
      'title' => esc_html__('Panel', 'viva'),
      'desc' => esc_html__('Control the settings of the Panel used to display additional content on all pages and posts, without sacrificing space. The Panel can be triggered using the Header Button displayed near the Main Menu. This button can also be used to open a new page or smooth scroll to a page section ID.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-panel-btn-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Button Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-panel-button',
              'type' => 'switch',
              'title' => esc_html__('Enable Header Button', 'viva'),
              'subtitle' => esc_html__('Enable/disable the panel. The button will be displayed near the main navigation area to the right.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-button-text',
              'type' => 'text',
              'title' => esc_html__('Button Text', 'viva'),
              'subtitle' => esc_html__('Edit header button text.', 'viva'),
              'default' => 'Purchase Viva'
          ),
          array(
              'id' => 'tek-panel-button-color',
              'type' => 'button_set',
              'title' => esc_html__('Button Color Scheme', 'viva'),
              'subtitle' => esc_html__('Edit header button color scheme. Color selections can be made in Theme Options > Global Options > Color schemes.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
                  'gradient' => 'Gradient',
              ),
              'default' => 'gradient'
          ),
          array(
              'id' => 'tek-panel-button-style',
              'type' => 'button_set',
              'title' => esc_html__('Button Style', 'viva'),
              'subtitle' => esc_html__('Edit header button style.', 'viva'),
              'subtitle' => esc_html__('Edit header button text.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'required' => array('tek-panel-button-color','!=','gradient'),
              'default' => 'solid-button'
          ),
          array(
              'id' => 'tek-panel-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('Button Hover State', 'viva'),
              'subtitle' => esc_html__('Edit header button style on mouse over.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  "hover_solid_white" => "Solid - White color",
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
                  "hover_outline_white" => "Outline - White color",
                  "reverse_gradient" => "Reverse gradient",
              ),
              'default' => 'reverse_gradient'
          ),
          array(
              'id' => 'tek-panel-button-action',
              'type' => 'button_set',
              'title' => esc_html__('Button Action', 'viva'),
              'subtitle' => esc_html__('Select button action: Open panel / Scroll to a section / Open a new page.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open Panel',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-panel-button-css-class',
              'type' => 'text',
              'title' => esc_html__('Extra CSS Class', 'viva'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-panel-btn-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-panel-section-start',
              'type' => 'section',
              'title' => esc_html__('Panel Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-panel-position',
              'type' => 'button_set',
              'title' => esc_html__('Panel Position', 'viva'),
              'subtitle' => esc_html__('The Panel can appear from the top, left or right edge of the screen.', 'viva'),
              'description' => esc_html__('The Top option opens to full-screen mode.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'top' => 'Top',
                  'left' => 'Left',
                  'right' => 'Right'
              ),
              'default' => 'top'
          ),
          array(
              'id' => 'tek-panel-title',
              'type' => 'text',
              'title' => esc_html__('Panel Heading', 'viva'),
              'subtitle' => esc_html__('Heading text for the panel.', 'viva'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Let\'s get in touch'
          ),
          array(
              'id' => 'tek-panel-subtitle',
              'type' => 'editor',
              'title' => esc_html__('Panel Contents', 'viva'),
              'subtitle' => esc_html__('Content text for the panel.', 'viva'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Give us a call or fill in the form below and we will contact you. We endeavor to answer all inquiries within 24 hours on business days.',
                  'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
                    ),
          ),
          array(
              'id' => 'tek-panel-contact-links',
              'type' => 'switch',
              'title' => esc_html__('Contact Links', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the phone and email links. The links can be configured in the Business Info panel.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-socials',
              'type' => 'switch',
              'title' => esc_html__('Social Icons', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the social icons list. The list can be configured in the Business Info panel.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'viva'),
              'subtitle' => esc_html__('Display a contact form inside the Panel. Select the contact vendor from the dropdown list.', 'viva'),
              'required' => array('tek-panel-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-panel-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'viva'),
              'subtitle' => esc_html__('Select the Contact Form 7 from the dropdown. The list is automatically populated.', 'viva'),
              'required' => array('tek-panel-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'viva'),
              'required' => array('tek-panel-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'viva'),
              'required' => array('tek-panel-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'viva'),
              'required' => array('tek-panel-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('Form Shortcode', 'viva'),
              'subtitle' => esc_html__('Insert the shortcode for a custom contact form plugin.', 'viva'),
              'required' => array('tek-panel-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-css-class',
              'type' => 'text',
              'title' => esc_html__('CSS Class', 'viva'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-panel-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-panel-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('Scroll Section Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-panel-scroll-id',
              'type' => 'text',
              'title' => esc_html__('Scroll to Section ID', 'viva'),
              'required' => array('tek-panel-button-action','equals','2'),
              'default' => '#download-viva'
          ),
          array(
              'id'=>'tek-panel-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-panel-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('New Page Settings', 'viva'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-panel-button-new-page',
              'type' => 'text',
              'title' => esc_html__('Button Link', 'viva'),
              'required' => array('tek-panel-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-panel-button-target',
              'type' => 'button_set',
              'title' => esc_html__('Link Target', 'viva'),
              'required' => array('tek-panel-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-panel-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Width-Window',
      'title' => esc_html__('Layout', 'viva'),
      'desc' => esc_html__('General layout settings that are applied site-wide.', 'viva'),
      'fields' => array(
          array(
            'id'=>'tek-layout-general-settings-start',
            'type' => 'section',
            'title' => esc_html__('General Settings', 'viva'),
            'indent' => true,
          ),
          array(
              'id' => 'tek-layout-style',
              'type' => 'button_set',
              'title' => esc_html__('Layout Style', 'viva'),
              'subtitle' => esc_html__('Select the general width for the entire site.', 'viva'),
              'options' => array(
                  'full-width' => 'Full-Width',
                  'boxed' => 'Boxed'
               ),
              'default' => 'full-width'
          ),
          array(
              'id' => 'tek-layout-boxed-width',
              'type' => 'slider',
              'title' => esc_html__( 'Content Width', 'viva' ),
              'subtitle' => esc_html__( 'Control the width of the boxed content area.', 'viva' ),
              'default' => 1560,
              'min' => 1280,
              'max' => 1920,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-boxed-body-bg',
              'type' => 'background',
              'transparent' => false,
              'title' => esc_html__('Body Background Settings', 'viva'),
              'subtitle' => esc_html__('Option available only if the layout style Boxed is selected. Configure the body background settings.', 'viva'),
              'preview' => false,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-fw-content-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Content Background Color', 'viva'),
              'subtitle' => esc_html__('Select the content background color.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
            'id'=>'tek-layout-general-settings-end',
            'type' => 'section',
            'indent' => false,
          ),
          array(
            'id'=>'tek-layout-vertical-lines-start',
            'type' => 'section',
            'title' => esc_html__('Vertical Lines', 'viva'),
            'indent' => true,
          ),
          array(
              'id' => 'tek-woo-shop-vertical-lines',
              'type' => 'switch',
              'title' => esc_html__('Vertical Lines - Shop', 'viva'),
              'subtitle' => esc_html__('Enable the vertical lines design on WooCommerce shop archive pages.', 'viva'),
              'default' => false,
          ),
          array(
              'id' => 'tek-woo-single-vertical-lines',
              'type' => 'switch',
              'title' => esc_html__('Vertical Lines - Single Product', 'viva'),
              'subtitle' => esc_html__('Enable the vertical lines design on WooCommerce single product pages.', 'viva'),
              'default' => false,
          ),
          array(
              'id' => 'tek-blog-listing-vertical-lines',
              'type' => 'switch',
              'title' => esc_html__('Vertical Lines - Blog', 'viva'),
              'subtitle' => esc_html__('Enable vertical lines design on blog posts archive pages.', 'viva'),
              'default' => false,
          ),
          array(
              'id' => 'tek-blog-single-vertical-lines',
              'type' => 'switch',
              'title' => esc_html__('Vertical Lines - Single Blog Post', 'viva'),
              'subtitle' => esc_html__('Enable vertical lines design on single blog posts pages.', 'viva'),
              'default' => false,
          ),
          array(
            'id'=>'tek-layout-vertical-lines-end',
            'type' => 'section',
            'indent' => false,
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
    'icon' => 'iconsmind-Download-Window',
    'title' => esc_html__('Footer', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Settings-Window',
      'title' => esc_html__('Footer Settings', 'viva'),
      'desc' => esc_html__('Footer global options.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
            'id'=>'tek-footer-global-options-start',
            'type' => 'section',
            'title' => esc_html__('Footer Global Options', 'viva'),
            'indent' => true,
          ),
          array(
            'id' => 'tek-footer-width',
            'type' => 'button_set',
            'title' => esc_html__('Footer Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the footer area.', 'viva'),
            'options' => array(
              'contained' => 'Contained',
              'fullwidth' => 'Full-Width'
             ),
            'default' => 'contained'
          ),
          array(
              'id' => 'tek-footer-fixed',
              'type' => 'switch',
              'title' => esc_html__('Fixed Footer', 'viva'),
              'subtitle' => esc_html__('Enable/disable the footer fixed scroll effect.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-footer-bar',
              'type' => 'switch',
              'title' => esc_html__('Footer Bar', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer bar. Contains footer menu and social icons.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-upper-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Upper Footer Background Color', 'viva'),
              'subtitle' => esc_html__('Select the upper footer background color.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-lower-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Lower Footer Background Color', 'viva'),
              'subtitle' => esc_html__('Select the lower footer background color.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-border-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Border Color', 'viva'),
              'subtitle' => esc_html__('Select footer border color.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
          	'id'=>'tek-footer-global-options-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-background-image-start',
          	'type' => 'section',
          	'title' => esc_html__('Footer Background Image', 'viva'),
          	'indent' => true,
          ),
          array(
            'id' => 'tek-footer-background-image',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Background Image', 'viva'),
            'subtitle' => esc_html__('Select an image for the footer area. If left empty, the footer background color will be used.', 'viva'),
          ),
          array(
            'id' => 'tek-footer-background-style',
            'type' => 'select',
            'title' => esc_html__('Background Style', 'viva'),
            'subtitle' => esc_html__('Select how the background image repeats.', 'viva'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options' => array(
              'cover' => 'Cover',
              'contain' => 'Contain',
              'no-repeat' => 'No repeat',
              'repeat' => 'Repeat',
             ),
            'default' => 'cover'
          ),
          array(
              'id' => 'tek-footer-background-image-position',
              'type' => 'select',
              'title' => esc_html__('Background Position', 'viva'),
              'subtitle' => esc_html__('Select how the background image is positioned.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                'left top' => 'left top',
                'left center' => 'left center',
                'left bottom' => 'left bottom',
                'right top' => 'right top',
                'right center' => 'right center',
                'right bottom' => 'right bottom',
                'center top' => 'center top',
                'center center' => 'center center',
                'center bottom' => 'center bottom',
              ),
              'required' => array('tek-footer-background-style','equals','no-repeat'),
              'default' => 'left top'
          ),
          array(
          	'id'=>'tek-footer-background-image-end',
          	'type' => 'section',
          	'indent' => false,
          ),
        )
    ) );

    Redux::set_section( $opt_name, array(
        'icon' => 'iconsmind-Font-Window',
        'title' => esc_html__('Footer Typography', 'viva'),
        'desc' => esc_html__('Footer typography settings.', 'viva'),
        'subsection' => true,
        'fields' => array(

          array(
              'id' => 'tek-footer-typo',
              'type' => 'typography',
              'title' => esc_html__('Footer Typography', 'viva'),
              'subtitle' => esc_html__('Edit the typography settings of the footer.', 'viva'),
              'google' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'text-transform' => true,
              'color' => false,
              'text-align' => false,
              'letter-spacing' => true,
              'all_styles' => false,
              'default' => array(
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'text-transform' => '',
              ),
              'units' => 'px',
          ),
          array(
              'id' => 'tek-footer-heading-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Heading Color', 'viva'),
              'subtitle' => esc_html__('Select the text color used for the footer widget titles.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Text Color', 'viva'),
              'subtitle' => esc_html__('Select the text color used for the footer widget paragraphs.', 'viva'),
              'default' => '',
              'validate' => 'color'
          ),
          array(
                'id' => 'tek-footer-link-color',
                'type' => 'link_color',
                'title' => esc_html__( 'Footer Link Color', 'viva' ),
                'subtitle' => esc_html__('Select the text color used for the footer links.', 'viva'),
                'active' => false,
                'visited' => false,
          ),
          array(
              'id' => 'tek-footer-link-hover-effect',
              'type' => 'button_set',
              'title' => esc_html__('Footer Link Hover Effect', 'viva'),
              'subtitle' => esc_html__('Select the hover effect on footer links.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default-footer-link-effect' => 'Default',
                  'underline-effect' => 'Underline animation',
              ),
              'default' => 'underline-effect',
          ),
        )
    ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Network-Window',
      'title' => esc_html__('Footer Widgets', 'viva'),
      'desc' => esc_html__('Footer widgets settings. The footer area allows up to 12 columns across the page. All widget areas combined should add up to 12 columns.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
            'id' => 'tek-upper-footer',
            'type' => 'switch',
            'title' => esc_html__('Footer Widgets Section', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the footer widget section. Contains footer widget areas.', 'viva'),
            'default' => true
          ),
          array(
          	'id'=>'tek-footer-first-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('First Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-first-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('First Widget Area', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer first widget area.', 'viva'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-first-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('First Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the first footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '3',
            'required' => array('tek-footer-first-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-first-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('First Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the first footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-first-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-first-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-second-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('Second Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-second-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('Second Widget Area', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer second widget area.', 'viva'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-second-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('Second Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the second footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '2',
            'required' => array('tek-footer-second-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-second-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('Second Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the second footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-second-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-second-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-third-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('Third Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-third-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('Third Widget Area', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer third widget area.', 'viva'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-third-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('Third Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the third footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '2',
            'required' => array('tek-footer-third-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-third-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('Third Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the third footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-third-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-third-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-fourth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('Fourth Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-fourth-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('Fourth Widget Area', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer fourth widget area.', 'viva'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-fourth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('Fourth Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the fourth footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '5',
            'required' => array('tek-footer-fourth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-fourth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('Fourth Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the fourth footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-fourth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-fourth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-fifth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('Fifth Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
            'id' => 'tek-footer-fifth-widget-switch',
            'type' => 'switch',
            'title' => esc_html__('Fifth Widget Area', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the footer fifth widget area.', 'viva'),
            'default' => false
          ),
          array(
            'id' => 'tek-footer-fifth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('Fifth Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the fifth footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '2',
            'required' => array('tek-footer-fifth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-fifth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('Fifth Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the fifth footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-fifth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-fifth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-sixth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('Sixth Widget Area', 'viva'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-sixth-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('Sixth Widget Area', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer sixth widget area.', 'viva'),
              'default' => false
          ),
          array(
            'id' => 'tek-footer-sixth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('Sixth Widget Width', 'viva'),
            'subtitle' => esc_html__('Control the width of the sixth footer widget area.', 'viva'),
            'options' => array(
              '6' => '6 cols',
              '5' => '5 cols',
              '4' => '4 cols',
              '3' => '3 cols',
              '2' => '2 cols',
             ),
            'default' => '2',
            'required' => array('tek-footer-sixth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-sixth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('Sixth Widget Text Align', 'viva'),
            'subtitle' => esc_html__('Select content text alignment for the sixth footer widget area.', 'viva'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-sixth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-sixth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
        )
    ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-URL-Window',
      'title' => esc_html__('Footer Copyright', 'viva'),
      'desc' => esc_html__('Footer copyright settings.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-lower-footer-switch',
              'type' => 'switch',
              'title' => esc_html__('Footer Copyright Section', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the footer copyright section. Contains the copyright text.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-footer-text',
              'type' => 'editor',
              'title' => esc_html__('Copyright Text', 'viva'),
              'subtitle' => esc_html__('Enter footer copyright text. You can use the following shortcodes in your footer text: [copyright], [current_year], [site_title].', 'viva'),
              'default' => '[copyright] [current_year] Viva by KeyDesign. All Rights Reserved.',
              'args' => array(
                  'teeny' => true,
                  'textarea_rows' => 3,
                  'media_buttons' => false,
              ),
              'required' => array('tek-lower-footer-switch', 'equals', true),
          ),
          array(
              'id' => 'tek-footer-copyright-alignment',
              'type' => 'button_set',
              'title' => esc_html__('Copyright Text Alignment', 'viva'),
              'subtitle' => esc_html__('Select the text alignment with footer copyright area.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'copyright-left' => 'Left',
                  'copyright-center' => 'Center',
                  'copyright-right' => 'Right',
                  'copyright-justify' => 'Justify',
              ),
              'default' => 'copyright-center',
              'required' => array('tek-lower-footer-switch', 'equals', true),
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Font-Window',
      'title' => esc_html__('Typography', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Aa',
      'title' => esc_html__('General Fonts', 'viva'),
      'desc' => esc_html__('Customize the font properties across the entire website. Choose from over 800 open-source Google fonts, free for commercial use.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
            'id'   => 'tek-typography-info',
            'type' => 'info',
            'desc' => esc_html__('Important! Resetting this section will result in losing the demo imported settings and default to the theme original settings.', 'viva')
          ),
          array(
              'id' => 'tek-default-typo',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'viva'),
              'subtitle' => esc_html__('Configure the global body font typography.', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'all_styles' => false,
              'units' => 'px',
              'default' => array(
                'font-family' => 'Reem Kufi',
            ),
          ),
          array(
              'id' => 'tek-h1-heading',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H1 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H2 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H3 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H4 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H5 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'viva'),
              'subtitle' => esc_html__('Configure H6 heading typography.', 'viva'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                'font-weight' => '400',
                'font-family' => 'Work Sans',
                'google' => true,
                'font-size' => '16px',
                'line-height' => '30px',
            ),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Font-Name',
      'title' => esc_html__('Adobe Fonts', 'viva'),
      'desc' => __('Adobe fonts are premium fonts that can be used only with an active monthly subscription to Adobe CC.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-typekit-switch',
            'type' => 'switch',
            'title' => esc_html__('Adobe Fonts Controls', 'viva'),
            'default' => false
        ),
        array(
            'id' => 'tek-typekit',
            'type' => 'text',
            'title' => esc_html__('Project ID', 'viva'),
            'subtitle' => esc_html__('Add Adobe Project ID. Only published data is accessible. Please make sure that any changes of a kit are updated.', 'viva'),
            'mode' => 'text',
            'default' => '',
            'theme' => 'chrome',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-typekit-selector',
            'type' => 'text',
            'title' => esc_html__('Body Typography', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the body typography.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h1-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H1 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H1 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h2-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H2 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H2 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h3-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H3 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H3 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h4-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H4 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H4 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h5-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H5 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H5 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-h6-heading-typekit',
            'type' => 'text',
            'title' => esc_html__('H6 Heading', 'viva'),
            'subtitle' => esc_html__('Enter the font family name used for the H6 heading.', 'viva'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Text-Effect',
      'title' => esc_html__('Custom Fonts', 'viva'),
      'desc' => esc_html__('Upload your own custom fonts. Only .ttf and .woff files are required.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-custom-fonts-switch',
            'type' => 'switch',
            'title' => esc_html__('Custom Fonts Controls', 'viva'),
            'default' => false
        ),
        array(
            'id'=>'tek-primary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('Primary Custom Font', 'viva'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-primary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('Primary .ttf File', 'viva'),
            'subtitle' => esc_html__('Upload primary font .ttf file.', 'viva'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-primary-woff-font',
            'type' => 'media',
            'title' => esc_html__('Primary .woff File', 'viva'),
            'subtitle' => esc_html__('Upload primary font .woff file.', 'viva'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-primary-font-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-secondary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('Secondary Custom Font', 'viva'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-secondary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('Secondary .ttf File', 'viva'),
            'subtitle' => esc_html__('Upload secondary font .ttf file.', 'viva'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-secondary-woff-font',
            'type' => 'media',
            'title' => esc_html__('Secondary .woff File', 'viva'),
            'subtitle' => esc_html__('Upload secondary font .woff file.', 'viva'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-secondary-font-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-custom-font-selector-section-start',
            'type' => 'section',
            'title' => esc_html__('Custom Font Selector', 'viva'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-custom-font',
            'type' => 'select',
            'title' => esc_html__('Body Typography', 'viva'),
            'subtitle' => esc_html__('Select custom font to be used for the body text.', 'viva'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-headings-custom-font',
            'type' => 'select',
            'title' => esc_html__('Headings Typography', 'viva'),
            'subtitle' => esc_html__('Select custom font to be used for the headings text.', 'viva'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-custom-font-selector-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Text-Box',
      'title' => esc_html__('Responsive Fonts', 'viva'),
      'desc' => esc_html__('Overwrite the default typography ( font sizes and line heights ) on mobile & tablet', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-responsive-fonts',
            'type' => 'switch',
            'title' => esc_html__('Resonsive Fonts Controls', 'viva'),
            'default' => false
        ),
      array(
              'id' => 'tek-default-typo-mobile',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'viva'),
              'subtitle' => esc_html__('Overwrite body typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h1-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H1 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h2-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H2 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h3-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H3 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h4-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H4 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h5-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H5 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),
          array(
              'id' => 'tek-h6-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'viva'),
              'subtitle' => esc_html__('Overwrite H6 typography on mobile & tablet ', 'viva'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
              'required' => array('tek-responsive-fonts','equals', true),
          ),

      )
  ) );

  if ( class_exists( 'WooCommerce' ) ) {

    Redux::set_section( $opt_name, array(
        'icon' => 'iconsmind-Shopping-Bag',
        'title' => esc_html__('WooCommerce', 'viva'),
    ) );

    Redux::set_section( $opt_name, array(
        'icon' => 'iconsmind-Shop-4',
        'title' => esc_html__('Shop Page', 'viva'),
        'desc' => esc_html__('Edit general setting for the main shop page. Select the product catalog style, products to show per page and number of product columns.', 'viva'),
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'tek-woo-catalog-style',
                'type' => 'button_set',
                'title' => esc_html__('Catalog Style', 'viva'),
                'subtitle' => esc_html__('Select the product box template style', 'viva'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-minimal-style' => 'Minimal',
                    'woo-detailed-style' => 'Detailed',
                ),
                'default' => 'woo-detailed-style'
            ),
            array(
                'id' => 'tek-woo-products-number',
                'type' => 'text',
                'title' => esc_html__('Products per Page', 'viva'),
                'subtitle' => esc_html__('Change the products number listed per page.', 'viva'),
                'default' => '9',
            ),
            array(
                'id' => 'tek-woo-shop-columns',
                'type' => 'button_set',
                'title' => esc_html__('Shop Layout', 'viva'),
                'subtitle' => esc_html__('Select the number of product columns', 'viva'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-2-columns' => '2 Columns + Sidebar',
                    'woo-3-columns-sidebar' => '3 Columns + Sidebar',
                    'woo-3-columns' => '3 Columns',
                    'woo-4-columns' => '4 Columns',
                ),
                'default' => 'woo-2-columns'
            ),
            array(
                'id' => 'tek-woo-sidebar-position',
                'type' => 'button_set',
                'title' => esc_html__('Sidebar Position', 'viva'),
                'subtitle' => esc_html__('Select sidebar position', 'viva'),
                'options'  => array(
                    'woo-sidebar-left' => 'Left',
                    'woo-sidebar-right' => 'Right',
                ),
                'required' => array( 'tek-woo-shop-columns', 'equals', array( 'woo-2-columns', 'woo-3-columns-sidebar' ) ),
                'default' => 'woo-sidebar-right'
            ),
            array(
                'id' => 'tek-woo-mini-cart-view-text',
                'type' => 'text',
                'title' => esc_html__('View cart text', 'viva'),
                'subtitle' => esc_html__('Overwrite the "View cart" button text on mini cart widget.', 'viva'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-checkout-text',
                'type' => 'text',
                'title' => esc_html__('Checkout text', 'viva'),
                'subtitle' => esc_html__('Overwrite the "Checkout" button text on mini cart widget.', 'viva'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-empty-text',
                'type' => 'text',
                'title' => esc_html__('Empty cart text', 'viva'),
                'subtitle' => esc_html__('Overwrite the "Your cart is currently empty." text on mini cart widget.', 'viva'),
                'default' => ''
            ),

        )
    ) );

    Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Tag',
        'title' => esc_html__('Product Page', 'viva'),
        'desc' => esc_html__('Edit general settings for the single product page.', 'viva'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-woo-single-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Header', 'viva'),
              'subtitle' => esc_html__('Enable/Disable transparent header on single product pages.', 'viva'),
              'default' => false
          ),
          array(
              'id' => 'tek-woo-single-header',
              'type' => 'switch',
              'title' => esc_html__('Product Title Bar', 'viva'),
              'subtitle' => esc_html__('Enable/Disable title bar on single product pages.', 'viva'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-header-text-align',
              'type' => 'button_set',
              'title' => esc_html__('Title Bar Text Alignment', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-woo-single-header','equals', '1'),
              'subtitle' => esc_html__('Select text alignment in the title bar area.', 'viva'),
              'default' => 'blog-title-left'
          ),
          array(
            'id' => 'tek-woo-single-titlebar-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Title Bar Background Color', 'viva'),
            'default' => '',
            'required' => array('tek-woo-single-header','equals', '1'),
            'subtitle' => esc_html__('Select the background color used for the single product pages title bar section.', 'viva'),
            'validate' => 'color'
          ),
          array(
              'id' => 'tek-woo-single-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Product Sidebar', 'viva'),
              'subtitle' => esc_html__('Enable/Disable sidebar on single product pages.', 'viva'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar-position',
              'type' => 'button_set',
              'title' => esc_html__('Sidebar Position', 'viva'),
              'subtitle' => esc_html__('Select sidebar position', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'woo-single-sidebar-left' => 'Left',
                  'woo-single-sidebar-right' => 'Right',
              ),
              'required' => array('tek-woo-single-sidebar','equals','1'),
              'default' => 'woo-single-sidebar-right'
          ),
          array(
              'id' => 'tek-woo-single-image-position',
              'type' => 'button_set',
              'title' => esc_html__('Featured Image Position', 'viva'),
              'subtitle' => esc_html__('Control the product image position.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-image-left' => 'Left',
                  'woo-image-right' => 'Right',
              ),
              'default' => 'woo-image-left'
          ),
          array(
              'id' => 'tek-woo-single-gallery',
              'type' => 'button_set',
              'title' => esc_html__('Gallery Template', 'viva'),
              'subtitle' => esc_html__('Control the product image gallery layout.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-gallery-thumbnails' => 'Thumbnails',
                  'woo-gallery-list' => 'List',
              ),
              'default' => 'woo-gallery-thumbnails'
          ),
          array(
              'id' => 'tek-woo-related-products-number',
              'type' => 'slider',
              'title' => esc_html__( 'Number of Related Products', 'viva' ),
              'subtitle' => esc_html__( 'Controls the number of items that display under related products section.', 'viva' ),
              'default' => 4,
              'max' => 8,
          ),
          array(
              'id' => 'tek-woo-single-social-icons',
              'type' => 'switch',
              'title' => esc_html__('Social Sharing Buttons', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the social sharing buttons on single product pages.', 'viva'),
              'default' => true
          ),
        )
    ) );
  }

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Photos',
      'title' => esc_html__('Portfolio', 'viva'),
      'desc' => esc_html__('Edit the single portfolio page settings', 'viva'),
      'fields' => array(
        array(
            'id'=>'tek-portfolio-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('General Settings', 'viva'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-cpt',
            'type' => 'switch',
            'title' => esc_html__('Enable Portfolio', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the portfolio custom post type. Refresh the page for changes to take effect.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-slug',
            'type' => 'text',
            'title' => esc_html__('Portfolio Slug', 'viva'),
            'subtitle' => __('Overwrite the portfolio base slug: domain.com/<strong>portfolio</strong>/portfolio-item-slug', 'viva'),
            'desc' => __('<strong>Note:</strong> When you change this setting you need to <a href="https://www.vivatheme.com/documentation/knowledge-base/flush-rewrite-rules/" target="_blank">flush rewrite rules</a>.', 'viva'),
            'default' => '',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
        ),
        array(
            'id'=>'tek-portfolio-settings-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('Portfolio Single Page Settings', 'viva'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the previous/next portfolio pagination. Pagination section will be displayed below the content.', 'viva'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => false,
        ),
        array(
            'id' => 'tek-portfolio-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Previous" Link Text', 'viva'),
            'subtitle' => esc_html__('Overwrite the "Previous" text on portfolio single page navigation.', 'viva'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Next" Link Text', 'viva'),
            'subtitle' => esc_html__('Overwrite the "Next" text on portfolio single page navigation.', 'viva'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Portfolio Items', 'viva'),
            'subtitle' => esc_html__('Enable/Disable related portfolio items on single portfolio pages.', 'viva'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Portfolio Section Title', 'viva'),
            'subtitle' => esc_html__('Edit the related portfolios section title.', 'viva'),
            'default' => 'Related projects',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-number',
            'type' => 'slider',
            'title' => esc_html__( 'Number of Related Portfolio Items', 'viva' ),
            'subtitle' => esc_html__( 'Select the number of related portfolio items.', 'viva' ),
            'default' => 3,
            'max' => 20,
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-button-text',
            'type' => 'text',
            'title' => esc_html__('Related Portfolio Link Text', 'viva'),
            'subtitle' => esc_html__('Edit the related portfolio items button text. Default is set to "View project".', 'viva'),
            'default' => 'View project',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-comments',
            'type' => 'switch',
            'title' => esc_html__('Comments Section', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the comments section below the content.', 'viva'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => false
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-end',
            'type' => 'section',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => false,
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Newspaper',
      'title' => esc_html__('Blog', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Notepad',
      'title' => esc_html__('Blog Settings', 'viva'),
      'desc' => esc_html__('Edit blog posts page & archive general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-blog-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('General Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Header', 'viva'),
              'subtitle' => esc_html__('Enable/Disable transparent header on blog posts page.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-header-template',
              'type' => 'button_set',
              'title' => esc_html__('Header Template', 'viva'),
              'subtitle' => esc_html__('Select the blog header template style.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-header-titlebar' => 'Title bar',
                  'blog-header-revslider' => 'Revolution slider',
              ),
              'default' => 'blog-header-titlebar'
          ),
          array(
              'id' => 'tek-blog-header-slider-alias',
              'type' => 'text',
              'title' => esc_html__('Revolution Slider Alias Name', 'viva'),
              'subtitle' => esc_html__('Insert slider alias name.', 'viva'),
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
              'default' => ''
          ),
          array(
              'id' => 'tek-blog-template',
              'type' => 'button_set',
              'title' => esc_html__('Articles Template', 'viva'),
              'subtitle' => esc_html__('Select the blog articles template style.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'img-top-list' => 'List top image',
                  'img-left-list' => 'List left image',
                  'minimal-list' => 'List minimal',
                  'minimal-grid' => 'Grid minimal',
                  'detailed-grid' => 'Grid detailed',
              ),
              'default' => 'img-top-list'
          ),
          array(
              'id' => 'tek-blog-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Display Sidebar', 'viva'),
              'subtitle' => esc_html__('Enable disable blog sidebar.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-listing-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Sticky Sidebar', 'viva'),
              'subtitle' => esc_html__('Enable sticky sidebar for blog posts page.', 'viva'),
              'default' => false,
              'required' => array( 'tek-blog-sidebar', 'equals', true ),
          ),
          array(
              'id' => 'tek-blog-excerpt',
              'type' => 'text',
              'title' => esc_html__('Post Excerpt Length', 'viva'),
              'subtitle' => esc_html__('Edit articles excerpt length on blog page.', 'viva'),
              'default' => '20'
          ),
          array(
              'id' => 'tek-blog-read-more-text',
              'type' => 'text',
              'title' => esc_html__('Read More Text', 'viva'),
              'subtitle' => esc_html__('Overwrite "Read more" text on blog articles.', 'viva'),
              'desc' => esc_html__('This option overwrites the Read More text with the assigned blog page in "Settings > Reading" and blog archives, not the blog element.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-blog-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-blog-title-section-start',
              'type' => 'section',
              'title' => esc_html__('Blog Header Title Bar', 'viva'),
              'indent' => true,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
          array(
              'id' => 'tek-blog-title-switch',
              'type' => 'switch',
              'title' => esc_html__('Blog Page Title', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the page title of the assigned blog page.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-subtitle',
              'type' => 'text',
              'title' => esc_html__('Blog Page Subtitle', 'viva'),
              'subtitle' => esc_html__('Add the subtitle text that displays in the page title bar of the assigned blog page.', 'viva'),
              'default' => 'This is where you can find the latest news and insights about Viva — new products, in-depth interviews and successfully finished projects. Never miss a beat.'
          ),
          array(
              'id' => 'tek-blog-header-text-align',
              'type' => 'button_set',
              'title' => esc_html__('Title Bar Text Alignment', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-blog-title-switch','equals', true),
              'subtitle' => esc_html__('Select text alignment in the title bar area.', 'viva'),
              'default' => 'blog-title-center'
          ),
          array(
              'id' => 'tek-blog-titlebar-background',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Background Color', 'viva'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default background color.', 'viva'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Text Color', 'viva'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default text color.', 'viva'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-featured-background-size',
              'type' => 'button_set',
              'title' => esc_html__('Blog Header Background Image Size', 'viva'),
              'subtitle' => esc_html__('Controls the Blog Header image size. This option is used with the Blog Featured Image.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'auto' => 'Auto',
                  'contain' => 'Contain',
                  'cover' => 'Cover',
              ),
              'default' => 'auto'
          ),
          array(
              'id' => 'tek-blog-featured-background-position',
              'type' => 'button_set',
              'title' => esc_html__('Blog Header Background Image Position', 'viva'),
              'subtitle' => esc_html__('Controls the Blog Header image position. This option is used with the Blog Featured Image.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'center' => 'Center',
                  'top' => 'Top',
                  'right' => 'Right',
                  'bottom' => 'Bottom',
                  'left' => 'Left',
              ),
              'default' => 'bottom'
          ),
          array(
              'id'=>'tek-blog-title-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Pen',
      'title' => esc_html__('Single Post', 'viva'),
      'desc' => esc_html__('Edit single blog posts general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-single-post-template',
            'type' => 'button_set',
            'title' => esc_html__('Single Post Template', 'viva'),
            'subtitle' => esc_html__('Select the single post template style.', 'viva'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'single-post-layout-one' => 'Classic',
                'single-post-layout-two' => 'Modern',
            ),
            'default' => 'single-post-layout-one'
        ),
        array(
            'id' => 'tek-blog-single-sidebar',
            'type' => 'switch',
            'title' => esc_html__('Display Sidebar', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the single post sidebar.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-sticky-sidebar',
            'type' => 'switch',
            'title' => esc_html__('Sticky Sidebar', 'viva'),
            'subtitle' => esc_html__('Enable sticky sidebar for single blog posts.', 'viva'),
            'default' => true,
            'required' => array( 'tek-blog-single-sidebar', 'equals', true ),
        ),
        array(
          'id'       => 'tek-blog-social-sharing-buttons',
          'type'     => 'checkbox',
          'title'    => __('Social Sharing Buttons', 'viva'),
          'subtitle' => __('Select social sharing buttons visible on single post', 'viva'),
          'options'  => array(
              '1' => 'Facebook',
              '2' => 'Twitter',
              '3' => 'Pinterest',
              '4' => 'LinkedIn'
          ),
          'default' => array(
              '1' => '1',
              '2' => '1',
              '3' => '1',
              '4' => '1'
          ),
        ),
        array(
            'id' => 'tek-author-box',
            'type' => 'switch',
            'title' => esc_html__('Author Box', 'viva'),
            'subtitle' => esc_html__('Enable/Disable author box below post content.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the previous/next post pagination for single posts.', 'viva'),
            'default' => false
        ),
        array(
            'id' => 'tek-blog-single-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Previous" Text', 'viva'),
            'subtitle' => esc_html__('Overwrite the "Previous" text on single blog post navigation.', 'viva'),
            'default' => '',
            'required' => array( 'tek-blog-single-nav', 'equals', true ),
        ),
        array(
            'id' => 'tek-blog-single-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Next" Text', 'viva'),
            'subtitle' => esc_html__('Overwrite the "Next" text on single blog post navigation.', 'viva'),
            'default' => '',
            'required' => array( 'tek-blog-single-nav', 'equals', true ),
        ),
        array(
            'id' => 'tek-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Posts', 'viva'),
            'subtitle' => esc_html__('Enable/Disable related posts on single post pages.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Posts Title', 'viva'),
            'default' => 'Related articles',
            'required' => array( 'tek-related-posts', 'equals', true ),
        ),
        array(
            'id' => 'tek-related-posts-number',
            'type' => 'slider',
            'title'    => esc_html__( 'Number of Related Posts', 'viva' ),
            'subtitle' => esc_html__( 'Controls the number of posts that display under related posts section.', 'viva' ),
            'default'  => 3,
            'max'      => 20,
            'required' => array( 'tek-related-posts', 'equals', true ),
          ),
          array(
              'id'=>'tek-blog-reading-bar-section-start',
              'type' => 'section',
              'title' => esc_html__('Reading Bar', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-rebar',
              'type' => 'switch',
              'title' => esc_html__('Reading Bar', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the reading progress bar. As you read the post or scroll the page, the progress bar is filled with color.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-rebar-position',
              'type' => 'button_set',
              'title' => esc_html__('Reading Bar Position', 'viva'),
              'subtitle' => esc_html__('Select the reading bar position.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'position-top' => 'Top',
                  'position-bottom' => 'Bottom',
              ),
              'default' => 'position-top',
              'required' => array( 'tek-blog-rebar', 'equals', true ),
          ),
          array(
            'id' => 'tek-blog-rebar-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Reading Bar Color', 'viva'),
            'default' => '',
            'subtitle' => esc_html__('Select the background color to fill the progress bar.', 'viva'),
            'validate' => 'color',
            'required' => array( 'tek-blog-rebar', 'equals', true ),
          ),
          array(
              'id' => 'tek-blog-rebar-height',
              'type' => 'slider',
              'title' => esc_html__( 'Reading Bar Height', 'viva' ),
              'subtitle' => esc_html__( 'Select the height of the progress reading bar.', 'viva' ),
              'default' => 5,
              'max' => 10,
              'required' => array( 'tek-blog-rebar', 'equals', true ),
          ),
          array(
              'id'=>'tek-blog-reading-bar-section-end',
              'type' => 'section',
              'indent' => false,
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Bookmark',
      'title' => esc_html__('Blog Meta', 'viva'),
      'desc' => esc_html__('The settings available with this page control the main blog page, single blog post page and blog archive pages. These settings do not overwrite the Post Grid or the Masonry Grid element settings.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-post-meta',
            'type' => 'switch',
            'title' => esc_html__('Post Meta', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta on blog posts. You can also control individual meta settings below.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-date',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Date', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta date.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-author',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Author', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta author.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-categories',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Categories', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta categories.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-comments',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Comments', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta comments.', 'viva'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-tags',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Tags', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the post meta tags.', 'viva'),
            'default' => true
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Envelope',
      'title' => esc_html__('Subscribe Form', 'viva'),
      'desc' => esc_html__('Display a subscribe section on blog listing and single post pages in the footer area.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-blog-subscribe-section-switch',
            'type' => 'switch',
            'title' => esc_html__('Subscribe Section', 'viva'),
            'subtitle' => esc_html__('Enable/Disable the subscribe form section.', 'viva'),
            'default' => false
        ),
        array(
            'id' => 'tek-blog-subscribe-section-show',
            'type' => 'button_set',
            'title' => esc_html__('Visibility', 'viva'),
            'subtitle' => esc_html__('Select on which pages to show the subscribe form.', 'viva'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'all-blog-pages' => 'All blog pages',
                'archive-pages' => 'Blog archive pages',
                'blog-single-pages' => 'Blog single pages',
            ),
            'required' => array('tek-blog-subscribe-section-switch','equals', true),
            'default' => 'all-blog-pages'
        ),
        array(
            'id' => 'tek-blog-subscribe-section-title',
            'type' => 'text',
            'title' => esc_html__('Title', 'viva'),
            'subtitle' => esc_html__('Add the title for the subscribe section.', 'viva'),
            'required' => array('tek-blog-subscribe-section-switch','equals', true),
            'default' => 'Subscribe to our newsletter'
        ),
        array(
            'id' => 'tek-blog-subscribe-section-subtitle',
            'type' => 'editor',
            'title' => esc_html__('Subtitle', 'viva'),
            'subtitle' => esc_html__('Add the subtitle for the subscribe section.', 'viva'),
            'default' => '',
            'args' => array(
                'teeny' => true,
                'textarea_rows' => 3,
                'media_buttons' => false,
            ),
            'required' => array('tek-blog-subscribe-section-switch','equals', true),
        ),
        array(
          'id' => 'tek-blog-subscribe-text-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__( 'Text Color', 'viva' ),
          'default' => '',
          'subtitle' => esc_html__( 'Overwrite form text color. If none selected, the default theme color will be used.', 'viva' ),
          'validate' => 'color',
          'required' => array( 'tek-blog-subscribe-section-switch','equals', true ),
        ),
        array(
            'id' => 'tek-blog-subscribe-section-form-id',
            'type' => 'select',
            'data' => 'posts',
            'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
            'title' => esc_html__('Subscribe Form Title', 'viva'),
            'subtitle' => esc_html__('Select the Contact Form 7 to be used as a newsletter form.', 'viva'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'required' => array('tek-blog-subscribe-section-switch','equals', true),
        ),
        array(
            'id' => 'tek-blog-subscribe-section-bg-image',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Background Image', 'viva'),
            'subtitle' => esc_html__('Upload background image.', 'viva'),
            'required' => array('tek-blog-subscribe-section-switch','equals', true),
            'default' => '',
        ),
        array(
          'id' => 'tek-blog-subscribe-bg-overlay',
          'type' => 'color_rgba',
          'transparent' => false,
          'title' => esc_html__('Backround Overlay Color', 'viva'),
          'subtitle' => esc_html__('Select background overlay color.', 'viva'),
          'default' => '',
          'options' => array(
            'clickout_fires_change' => true,
          ),
          'required' => array( 'tek-blog-subscribe-section-switch','equals', true ),
        ),
        array(
            'id' => 'tek-blog-subscribe-fixed-background',
            'type' => 'switch',
            'title' => esc_html__('Fixed Background', 'viva'),
            'subtitle' => esc_html__('If enabled the background image will stay fixed when scrolling.', 'viva'),
            'default' => false,
            'required' => array( 'tek-blog-subscribe-section-switch','equals', true ),
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Layer',
      'title' => esc_html__('Elements', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Pencil-Ruler',
      'title' => esc_html__('General Settings', 'viva'),
      'desc' => esc_html__('Elements general settings that are applied site-wide.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-design-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('Design Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-global-radius',
              'type' => 'spinner',
              'title' => esc_html__('Border Radius', 'viva'),
              'subtitle' => esc_html__('Edit the border radius for all elements. Pixel value.', 'viva'),
              'min' => 0,
              'step' => 1,
              'max' => 25,
              'default' => 0,
          ),

          array(
              'id' => 'tek-cards-border-radius',
              'type' => 'spinner',
              'title' => esc_html__('Cards Border Radius', 'viva'),
              'subtitle' => esc_html__('Edit the border radius for card elements. Pixel value.', 'viva'),
              'min' => 0,
              'max' => 25,
              'default' => 0,
          ),

          array(
              'id'=>'tek-design-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-On-off',
      'title' => esc_html__('Button', 'viva'),
      'desc' => esc_html__('Buttons general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-button-typo',
            'type' => 'typography',
            'title' => esc_html__('Button Typography', 'viva'),
            'subtitle' => esc_html__('Control the typography for all buttons.', 'viva'),
            'line-height' => true,
            'text-align' => false,
            'color' => true,
            'text-transform' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
              'font-size' => '',
              'line-height' => '',
              'letter-spacing' => '',
            ),
        ),

        array(
            'id' => 'tek-btn-border',
            'type' => 'spinner',
            'title'   => esc_html__('Button Border Width', 'viva'),
            'subtitle' => esc_html__('Control the border width for buttons. Pixel value.', 'viva'),
            'min' => 0,
            'max' => 10,
            'default' => 1,
        ),

        array(
            'id' => 'tek-btn-radius',
            'type' => 'spinner',
            'title' => esc_html__('Button Border Radius', 'viva'),
            'subtitle' => esc_html__('Control the border radius for buttons. Pixel value.', 'viva'),
            'min' => 0,
            'max' => 100,
            'default' => 0,
        ),

        array(
            'id' => 'tek-btn-padding',
            'type' => 'spacing',
            'mode' => 'padding',
            'units' => array('em', 'px'),
            'title' => esc_html__('Button Box Padding', 'viva'),
            'subtitle' => esc_html__('Controls the top/right/bottom/left padding of the button element.', 'viva'),
        ),

        array(
            'id' => 'tek-btn-effect',
            'type' => 'button_set',
            'title' => esc_html__('Button Hover Effect', 'viva'),
            'subtitle' => esc_html__('Select the button hover effect.', 'viva'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'btn-hover-default' => 'Default',
                'btn-hover-1' => 'Swiping text',
                'btn-hover-2' => 'Background fill',
            ),
            'default' => 'btn-hover-1'
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Envelope',
      'title' => esc_html__('Contact Form', 'viva'),
      'desc' => esc_html__('Forms general settings.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-contact-form-typo',
            'type' => 'typography',
            'title' => esc_html__('Form Typography', 'viva'),
            'subtitle' => esc_html__('Control the typography for form fields.', 'viva'),
            'google' => true,
            'font-family' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'color' => true,
            'text-align' => false,
            'text-transform' => true,
            'all_styles' => false,
            'units' => 'px',
        ),
        array(
          'id' => 'tek-contact-form-bg-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Form Background Color', 'viva'),
          'subtitle' => esc_html__('Controls the background color of form fields.', 'viva'),
          'default' => '',
          'validate' => 'color'
        ),
        array(
          'id' => 'tek-contact-form-placeholder-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Form Placeholder Text Color', 'viva'),
          'subtitle' => esc_html__('Controls the placeholder text color of form fields.', 'viva'),
          'default' => '',
          'validate' => 'color'
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Speach-BubbleAsking',
      'title' => esc_html__('FAQ', 'viva'),
      'desc' => esc_html__('FAQ general settings.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
          'id' => 'tek-faq-collapsible',
          'type' => 'switch',
          'title' => esc_html__('Auto collapse', 'viva'),
          'subtitle' => esc_html__('Auto collapse expanded FAQ when clicking another element of the same type. Only one item will remain expanded at any point.', 'viva'),
          'default' => true
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Text-Effect',
      'title' => esc_html__('Section Title', 'viva'),
      'desc' => esc_html__('Section Title general settings.', 'viva'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-section-title-secondary-typography',
            'type' => 'typography',
            'title' => esc_html__('Section Title Secondary Typography', 'viva'),
            'subtitle' => esc_html__('Used with the highlighted word.', 'viva'),
            'font-size' => false,
            'color' => false,
            'line-height' => false,
            'text-align' => false,
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Repair',
      'title' => esc_html__('Utility Pages', 'viva'),
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Settings-Window',
      'title' => esc_html__('Maintenance Mode', 'viva'),
      'desc' => esc_html__('Maintenance mode will be activated only for users that are not logged in.', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-maintenance-mode',
              'type' => 'switch',
              'title' => esc_html__('Enable Maintenance Mode', 'viva'),
              'subtitle' => esc_html__('Enable/Disable maintenance mode.', 'viva'),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'viva'),
              'subtitle' => esc_html__('Edit maintenance page title ', 'viva'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => 'Viva is in the works!'
          ),
          array(
              'id' => 'tek-maintenance-content',
              'type' => 'editor',
              'title' => esc_html__('Page Content', 'viva'),
              'subtitle' => esc_html__('Edit maintenance page content ', 'viva'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
              'args'   => array(
                'teeny'  => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
              ),
          ),

          array(
              'id' => 'tek-maintenance-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('Page Background Image', 'viva'),
              'subtitle' => esc_html__('Upload page background image.', 'viva'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
          ),

          array(
            'id' => 'tek-maintenance-bg-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Page Background Color', 'viva'),
            'subtitle' => esc_html__('Overwrite the page background color.', 'viva'),
            'required' => array('tek-maintenance-mode','equals', true),
            'default' => '',
            'validate' => 'color'
          ),

          array(
            'id' => 'tek-maintenance-text-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Text Color', 'viva'),
            'subtitle' => esc_html__('Overwrite text color. If none selected, the default theme color will be used.', 'viva'),
            'required' => array('tek-maintenance-mode','equals', true),
            'default' => '',
            'validate' => 'color'
          ),

          array(
              'id' => 'tek-maintenance-countdown',
              'type' => 'switch',
              'title' => esc_html__('Enable Countdown', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the countdown timer.', 'viva'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-count-day',
              'type' => 'text',
              'title' => esc_html__('End Day', 'viva'),
              'subtitle' => esc_html__('Enter day value. Eg. 05', 'viva'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-month',
              'type' => 'text',
              'title' => esc_html__('End Month', 'viva'),
              'subtitle' => esc_html__('Enter month value. Eg. 09', 'viva'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-year',
              'type' => 'text',
              'title' => esc_html__('End Year', 'viva'),
              'subtitle' => esc_html__('Enter year value. Eg. 2020', 'viva'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-subscribe',
              'type' => 'switch',
              'title' => esc_html__('Enable Contact Form', 'viva'),
              'subtitle' => esc_html__('Enable/Disable contact form on page.', 'viva'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'viva'),
              'required' => array('tek-maintenance-subscribe','equals',true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-maintenance-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'viva'),
              'required' => array('tek-maintenance-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'viva'),
              'required' => array('tek-maintenance-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'viva'),
              'required' => array('tek-maintenance-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'viva'),
              'required' => array('tek-maintenance-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('Form Shortcode', 'viva'),
              'subtitle' => esc_html__('Insert the shortcode for a custom contact form plugin.', 'viva'),
              'required' => array('tek-maintenance-form-select','equals','5'),
              'default' => ''
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-File-Search',
      'title' => esc_html__('Search Page', 'viva'),
      'desc' => esc_html__('Seach page general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-search-page-section-start',
              'type' => 'section',
              'title' => esc_html__('Search Page General Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Header', 'viva'),
              'subtitle' => esc_html__('Enable/Disable transparent header on search page', 'viva'),
              'default' => false
          ),
          array(
              'id' => 'tek-search-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Display Sidebar', 'viva'),
              'subtitle' => esc_html__('Enable/Disable the page sidebar.', 'viva'),
              'default' => true
          ),
          array(
              'id' => 'tek-search-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Sticky Sidebar', 'viva'),
              'subtitle' => esc_html__('Enable/Disalbe sticky sidebar functionality.', 'viva'),
              'default' => true,
              'required' => array( 'tek-search-sidebar', 'equals', true ),
          ),
          array(
              'id' => 'tek-search-title',
              'type' => 'text',
              'title' => esc_html__('Page title', 'viva'),
              'subtitle' => esc_html__('Overwrite the "Search results for" page title.', 'viva'),
              'default' => ''
          ),
          array(
              'id'=>'tek-search-page-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-search-form-section-start',
              'type' => 'section',
              'title' => esc_html__('Search Form Settings', 'viva'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-form-content',
              'type' => 'button_set',
              'title' => esc_html__('Search results content', 'viva'),
              'subtitle' => esc_html__('Select the type of content to be displayed in search results.', 'viva'),
              'description' => esc_html__('Settings used for the form displayed in Topbar or Main Menu header area.', 'viva'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'search-all' => 'All post types',
                  'post' => 'Posts',
                  'portfolio' => 'Portfolio',
                  'product' => 'Products',
              ),
              'default' => 'search-all',
          ),
          array(
              'id'=>'tek-search-form-section-end',
              'type' => 'section',
              'indent' => false,
          ),

      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Error-404Window',
      'title' => esc_html__('404 Page', 'viva'),
      'desc' => esc_html__('404 page general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-404-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'viva'),
              'subtitle' => esc_html__('Set the 404 page title.', 'viva'),
              'default' => '404 - Page Not Found'
          ),
          array(
              'id' => 'tek-404-subtitle',
              'type' => 'text',
              'title' => esc_html__('Page Subtitle', 'viva'),
              'subtitle' => esc_html__('Set the 404 page subtitle.', 'viva'),
              'default' => 'The page you are looking for does not exist.'
          ),
          array(
              'id' => 'tek-404-back',
              'type' => 'text',
              'title' => esc_html__('Back to Homepage Button Text', 'viva'),
              'subtitle' => esc_html__('Set the 404 back to homepage button text.', 'viva'),
              'default' => 'Back to homepage'
          ),
          array(
              'id' => 'tek-404-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('404 Image', 'viva'),
              'subtitle' => esc_html__('Upload custom image.', 'viva'),
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Lock-Window',
      'title' => esc_html__('Password Page', 'viva'),
      'desc' => esc_html__('Post password page general settings', 'viva'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-password-page-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'viva'),
              'subtitle' => esc_html__('Overwrite the password page title.', 'viva'),
              'default' => ''
          ),
          array(
              'id' => 'tek-password-page-subtitle',
              'type' => 'text',
              'title' => esc_html__('Page Subtitle', 'viva'),
              'subtitle' => esc_html__('Overwrite the password page subtitle.', 'viva'),
              'default' => ''
          ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Dashboard',
      'title' => esc_html__('Performance', 'viva'),
      'fields' => array(
        array(
            'id' => 'tek-template-blocks',
            'type' => 'switch',
            'title' => esc_html__('Viva Blocks', 'viva'),
            'subtitle' => esc_html__('Enable/Disable preloading of Viva Blocks.', 'viva'),
            'default' => true
        ),
      )
  ) );

  Redux::set_section( $opt_name, array(
      'icon' => 'iconsmind-Coding',
      'title' => esc_html__('Custom CSS/JS', 'viva'),
      'fields' => array(
          array(
              'id' => 'tek-css',
              'type' => 'ace_editor',
              'title' => esc_html__('CSS', 'viva'),
              'subtitle' => esc_html__('Enter the custom CSS code in the side field. Do not include any tags or HTML in the field. Custom CSS added here will overwrite the theme CSS.', 'viva'),
              'mode' => 'css',
              'theme' => 'chrome',
          ),
          array(
                  'id' => 'tek-javascript',
                  'type' => 'ace_editor',
                  'title' => esc_html__( 'Javascript', 'viva' ),
                  'subtitle' => esc_html__( 'Enter the custom JavaScript code in the side field.', 'viva' ),
                  'mode' => 'html',
                  'theme' => 'chrome',
              ),
      )
  ) );
