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

/*
 add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}
*/