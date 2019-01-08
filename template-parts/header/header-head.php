<?php
/**
 * Displays header on all internal pages
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */

?>

<?php
	$hedblk = mrcoffee_bg_url();
?>

<?php if( !empty($hedblk) ) :  ?>
<!-- PAGE HEAD -->
<header class="entry-header page-head"<?php echo wp_kses_post($hedblk); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display')) bcn_display(); ?>
				</div>
				<h1>
				<?php
					if ( is_front_page() ) :
						_e( 'Home', 'mrcoffee' );
					elseif ( is_archive() && get_post_type() === 'mrtestimonials' ) :
						_e( 'Testimonials', 'mrcoffee' );
					elseif ( is_category() ) :
						single_cat_title();
					elseif ( is_tag() ) :
						single_tag_title();
					elseif ( mrcoffee_is_wc('shop') ) :
						_e( 'Shop', 'mrcoffee' );
					elseif ( is_archive() && get_post_type() === 'product' ) :
						single_cat_title();
					elseif ( is_search() ) :
						printf( __( 'Search Results for: %s', 'mrcoffee' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
					elseif ( is_author() ) :
						printf( __( 'Author: %s', 'mrcoffee' ), '<span class="vcard">' . get_the_author() . '</span>' );
					elseif ( is_day() ) :
						printf( __( 'Day: %s', 'mrcoffee' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Month: %s', 'mrcoffee' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'mrcoffee' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Year: %s', 'mrcoffee' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'mrcoffee' ) ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
						_e( 'Galleries', 'mrcoffee');
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'mrcoffee');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
						_e( 'Statuses', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
						_e( 'Audios', 'mrcoffee' );
					elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
						_e( 'Chats', 'mrcoffee' );
					else :
						the_title();
					endif;
				?>
				</h1>
			</div>
		</div>
	</div>
</header>
<!-- PAGE HEAD END -->
<?php endif; ?>
