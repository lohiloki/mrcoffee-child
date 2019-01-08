<?php
/**
 * Template part for displaying archive cusyom post type mrtestimonials
 *
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>
<?php
	$photo = null;
	$name = null;
	if ( function_exists('carbon_get_post_meta')) {
		$photo = esc_url(carbon_get_post_meta(get_the_ID(), 'authorphoto'));
		$name = esc_attr(carbon_get_post_meta(get_the_ID(), 'authorname'));
		if(!empty($photo)){
			$photo = '<img src="' . $photo . '" alt="' . $name . '">';
		}
	}
?>
<div <?php post_class(); ?>>
	<div class="col-md-12">
		<h4><?php the_title(); ?></h4>
	</div>
	<div class="col-md-8 col-md-offset-2 testimonials-list">
		<div class="review-item">
			<div class="quote">
				<i class="fa fa-quote-left"></i>
			</div>
			<div class="text"><?php the_content(); ?></div>
			<div class="img-wrap"><?php echo wp_kses($photo, 'post' ); ?></div>
			<div class="name"><?php echo esc_attr($name); ?></div>
			<div class="date"><?php echo get_post_time(__('F j, Y', 'mrcoffee')); ?> </div>
		</div>
	</div>
</div>






