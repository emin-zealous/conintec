<?php
/**
 * Viva functions file
 *
 * @package viva
 * by KeyDesign
 */

 add_action( 'wp_enqueue_scripts', 'kd_enqueue_parent_theme_style', 5 );
 if ( ! function_exists( 'kd_enqueue_parent_theme_style' ) ) {
     function kd_enqueue_parent_theme_style() {
         wp_enqueue_style( 'bootstrap' );
         wp_enqueue_style( 'keydesign-style', get_template_directory_uri() . '/style.css', array( 'bootstrap' ) );
         wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('keydesign-style') );
         wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), VIVA_THEME_VERSION, true);
     }
 }

 add_action( 'after_setup_theme', 'kd_child_theme_setup' );
 if ( ! function_exists( 'kd_child_theme_setup' ) ) {
     function kd_child_theme_setup() {
         load_child_theme_textdomain( 'viva', get_stylesheet_directory() . '/languages' );
     }
 }

 // -------------------------------------
 // Edit below this line
 // -------------------------------------
 require_once( get_stylesheet_directory() . '/core/helper-functions.php' );
 if( function_exists('pll_register_string') ) {
    pll_register_string('nothing matched', 'Sorry, but nothing matched your search terms. Please try again using different keywords.');
    pll_register_string('nothing found', 'Nothing Found');
    pll_register_string('read more', 'Read more');
 }
