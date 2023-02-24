<?php
$logo_spacing =  viva_get_option( 'tek-logo-spacing' );
$default_typo =  viva_get_option( 'tek-default-typo' );
$h1_heading =  viva_get_option( 'tek-h1-heading' );
$h2_heading =  viva_get_option( 'tek-h2-heading' );
$h3_heading =  viva_get_option( 'tek-h3-heading' );
$h4_heading =  viva_get_option( 'tek-h4-heading' );
$h5_heading =  viva_get_option( 'tek-h5-heading' );
$h6_heading =  viva_get_option( 'tek-h6-heading' );
$default_typo_mobile =  viva_get_option( 'tek-default-typo-mobile' );
$h1_heading_mobile =  viva_get_option( 'tek-h1-heading-mobile' );
$h2_heading_mobile =  viva_get_option( 'tek-h2-heading-mobile' );
$h3_heading_mobile =  viva_get_option( 'tek-h3-heading-mobile' );
$h4_heading_mobile =  viva_get_option( 'tek-h4-heading-mobile' );
$h5_heading_mobile =  viva_get_option( 'tek-h5-heading-mobile' );
$h6_heading_mobile =  viva_get_option( 'tek-h6-heading-mobile' );
$topbar_typo =  viva_get_option( 'tek-topbar-typo' );
$text_logo_typo =  viva_get_option( 'tek-text-logo-typo' );
$menu_typo =  viva_get_option( 'tek-menu-typo' );
$topbar_border = viva_get_option( 'tek-topbar-border-color' );
$layout_boxed_body_bg =  viva_get_option( 'tek-layout-boxed-body-bg' );
$preloader_bg =  viva_get_option( 'tek-preloader-image' );
$footer_bg = viva_get_option( 'tek-footer-background-image' );
$contact_form_typo =  viva_get_option( 'tek-contact-form-typo' );
$button_typo =  viva_get_option( 'tek-button-typo' );
$btn_padding =  viva_get_option( 'tek-btn-padding' );
$footer_link_color =  viva_get_option( 'tek-footer-link-color' );
$link_color =  viva_get_option( 'tek-link-color' );
$footer_typo =  viva_get_option( 'tek-footer-typo' );
$secondary_title_typo =  viva_get_option( 'tek-section-title-secondary-typography' );
$primary_ttf_font = viva_get_option( 'tek-primary-ttf-font' );
$primary_woff_font = viva_get_option( 'tek-primary-woff-font' );
$secondary_ttf_font = viva_get_option( 'tek-secondary-ttf-font' );
$secondary_woff_font = viva_get_option( 'tek-secondary-woff-font' );
$transparent_navigation = get_post_meta( get_the_ID(), 'keydesign_page_transparent_navbar', true );
$transparent_navigation_color = get_post_meta( get_the_ID(), 'keydesign_transparent_menu_color', true );
$single_page_primary_color = get_post_meta( get_the_ID(), 'keydesign_primary_accent_color', true );
$single_page_gradient_start_color = get_post_meta( get_the_ID(), 'keydesign_gradient_start_color', true );
$single_page_gradient_end_color = get_post_meta( get_the_ID(), 'keydesign_gradient_end_color', true );
$single_page_secondary_color = get_post_meta( get_the_ID(), 'keydesign_secondary_accent_color', true );
$page_bgcolor_metabox = get_post_meta( get_the_ID(), 'keydesign_page_bgcolor', true );
?>

:root{
	--main-color: <?php if ($single_page_primary_color) { echo esc_attr($single_page_primary_color); } else echo ((viva_get_option( 'tek-main-color' )) ? esc_attr( viva_get_option( 'tek-main-color' ) ) : '#0066FF'); ?>;
	--secondary-color: <?php if ($single_page_secondary_color) { echo esc_attr($single_page_secondary_color); } else echo ((viva_get_option( 'tek-secondary-color' )) ? esc_attr( viva_get_option( 'tek-secondary-color' ) ) : '#F43FE2'); ?>;
	--main-color-transparent: <?php echo (viva_get_option( 'tek-main-color' )) ? esc_attr( viva_get_option( 'tek-main-color' ).'14' ) : '#0066FF14'; ?>;
	--main-color-semi-transparent: <?php echo (viva_get_option( 'tek-main-color' )) ? esc_attr( viva_get_option( 'tek-main-color' ).'1f' ) : '#0066FF1f'; ?>;
	--main-color-semi-opaque: <?php echo (viva_get_option( 'tek-main-color' )) ? esc_attr( viva_get_option( 'tek-main-color' ).'a8' ) : '#0066FFa8'; ?>;
	--main-color-shadow: <?php echo (viva_get_option( 'tek-main-color' )) ? esc_attr( viva_get_option( 'tek-main-color' ).'26' ) : '#0066FF26'; ?>;
	--gradient-start-color: <?php if ($single_page_gradient_start_color) { echo esc_attr($single_page_gradient_start_color); } else echo ((viva_get_option( 'tek-gradient-start-color' )) ? esc_attr( viva_get_option( 'tek-gradient-start-color' ) ) : esc_attr( viva_get_option( 'tek-main-color' ) )); ?>;
	--gradient-end-color: <?php if ($single_page_gradient_end_color) { echo esc_attr($single_page_gradient_end_color); } else echo ((viva_get_option( 'tek-gradient-end-color' )) ? esc_attr( viva_get_option( 'tek-gradient-end-color' ) ) : esc_attr( viva_get_option( 'tek-main-color' ) )); ?>;
	--heading-color: <?php echo ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) ? esc_attr( $h1_heading['color'] ) : '#00234B'; ?>;
	--drag-cursor-color: <?php echo ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) ? esc_attr( $h1_heading['color'] .'80' ) : '#00234B80'; ?>;
	--subtitle-color: <?php echo ( isset( $h6_heading['color'] ) && '' != $h6_heading['color'] ) ? esc_attr( $h6_heading['color'] ) : '#617798'; ?>;
	--text-color: <?php echo ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ) ? esc_attr( $default_typo['color'] ) : '#617798'; ?>;
	--global-border-radius: <?php echo ( viva_get_option( 'tek-global-radius' ) != '' ) ? esc_attr( viva_get_option( 'tek-global-radius' ) ).'px' : '0px'; ?>;
	--button-border-radius: <?php echo ( viva_get_option( 'tek-btn-radius' ) != '' ) ? esc_attr( viva_get_option( 'tek-btn-radius' ) ).'px' : '0px'; ?>;
	--cards-border-radius: <?php echo ( viva_get_option( 'tek-cards-border-radius' ) != '' ) ? esc_attr( viva_get_option( 'tek-cards-border-radius' ) ).'px' : '0px'; ?>;
	--button-border-width: <?php echo ( viva_get_option( 'tek-btn-border' ) != '' ) ? esc_attr( viva_get_option( 'tek-btn-border' ) ).'px' : '1px'; ?>;
	--gray-color-overlay: #f8f8f8;
	--gray-transparent-overlay: rgb(0 0 0 / 3%);
	--border-color: #e7e7e7;
	--placeholder-color: #8C97AC;
	--fast-animation: 0.2s cubic-bezier(0.5,0.58,0.55,1);
	--image-animation: 1s cubic-bezier(.19,1,.22,1);
	--medium-body-text-size: 1.125em;
	--large-body-text-size: 1.25em;
}

<?php if ( viva_get_option( 'tek-preloader' ) ) : ?>
	<?php if ( viva_get_option( 'tek-preloader-bg-color' ) ) : ?>s
		html {
			background-color: <?php echo esc_attr( viva_get_option( 'tek-preloader-bg-color' ) ); ?>;
		}
	<?php endif; ?>
	<?php if ( isset( $preloader_bg['url'] ) && '' != $preloader_bg['url'] ): ?>
		html:before {
	    width: 100%;height: 100%;content:'';position:fixed;top: 0;left: 0;background-repeat: no-repeat;background-position: center;
		background-image: url("<?php echo esc_attr( $preloader_bg['url'] ) ?>");
		}
	<?php endif; ?>
	<?php if ( viva_get_option( 'tek-preloader-image-size-desktop' ) ) : ?>
		html:before {
			background-size: <?php echo esc_attr( viva_get_option( 'tek-preloader-image-size-desktop' ) ) ?>px;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if ( isset( $footer_bg['url'] ) && '' != $footer_bg['url'] ): ?>
	#footer {
		background-image: url("<?php echo esc_attr( $footer_bg['url'] ) ?>");
		<?php if ( in_array( viva_get_option( 'tek-footer-background-style' ), array('repeat', 'no-repeat') ) ) : ?>
			background-repeat: <?php echo esc_attr( viva_get_option( 'tek-footer-background-style' ) ) ?>;
		<?php endif; ?>
		<?php if ( in_array( viva_get_option( 'tek-footer-background-style' ), array('cover', 'contain') ) ) : ?>
			background-size: <?php echo esc_attr( viva_get_option( 'tek-footer-background-style' ) ) ?>;
		<?php endif; ?>
		<?php if ( viva_get_option( 'tek-footer-background-style' ) == 'no-repeat' ) : ?>
			background-position: <?php echo esc_attr( viva_get_option( 'tek-footer-background-image-position' ) ) ?>;
		<?php endif; ?>
	}
	#footer .upper-footer, #footer .lower-footer { background-color: transparent; }
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-color' ) ) : ?>
	.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown > a {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color' ) ); ?> !important;
	}
<?php endif; ?>


<?php if ( viva_get_option( 'tek-header-menu-color' ) ) : ?>
.navbar-default .navbar-toggle .icon-bar,
.navbar-toggle .icon-bar:before,
.navbar-toggle .icon-bar:after {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color' ) ); ?>;
}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-color-sticky' ) ) : ?>
.navbar.navbar-default.navbar-shrink .navbar-toggle .icon-bar,
.navbar.navbar-default.navbar-shrink .navbar-toggle .icon-bar:before,
.navbar.navbar-default.navbar-shrink .navbar-toggle .icon-bar:after {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-sticky' ) ); ?>;
}
<?php endif; ?>

<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ) : ?>
	.kd_counter_number:after {
		background-color: <?php echo esc_attr( $default_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ) : ?>
	.cb-container.cb_transparent_color:hover .cb-text-area p {
		color: <?php echo esc_attr( $default_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $page_bgcolor_metabox ) && '' != $page_bgcolor_metabox ) : ?>
	#wrapper {
		background-color: <?php echo esc_attr( $page_bgcolor_metabox ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-upper-footer-color' ) ) : ?>
	.footer-newsletter-form .wpcf7-form .wpcf7-email,
	.footer-business-info.footer-socials a,
	.upper-footer {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-upper-footer-color' ) ); ?>;
	}
	.upper-footer {
		border-color: <?php echo esc_attr( viva_get_option( 'tek-upper-footer-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-lower-footer-color' ) ) : ?>
	.footer-business-info,
	.lower-footer {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-lower-footer-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-footer-border-color' ) ) : ?>
	.lower-footer .container,
	.footer-bar {
		border-color: <?php echo esc_attr( viva_get_option( 'tek-footer-border-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-footer-text-color' ) ) : ?>
	.lower-footer, 	.upper-footer .textwidget p, .upper-footer .textwidget, .upper-footer, .upper-footer .socials-widget .fa, .footer_widget p {
		color: <?php echo esc_attr( viva_get_option( 'tek-footer-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $footer_link_color['regular'] ) && '' != $footer_link_color['regular'] ) : ?>
	.lower-footer a, .upper-footer a {
		color: <?php echo esc_attr( $footer_link_color['regular'] ); ?> !important;
	}
<?php endif; ?>

<?php if ( isset( $footer_link_color['hover'] ) && '' != $footer_link_color['hover'] ) : ?>
	.lower-footer a:hover, .upper-footer a:hover {
		color: <?php echo esc_attr( $footer_link_color['hover'] ); ?> !important;
	}
	footer.underline-effect .textwidget a:after,
	footer.underline-effect .navbar-footer li a:after,
	footer.underline-effect .footer_widget .menu li a:after,
	footer.underline-effect .footer_widget ul li.cat-item a:after {
		background-color: <?php echo esc_attr( $footer_link_color['hover'] ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-footer-heading-color' ) ) : ?>
	.upper-footer i,
	.lower-footer a,
	#footer .upper-footer .widget-title, #footer .upper-footer .modal-menu-item {
		color: <?php echo esc_attr( viva_get_option( 'tek-footer-heading-color' ) ); ?>;
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-footer-typo' )) && count(array_filter(viva_get_option( 'tek-footer-typo' ))) != '1'): ?>
.upper-footer .widget-title,
.upper-footer #wp-calendar caption,
.footer_widget .menu li a,
.lower-footer ul li.cat-item a,
.footer-bar .footer-nav-menu ul li a,
.footer-nav-menu .navbar-footer li a,
.lower-footer span,
.lower-footer a {
	<?php if ( isset( $footer_typo['font-weight'] ) && '' != $footer_typo['font-weight'] ): ?>
		font-weight: <?php echo esc_attr( $footer_typo['font-weight'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['font-family'] ) && '' != $footer_typo['font-family'] ): ?>
		font-family: <?php echo stripslashes( htmlspecialchars( $footer_typo['font-family'] ) ); ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['font-size'] ) && '' != $footer_typo['font-size'] ): ?>
		font-size: <?php echo esc_attr( $footer_typo['font-size'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['text-transform'] ) && '' != $footer_typo['text-transform'] ): ?>
		text-transform: <?php echo esc_attr( $footer_typo['text-transform'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['letter-spacing'] ) && '' != $footer_typo['letter-spacing'] ): ?>
		letter-spacing: <?php echo esc_attr( $footer_typo['letter-spacing'] ) ?>;
	<?php endif; ?>
}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-maintenance-mode' ) ) : ?>
	<?php if ( viva_get_option( 'tek-maintenance-text-color' ) ) : ?>
		body.maintenance-mode form.sent .wpcf7-response-output,
		body.maintenance-mode .wpcf7-form label,
		body.maintenance-mode .container h2.maintenance-title,
		.container h6.maintenance-content,
		body.maintenance-mode .countdown {
			color: <?php echo esc_attr( viva_get_option( 'tek-maintenance-text-color' ) ); ?>;
		}
	<?php endif; ?>
	<?php if ( viva_get_option( 'tek-maintenance-bg-color' ) ) : ?>
		body.maintenance-mode {
			background-color: <?php echo esc_attr( viva_get_option( 'tek-maintenance-bg-color' ) ); ?>;
		}
	<?php endif; ?>

<?php endif; ?>

<?php if ( viva_get_option( 'tek-topbar' ) == '1' && viva_get_option( 'tek-topbar-text-color' ) ) : ?>
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-lang-switcher ul:not(:hover) li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink #menu-topbar-menu li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .navbar-topbar li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-phone .iconsmind-Telephone,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-email .iconsmind-Mail,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-phone a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-email a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-contact .fa,
.topbar-lang-switcher ul li a,
.topbar-lang-switcher,
.topbar-menu,
.topbar-search,
.topbar-phone .iconsmind-Telephone, .topbar-email .iconsmind-Mail,
.topbar .redux-social-media-list a .fab,
.topbar #menu-topbar-menu li a,
.navbar.navbar-default .topbar-contact i,
.navbar.navbar-default .topbar-phone a, .navbar.navbar-default .topbar-email a,
.navbar.navbar-default .topbar-opening-hours, .transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-opening-hours {
	color: <?php echo esc_attr( viva_get_option( 'tek-topbar-text-color' ) ); ?> !important;
}
.keydesign-cart svg {
	fill: <?php echo esc_attr( viva_get_option( 'tek-topbar-text-color' ) ); ?> !important;
}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-topbar-border-color' ) ) : ?>
	.tb-border-design .topbar-right-content,
	.tb-border-design .topbar-socials a,
	.tb-border-design .topbar-phone, .tb-border-design .topbar-email, .tb-border-design .topbar-opening-hours,
	.tb-border-design .topbar-left-content,
	.navbar .topbar.visible-on-mobile,
	.transparent-navigation .nav-transparent-secondary-logo .topbar,
	.topbar {
		border-color: <?php echo esc_attr( $topbar_border['rgba'] ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-topbar-hover-text-color' ) ) : ?>
.transparent-navigation .navbar:not(.navbar-shrink) #menu-topbar-menu li a:hover,
.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact a:hover span,
.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact a:hover i,
.topbar-lang-switcher ul li a:hover span,
#menu-topbar-menu a:hover,
.topbar #menu-topbar-menu li a:hover,
.transparent-navigation .navbar:not(.navbar-shrink) .topbar-socials a:hover .fab,
.topbar .redux-social-media-list a:hover .fab,
.navbar-topbar a:hover,
.navbar.navbar-default .topbar-phone a:hover, .navbar.navbar-default .topbar-email a:hover {
		color: <?php echo esc_attr( viva_get_option( 'tek-topbar-hover-text-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-topbar-bg-color' ) ) : ?>
	.transparent-navigation .navbar .topbar,
	.transparent-navigation .navbar.navbar-shrink .topbar,
	.navbar.navbar-default.contained .topbar .container,
	.navbar.navbar-default.navbar-shrink.with-topbar-sticky .topbar,
	.navbar .topbar {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-topbar-bg-color' ) ); ?> !important;
	}
	.topbar-search .search-form .search-field,
	.topbar .fa.toggle-search.fa-times {
		color: <?php echo esc_attr( viva_get_option( 'tek-topbar-bg-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-bg' ) ) : ?>
	.navbar.navbar-default.contained .container,
	.navbar.navbar-default .menubar,
	.navbar.navbar-default.navbar-shrink.fixed-menu,
	.keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default .dropdown-menu,
	#main-menu .navbar-nav .mega-menu > .dropdown-menu:before {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-bg' ) ); ?> !important;
	}
	.navbar.navbar-default, #main-menu .navbar-nav .mega-menu > .dropdown-menu:before {
		border-color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-bg' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-bg-sticky' ) && viva_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.navbar-shrink #main-menu .navbar-nav .mega-menu > .dropdown-menu:before,
	.keydesign-cart .keydesign-cart-dropdown,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu,
	.navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default.navbar-shrink .dropdown-menu,
	.navbar.navbar-default.navbar-shrink.contained .container,
	body:not(.transparent-navigation) .navbar.navbar-default.contained .container,
	.navbar.navbar-default.navbar-shrink .menubar {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-bg-sticky' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-color' ) ) : ?>
	.navbar-default .toggle-search,
	.navbar-default .cart-icon-container,
	.navbar-default .header-wishlist a,
	.navbar-default .menu-item-has-children .mobile-dropdown,
	.navbar-default .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	.navbar.navbar-default .mobile-cart .keydesign-cart .cart-icon,
	.keydesign-cart .nc-icon-outline-cart,
	.transparent-navigation .navbar.navbar-default .menubar .navbar-nav .dropdown-menu a,
	.navbar.navbar-default .menubar .navbar-nav a {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( $transparent_navigation_color ) : ?>
@media (min-width: 1269px) {
	.transparent-navigation .navbar:not(.navbar-shrink) #menu-topbar-menu li a,
	.transparent-navigation .navbar:not(.navbar-shrink) .navbar-topbar li a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-phone .iconsmind-Telephone,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-email .iconsmind-Mail,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-socials a .fab,
	.transparent-navigation .navbar:not(.navbar-shrink) .navbar.navbar-default .topbar-phone a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-email a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact i,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact span,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-opening-hours,
	.transparent-navigation .topbar-lang-switcher ul,
	.transparent-navigation .topbar-lang-switcher ul:not(:hover) li a,
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .topbar-search .fa.toggle-search:not(.fa-times),
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .nav > .menu-item > a,
	.transparent-navigation .navbar:not(.navbar-shrink) .keydesign-cart .cart-icon-container,
	.transparent-navigation .navbar:not(.navbar-shrink) .viva-heart,
	.transparent-navigation .navbar:not(.navbar-shrink) .keydesign-cart .badge,
	.transparent-navigation .header-wishlist .badge,
	.transparent-navigation .navbar:not(.navbar-shrink) #logo .logo {
		<?php if ( $transparent_navigation_color ) : ?>
			color: <?php echo esc_attr( $transparent_navigation_color ); ?> !important;
    	<?php endif; ?>
		}
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .keydesign-cart svg,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar .keydesign-cart svg {
		<?php if ( $transparent_navigation_color ) : ?>
			fill: <?php echo esc_attr( $transparent_navigation_color ); ?> !important;
		<?php else : ?>
	    	fill: #fff!important;
   	<?php endif; ?>
	}
	<?php if ( viva_get_option( 'tek-topbar-text-color' ) ) : ?>
		.transparent-navigation .navbar.navbar-default.navbar-shrink .keydesign-cart svg {
			fill: <?php echo esc_attr( viva_get_option( 'tek-topbar-text-color' ) ); ?> !important;
	}
	<?php endif; ?>
}
<?php endif; ?>


<?php if ( viva_get_option( 'tek-header-menu-color-sticky' ) && viva_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.navbar-default.navbar-shrink .toggle-search,
	.navbar-default.navbar-shrink .cart-icon-container,
	.navbar-default.navbar-shrink .header-wishlist a,
	.navbar-default.navbar-shrink .menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown > a,
	.navbar-default.navbar-shrink .menu-item-has-children .mobile-dropdown,
	.navbar-default.navbar-shrink .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	.keydesign-cart ul.product_list_widget .subtotal strong,
	.keydesign-cart ul.product_list_widget .cart-item,
	.keydesign-cart ul.product_list_widget .product-quantity,
	.keydesign-cart .subtotal .amount,
	.transparent-navigation .navbar-shrink  #logo .logo,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .mobile-dropdown,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu a,
	.transparent-navigation .navbar.navbar-default.navbar-shrink .menubar .navbar-nav .dropdown-menu a,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .nc-icon-outline-cart,
	.navbar.navbar-default.navbar-shrink .menubar .navbar-nav a,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .cart-icon {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-sticky' ) ); ?> !important;
	}
<?php endif; ?>


<?php if ( viva_get_option( 'tek-header-menu-color-hover' ) ) : ?>
	.navbar-default .nav:hover > li.dropdown:hover > a,
	.navbar.navbar-default.navbar-shrink .menubar .navbar-nav a:hover,
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .nav > .menu-item > a:hover,
	.transparent-navigation .navbar.navbar-default .menubar .navbar-nav .dropdown-menu a:hover,
	.navbar.navbar-default .menubar .navbar-nav .active > a:hover,
	.navbar.navbar-default .navbar-nav a:hover {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-hover' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-color-hover' ) ) : ?>
	#main-menu.underline-effect .navbar-nav .mega-menu .dropdown-menu .menu-item a:after, #main-menu.underline-effect .navbar-nav .menu-item .dropdown-menu .menu-item a:after {
		background: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-hover' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-menu-color-sticky-hover' ) && viva_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.navbar-default.navbar-shrink .menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown:hover > a,
	.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown:hover > a,
	.navbar-default.navbar-shrink .nav li.active a,
	#main-menu .navbar-nav .menu-item-has-children .dropdown-menu a:hover, .navbar-nav .menu-item-has-children .dropdown-menu a:hover,
	.body:not(.transparent-navigation) .navbar a:hover,
	.navbar-default .nav li.active a {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-sticky-hover' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-main-logo-color' ) ) : ?>
	#logo .logo {
		color: <?php echo esc_attr( viva_get_option( 'tek-main-logo-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-secondary-logo-color' ) ) : ?>
	.transparent-navigation .navbar-shrink #logo .logo,
	.navbar-shrink #logo .logo {
		color: <?php echo esc_attr( viva_get_option( 'tek-secondary-logo-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-default-typo' )) && count(array_filter(viva_get_option( 'tek-default-typo' ))) != '1'): ?>
	body,.key-icon-box a p, .box, .cb-text-area p, body p , #wrapper #commentform p, .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
		<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ): ?>
			color: <?php echo esc_attr( $default_typo['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-weight'] ) && '' != $default_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $default_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-family'] ) && '' != $default_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $default_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-size'] ) && '' != $default_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $default_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['line-height'] ) && '' != $default_typo['line-height'] ): ?>
			line-height: <?php echo esc_attr( $default_typo['line-height'] ); ?>;
		<?php endif; ?>
	}
	<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ): ?>
		.key-icon-box a p, .key-icon-box a:hover p {
			color: <?php echo esc_attr( $default_typo['color'] ) ?>;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-text-logo-typo' )) && count(array_filter(viva_get_option( 'tek-text-logo-typo' ))) != '1'): ?>
.container #logo .logo {
	<?php if ( isset( $text_logo_typo['font-weight'] ) && '' != $text_logo_typo['font-weight'] ): ?>
		font-weight: <?php echo esc_attr( $text_logo_typo['font-weight'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $text_logo_typo['font-family'] ) && '' != $text_logo_typo['font-family'] ): ?>
		font-family: <?php echo stripslashes( htmlspecialchars( $text_logo_typo['font-family'] ) ); ?>;
	<?php endif; ?>
	<?php if ( isset( $text_logo_typo['font-size'] ) && '' != $text_logo_typo['font-size'] ): ?>
		font-size: <?php echo esc_attr( $text_logo_typo['font-size'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $text_logo_typo['letter-spacing'] ) && '' != $text_logo_typo['letter-spacing'] ): ?>
		letter-spacing: <?php echo esc_attr( $text_logo_typo['letter-spacing'] ) ?>;
	<?php endif; ?>
}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h1-heading' )) && count(array_filter(viva_get_option( 'tek-h1-heading' ))) != '1'): ?>
	.container h1 {
		<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h1_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-weight'] ) && '' != $h1_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h1_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-family'] ) && '' != $h1_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h1_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-size'] ) && '' != $h1_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h1_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['text-align'] ) && '' != $h1_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h1_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['line-height'] ) && '' != $h1_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h1_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['text-transform'] ) && '' != $h1_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h1_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['letter-spacing'] ) && '' != $h1_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h1_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h2-heading' )) && count(array_filter(viva_get_option( 'tek-h2-heading' ))) != '1'): ?>
	.container h2, #popup-modal .modal-content h2 {
		<?php if ( isset( $h2_heading['color'] ) && '' != $h2_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h2_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-weight'] ) && '' != $h2_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h2_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-family'] ) && '' != $h2_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h2_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-size'] ) && '' != $h2_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h2_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['text-align'] ) && '' != $h2_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h2_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['line-height'] ) && '' != $h2_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h2_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['text-transform'] ) && '' != $h2_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h2_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['letter-spacing'] ) && '' != $h2_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h2_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h3-heading' )) && count(array_filter(viva_get_option( 'tek-h3-heading' ))) != '1'): ?>
	.container h3, .kd-panel-header .kd-panel-title {
		<?php if ( isset( $h3_heading['color'] ) && '' != $h3_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h3_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-weight'] ) && '' != $h3_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h3_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-family'] ) && '' != $h3_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h3_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-size'] ) && '' != $h3_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h3_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['text-align'] ) && '' != $h3_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h3_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['line-height'] ) && '' != $h3_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h3_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['text-transform'] ) && '' != $h3_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h3_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['letter-spacing'] ) && '' != $h3_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h3_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h4-heading' )) && count(array_filter(viva_get_option( 'tek-h4-heading' ))) != '1'): ?>
	.content-area .vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4, .key-reviews .rw_title, .row .vc_toggle_size_md.vc_toggle_simple .vc_toggle_title h4, .row .vc_toggle_size_md.vc_toggle_default .vc_toggle_title h4,
	.container h4, .kd-photobox .phb-content h4, .content-area .vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4 {
		<?php if ( isset( $h4_heading['color'] ) && '' != $h4_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h4_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-weight'] ) && '' != $h4_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h4_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-family'] ) && '' != $h4_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h4_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-size'] ) && '' != $h4_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h4_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['text-align'] ) && '' != $h4_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h4_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['line-height'] ) && '' != $h4_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h4_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['text-transform'] ) && '' != $h4_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h4_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['letter-spacing'] ) && '' != $h4_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h4_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h5-heading' )) && count(array_filter(viva_get_option( 'tek-h5-heading' ))) != '1'): ?>
	.vc_grid-item-mini .vc_custom_heading h5, .testimonials.slider .tt-content h5, #wrapper .widget-title, .container .rw-author-details h5, .upper-footer .widget-title, .tcards_header .tcards-name,
	.container h5 {
		<?php if ( isset( $h5_heading['color'] ) && '' != $h5_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h5_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-weight'] ) && '' != $h5_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h5_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-family'] ) && '' != $h5_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h5_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-size'] ) && '' != $h5_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h5_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['text-align'] ) && '' != $h5_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h5_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['line-height'] ) && '' != $h5_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h5_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['text-transform'] ) && '' != $h5_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h5_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['letter-spacing'] ) && '' != $h5_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h5_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-h6-heading' )) && count(array_filter(viva_get_option( 'tek-h6-heading' ))) != '1'): ?>
	.container h6, .woocommerce-product-details__short-description p, .vc_toggle_size_md.vc_toggle_default .vc_toggle_content p, .blog-detailed-grid .vc_gitem-post-data-source-post_excerpt p, .woocommerce div.product .woocommerce-tabs .panel p, .kd-panel-header .kd-panel-subtitle, header.kd-section-title .st-overline, #posts-content .post p, #posts-content article p, .pricing .pricing-option, .pricing .pricing-subtitle, .key-icon-box p, #single-page p, #wrapper p, .kd-list-text, .business-info-day, .side-content-title-label, .tcards-job, .testimonials.slider .tt-content .content {
		<?php if ( isset( $h6_heading['color'] ) && '' != $h6_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h6_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-weight'] ) && '' != $h6_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h6_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-family'] ) && '' != $h6_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h6_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-size'] ) && '' != $h6_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h6_heading['font-size'] ) ?>;
			--medium-body-text-size: 1em;
			--large-body-text-size: 1em;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['text-align'] ) && '' != $h6_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h6_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['line-height'] ) && '' != $h6_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h6_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['text-transform'] ) && '' != $h6_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h6_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['letter-spacing'] ) && '' != $h6_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h6_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-topbar-typo' )) && count(array_filter(viva_get_option( 'tek-topbar-typo' ))) != '1'): ?>
	.topbar-phone,
	.topbar-email,
	.topbar-socials a,
	#menu-topbar-menu a,
	.navbar-topbar a,
	.topbar-opening-hours,
	.topbar-lang-switcher ul li span {
		<?php if ( isset( $topbar_typo['font-weight'] ) && '' != $topbar_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $topbar_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $topbar_typo['font-size'] ) && '' != $topbar_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $topbar_typo['font-size'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-menu-typo' )) && count(array_filter(viva_get_option( 'tek-menu-typo' ))) != '1'): ?>
	#main-menu.background-dropdown-effect .navbar-nav .menu-item-has-children .dropdown-menu a,
	.background-dropdown-effect .navbar-nav .menu-item-has-children .dropdown-menu a,
	body .navbar-default .nav li a, body .modal-menu-item {
		<?php if ( isset( $menu_typo['font-weight'] ) && '' != $menu_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $menu_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['font-family'] ) && '' != $menu_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $menu_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['font-size'] ) && '' != $menu_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $menu_typo['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['line-height'] ) && '' != $menu_typo['line-height'] ): ?>
			line-height: <?php echo esc_attr( $menu_typo['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['text-transform'] ) && '' != $menu_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $menu_typo['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['letter-spacing'] ) && '' != $menu_typo['letter-spacing'] ): ?>
			letter-spacing: <?php echo esc_attr( $menu_typo['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-typekit-switch' ) ) : ?>
  <?php if ( viva_get_option( 'tek-h1-heading-typekit' ) ) : ?>
		.container h1 {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h1-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
  <?php if ( viva_get_option( 'tek-h2-heading-typekit' ) ) : ?>
		.container h2 {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h2-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
  <?php if ( viva_get_option( 'tek-h3-heading-typekit' ) ) : ?>
		.container h3 {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h3-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
  <?php if ( viva_get_option( 'tek-h4-heading-typekit' ) ) : ?>
		.container h4 {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h4-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
  <?php if ( viva_get_option( 'tek-h5-heading-typekit' ) ) : ?>
		.container h5 {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h5-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
  <?php if ( viva_get_option( 'tek-h6-heading-typekit' ) ) : ?>
		.container h6, .woocommerce-product-details__short-description p, .wpb_text_column ul li, .wpb_text_column ol li, .vc_toggle_size_md.vc_toggle_default .vc_toggle_content p, .blog-detailed-grid .vc_gitem-post-data-source-post_excerpt p, .woocommerce div.product .woocommerce-tabs .panel p, .kd-panel-header .kd-panel-subtitle, header.kd-section-title .st-overline, #posts-content .post p, #posts-content article p, .pricing .pricing-option, .pricing .pricing-subtitle, .key-icon-box p, #single-page p, #wrapper p, .kd-list-text, .business-info-day, .side-content-title-label, .tcards-job, .testimonials.slider .tt-content .content {
			font-family: <?php echo esc_attr( viva_get_option( 'tek-h6-heading-typekit' ) ) ?>;
		}
	<?php endif; ?>
	<?php if ( viva_get_option( 'tek-body-typekit-selector' ) ) : ?>
		h1, h2, h3, h4, h5, h6,
		body,
		.woocommerce .button,
		.wpcf7 .wpcf7-submit,
		.wpcf7-form-control-wrap input,
		.wpcf7-form-control-wrap textarea,
		#single-page .wpcf7-form-control-wrap input,
		blockquote cite,
		.box,
		.navbar-default .nav li a,
		.modal-menu-item,
		.cb-text-area p,
		body p,
		#wrapper #commentform p,
		.kd-panel-header .kd-panel-title,
		.key-icon-box h4.service-heading,
		.pricing .col-lg-3,
		.chart,
		.single-product.woocommerce .product-inner-content span.onsale,
		.pb_counter_number,
		.pc_percent_container,
		#logo .logo,
		.vc_grid-item-mini .vc_gitem-post-data div,
		.vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_date div {
				font-family: <?php echo esc_attr( viva_get_option( 'tek-body-typekit-selector' ) ) ?>;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-section-title-secondary-typography' )) && count(array_filter(viva_get_option( 'tek-section-title-secondary-typography' ))) != '1'): ?>
    .section-heading .highlight-secondary-font,
    .section-heading .overline-secondary-font,
    .kd-section-title .overline-secondary-font,
    #single-page .kd-section-title .overline-secondary-font,
	.kd-section-title .highlight-secondary-font,
	#single-page .kd-section-title .highlight-secondary-font {
  <?php if ( isset( $secondary_title_typo['font-weight'] ) && '' != $secondary_title_typo['font-weight'] ): ?>
    font-weight: <?php echo esc_attr( $secondary_title_typo['font-weight'] ) ?>;
  <?php endif; ?>
  <?php if ( isset( $secondary_title_typo['font-family'] ) && '' != $secondary_title_typo['font-family'] ): ?>
    font-family: <?php echo stripslashes( htmlspecialchars( $secondary_title_typo['font-family'] ) ); ?>!important;
  <?php endif; ?>
  }
<?php endif; ?>

<?php  if ( viva_get_option( 'tek-layout-fw-content-bg' ) ) : ?>
	body,
	#wrapper,
	.back-to-top,
	.comment-body,
	.portfolio-navigation-links,
	#commentform textarea,
	#single-page #comments input[type="text"], #single-page #comments input[type="email"], #comments input[type="text"], #comments input[type="email"], #comments input[type="url"],
	.blog_widget .search-form .search-field {
			background-color: <?php echo esc_attr( viva_get_option( 'tek-layout-fw-content-bg' ) ); ?>;
	}
<?php endif; ?>

<?php  if ( class_exists( 'WooCommerce' ) && viva_get_option( 'tek-layout-fw-content-bg' ) ) : ?>
	.woocommerce form.checkout_coupon, .woocommerce form.login,
	.woocommerce form.register,
	.blog_widget .woocommerce-product-search .search-field,
	.woocommerce-checkout #single-page table {
			background-color: <?php echo esc_attr( viva_get_option( 'tek-layout-fw-content-bg' ) ); ?>;
	}
<?php endif; ?>

<?php  if ( viva_get_option( 'tek-layout-boxed-body-bg') && viva_get_option( 'tek-layout-style' ) == 'boxed') : ?>
	html {
		<?php if ( isset( $layout_boxed_body_bg['background-color'] ) && '' != $layout_boxed_body_bg['background-color'] ): ?>
			background-color: <?php echo esc_attr( $layout_boxed_body_bg['background-color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-image'] ) && '' != $layout_boxed_body_bg['background-image'] ): ?>
			background-image: url("<?php echo esc_attr( $layout_boxed_body_bg['background-image'] ) ?>");
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-size'] ) && '' != $layout_boxed_body_bg['background-size'] ): ?>
			background-size: <?php echo esc_attr( $layout_boxed_body_bg['background-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-repeat'] ) && '' != $layout_boxed_body_bg['background-repeat'] ): ?>
			background-repeat: <?php echo esc_attr( $layout_boxed_body_bg['background-repeat'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-position'] ) && '' != $layout_boxed_body_bg['background-position'] ): ?>
			background-position: <?php echo esc_attr( $layout_boxed_body_bg['background-position'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-attachment'] ) && '' != $layout_boxed_body_bg['background-attachment'] ): ?>
			background-attachment: <?php echo esc_attr( $layout_boxed_body_bg['background-attachment'] ) ?>;
		<?php endif; ?>
	}
	<?php if ( viva_get_option( 'tek-layout-boxed-width' ) ) : ?>
		@media (min-width: <?php echo esc_attr( viva_get_option( 'tek-layout-boxed-width' ) ); ?>px) {
			body.boxed #main-menu .navbar-nav .mega-menu > .dropdown-menu:before,
			body.boxed {
	    		width: <?php echo esc_attr( viva_get_option( 'tek-layout-boxed-width' ) ); ?>px;
			}
			.boxed #footer.fixed,
			.boxed .navbar.navbar-default {
			    margin-left: -<?php echo esc_attr( viva_get_option( 'tek-layout-boxed-width' ) )/2; ?>px;
			    max-width: <?php echo esc_attr( viva_get_option( 'tek-layout-boxed-width' ) ); ?>px;
				border-left: 1px solid var(--border-color);
			    border-right: 1px solid var(--border-color);
			}
			body.boxed #main-menu .navbar-nav .mega-menu > .dropdown-menu:before {
				left: -<?php echo esc_attr(( viva_get_option( 'tek-layout-boxed-width' ) ) - 1240)/2 + 5; ?>px;
			}
			body.boxed {
			    border-left: 1px solid var(--border-color);
			    border-right: 1px solid var(--border-color);
			    margin: 0 auto;
			}
			body.boxed #wrapper {
			    overflow: hidden;
			}
			body.modal-open.boxed {
			    padding-right: 0!important;
			}
			body.boxed #footer.fixed,
			body.boxed .navbar.navbar-default {
			    left: 50%;
			}
		}
	<?php endif; ?>
<?php endif; ?>

<?php if ( viva_get_option( 'tek-blog-titlebar-background' ) ) : ?>
	.entry-header.blog-header {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-blog-titlebar-background' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-blog-subscribe-text-color' ) ) : ?>
	.blog-subscribe-wrapper .wpcf7-list-item-label {
		color: <?php echo esc_attr( viva_get_option( 'tek-blog-subscribe-text-color' ) ); ?>;
	}
<?php endif; ?>


<?php if ( viva_get_option( 'tek-blog-text-color' ) ) : ?>
	.search:not(.post-type-archive-product) .breadcrumbs,
	.search .entry-header .section-heading,
	.archive.author .breadcrumbs,
	.archive.author .entry-header .section-heading,
	.archive.category .breadcrumbs,
	.archive.category .entry-header .section-heading,
	.archive.tag .breadcrumbs,
	.archive.tag .entry-header .section-heading,
	.archive.date .breadcrumbs,
	.archive.date .entry-header .section-heading,
	.blog .breadcrumbs,
	.blog .entry-header .section-heading,
	.blog .entry-header .section-subheading {
		color: <?php echo esc_attr( viva_get_option( 'tek-blog-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-titlebar-color' ) ) : ?>
	.page-template-default .entry-header {
		  background-color: <?php echo esc_attr( viva_get_option( 'tek-titlebar-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-titlebar-text-color' ) ) : ?>
	.page-template-default .entry-header .breadcrumbs,
	.page-template-default .entry-header .section-heading,
	.page-template-default .entry-header .section-subheading {
		  color: <?php echo esc_attr( viva_get_option( 'tek-titlebar-text-color' ) ); ?>;
	}
<?php endif; ?>


<?php if ( isset( $link_color['regular'] ) && '' != $link_color['regular'] ) : ?>
	.single-page-content a, .blog-content a {
		color: <?php echo esc_attr( $link_color['regular'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $link_color['hover'] ) && '' != $link_color['hover'] ) : ?>
	.single-page-content a:hover, .blog-content a:hover  {
		color: <?php echo esc_attr( $link_color['hover'] ); ?>;
	}
<?php endif; ?>


<?php if (is_array(viva_get_option( 'tek-contact-form-bg-color' )) && count(array_filter(viva_get_option( 'tek-contact-form-bg-color' ))) != '1'): ?>
	.wpb_wrapper #loginform .input, .woocommerce-product-search .search-field, .search-form .search-field, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-select, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .wpcf7 input[type="file"],
	.wpcf7 .wpcf7-select, .wpcf7-form textarea, .wpb_wrapper #loginform .input, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .modal-content-inner .wpcf7 .wpcf7-text, .modal-content-inner .wpcf7 .wpcf7-email {
		background-color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-bg-color' ) ); ?>;
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-contact-form-typo' )) && count(array_filter(viva_get_option( 'tek-contact-form-typo' ))) != '1'): ?>
	.wpb_wrapper #loginform .input, .woocommerce-product-search .search-field, .search-form .search-field, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .wpcf7 input[type="file"],
	.wpcf7 .wpcf7-select, .wpcf7-form textarea, .wpb_wrapper #loginform .input, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .modal-content-inner .wpcf7 .wpcf7-text, .modal-content-inner .wpcf7 .wpcf7-email {
		<?php if ( isset( $contact_form_typo['font-weight'] ) && '' != $contact_form_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $contact_form_typo['font-weight'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['color'] ) && '' != $contact_form_typo['color'] ): ?>
			color: <?php echo esc_attr( $contact_form_typo['color'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['font-size'] ) && '' != $contact_form_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $contact_form_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['text-transform'] ) && '' != $contact_form_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $contact_form_typo['text-transform'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-contact-form-placeholder-color' ) ) : ?>
	.wpcf7 .wpcf7-text::-webkit-input-placeholder { color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7 .wpcf7-text::-moz-placeholder { color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7 .wpcf7-text:-ms-input-placeholder { color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-webkit-input-placeholder { color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-moz-placeholder {color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea:-ms-input-placeholder {color: <?php echo esc_attr( viva_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-button-typo' )) && count(array_filter(viva_get_option( 'tek-button-typo' ))) != '1'): ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, 
	.tt_button, .wpcf7 .wpcf7-submit,  .content-area .vc_grid .vc_gitem-zone-c .vc_general, .tt_button.modal-menu-item, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container a,
	.cta-btncontainer .tt_button, .btn-hover-1 .tt_button:hover .iconita,
	.pricing-table .tt_button, .pricing-table.active .tt_button {
		<?php if ( isset( $button_typo['font-weight'] ) && '' != $button_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $button_typo['font-weight'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
			color: <?php echo esc_attr( $button_typo['color'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['font-family'] ) && '' != $button_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $button_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['font-size'] ) && '' != $button_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $button_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['text-transform'] ) && '' != $button_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $button_typo['text-transform'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['letter-spacing'] ) && '' != $button_typo['letter-spacing'] ): ?>
			letter-spacing: <?php echo esc_attr( $button_typo['letter-spacing'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['line-height'] ) && '' != $button_typo['line-height'] ): ?>
			line-height: <?php echo esc_attr( $button_typo['line-height'] ); ?>;
		<?php endif; ?>
	}
	.woocommerce ul.products li.product .button.yith-wcqv-button, .woo-detailed-style ul.products li.product .woo-entry-wrapper .button, .woocommerce ul.products li.product.woo-detailed-style .woo-entry-wrapper .button,
	.post-button-wrapper a,.key-icon-box .ib-link a, .key-icon-box.icon-top:hover .ib-link a:hover, .kd-process-steps.process-checkbox-template .pss-step-number span, .vc_custom_heading.grid-read-more a, .cb-container .cb-wrapper .cb-simple-link .cb-link-text, .kd-title-label .kd-title-label-transparent,
	.post-button-wrapper, .kd-simple-link, .pricing-btn-minimal, .process-text-link, .kd-photobox .phb-content.text-left .phb-btncontainer a {
		<?php if ( isset( $button_typo['font-weight'] ) && '' != $button_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $button_typo['font-weight'] ); ?>!important;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
	.woocommerce div.product form.cart .button:not(:hover),
	.cta-btncontainer .tt_button .iconita,
	.pricing-table .tt_button .iconita,
	.tt_button .iconita {
		<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
			color: <?php echo esc_attr( $button_typo['color'] ); ?>;
		<?php endif; ?>
	}
	.tt_button:hover, .wpcf7 .wpcf7-submit:hover, .content-area .vc_grid .vc_gitem-zone-c .vc_general:hover, .tt_button.modal-menu-item:hover, .kd-panel-phone a, .kd-panel-email a, .kd-panel-social-list .redux-social-media-list a .fab, .kd-panel-phone .fa, .kd-panel-email .fa,
	.team-member.design-classic .team-socials .fab, .team-member.design-classic .kd-team-contact a, .team-member.design-classic .fa, .team-member.design-classic .kd-team-contact a:hover, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container:hover a {
		color: <?php echo esc_attr( $button_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( class_exists( 'WooCommerce' ) && viva_get_option( 'tek-btn-border' ) ) : ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button {
		border-width: <?php echo esc_attr( viva_get_option( 'tek-btn-border' ) ); ?>px !important;
	}
<?php endif; ?>

<?php if (is_array(viva_get_option( 'tek-btn-padding' )) && count(array_filter(viva_get_option( 'tek-btn-padding' ))) != '1'): ?>
	.tt_button, .wpcf7 .wpcf7-submit, .content-area .vc_grid .vc_gitem-zone-c .vc_general, .tt_button.modal-menu-item {
		<?php if ( isset( $btn_padding['padding-top'] ) && '' != $btn_padding['padding-top'] ): ?>
			padding-top: <?php echo esc_attr( $btn_padding['padding-top'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-bottom'] ) && '' != $btn_padding['padding-bottom'] ): ?>
			padding-bottom: <?php echo esc_attr( $btn_padding['padding-bottom'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-left'] ) && '' != $btn_padding['padding-left'] ): ?>
			padding-left: <?php echo esc_attr( $btn_padding['padding-left'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-right'] ) && '' != $btn_padding['padding-right'] ): ?>
			padding-right: <?php echo esc_attr( $btn_padding['padding-right'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( class_exists( 'WooCommerce' ) && viva_get_option( 'tek-btn-padding') ) : ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button {
		<?php if ( isset( $btn_padding['padding-top'] ) && '' != $btn_padding['padding-top'] ): ?>
			padding-top: <?php echo esc_attr( $btn_padding['padding-top'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-bottom'] ) && '' != $btn_padding['padding-bottom'] ): ?>
			padding-bottom: <?php echo esc_attr( $btn_padding['padding-bottom'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-left'] ) && '' != $btn_padding['padding-left'] ): ?>
			padding-left: <?php echo esc_attr( $btn_padding['padding-left'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-right'] ) && '' != $btn_padding['padding-right'] ): ?>
			padding-right: <?php echo esc_attr( $btn_padding['padding-right'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-header-spacing' ) ) { ?>
	.menubar {
		padding-top: <?php echo esc_attr( viva_get_option( 'tek-header-spacing' ) ); ?>px;
		padding-bottom: <?php echo esc_attr( viva_get_option( 'tek-header-spacing' ) ); ?>px;
	}
<?php } ?>

<?php if (is_array(viva_get_option( 'tek-logo-spacing' )) && count(array_filter(viva_get_option( 'tek-logo-spacing' ))) != '1'): ?>
	@media (min-width:1270px) {
		#logo {
			<?php if ( isset( $logo_spacing['padding-top'] ) && '' != $logo_spacing['padding-top'] ): ?>
				padding-top: <?php echo esc_attr( $logo_spacing['padding-top'] ); ?>;
			<?php endif; ?>
			<?php if ( isset( $logo_spacing['padding-bottom'] ) && '' != $logo_spacing['padding-bottom'] ): ?>
				padding-bottom: <?php echo esc_attr( $logo_spacing['padding-bottom'] ); ?>;
			<?php endif; ?>
		}
	}
<?php endif; ?>

<?php if ( viva_get_option( 'tek-responsive-fonts' ) ) : ?>
@media (max-width: 960px) {
	<?php if ( viva_get_option( 'tek-header-menu-color-sticky' ) ) : ?>
	.navbar-nav .menu-item a {
		color: <?php echo esc_attr( viva_get_option( 'tek-header-menu-color-sticky' ) ); ?> !important;
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-default-typo-mobile' ) ) : ?>
	body, .box, .cb-text-area p, body p , #wrapper #commentform p, .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
		<?php if ( isset( $default_typo_mobile['font-size'] ) && '' != $default_typo_mobile['font-size'] ): ?>
			font-size: <?php echo esc_attr( $default_typo_mobile['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo_mobile['line-height'] ) && '' != $default_typo_mobile['line-height'] ): ?>
			line-height: <?php echo esc_attr( $default_typo_mobile['line-height'] ); ?>;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h1-heading-mobile' ) ) : ?>
	.container h1 {
		<?php if ( isset( $h1_heading_mobile['font-size'] ) && '' != $h1_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h1_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h1_heading_mobile['line-height'] ) && '' != $h1_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h1_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h2-heading-mobile' ) ) : ?>
	.vc_row .container h2, .container .tab-text-container h2, header.kd-section-title h2, .container h2 {
		<?php if ( isset( $h2_heading_mobile['font-size'] ) && '' != $h2_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h2_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h2_heading_mobile['line-height'] ) && '' != $h2_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h2_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h3-heading-mobile' ) ) : ?>
	.container h3, .container h3.vc_custom_heading {
		<?php if ( isset( $h3_heading_mobile['font-size'] ) && '' != $h3_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h3_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h3_heading_mobile['line-height'] ) && '' != $h3_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h3_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h4-heading-mobile' ) ) : ?>
	.container h4, .container h4.vc_custom_heading {
		<?php if ( isset( $h4_heading_mobile['font-size'] ) && '' != $h4_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h4_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h4_heading_mobile['line-height'] ) && '' != $h4_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h4_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h5-heading-mobile' ) ) : ?>
	.container h5, .container h5.vc_custom_heading {
		<?php if ( isset( $h5_heading_mobile['font-size'] ) && '' != $h5_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h5_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h5_heading_mobile['line-height'] ) && '' != $h5_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h5_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( viva_get_option( 'tek-h6-heading-mobile' ) ) : ?>
	.container h6, .container h6.vc_custom_heading {
		<?php if ( isset( $h6_heading_mobile['font-size'] ) && '' != $h6_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h6_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h6_heading_mobile['line-height'] ) && '' != $h6_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h6_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php if ( viva_get_option( 'tek-mobile-logo-image-size' ) ) : ?>
		#logo .logo img {
			width: <?php echo esc_attr( viva_get_option( 'tek-mobile-logo-image-size' ) ) ?>px;
		}
	<?php endif; ?>

	<?php if ( viva_get_option( 'tek-preloader' ) && viva_get_option( 'tek-preloader-image-size-mobile' ) ) : ?>
		html:before {
			background-size: <?php echo esc_attr( viva_get_option( 'tek-preloader-image-size-mobile' ) ) ?>px;
		}
	<?php endif; ?>
}
<?php endif; ?>


<?php if (  viva_get_option( 'tek-custom-fonts-switch' ) ) : ?>
	<?php if ( ( isset( $primary_ttf_font['url'] ) && '' != $primary_ttf_font['url'] ) || ( isset( $primary_woff_font['url'] ) && '' != $primary_woff_font['url'] ) ) : ?>
		@font-face {
		  font-family: 'PrimaryCustomFont';
		  src: <?php if ($primary_woff_font['url']) { ?> url('<?php echo esc_attr($primary_woff_font['url']) ?>') format('woff'), <?php } ?>
		  <?php if ($primary_ttf_font['url']) { ?> url('<?php echo esc_attr($primary_ttf_font['url']) ?>')  format('truetype') <?php } ?>
		}
	<?php endif; ?>
	<?php if ( ( isset( $secondary_ttf_font['url'] ) && '' != $secondary_ttf_font['url'] ) || ( isset( $secondary_woff_font['url'] ) && '' != $secondary_woff_font['url'] ) ) : ?>
		@font-face {
		  font-family: 'SecondaryCustomFont';
		  src: <?php if ($secondary_woff_font['url']) { ?> url('<?php echo esc_attr($secondary_woff_font['url']) ?>') format('woff'), <?php } ?>
		  <?php if ($secondary_ttf_font['url']) { ?> url('<?php echo esc_attr($secondary_ttf_font['url']) ?>')  format('truetype') <?php } ?>
		}
	<?php endif; ?>
	<?php if (viva_get_option( 'tek-body-custom-font' )): ?>
	body, .box, .cb-text-area p, body p , .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
		<?php if (viva_get_option( 'tek-body-custom-font' ) == 'primary-custom-font'): ?>
		font-family: 'PrimaryCustomFont'!important;
		<?php elseif (viva_get_option( 'tek-body-custom-font' ) == 'secondary-custom-font'): ?>
		font-family: 'SecondaryCustomFont'!important;
		<?php endif; ?>
	}
	<?php endif; ?>
	<?php if (viva_get_option( 'tek-headings-custom-font' )): ?>
	.container h4, .container h5, .container h6,
	.container h1, .container h2, .container h3, .pricing .col-lg-3, .chart, .pb_counter_number, .pc_percent_container, #logo .logo, .vc_grid-item-mini .vc_gitem-post-data div, .vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_date div {
		<?php if (viva_get_option( 'tek-headings-custom-font' ) == 'primary-custom-font'): ?>
		font-family: 'PrimaryCustomFont'!important;
		<?php elseif (viva_get_option( 'tek-headings-custom-font' ) == 'secondary-custom-font'): ?>
		font-family: 'SecondaryCustomFont'!important;
		<?php endif; ?>
	}
	<?php endif; ?>
<?php endif; ?>

<?php if ( is_single() && viva_get_option( 'tek-blog-rebar' ) ): ?>
	<?php if ( viva_get_option( 'tek-blog-rebar-color' ) ): ?>
		.rebar-wrapper .rebar-element { background-color: <?php echo esc_attr( viva_get_option( 'tek-blog-rebar-color' ) ); ?>; }
	<?php endif; ?>
	<?php if ( viva_get_option( 'tek-blog-rebar-height' ) ): ?>
		.rebar-wrapper { height: <?php echo esc_attr( viva_get_option( 'tek-blog-rebar-height' ) ); ?>px; }
	<?php endif; ?>
<?php endif; ?>
