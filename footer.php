<?php
/**
 * The template for displaying footer
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.0
 */
?>
<?php if( function_exists('carbon_get_post_meta') && carbon_get_post_meta(get_the_ID(), 'csoonfull') ) : ?>

<?php else : ?>
	<!-- FOOTER -->
			<?php
				get_template_part( 'template-parts/footer/footer', 'before' );
				get_template_part( 'template-parts/footer/footer', 'content' );
				get_template_part( 'template-parts/footer/footer', 'after' );
			?>
	<!-- FOOTER END-->
<?php endif; ?>


<?php wp_footer(); ?>

</body>
</html>
