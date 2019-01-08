<?php
/**
 * Template part for displaying non post content for term or search pages
 *
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>

<div class="blog-item">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<h2 class="search-404-title"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mrcoffee' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></h2>

		<?php elseif ( is_search() ) : ?>
			<h2 class="search-404-title"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'mrcoffee' ); ?></h2>

		<?php else : ?>
			<h2 class="search-404-title"><?php _e( 'Eggs are about to HATCH, so get ready for our blogs!', 'mrcoffee' ); ?></h2>

		<?php endif; ?>

</div>







