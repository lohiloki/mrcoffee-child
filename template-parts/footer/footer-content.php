<?php
/**
 * Display Footer Content
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */
?>
<?php if ( is_active_sidebar( 'sidebar-ft1' ) ||
		   is_active_sidebar( 'sidebar-ft2' ) ||
		   is_active_sidebar( 'sidebar-ft3' ) ||
		   is_active_sidebar( 'sidebar-ft4' )) : ?>
<!-- FOOTER CONTENT SIDEBAR -->
<footer class="footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-ft1' ) ) : ?>
					<aside class="col-md-2 col-sm-6">
						<?php dynamic_sidebar( 'sidebar-ft1' ); ?>
					</aside>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-ft2' ) ) : ?>
					<aside class="col-md-4 col-sm-6">
						<?php dynamic_sidebar( 'sidebar-ft2' ); ?>
					</aside>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-ft3' ) ) : ?>
					<aside class="col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'sidebar-ft3' ); ?>
					</aside>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-ft4' ) ) : ?>
					<aside class="col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'sidebar-ft4' ); ?>
					</aside>
				<?php endif; ?>

			</div>
		</div>
	</div>
</footer>
<!-- FOOTER CONTENT SIDEBAR END -->
<?php endif; ?>