<?php



/**
 * Mrcoffee Child functions and definitions
 */

if ( !function_exists( 'mrcoffee_enqueue_child_theme_style' ) ) {
	/**
	 * Enqueue child theme styles & scripts
	 */
	function mrcoffee_enqueue_child_theme_style() {
		wp_enqueue_style( 'mrcoffee-child', get_stylesheet_directory_uri() . '/style.css' );
	}

	add_action( 'wp_enqueue_scripts', 'mrcoffee_enqueue_child_theme_style', 99 );
}

/**
 * Add your custom functions below
 */
