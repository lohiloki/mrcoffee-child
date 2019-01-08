<?php
/**
 * Template part for displaying page content in page.php
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

		<?php the_content(); ?>

		<?php if ( function_exists('get_ssba_settings') && carbon_get_post_meta(get_the_ID(), 'onoffsharbtn') ) echo do_shortcode( '[ssba]' ); ?>

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






