<?php
/**
 * Default sidebar for blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( is_active_sidebar( 'blog-sidebar' ) ) {
    dynamic_sidebar( 'blog-sidebar' );
}
