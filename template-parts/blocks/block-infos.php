<?php
/**
 * Displays post meta information
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>

<div class="item-info">
		<div class="author"><i class="fa fa-user" aria-hidden="true"></i><?php
			printf( '<a href="%1$s">%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
			?>
		</div>

	<div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></div>

	<?php if ( function_exists('pvc_get_post_views') ) : ?>
	<div class="like"><i class="fa fa-heart" aria-hidden="true"></i><?php echo (int) pvc_get_post_views(); ?></div>
	<?php endif; ?>

	<div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i><a href="<?php the_permalink(); ?>#comments"><?php comments_number( '0', '1', '%' ); ?></a></div>

	<?php $category = get_the_category();
	if( !empty($category[0]->term_id) ):
	?>
	<div class="cat"><i class="fa fa-folder" aria-hidden="true"></i><a href="<?php echo esc_url(get_category_link( $category[0]->term_id )); ?>"><?php echo esc_attr($category[0]->cat_name ); ?></a></div>
	<?php endif; ?>
</div>