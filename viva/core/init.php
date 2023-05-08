<?php

// ------------------------------------------------------------------------
// Define Constants
// ------------------------------------------------------------------------

define( 'VIVA_THEME_VERSION', '1.6' );
define( 'VIVA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'VIVA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

// ------------------------------------------------------------------------
// Theme includes
// ------------------------------------------------------------------------

require_once VIVA_THEME_DIR . 'core/assets/extra/class-tgm-plugin-activation.php';
require_once VIVA_THEME_DIR . 'core/theme-activation.php';
require_once VIVA_THEME_DIR . 'core/options-init.php';
require_once VIVA_THEME_DIR . 'core/helper-functions.php';

require_once VIVA_THEME_DIR . 'core/theme-sidebars.php';
require_once VIVA_THEME_DIR . 'core/assets/extra/wp_bootstrap_navwalker.php';

require_once VIVA_THEME_DIR . 'core/theme-woocommerce.php';

// ------------------------------------------------------------------------
// Enqueue scripts and styles front and admin
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_enqueue_scripts' ) ) {
		function viva_enqueue_scripts() {
			// Bootstrap CSS
			wp_register_style( 'bootstrap', VIVA_THEME_URI . 'core/assets/css/bootstrap.min.css', '', VIVA_THEME_VERSION, 'all' );
			wp_enqueue_style( 'bootstrap' );

			// Theme main style CSS
			wp_register_style( 'keydesign-style', get_stylesheet_uri(), array('bootstrap'), VIVA_THEME_VERSION, 'all' );
			wp_enqueue_style( 'keydesign-style' );

			// Bootstrap JS
			wp_register_script( 'bootstrapjs', VIVA_THEME_URI . 'core/assets/js/bootstrap.min.js', array('jquery'), VIVA_THEME_VERSION, true );
			wp_enqueue_script( 'bootstrapjs' );

			// Smooth scroll
			if ( viva_get_option( 'tek-smooth-scroll' ) ) {
				wp_register_script( 'viva-smooth-scroll', VIVA_THEME_URI . 'core/assets/js/SmoothScroll.js', array('jquery'), VIVA_THEME_VERSION, true );
				wp_enqueue_script( 'viva-smooth-scroll' );
			}

			// Magic mouse
			if ( viva_get_option( 'tek-cursor' ) ) {
				wp_register_script( 'viva-magic-mouse', VIVA_THEME_URI . 'core/assets/js/magic_mouse.min.js', '', VIVA_THEME_VERSION, true );
				wp_enqueue_script( 'viva-magic-mouse' );
			}

			// Theme main scripts
			wp_register_script( 'viva-scripts', VIVA_THEME_URI . 'core/assets/js/scripts.js', array('jquery'), VIVA_THEME_VERSION, true );
			wp_enqueue_script( 'viva-scripts' );

			// Comment reply script
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}

			// Inline styles
			add_filter( 'viva-inline-style', 'viva_dynamic_style' );
			$theme_dynamic_css = apply_filters( 'viva-inline-style', '' );

			if ( class_exists( 'KEYDESIGN_ADDON_CLASS' ) ) {
				wp_enqueue_style( 'viva-dynamic', VIVA_THEME_URI . 'core/assets/css/dynamic-styles.css', array('kd-addon-style') );
			} else {
				wp_enqueue_style( 'viva-dynamic', VIVA_THEME_URI . 'core/assets/css/dynamic-styles.css', array('keydesign-style') );
			}
			wp_add_inline_style('viva-dynamic', $theme_dynamic_css);

			// Inline scripts
			if ( '' != viva_get_option( 'tek-javascript') ) {
				wp_add_inline_script( 'viva-scripts', viva_get_option( 'tek-javascript') );
			}

			// Load Adobe Typekit fonts
			if ( viva_get_option( 'tek-typekit-switch' ) && viva_get_option( 'tek-typekit' ) ) {
				wp_register_script( 'viva-typekit', '//use.typekit.net/'.esc_js( viva_get_option( 'tek-typekit' ) ).'.js', array(), VIVA_THEME_VERSION, true );
				wp_enqueue_script( 'viva-typekit' );
	 			wp_add_inline_script( 'viva-typekit', 'try{Typekit.load({ async: true });}catch(e){}' );
			}

			// Deque unused styles
			wp_dequeue_style( 'global-styles' );
			wp_dequeue_style( 'extendify-utilities' );

			// Disable Gutenberg assets
			if ( !is_single() ) {
				wp_dequeue_style( 'wp-block-library' );
			    wp_dequeue_style( 'wp-block-library-theme' );
			    wp_dequeue_style( 'wc-blocks-style' );
			}
		}
	}
	add_action( 'wp_enqueue_scripts', 'viva_enqueue_scripts' );

	if ( ! function_exists( 'viva_enqueue_admin' ) ) {
		function viva_enqueue_admin() {
			wp_enqueue_style( 'viva-admin-css', VIVA_THEME_URI . 'core/assets/css/admin-styles.css', '', '' );
			wp_enqueue_style( 'viva-font', VIVA_THEME_URI . 'core/assets/css/viva-font.css', '', '' );
		}
	}
	add_action( 'admin_enqueue_scripts', 'viva_enqueue_admin' );

// ------------------------------------------------------------------------
// bbPress
// ------------------------------------------------------------------------
	function viva_bbpress_css_enqueue(){
		if ( function_exists( 'is_bbpress' ) ) {
			// Deregister default bbPress CSS
			wp_deregister_style( 'bbp-default' );

			$file = 'core/assets/css/bbpress.css';

			// Check child theme
			if ( file_exists( trailingslashit( get_stylesheet_directory() ) . $file ) ) {
				$location = trailingslashit( get_stylesheet_directory_uri() );
				$handle   = 'bbp-child-bbpress';

			// Check parent theme
			} elseif ( file_exists( trailingslashit( get_template_directory() ) . $file ) ) {
				$location = trailingslashit( get_template_directory_uri() );
				$handle   = 'bbp-parent-bbpress';
			}

			// Enqueue the bbPress styling
			wp_enqueue_style( $handle, $location . $file, 'screen' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'viva_bbpress_css_enqueue' );

// ------------------------------------------------------------------------
// Events Calendar
// ------------------------------------------------------------------------
function viva_eventscal_css_enqueue(){
	if ( class_exists( 'Tribe__Events__Main' ) && ( ( tribe_is_event() || tribe_is_event_category() || tribe_is_in_main_loop() || is_post_type_archive( 'tribe_events' ) || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' ) ) ) ) {

		$file = 'core/assets/css/events-calendar.css';

		// Check child theme
		if ( file_exists( trailingslashit( get_stylesheet_directory() ) . $file ) ) {
			$location = trailingslashit( get_stylesheet_directory_uri() );
			$handle   = 'child-events-calendar';

		// Check parent theme
		} elseif ( file_exists( trailingslashit( get_template_directory() ) . $file ) ) {
			$location = trailingslashit( get_template_directory_uri() );
			$handle   = 'parent-events-calendar';
		}

		// Enqueue the bbPress styling
		wp_enqueue_style( $handle, $location . $file, 'screen' );
	}
}
add_action( 'wp_enqueue_scripts', 'viva_eventscal_css_enqueue' );

// ------------------------------------------------------------------------
// Theme Setup
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_setup' ) ) {
		function viva_setup() {
			// Add multilanguage support
			load_theme_textdomain( 'viva', VIVA_THEME_DIR . 'languages' );
			// Add theme support for feed links
			add_theme_support( 'automatic-feed-links' );
			// Manage the document title tag
			add_theme_support( 'title-tag' );

			// Set up theme navigation locations
			if ( function_exists( 'register_nav_menus' ) ) {
				register_nav_menus(
					array(
						'header-menu' => __( 'Header Menu', 'viva' ),
						'topbar-menu' => __( 'Topbar Menu', 'viva' ),
						'footer-menu' => __( 'Footer Menu', 'viva' ),
					)
				);
			}

			// Enable support for Post Thumbnails on posts and pages.
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'keydesign-grid-image', 400, 250, true );
			add_image_size( 'keydesign-left-image', 320, 320, true );

			// Selective Refresh Support for Widgets
			add_theme_support( 'customize-selective-refresh-widgets' );

			// Enable support for page excerpts
			add_post_type_support( 'page', 'excerpt' );

			// Enable support for Post Formats
			add_theme_support( 'post-formats', array(
				'gallery',
				'video',
				'audio',
				'quote',
				'link',
			) );

			// Switch default core markup for search form, comment form, and comments to output valid HTML5.
			add_theme_support( 'html5', array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'style',
					'script',
			) );

			// Enable support for WooCommerce
			add_theme_support( 'woocommerce', array(
				'thumbnail_image_width' => 1200,
				'gallery_thumbnail_image_width' => 1200,
				'single_image_width' => 1200,
			) );
			add_theme_support( 'wc-product-gallery-lightbox' );

			// Remove block-based widget support
			remove_theme_support( 'widgets-block-editor' );

			// Remove WP global styles and SVG markup
			remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
			remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

		}
	}
	add_action( 'after_setup_theme', 'viva_setup' );

// ------------------------------------------------------------------------
// Content Width
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_set_content_width' ) ) {
		function viva_set_content_width() {
			global $content_width;
			if ( ! isset( $content_width ) ) {
				$content_width = apply_filters( 'viva_content_width', 1240 );
			}
		}
	}
	add_action( 'wp', 'viva_set_content_width' );

// ------------------------------------------------------------------------
// Blog functionality
// ------------------------------------------------------------------------

	// Custom blog navigation
	if ( ! function_exists( 'viva_blog_prev_link' ) ) {
		function viva_blog_prev_link( $output ) {
				return str_replace( '<a href=', '<a class="port-prev tt_button" href=', $output );
		}
	}
	add_filter( 'previous_post_link', 'viva_blog_prev_link' );

	if ( ! function_exists( 'viva_blog_next_link' ) ) {
		function viva_blog_next_link( $output ) {
				return str_replace( '<a href=', '<a class="port-next tt_button" href=', $output );
		}
	}
	add_filter('next_post_link', 'viva_blog_next_link');

	// Excerpt length
	if ( class_exists( 'ReduxFramework' )) {
		if( ! function_exists( 'viva_excerpt_length' ) ) {
			function viva_excerpt_length( $length ) {
				return viva_get_option( 'tek-blog-excerpt' );
			}
		}
		add_filter( 'excerpt_length', 'viva_excerpt_length', 999 );

		// Post author box
		if ( ! function_exists( 'viva_output_post_author_box' ) ) {
			function viva_output_post_author_box() {
				if ( viva_get_option( 'tek-author-box' ) ) {
					get_template_part( 'core/templates/post/partials/content', 'author' );
				}
			}
		}
		add_action( 'viva_post_after_main_content', 'viva_output_post_author_box', 30, 0 );

		// Post navigation
		if ( ! function_exists( 'viva_output_post_nav' ) ) {
			function viva_output_post_nav() {
				if ( viva_get_option( 'tek-blog-single-nav' ) ) {
					get_template_part( 'core/templates/post/partials/content', 'navigation' );
				}
			}
		}
		add_action( 'viva_post_after_main_content', 'viva_output_post_nav', 40, 0 );
	}

	// Post tags
	if ( ! function_exists( 'viva_output_post_tags' ) ) {
		function viva_output_post_tags() {
			get_template_part( 'core/templates/post/partials/content', 'tags' );
		}
	}
	add_action( 'viva_post_after_main_content', 'viva_output_post_tags', 10, 0 );

	// Post Read More text
	if ( ! function_exists( 'viva_overwrite_read_more_text' ) ) {
		function viva_overwrite_read_more_text( $read_more ) {
			if ( '' != viva_get_option( 'tek-blog-read-more-text' ) ) {
				$read_more = viva_get_option( 'tek-blog-read-more-text' );
				return $read_more;
			}
			return $read_more;
	 	}
	}
	add_filter( 'blog-readmore-text', 'viva_overwrite_read_more_text' );

	// Navigation next button text
	if ( ! function_exists( 'viva_overwrite_blog_next_btn' ) ) {
		function viva_overwrite_blog_next_btn( $button_text ) {
			if ( '' != viva_get_option( 'tek-blog-single-nav-next-text' ) ) {
				$button_text = viva_get_option( 'tek-blog-single-nav-next-text' );
				return $button_text;
			}
			return $button_text;
		}
	}
	add_filter( 'viva_blog_single_next_btn', 'viva_overwrite_blog_next_btn' );

	// Navigation previous button text
	if ( ! function_exists( 'viva_overwrite_blog_prev_btn' ) ) {
		function viva_overwrite_blog_prev_btn( $button_text ) {
			if ( '' != viva_get_option( 'tek-blog-single-nav-prev-text' ) ) {
				$button_text = viva_get_option( 'tek-blog-single-nav-prev-text' );
				return $button_text;
			}
			return $button_text;
		}
	}
	add_filter( 'viva_blog_single_prev_btn', 'viva_overwrite_blog_prev_btn' );

	// Search page title
	if ( ! function_exists( 'viva_overwrite_search_page_title' ) ) {
		function viva_overwrite_search_page_title( $page_title ) {
			if ( '' != viva_get_option( 'tek-search-title' ) ) {
				$page_title = viva_get_option( 'tek-search-title' );
			}
			return $page_title;
	 	}
	}
	add_filter( 'kd_search_query_title', 'viva_overwrite_search_page_title' );

// ------------------------------------------------------------------------
// Portfolio functionality
// ------------------------------------------------------------------------

// Portfolio slug
if ( ! function_exists( 'viva_overwrite_portfolio_slug' ) ) {
	function viva_overwrite_portfolio_slug( $args ) {
		if ( '' != viva_get_option( 'tek-portfolio-slug' ) ) {
	    $args['rewrite']['slug'] = viva_get_option( 'tek-portfolio-slug' );
	    return $args;
		}
		return $args;
	}
}
add_filter( 'keydesign_portfolio_item_args', 'viva_overwrite_portfolio_slug' );

// Related projects button text
if ( ! function_exists( 'viva_overwrite_related_projects_text' ) ) {
	function viva_overwrite_related_projects_text( $button_text ) {
		if ( '' != viva_get_option( 'tek-portfolio-related-posts-button-text' ) ) {
			$button_text = viva_get_option( 'tek-portfolio-related-posts-button-text' );
			return $button_text;
		}
		return $button_text;
	}
}
add_filter( 'portfolio_related_grid_text', 'viva_overwrite_related_projects_text' );

// Navigation next button text
if ( ! function_exists( 'viva_overwrite_portfolio_next_btn' ) ) {
	function viva_overwrite_portfolio_next_btn( $button_text ) {
		if ( '' != viva_get_option( 'tek-portfolio-nav-next-text' ) ) {
			$button_text = viva_get_option( 'tek-portfolio-nav-next-text' );
			return $button_text;
		}
		return $button_text;
	}
}
add_filter( 'viva_portfolio_next_btn', 'viva_overwrite_portfolio_next_btn' );

// Navigation previous button text
if ( ! function_exists( 'viva_overwrite_portfolio_prev_btn' ) ) {
	function viva_overwrite_portfolio_prev_btn( $button_text ) {
		if ( '' != viva_get_option( 'tek-portfolio-nav-prev-text' ) ) {
			$button_text = viva_get_option( 'tek-portfolio-nav-prev-text' );
			return $button_text;
		}
		return $button_text;
	}
}
add_filter( 'viva_portfolio_prev_btn', 'viva_overwrite_portfolio_prev_btn' );

// ------------------------------------------------------------------------
// Output Theme Options custom code
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_dynamic_style' ) ) {
		function viva_dynamic_style() {
			ob_start();
			include_once( VIVA_THEME_DIR . 'core/dynamic-styles.php' );
			$dynamic_css = ob_get_clean();

			// Get theme custom CSS
			$custom_css = viva_get_option( 'tek-css' );
			if ( '' != $custom_css ) {
				$dynamic_css .= $custom_css;
			}

			$dynamic_css = viva_compress_css( $dynamic_css );
			return $dynamic_css;
		}
	}

// ------------------------------------------------------------------------
// Load maintenance page template
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_maintenance_mode' ) ) {
		function viva_maintenance_mode( $template ) {
			if ( ! class_exists( 'ReduxFramework' ) ) {
				return $template;
			}

			$new_template = locate_template( array( '/core/templates/maintenance-page-template.php' ) );

			if ( viva_get_option( 'tek-maintenance-mode' ) && !is_user_logged_in() ) {
				if ( function_exists( 'status_header' ) ) {
					status_header( 503 );
				}

				return $new_template;
			}

			return $template;
		}
	}
	add_action( 'template_include', 'viva_maintenance_mode', 1 );

	// Show maintenance mode notice on WP login form
	if ( ! function_exists( 'viva_maintenance_login_message' ) ) {
    function viva_maintenance_login_message( $message ) {
        if ( viva_get_option( 'tek-maintenance-mode' ) ) {
            $message .= '<div class="message">' . __('Maintenance Mode is <strong>enabled</strong>.', 'viva') . '</div>';
        }

        return $message;
    }
	}
	add_filter( 'login_message', 'viva_maintenance_login_message' );

	// Show maintenance mode notice in dashboard area
	if ( ! function_exists( 'viva_maintenance_admin_notice' ) ) {
	  	function viva_maintenance_admin_notice() {
	    	if ( viva_get_option( 'tek-maintenance-mode' ) ) {
				echo '<div class="error">
					<p>'.__( 'The Maintenance Mode is <strong>enabled</strong>. Don\'t forget to deactivate as soon as you are done.', 'viva' ).'</p>
				</div>';
	    	}
	  	}
	}
	add_action( 'admin_notices', 'viva_maintenance_admin_notice' );

// ------------------------------------------------------------------------
// Add boxed body class
// ------------------------------------------------------------------------

	if ( viva_get_option( 'tek-layout-style' ) == 'boxed') {
		function viva_body_class( $classes ) {
		   $classes[] = 'boxed';
		   return $classes;
		}
		add_filter( 'body_class','viva_body_class' );
	}

// ------------------------------------------------------------------------
// Preloader effect
// ------------------------------------------------------------------------

	if ( viva_get_option( 'tek-preloader' ) == true) {
		function viva_preloader( $classes ) {
		   $classes[] = 'loading-effect';
		   $classes[] = 'fade-in';
		   return $classes;
		}
		add_filter( 'body_class','viva_preloader' );
	}

// ------------------------------------------------------------------------
// Page transparent navigation
// ------------------------------------------------------------------------
	if ( ! function_exists( 'viva_transparent_nav' ) ) {
		function viva_transparent_nav( $classes ) {

			$shop_page = $product_page = false;
			if ( class_exists( 'WooCommerce' ) ) {
				if ( is_shop() || is_product_category() || is_product_tag() ) {
					$shop_page = true;
				}

				if ( is_product() ) {
					$product_page = true;
				}
			}

			if ( class_exists( 'WooCommerce' ) && $shop_page ) {
			  $post_id = wc_get_page_id( 'shop' );
			} else {
			  $post_id = get_the_ID();
			}

	    $page_transparent_navigation = get_post_meta( $post_id, 'keydesign_page_transparent_navbar', true );
	    if ( ! empty( $page_transparent_navigation ) && !is_search() ) {
		    $classes[] = 'transparent-navigation';
	    }

			if ( viva_get_option( 'tek-search-transparent-nav' ) && is_search() && $shop_page == false ) {
				$classes[] = 'transparent-navigation';
			}

			$product_page_transparent_navigation = viva_get_option( 'tek-woo-single-transparent-nav' );
			if ( class_exists( 'WooCommerce' ) ) {
				if ( $product_page_transparent_navigation && $product_page ) {
					$classes[] = 'transparent-navigation';
				}
			}

	    return $classes;
		}
	}
	add_filter('body_class', 'viva_transparent_nav');

	if ( viva_get_option( 'tek-blog-transparent-nav' ) == true) {
		function viva_blog_transparent_nav( $classes ) {
			$classes[] = '';
			if ( is_home() || is_category() || is_tag() || is_author() ) {
		  	$classes[] = 'transparent-navigation';
			}
	   	return $classes;
		}
		add_filter( 'body_class','viva_blog_transparent_nav' );
	}

// ------------------------------------------------------------------------
// Add numeric pagination to blog listing pages
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_numeric_posts_nav' ) ) {
		function viva_numeric_posts_nav() {

		    if ( is_singular() )
		        return;

		    global $wp_query;

		    /** Stop execution if there's only 1 page */
		    if ( $wp_query->max_num_pages <= 1 )
		        return;

		    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		    $max   = intval( $wp_query->max_num_pages );

		    /** Add current page to the array */
		    if ( $paged >= 1 )
		        $links[] = $paged;

		    /** Add the pages around the current page to the array */
		    if ( $paged >= 3 ) {
		        $links[] = $paged - 1;
		        $links[] = $paged - 2;
		    }

		    if ( ( $paged + 2 ) <= $max ) {
		        $links[] = $paged + 2;
		        $links[] = $paged + 1;
		    }

		    echo '<nav class="blog-pagination"><ul class="blog-page-numbers">' . "\n";

		    /** Previous Post Link */
		    if ( get_previous_posts_link() )
		        printf( '<li class="prev-post-link">%s</li>' . "\n", get_previous_posts_link() );

		    /** Link to first page, plus ellipses if necessary */
		    if ( ! in_array( 1, $links ) ) {
		        $class = 1 == $paged ? ' class="active"' : '';

		        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		        if ( ! in_array( 2, $links ) )
		            echo '<li>...</li>';
		    }

		    /** Link to current page, plus 2 pages in either direction if necessary */
		    sort( $links );
		    foreach ( (array) $links as $link ) {
		        $class = $paged == $link ? ' class="active"' : '';
		        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		    }

		    /** Link to last page, plus ellipses if necessary */
		    if ( ! in_array( $max, $links ) ) {
		        if ( ! in_array( $max - 1, $links ) )
		            echo '<li>...</li>' . "\n";

		        $class = $paged == $max ? ' class="active"' : '';
		        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		    }

		    /** Next Post Link */
		    if ( get_next_posts_link() )
		        printf( '<li class="next-post-link">%s</li>' . "\n", get_next_posts_link() );

		    echo '</ul></nav>' . "\n";
		}
	}

// ------------------------------------------------------------------------
// Deactivate OCDI on theme activation
// ------------------------------------------------------------------------

	if ( ! function_exists( 'viva_deactivate_ocdi' ) ) {
		function viva_deactivate_ocdi() {
			if ( class_exists( 'OCDI_Plugin' ) ) {
				deactivate_plugins( 'one-click-demo-import/one-click-demo-import.php' );
			}
		}
	}
	add_action( 'admin_init', 'viva_deactivate_ocdi' );
