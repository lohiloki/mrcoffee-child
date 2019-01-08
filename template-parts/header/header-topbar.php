<?php
/**
 * Displays top bar in header
 *
 * @package    WordPress
 * @subpackage Mrcoffee
 * @version 1.2
 */

?>


<?php
	$phone = get_theme_mod('mrcoffee_phone');
	$mail = get_theme_mod('mrcoffee_email');
	$skype = get_theme_mod('mrcoffee_skype');
	$socico = mrcoffee_get_socicons();

	if( !empty($phone) || !empty($mail) || !empty($skype) || !empty($socico)) :
?>

<!-- TOP BAR -->
<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-9">
				<ul class="top-bar-contacts">
					<?php if ( $phone ) : ?>
					<li><a href="tel:<?php echo esc_attr($phone)?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_attr($phone); ?></a></li>
					<?php endif; ?>

					<?php if ( $mail ) : ?>
					<li class="mail"><a href="mailto:<?php echo esc_attr($mail)?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo esc_attr($mail); ?></a></li>
					<?php endif; ?>

					<?php if ( $skype ) : ?>
						<li class="skype"><a href="https://api.whatsapp.com/send?phone=<?php echo esc_attr($skype)?>"><i class="fa fa-whatsapp" aria-hidden="true"></i><?php echo esc_attr($skype); ?></a></li>
					<?php endif; ?>
				</ul>
			</div>
			<?php if ( $socico ) : ?>
				<div class="col-md-2 col-sm-3 top-social-wrap">
					<?php echo wp_kses_post( $socico ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- TOP BAR END -->
<?php endif; ?>