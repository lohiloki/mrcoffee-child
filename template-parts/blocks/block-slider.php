<?php
/**
 * Displays slider on top page
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>

<?php

if ( function_exists( 'mrcoffee_get_home_slider' ) ) {
	/** Get slider options*/
	$slider_slug = null;
	if(is_singular() && function_exists('carbon_get_post_meta')) {
		$slider_slug = esc_attr( carbon_get_post_meta( get_the_ID(), 'sliderslug' ) );
	}

	if( !empty($slider_slug) ) {
		$arr_slider = mrcoffee_get_home_slider( $slider_slug );
	}

}

if ( ! empty( $arr_slider ) ) :
	?>
	<!-- MAIN SLIDER -->
	<section id="demo-1" class="main-slider <?php echo esc_attr($arr_slider['class']); ?>" <?php if ( ! empty( $arr_slider['slopt'] ) ) {
		echo esc_attr($arr_slider['slopt']);
	} ?> data-zs-bullets="false" data-zs-initzoom="<?php echo esc_attr($arr_slider['init_zoom']); ?>" data-zs-src='[<?php echo esc_attr($arr_slider['bg']); ?>]'>
		<div class="main-slider-caption">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if ( ! empty( $arr_slider['html'] ) ) {
							echo wp_kses_post($arr_slider['html'] );
						} ?>
						<?php if ( ! empty( $arr_slider['btn'] ) ) {
							echo wp_kses_post($arr_slider['btn'] );
						} ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN SLIDER END -->
<?php endif; ?>
