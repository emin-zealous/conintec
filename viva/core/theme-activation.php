<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'VIVA_PLUGINS_URI', 'http://vivatheme.com/external/' );
define( 'VIVA_ADDON_VERSION', '1.5' );
define( 'VIVA_PLUGINS_CURRENT_VERSION_URI', VIVA_PLUGINS_URI . VIVA_ADDON_VERSION );

if ( ! function_exists( 'viva_register_plugins' ) ) {
	function viva_register_plugins() {
		$plugins = array(
			array(
				'name' => esc_html__('Redux Framework', 'viva'),
				'slug' => 'redux-framework',
				'required' => true,
				'external_url' => 'https://wordpress.org/plugins/redux-framework/',
			),
			array(
				'name' => esc_html__('WPBakery Page Builder', 'viva'),
				'slug' => 'js_composer',
				'source' => VIVA_THEME_DIR . 'core/plugins/js_composer.zip',
				'required' => true,
				'version' => '6.11',
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => 'https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431',
			),
			array(
				'name' => esc_html__('Viva Addon', 'viva'),
				'slug' => 'viva-addon',
				'source' => VIVA_PLUGINS_CURRENT_VERSION_URI . '/viva-addon.zip',
				'required' => true,
				'version' => VIVA_ADDON_VERSION,
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => '',
			),
			array(
				'name' => esc_html__('Slider Revolution', 'viva'),
				'slug' => 'revslider',
				'source' => VIVA_THEME_DIR . 'core/plugins/revslider.zip',
				'required' => false,
				'version' => '6.6.12',
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => 'https://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380',
			),
			array(
			    'name' => esc_html__('Envato Market', 'viva'),
			    'slug' => 'envato-market',
			    'source' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			    'required' => false,
			    'force_activation' => false,
			    'force_deactivation' => false,
			    'external_url' => 'https://envato.com/market-plugin/',
		    ),
			array(
				'name' => esc_html__('WooCommerce', 'viva'),
				'slug' => 'woocommerce',
				'required' => false,
			),
			array(
				'name' => esc_html__('Contact Form 7', 'viva'),
				'slug' => 'contact-form-7',
				'required' => true,
			),
			array(
				'name' => esc_html__('Breadcrumb NavXT', 'viva'),
				'slug' => 'breadcrumb-navxt',
				'required' => false,
			),
		);

		$config = array(
			'id' => 'viva',
			'default_path' => '',
			'menu' => 'install-required-plugins',
			'has_notices' => true,
			'dismissable' => true,
			'is_automatic' => false,
			'message' => '',
			'strings' => array(
				'page_title' => esc_html__('Install Required Plugins', 'viva'),
				'menu_title' => esc_html__('Plugins', 'viva'),
				'installing' => esc_html__('Installing Plugin: %s', 'viva'),
				'oops' => esc_html__('Something went wrong with the plugin API.', 'viva') ,
				'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'viva'),
				'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'viva'),
				'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'viva'),
				'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'viva'),
				'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'viva'),
				'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'viva'),
				'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'viva'),
				'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'viva'),
				'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'viva'),
				'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins', 'viva'),
				'return' => esc_html__('Return to Required Plugins Installer', 'viva') ,
				'plugin_activated' => esc_html__('Plugin activated successfully.', 'viva') ,
				'complete' => esc_html__('All plugins installed and activated successfully. %s', 'viva'),
				'nag_type' => 'updated'
			)
		);
		tgmpa($plugins, $config);
		}
	}
	add_action('tgmpa_register', 'viva_register_plugins');
