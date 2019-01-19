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

add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {

    // Change In Stock Text
    if ( $_product->is_in_stock() ) {
        $availability['availability'] = __('Available!', 'woocommerce');
    }
    // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
        $availability['availability'] = __('Out of Stock - Available on Amazon from 21 Jan 2019', 'woocommerce');
    }
    return $availability;
}