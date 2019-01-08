<?php
/**
 * Template part for displaying post content in single.php
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

		<?php  /** Display features image */
			echo wp_kses_post(mrcoffee_get_feature_images( 'img770x500' )); ?>

		<?php /** Display Post Info*/
		  	  mrcoffee_onoff_postinfo(); ?>

		<?php the_content(); ?>

		<?php
			$off_tags = null;
			if ( function_exists('carbon_get_post_meta') && carbon_get_post_meta(get_the_ID(), 'onoftags') ) :
				$off_tags = 1;
			endif;

			if ( empty($off_tags) ) : ?>
				<div class="tags-short"><?php echo get_the_tag_list( __( 'Tags: ', 'mrcoffee' ), ', ' ); ?></div>
		    <?php endif; ?>

		<?php if ( function_exists('get_ssba_settings') && !carbon_get_post_meta(get_the_ID(), 'onoffsharbtn') ) echo do_shortcode( '[ssba]' ); ?>

		<?php
			$args = array(
				'before'           => '<div class="pages-pagination"><span class="pages-pagination-title">' . __( 'Pages: ', 'mrcoffee' ) . '</span>',
				'after'            => '</div>',
				'pagelink'		   => '%',
			);
			wp_link_pages( $args );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div>
</div>

<?php get_sidebar(); ?>






