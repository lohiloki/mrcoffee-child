<?php
/**
 * Display Footer After
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */
?>

<?php if( get_theme_mod('mrcoffee_footer_copyright') ) : ?>
<!-- FOOTER AFTER SIDEBAR -->
<div class="bottom-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="copyrights">
				<?php echo apply_filters( 'content',  get_theme_mod('mrcoffee_footer_copyright') ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FOOTER AFTER SIDEBAR END -->
<?php endif; ?>