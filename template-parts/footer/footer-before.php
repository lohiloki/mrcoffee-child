<?php
/**
 * Display Footer Before
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */
?>


<?php if ( is_active_sidebar( 'sidebar-ftbef' ) ) : ?>
	<!-- FOOTER BEFORE SIDEBAR -->
	<aside class="before-sidebar">
		<?php dynamic_sidebar( 'sidebar-ftbef' ); ?>
	</aside>
	<!-- FOOTER BEFORE SIDEBAR END -->
<?php endif; ?>