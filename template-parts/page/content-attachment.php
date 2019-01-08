<?php
/**
 * Template part for displaying post attachment in attachment.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>

<div class="<?php echo mrcoffee_sidebar_layout('content'); ?>">
	<div class="blog-post text-page">

		<div class="item-info">
			<?php /** Display Post Info*/
		  			mrcoffee_onoff_postinfo(); ?>
		</div>

		<div class="entry-attachment">
			   <?php
			   		global $post;
			   		$image_size = apply_filters( 'wporg_attachment_size', 'large' );
					 echo '<p class="entry-image">' . wp_get_attachment_image( get_the_ID(), $image_size ) . '</p>'; ?>

					<?php if ( $post->post_content ) : ?>
					   <p class="entry-description">
							 <?php the_content(); ?>
					   </p><!-- .entry-description -->
				   <?php endif; ?>

				   <?php if ( has_excerpt() ) : ?>
					   <p class="entry-caption">
							 <?php the_excerpt(); ?>
					   </p><!-- .entry-caption -->
				   <?php endif; ?>
		</div><!-- .entry-attachment -->

		<?php if ( function_exists('get_ssba_settings') && !carbon_get_post_meta(get_the_ID(), 'onoffsharbtn') ) echo do_shortcode( '[ssba]' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div>
</div>

<?php get_sidebar(); ?>






