<?php
/**
 * Helper functions for Viva Theme.
 *
 * @package Viva
 * @since 1.4
 */

/**
 * Display search form
 */

	if ( ! function_exists( 'viva_get_search_form' ) ) {
		function viva_get_search_form( $echo = true ) {
        
        echo do_shortcode('[wpdreams_ajaxsearchlite]');

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
