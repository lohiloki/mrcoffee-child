<?php
/**
 * The template for displaying posts
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */


        

get_header(); ?>

	<?php
	/** Display Slider*/
	get_template_part( 'template-parts/blocks/block', 'slider' ); ?>

<?php if ( have_posts() ) :
	// Start the loop.
	while ( have_posts() ) : the_post();
		/** Display Header for POST*/
		get_template_part( 'template-parts/header/header', 'head' ); ?>

			<!-- POST CONTENT -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- .entry-content -->
				<div class="entry-content container">
					<div class="row">
					<?php /** Display Post Content*/
					get_template_part( 'template-parts/page/content', 'post' ); ?>
					</div>
				</div>
				<!-- .entry-content end-->
			</article>
			<!-- POST CONTENT END -->
	<?php
		// End of the loop.
	endwhile;

	endif;
?>

<?php get_footer(); ?>