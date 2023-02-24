<?php
/**
 * Helper functions for Viva Theme.
 *
 * @package Viva
 * @since 1.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Fire the wp_body_open action. Backward compatibility for WordPress versions < 5.2
 */
	if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
	 }
	}

	/**
	* Before closing body tag hook
	*/
	if ( ! function_exists( 'viva_before_closing_body' ) ) {
		function viva_before_closing_body() {
			do_action( 'viva_before_closing_body' );
		}
	}

	/**
	* Before closing wrapper tag hook
	*/
	if ( ! function_exists( 'viva_before_closing_wrapper' ) ) {
		function viva_before_closing_wrapper() {
			do_action( 'viva_before_closing_wrapper' );
		}
	}

	/**
	* Check if main blog page and archives
	*/
	if ( ! function_exists( 'viva_is_blog_archive' ) ) {
		function viva_is_blog_archive() {
			return apply_filters( 'viva_is_blog_archive', ( is_home() || is_post_type_archive( 'post' ) || is_category() || is_tag() || is_date() || is_author() ) ? true : false );
		}
	}

/**
 * Return Theme options.
 */
	 if ( ! function_exists( 'viva_get_option' ) ) {
	 	function viva_get_option( $option, $default = '' ) {
	 		global $redux_ThemeTek;

	 		if ( empty( $redux_ThemeTek ) ) {
	 			if ( is_multisite() ) {
	 				$redux_ThemeTek = get_blog_option( get_current_blog_id(), 'redux_ThemeTek' );
	 			} else {
	 				$redux_ThemeTek = get_option( 'redux_ThemeTek' );
	 			}
	 		}

	 		if ( ( isset( $redux_ThemeTek[$option] ) && $redux_ThemeTek[$option] === '0') || !empty( $redux_ThemeTek[$option] ) ) {
	 			return $redux_ThemeTek[$option];
	 		} else {
	 			return $default;
	 		}
	 	}
	 }

/**
 * Compress CSS
 */
	if ( ! function_exists( 'viva_compress_css' ) ) {
		function viva_compress_css( $css = '' ) {
				if ( ! empty( $css ) ) {
					$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
					$css = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
					$css = str_replace( ', ', ',', $css );
				}
				return $css;
		}
	}

/**
 * Theme activation option
 */
	if ( ! function_exists( 'viva_activation_option' ) ) {
		function viva_activation_option() {
			add_option( 'keydesign-verify', 'no', '', false );
			add_option( 'envato_purchase_code_viva', '', '', false );
		}
	}
	add_action( 'admin_init', 'viva_activation_option' );

/**
 * Display search form
 */

	if ( ! function_exists( 'viva_get_search_form' ) ) {
		function viva_get_search_form( $echo = true ) {
			$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<label>
				<span class="screen-reader-text">' . _x( 'Search for:', 'label', 'viva' ) . '</span>
				<input type="search" class="search-field" placeholder="' . apply_filters( 'viva_search_field_placeholder', esc_attr_x( 'Search &hellip;', 'placeholder', 'viva' ) ) . '" value="' . get_search_query() . '" name="s" />';
				if ( 'search-all' != viva_get_option( 'tek-search-form-content' ) && '' != viva_get_option( 'tek-search-form-content' ) ) {
					$form .= '<input type="hidden" name="post_type" value="' . viva_get_option( 'tek-search-form-content' ) . '">';
				}
			$form .= '</label>
			<input type="submit" class="search-submit">
		</form>';

		$result_escaped = apply_filters( 'viva_get_search_form', $form );

		if ( null === $result_escaped ) {
			$result_escaped = $form;
		}

		// The $result_escaped variable has been safely escaped

		if ( $echo ) {
			echo "" . $result_escaped;
		} else {
			return $result_escaped;
		}

		}
	}

/**
 * Allowed HTML tags
 */
	if ( ! function_exists( 'viva_allowed_html_tags' ) ) {
		function viva_allowed_html_tags() {
			$allowed_tags = array(
				 'a' => array(
					 'class' => array(),
					 'href'  => array(),
					 'rel'   => array(),
					 'title' => array(),
					 'target' => array(),
				 ),
				 'b' => array(),
				 'br' => array(),
				 'div' => array(
					 'class' => array(),
					 'title' => array(),
					 'style' => array(),
				 ),
				 'em' => array(),
				 'h1' => array(),
				 'h2' => array(),
				 'h3' => array(),
				 'h4' => array(),
				 'h5' => array(),
				 'h6' => array(),
				 'i' => array(),
				 'img' => array(
					 'alt'    => array(),
					 'class'  => array(),
					 'height' => array(),
					 'src'    => array(),
					 'width'  => array(),
				 ),
				 'p' => array(
					 'class' => array(),
				 ),
				 'span' => array(
					 'class' => array(),
					 'title' => array(),
					 'style' => array(),
				 ),
				 'strong' => array(),
			 );

			 return $allowed_tags;
		 }
	 }

 /**
	* Remove parantheses with Blog Categories widget
	*/
	if ( ! function_exists( 'viva_postcount_filter' ) ) {
	 function viva_postcount_filter($variable) {
		 $variable = str_replace('(', '<span class="post_count"> ', $variable);
		 $variable = str_replace(')', ' </span>', $variable);
		 return $variable;
	 }
	}
	add_filter('wp_list_categories','viva_postcount_filter');

 /**
	* Output social icons in topbar and footer areas
	*/
	if ( ! function_exists( 'viva_social_icons' ) ) {
	 function viva_social_icons( $echo = true ) {
		 $social_items = viva_get_option( 'tek-social-profiles' );
		 $output = $output_escaped = '';
		 if ( class_exists( 'ReduxFramework' ) ) {
			 $output = '<ul class="redux-social-media-list clearfix">';
			 if ( is_array( $social_items ) ) {
				 foreach ( $social_items as $key => $social_item ) {
					 if ( $social_item[ 'enabled' ] ) {
						 $icon = $social_item[ 'icon' ];
						 $base_url = $social_item[ 'url' ];

						 $output .= '<li>';
						 $output .= '<a target="_blank" href="'. $base_url . '">';
						 $output .= '<i class="fab ' . $icon . '"></i>';
						 $output .= "</a>";
						 $output .= "</li>";
					 }
				 }
			 }
			 $output .= '</ul>';
			 $output = apply_filters( 'viva_social_icons_output', $output );
			 $output_escaped = $output;
		 }

		 // The $output_escaped variable has been safely escaped
		 if ( $echo ) {
			 echo "" . $output_escaped;
		 } else {
			 return $output_escaped;
		 }
	 }
	}

	if ( ! function_exists( 'viva_main_header_content' ) ) {
		function viva_main_header_content() {
 			get_template_part( 'core/templates/header/content', 'header' );
		}
	}
	add_action( 'viva_main_header', 'viva_main_header_content' );

	if ( ! function_exists( 'viva_body_classes' ) ) {
		function viva_body_classes( $classes ) {
			$classes[] = '';

		 	// Collapsible FAQ
		 	if ( viva_get_option( 'tek-faq-collapsible' ) ) {
			 	$classes[] = 'collapsible-faq';
		 	}

		 	// Cursor effect
		 	if ( viva_get_option( 'tek-cursor' ) ) {
				$classes[] = 'magic-mouse';
			 	$classes[] = viva_get_option( 'tek-cursor-effect' );
				$classes[] = viva_get_option( 'tek-cursor-effect-color' );

				// Grid cursor effect
				if ( viva_get_option( 'tek-cursor-grid' ) ) {
					$classes[] = 'enable-grid-cursor';
				}

				// Carousel cursor effect
				if ( viva_get_option( 'tek-cursor-carousel' ) ) {
					$classes[] = 'enable-carousel-cursor';
				}
		 	}

			// Enable transparent navigation on classic single blog posts by default
			if ( is_singular('post') && viva_get_option( 'tek-single-post-template' ) == 'single-post-layout-one' ) {
				$classes[] = 'transparent-navigation';
			}

			// Enable transparent navigation on bbPress pages
			if ( class_exists( 'bbPress' ) && is_bbpress() ) {
				$classes[] = 'transparent-navigation';
			}

			return $classes;
	 	}
	}
 	add_filter( 'body_class','viva_body_classes' );

	if ( ! function_exists( 'viva_wrapper_classes' ) ) {
	 function viva_wrapper_classes( $classes ) {
		 $classes[] = '';
		 $page_showhide_title_section = get_post_meta( get_the_ID(), 'keydesign_page_showhide_title_section', true );

	   if ( $page_showhide_title_section && ! is_search() ) {
	     $classes[] = 'hide-title-section';
	   }

		 if ( viva_get_option( 'tek-disable-animations' ) == true ) {
	     $classes[] = 'no-mobile-animation';
	   }

		 if ( '' != viva_get_option( 'tek-btn-effect' ) ) {
	     $classes[] = viva_get_option( 'tek-btn-effect' );
	   }

		 if ( viva_get_option( 'tek-single-post-template' ) && is_singular('post') ) {
			 $classes[] = apply_filters( 'viva_blog_single_template', viva_get_option( 'tek-single-post-template' ) );
		 }

		 return array_unique( $classes );
	 }
	}
	add_filter( 'viva_wrapper_class', 'viva_wrapper_classes' );

	if ( ! function_exists( 'viva_vertical_lines_class' ) ) {
	 function viva_vertical_lines_class( $classes ) {
		 $classes[] = '';
		 $page_vertical_lines = get_post_meta( get_the_ID(), 'keydesign_vertical_lines', true );

		 if ( $page_vertical_lines == 'on' ||
			 ( viva_get_option( 'tek-blog-single-vertical-lines' ) && is_singular( 'post' ) ) ||
			 ( viva_get_option( 'tek-blog-listing-vertical-lines' ) && ( is_home() || is_post_type_archive( 'post' ) || is_category() || is_tag() || is_date() || is_author() ) ) ||
			 ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_category() || is_product_tag() ) && viva_get_option( 'tek-woo-shop-vertical-lines' ) ) ||
			 ( class_exists( 'WooCommerce' ) && is_product() && viva_get_option( 'tek-woo-single-vertical-lines' ) ) ) {
			 $classes[] = 'vertical-lines';
		 }

		 return array_unique( $classes );
	 }
	}
	add_filter( 'viva_wrapper_class', 'viva_vertical_lines_class' );

	if ( ! function_exists( 'viva_navbar_classes' ) ) {
	 function viva_navbar_classes( $classes ) {

		 $transparent_secondary_logo_mb = get_post_meta( get_the_ID(), 'keydesign_transparent_secondary_logo', true );

	   $classes[] = 'navbar';
	   $classes[] = 'navbar-default';
	   $classes[] = 'navbar-fixed-top';

		 if ( '' != viva_get_option( 'tek-btn-effect' ) ) {
	     $classes[] = viva_get_option( 'tek-btn-effect' );
	   }

		 if ( viva_get_option( 'tek-menu-style' ) == '2') {
	     $classes[] = 'full-width';
	   }

		 if ( viva_get_option( 'tek-menu-behaviour' ) == '2') {
	     $classes[] = 'fixed-menu';
	   }

		 if ( '' != viva_get_option( 'tek-logo-alignment' ) ) {
			 $classes[] = viva_get_option( 'tek-logo-alignment' );
		 }

		 if ( viva_get_option( 'tek-topbar' ) == '1') {
	     $classes[] = 'with-topbar';
	   }

		 if ( viva_get_option( 'tek-topbar' ) == '1' && viva_get_option( 'tek-topbar-mobile' ) == '1') {
	     $classes[] = 'with-topbar-mobile';
	   }

		 if ( viva_get_option( 'tek-topbar-sticky' ) == '1') {
	     $classes[] = 'with-topbar-sticky';
	   }

		 if ( viva_get_option( 'tek-sticky-nav-logo' ) == 'nav-secondary-logo') {
	     $classes[] = 'nav-secondary-logo';
	   }

		 if ( viva_get_option( 'tek-transparent-nav-logo' ) == 'nav-secondary-logo' || !empty( $transparent_secondary_logo_mb ) ) {
	     $classes[] = 'nav-transparent-secondary-logo';
	   }

		 return $classes;
	 }
	}
	add_filter( 'viva_navbar_class', 'viva_navbar_classes' );

	if ( ! function_exists( 'viva_main_menu_classes' ) ) {
		function viva_main_menu_classes( $classes ) {

			$classes[] = 'collapse';
			$classes[] = 'navbar-collapse';

			if ( '' != viva_get_option( 'tek-dropdown-nav-hover' ) ) {
		    $classes[] = viva_get_option( 'tek-dropdown-nav-hover' );
		  } else {
		    $classes[] = 'default-dropdown-effect';
		  }

			return $classes;
		}
	}
	add_filter( 'viva_main_menu_class', 'viva_main_menu_classes' );

	if ( ! function_exists( 'viva_footer_wrapper_classes' ) ) {
	 function viva_footer_wrapper_classes( $classes ) {
		 $classes[] = $footer_fixed_class = '';
		 $fixed_footer_mb = get_post_meta( get_the_ID(), 'keydesign_fixed_footer', true );
		 if ( viva_get_option( 'tek-footer-width' ) == 'fullwidth') {
	     $classes[] = 'fullwidth-footer';
	   }

		 if ( viva_get_option( 'tek-footer-fixed' ) == '1') {
	     $footer_fixed_class ='fixed';
	   } else {
	     $footer_fixed_class ='classic';
	   }

		 if ( $fixed_footer_mb == 'on' ) {
	     $footer_fixed_class ='fixed';
	   } elseif ( $fixed_footer_mb == 'off' ) {
	     $footer_fixed_class ='classic';
	   }

	   if ( is_search() ) {
		   $footer_fixed_class ='classic';
	   }

		 $classes[] = $footer_fixed_class;

		 if ( '' != viva_get_option( 'tek-footer-link-hover-effect' ) ) {
	     $classes[] = viva_get_option( 'tek-footer-link-hover-effect' );
	   } else {
	     $classes[] = 'default-footer-link-effect';
	   }

		 return $classes;
	 }
	}
	add_filter( 'viva_footer_wrapper_class', 'viva_footer_wrapper_classes' );

	if ( ! function_exists( 'viva_page_header_content' ) ) {
		function viva_page_header_content() {
			get_template_part( 'core/templates/header/content', 'page-header' );
		}
	}
	add_action( 'viva_page_header', 'viva_page_header_content' );

	if ( ! function_exists( 'viva_search_header_icon' ) ) {
		function viva_search_header_icon() {
			if ( viva_get_option( 'tek-topbar-search' ) == false ) {
				return;
			}
			?>
			<div class="topbar-search">
				 <span class="toggle-search viva-search-header fa"></span>
				 <div class="topbar-search-container">
					 <?php viva_get_search_form(); ?>
				 </div>
			</div>
			<?php
		}
	}
	add_action( 'viva_header_desktop_icons', 'viva_search_header_icon', 10 );

	/**
	* Post password form
	*/
	if ( ! function_exists( 'viva_password_form' ) ) {
		function viva_password_form( $output, $post = 0 ) {
			$post   = get_post( $post );
			$label  = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
			$output = '<div class="viva-password-page">
				<img src="' . get_template_directory_uri() . '/core/assets/images/password-protected-icon.svg" alt="" class="icon-post-password" />
				<h2 class="post-password-title">' . apply_filters( 'viva_password_page_title', esc_html__("Protected page", "viva") ) . '</h2>
				<p class="post-password-message">' . apply_filters( 'viva_password_page_subtitle', __("This content is password protected.<br /> Please enter a password to view.", "viva") ) . '</p>
				<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post">
					<input class="post-password-form__input" name="post_password" placeholder="' . apply_filters( 'viva_password_placeholder', esc_attr_x( 'Enter your password', 'placeholder', 'viva' ) ) . '" id="' . esc_attr( $label ) . '" type="password" size="20" />
					<input type="submit" class="post-password-form__submit" name="' . esc_attr_x( 'Submit', 'Post password form', 'viva' ) . '" value="' . esc_attr_x( 'Enter', 'Post password form', 'viva' ) . '" />
				</form></div>';
			return $output;
		}
	}
	add_filter( 'the_password_form', 'viva_password_form', 10, 2 );

	/**
	* Post password page title
	*/
	if ( ! function_exists( 'viva_overwrite_password_page_title' ) ) {
		function viva_overwrite_password_page_title( $page_title ) {
			if ( '' != viva_get_option( 'tek-password-page-title' ) ) {
				$page_title = viva_get_option( 'tek-password-page-title' );
				return $page_title;
			}
			return $page_title;
		}
	}
	add_filter( 'viva_password_page_title', 'viva_overwrite_password_page_title' );

	/**
	* Post password page subtitle
	*/
	if ( ! function_exists( 'viva_overwrite_password_page_subtitle' ) ) {
		function viva_overwrite_password_page_subtitle( $page_subtitle ) {
			if ( '' != viva_get_option( 'tek-password-page-subtitle' ) ) {
				$page_subtitle = viva_get_option( 'tek-password-page-subtitle' );
				return $page_subtitle;
			}
			return $page_subtitle;
		}
	}
	add_filter( 'viva_password_page_subtitle', 'viva_overwrite_password_page_subtitle' );

	/**
	* Header menu
	*/
	if ( ! function_exists( 'viva_header_nav_menu' ) ) {
		function viva_header_nav_menu() {
			wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) );
		}
	}

	/**
	* Footer menu
	*/
	if ( ! function_exists( 'viva_footer_nav_menu' ) ) {
		function viva_footer_nav_menu() {
			if ( has_nav_menu( 'footer-menu' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1, 'container' => 'div', 'container_class' => 'footer-nav-menu', 'menu_class' => 'navbar-footer', 'fallback_cb' => 'false' ) );
			}
		}
	}

	/**
	* Load all functions when after_setup_theme gets loaded
	*/
	if ( ! function_exists( 'viva_load_hooks' ) ) {
		function viva_load_hooks() {
			/* Header menu */
			add_action( 'viva_header_menu', 'viva_header_nav_menu' );

			/* Footer menu */
			add_action( 'viva_footer_menu', 'viva_footer_nav_menu' );
		}
	}
	add_action( 'after_setup_theme', 'viva_load_hooks' );

	/**
	* Render footer copyright markup
	*/
	if ( ! function_exists( 'viva_footer_copyright' ) ) {
		function viva_footer_copyright() {
			$content = viva_get_option( 'tek-footer-text' );
			if ( $content ) {
				$content = str_replace( '[copyright]', '&copy;', $content );
				$content = str_replace( '[current_year]', gmdate( 'Y' ), $content );
				$content = str_replace( '[site_title]', get_bloginfo( 'name' ), $content );
				$output = wp_kses( $content, viva_allowed_html_tags() );
				echo apply_filters( 'viva_footer_copyright_output', $output );
			} else {
				if ( ! class_exists( 'ReduxFramework' ) ) {
					echo esc_html__( 'Viva by KeyDesign. All rights reserved.', 'viva' );
				}
			}
		}
	}

	/**
	* Page title meta box highlight options
	*/
	if ( ! function_exists( 'viva_page_title_highlight' ) ) {
		function viva_page_title_highlight( $title ) {
			if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {
				$post_id = wc_get_page_id( 'shop' );
			} elseif ( is_home() ) {
				$post_id = get_option( 'page_for_posts' );
			} else {
				$post_id = get_the_ID();
			}

			// Get post meta
			$page_title = get_post_meta( $post_id, 'keydesign_page_title', true );
			if ( '' == $page_title ) {
				return $title;
			}
			$highlight_style = get_post_meta( $post_id, 'keydesign_highlight_text_style', true );
			$highlight_font_family = get_post_meta( $post_id, 'keydesign_highlight_font_family', true );
			$highlight_color = get_post_meta( $post_id, 'keydesign_highlight_text_color', true );
			$highlight_underline_height = get_post_meta( $post_id, 'keydesign_highlight_underline_height', true );
			$highlight_underline_offset = get_post_meta( $post_id, 'keydesign_highlight_underline_offset', true );

			$highlight_inline = $highlight_style_html = $underline_style = '';

			// Highlight text
			if ( '' != $highlight_color ) {
				if ( $highlight_style == 'highlight-color' ) {
					$highlight_inline = 'style="color: ' .$highlight_color .';"';
				}
			}

			// Highlight brush
			if ( $highlight_style == 'highlight-brush' ) {
				if ( '' != $highlight_color ) {
					$brush_color = $highlight_color;
				}
				$highlight_style_html = '<svg '.( !empty( $brush_color ) ? 'style="fill:'.$brush_color.';"' : '' ).' width="297" height="58" viewBox="0 0 297 58" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M294.312 51.8835C293.762 52.5789 293.172 53.2357 292.111 53.2614C291.094 53.3716 290.146 53.6711 289.381 54.1242C288.251 54.6745 286.854 54.9355 285.452 54.8582C284.312 54.85 283.19 55.049 282.212 55.4331C281.235 55.8173 280.438 56.3716 279.912 57.0345C278.615 58.5026 276.827 58.0261 275.295 57.7685C271.032 57.0345 266.71 56.6096 262.447 55.9013C260.876 55.4753 259.269 55.1098 257.634 54.8067C254.883 54.5749 252.153 54.1628 249.402 53.9311C245.473 53.6091 241.387 53.3645 237.379 52.991C234.276 52.6756 231.147 52.4821 228.008 52.4115C223.961 52.4115 219.934 52.4115 215.887 52.4115C210.111 52.2699 204.355 51.832 198.579 51.6131C194.984 51.4715 191.37 51.5359 187.755 51.42C182.372 51.2526 177.009 50.995 171.626 50.8018C169.799 50.7246 167.952 50.8018 166.125 50.7246C158.055 50.2976 149.957 50.1472 141.863 50.2739C138.761 50.2506 135.664 50.4536 132.63 50.8791C132.335 50.8791 132.119 50.8791 131.864 50.7375C127.601 50.9049 123.318 50.9692 119.074 51.2783C116.276 51.3862 113.469 51.1949 110.764 50.7117C107.788 50.4456 104.775 50.411 101.786 50.6087C100.532 50.7766 99.3258 51.0721 98.2109 51.4843C96.637 51.7289 95.0326 51.8797 93.4173 51.935C89.2525 52.3471 85.0876 52.6433 80.9228 52.8622C78.9583 52.9524 77.151 53.2872 75.3632 52.1669C74.6169 51.8083 73.6861 51.6557 72.7701 51.7419C69.0375 51.8192 65.3047 51.2397 61.5917 51.5101C60.3737 51.5874 59.0182 51.4071 58.1145 52.6819C57.6823 53.3258 56.5036 53.1198 55.7178 53.1327C53.8809 53.3909 52.015 53.5502 50.1385 53.6091C46.6416 53.3129 43.3608 54.2272 40.0211 54.8969C39.8475 54.9281 39.6642 54.9281 39.4906 54.8969C38.8227 54.781 37.8993 55.2961 37.5261 54.5105C37.1528 53.725 38.0566 53.4288 38.6067 53.0296C39.5496 52.3343 38.6065 52.0123 38.1743 51.7419C37.0064 51.1776 35.786 50.6615 34.5202 50.1966C33.8523 49.9519 33.5578 49.7073 34.1668 49.1793C34.2782 49.1044 34.3633 49.0146 34.4164 48.9159C34.4696 48.8173 34.4894 48.7123 34.4744 48.6081C34.4595 48.504 34.4101 48.4033 34.3298 48.3129C34.2495 48.2225 34.1402 48.1446 34.0094 48.0847C33.4082 47.7795 32.9195 47.3896 32.5794 46.9437C32.2394 46.4979 32.0566 46.0076 32.0449 45.5092C31.9525 45.1065 31.6984 44.7273 31.3082 44.4104C30.918 44.0936 30.4059 43.8505 29.825 43.7064C29.0101 43.441 28.3195 43.0367 27.8252 42.5359C27.3308 42.0352 27.0512 41.4564 27.0158 40.8605C26.9768 40.5534 26.7832 40.2635 26.4657 40.0363C24.984 39.4373 23.7759 38.5877 22.9687 37.5767C21.2442 36.569 20.0942 35.2065 19.7077 33.7135C19.6748 33.5749 19.5838 33.445 19.4451 33.3381C19.3064 33.2313 19.1253 33.1517 18.9219 33.1082L18.3521 32.6575C17.3264 31.9624 16.5893 31.1068 16.2108 30.1722C14.9345 29.2166 14.1028 28.0413 13.8141 26.7854C13.6569 26.0256 12.321 25.5749 11.3584 25.2401C10.6862 25.0454 10.1107 24.731 9.69747 24.3326C9.28422 23.9343 9.04963 23.4679 9.02048 22.9866C8.89632 22.0714 8.33238 21.2057 7.40966 20.5141C6.69147 20.0147 6.25483 19.3696 6.17198 18.6855C6.17198 18.0674 5.56293 17.8098 4.89498 17.797C4.26633 17.3076 3.61803 16.8183 2.93044 16.3418C2.57055 15.9093 2.46562 15.4052 2.63571 14.9253C2.83445 14.4734 2.8407 13.9945 2.65369 13.5405C2.46668 13.0865 2.09347 12.6747 1.57477 12.3498C0.782684 11.8062 0.238448 11.1282 0.00328177 10.3924C-0.330691 9.25922 0.278174 8.51233 1.57477 8.56384C2.87137 8.61535 4.345 8.86002 5.72018 8.95016C7.09536 9.04031 7.68459 8.80851 8.03821 7.41774C8.39182 6.02698 9.07951 5.30584 10.5922 5.03541C11.9099 4.82635 13.1738 4.49232 14.3443 4.04386C14.6052 3.91576 14.9107 3.83219 15.2331 3.80072C15.5554 3.76925 15.8847 3.79086 16.1911 3.86358C18.0392 4.29954 20.0441 4.36234 21.9471 4.04386C27.8407 3.37423 33.6166 2.7561 39.4513 2.21525C43.734 1.82892 48.0365 1.71303 52.3388 1.45548C56.6412 1.19793 61.3952 1.03053 65.9137 0.77298C68.1925 0.631328 70.4913 0.528312 72.7701 0.515435C76.326 0.515435 79.8816 0.270762 83.4178 0.23213C91.61 0.154865 99.7825 -0.115564 107.975 -0.0125448C113.554 0.0518424 119.114 0.219256 124.693 0.296521C127.463 0.296521 130.253 0.37379 133.023 0.502565C137.993 0.734359 142.963 0.863132 147.933 1.00478C152.904 1.14644 157.54 1.35247 162.334 1.507C165.87 1.6229 169.406 1.8418 172.942 1.99633C175.987 2.13798 179.032 2.25388 182.058 2.49855C185.987 2.80761 189.916 3.05229 193.845 3.3871C196.654 3.61889 199.464 3.78631 202.273 3.97947C205.809 4.22414 209.326 4.52033 212.842 4.82939C215.435 5.07406 218.048 5.17706 220.7 5.43461C224.217 5.7823 227.753 5.97548 231.27 6.33604C233.489 6.56784 235.709 6.74811 237.949 6.9284C240.621 7.16019 243.273 7.44351 245.945 7.72681C248.086 7.94573 250.208 8.20328 252.349 8.37068C256.141 8.65399 259.932 8.95016 263.704 9.28497C265.855 9.62338 268.088 9.66723 270.266 9.41375C271.366 9.22059 272.505 9.64554 273.625 9.63267C274.038 9.63267 274.391 9.80006 274.784 9.90308C276.317 10.3023 276.749 11.281 276.238 12.6074C276.002 13.0967 276.238 13.3414 276.611 13.4444C277.476 13.6247 277.711 14.2557 278.144 14.848C279.165 16.1358 279.951 17.797 281.778 18.4924C281.899 18.5493 282.011 18.614 282.112 18.6855C282.623 19.1362 283.448 19.4195 283.114 20.3081C282.426 21.5057 281.032 21.158 279.715 21.4928C280.477 21.8962 281.428 22.1146 282.407 22.1109C284.371 22.3942 285.648 23.6176 287.004 24.6864C287.19 24.8441 287.281 25.0412 287.259 25.2401C287.172 25.8745 287.341 26.5127 287.747 27.0911C288.154 27.6695 288.785 28.1679 289.577 28.5367C290.108 28.8587 290.618 29.1935 291.169 29.4768C291.381 29.5558 291.564 29.6651 291.703 29.7966C291.843 29.9281 291.935 30.0785 291.974 30.2366C291.974 30.5781 292.181 30.9056 292.549 31.1471C292.918 31.3886 293.418 31.5243 293.939 31.5243C294.301 31.5415 294.653 31.6076 294.974 31.7184C295.296 31.8292 295.578 31.9823 295.805 32.1682C297.101 33.34 297.769 34.3445 295.805 35.5292C295.358 35.6965 294.971 35.9243 294.67 36.1974C294.368 36.4706 294.159 36.7828 294.056 37.1131C293.956 37.4175 293.731 37.6983 293.406 37.9252C293.081 38.1521 292.667 38.3165 292.21 38.4009C291.333 38.5753 290.526 38.8747 289.847 39.2777C289.167 39.6806 288.633 40.1772 288.281 40.7317C287.711 41.4399 287.652 42.0194 288.477 42.4701C288.929 42.7406 289.302 43.114 289.734 43.3973C291.935 44.7623 293.526 46.9 296.276 47.5954C297.003 47.7885 296.984 49.0376 296.276 49.63C295.395 50.286 294.726 51.0527 294.312 51.8835Z" />
				</svg>';
			}

			// Underline style
			if ( $highlight_style == 'highlight-underline' ) {
				if ( '' != $highlight_color ) {
					$underline_style = 'background: linear-gradient(90deg, '.$highlight_color.' 0%, transparent 100%);';
				}

				if ( '' != $highlight_underline_offset ) {
					$underline_style .= 'bottom: '.$highlight_underline_offset.';';
				}

				if ( '' != $highlight_underline_height ) {
					$underline_style .= 'height: '.$highlight_underline_height.';';
				}

				if ( '' != $underline_style ) {
					$underline_style = 'style="'.$underline_style.'"';
				}
				$highlight_style_html = '<span class="underline-bar" '.$underline_style.'></span>';
			}

			// Secondary font family with highlighted word
			$highlight_class = $highlight_style;
			if ( !empty( $highlight_font_family ) ) {
				$highlight_class .= ' highlight-secondary-font';
			}

			if ( preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $page_title) ) {
				$page_title = preg_replace("/\*([^*]+)\*/", "<span class=\"$highlight_class\" $highlight_inline>$1$highlight_style_html</span>", $page_title );
			}

			return $page_title;
		}
	}
	add_filter( 'viva_single_page_title', 'viva_page_title_highlight' );


	/**
	* Page title markup
	*/
	if ( ! function_exists( 'viva_set_page_title_markup' ) ) {
		function viva_set_page_title_markup( $output ) {
			if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {
				$post_id = wc_get_page_id( 'shop' );
			} elseif ( is_home() ) {
				$post_id = get_option( 'page_for_posts' );
			} else {
				$post_id = get_the_ID();
			}
			// Get post meta
			$title_width = get_post_meta( $post_id, 'keydesign_title_width', true );

			if ( '' == $title_width ) {
				return $output;
			}

			$before = '<div class="row title-wrapper"><div class="col-lg-'.$title_width.'">';
			$after = '</div></div>';

			$output = $before . $output . $after;

			return $output;
		}
	}
	add_filter( 'viva_page_title_markup', 'viva_set_page_title_markup' );

	/**
	* Template hooks
	*/

	/* Back to top template */
	if ( ! function_exists( 'viva_get_backtotop_template' ) ) {
		function viva_get_backtotop_template() {
			if ( viva_get_option( 'tek-backtotop' ) == true ) {
			  get_template_part( 'core/templates/footer/content', 'backtotop' );
			}
		}
	}
	add_action( 'viva_before_closing_body', 'viva_get_backtotop_template' );

	/* Single blog post reading bar template */
	if ( ! function_exists( 'viva_get_rebar_template' ) ) {
		function viva_get_rebar_template() {
			if ( is_single() && viva_get_option( 'tek-blog-rebar' ) ) {
			  get_template_part( 'core/templates/footer/content', 'rebar' );
			}
		}
	}
	add_action( 'viva_before_closing_body', 'viva_get_rebar_template' );

	/* Modal box template */
	if ( ! function_exists( 'viva_get_modal_box_template' ) ) {
		function viva_get_modal_box_template() {
			if ( viva_get_option( 'tek-modal-button' ) && viva_get_option( 'tek-header-button-action' ) == '1' ) {
			  get_template_part( 'core/templates/header/content', 'modal-box' );
			}
		}
	}
	add_action( 'viva_before_closing_body', 'viva_get_modal_box_template' );

	/* Panel template */
	if ( ! function_exists( 'viva_get_panel_template' ) ) {
		function viva_get_panel_template() {
			if ( viva_get_option( 'tek-panel-button' ) && viva_get_option( 'tek-panel-button-action' ) == '1' ) {
			  get_template_part( 'core/templates/header/content', 'side-panel' );
			}
		}
	}
	add_action( 'viva_before_closing_body', 'viva_get_panel_template' );

	/* Blog subscribe template */
	if ( ! function_exists( 'viva_get_blog_subscribe_template' ) ) {
		function viva_get_blog_subscribe_template() {
			if ( viva_get_option( 'tek-blog-subscribe-section-switch' ) && ( viva_is_blog_archive() || is_singular( 'post' ) ) ) {
			  get_template_part( 'core/templates/footer/content', 'blog-subscribe' );
			}
		}
	}
	add_action( 'viva_before_closing_wrapper', 'viva_get_blog_subscribe_template' );
