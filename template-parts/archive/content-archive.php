<?php
/**
 * Template part for displaying archive content in archive.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>


<div <?php post_class('blog-item'); ?>>
	<?php  /** Display features image */
			echo wp_kses_post(mrcoffee_get_feature_images( 'img770x500' )); ?>

	<div class="info">
		<h4><a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a></h4>
		<?php $text_excerpt = mrcoffee_excerpt();
			if( !empty( $text_excerpt ) ) : ?>
				<div class="text"><?php echo esc_attr($text_excerpt); ?></div>
			<?php endif; ?>
	</div>

	<?php /** Display Post Info*/
		  mrcoffee_onoff_postinfo(); ?>

</div>





