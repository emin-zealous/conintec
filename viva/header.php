<?php
/**
 * Theme header
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
  <head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <?php do_action( 'viva_main_header' ); ?>
    <div id="wrapper" class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'viva_wrapper_class', array() ) ) ); ?>">
    <?php do_action( 'viva_page_header' );
