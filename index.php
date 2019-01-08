<?php
/**
 * The template for displaying archive posts for index.php
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

get_header(); ?>

<?php
	/** Display Slider*/
	get_template_part( 'template-parts/blocks/block', 'slider' );

	if( !get_theme_mod('mrcoffee_hlogo') ){
		/** Display Header for Page*/
		get_template_part( 'template-parts/header/header', 'head' );
	}
?>

<!-- BLOG LIST -->
<section class="blog-list">
	<div class="blog-content">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_attr(mrcoffee_sidebar_layout('content')); ?>">

				<?php if ( have_posts() ) :
						// Start the loop.
						while ( have_posts() ) : the_post();
							// Include the single post content template.
							get_template_part( 'template-parts/archive/content', 'archive' ); ?>
						<?php
							// End of the loop.
						endwhile;
						// Page navigation.
						the_posts_pagination( array(
							'show_all'     => false,
							'end_size'     => 1,
							'mid_size'     => 2,
							'prev_next'    => true,
							'prev_text'    => __('&lt; Prev', 'mrcoffee'),
							'next_text'    => __('Next &gt;', 'mrcoffee'),
							'add_args'     => false,
							'add_fragment' => '',
							'screen_reader_text' => '',
						) );
						?>

				<?php
					else :
						get_template_part( 'template-parts/archive/content', 'termnone' );
					endif;
				?>

				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
</section>
<!-- BLOG LIST END -->

<?php get_footer(); ?>

