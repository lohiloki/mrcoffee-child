<?php
/**
 * Template part for displaying non post content in singular pages
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
		<h5 class="search-404-title">
			<?php _e( 'It seems we cant find what youre looking for. Perhaps searching can help.', 'mrcoffee' ); ?>
		</h5>
	</div>

</div>

<?php get_sidebar(); ?>






