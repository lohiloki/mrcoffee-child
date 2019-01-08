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
	/** Display Top Bar*/
	get_template_part( 'template-parts/header/header', 'topbar' ); ?>


	<!-- HEADER -->
	<div class="header-wrap">
		<header class="top-nav inner-page" data-spy="affix" data-offset-top="34">
			<div class="container">
				<div class="row position-relative">

					<div class="col-lg-2 col-md-2 logo-wrap">
						<?php if ($hslogo = get_theme_mod('mrcoffee_hslogo')) : ?>
							<a href="/" class="small-logo alt"><img src="<?php echo esc_url($hslogo)?>" alt="<?php _e('Home', 'mrcoffee'); ?>"></a>
						<?php else: ?>
							<a href="/" class="small-logo alt text-logo"><?php echo esc_html( get_bloginfo('name') ); ?></a>
						<?php endif; ?>
					</div>

					<div class="col-lg-10 col-md-10">

						<nav class="navbar collapse navbar-collapse" id="coffee-menu">

							<button id="navbar-toggle-mobile" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
								<span class="icon-bar bar-top"></span>
								<span class="icon-bar bar-btn"></span>
							</button>
							<div class="clearfix"></div>

							<!-- MENU HEADER -->
								<div class="col-lg-10 col-md-10">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'primary',
											'container'	=> 'ul',
											'menu_class' => 'main-menu nav',
										 ) );
									?>
								</div>
							<!-- MENU HEADER END -->

							<div class="col-lg-2 col-md-12 pull-right">
								<div class="top-right right">

									<?php if( mrcoffee_is_wc('wc_active') ) : ?>
									<a href="<?php echo wc_get_cart_url(); ?>" class="shop_table cart" title="<?php _e( 'View your shopping cart', 'mrcoffee' ); ?>">
										<span class="name"><?php _e( 'Cart', 'mrcoffee' ); ?></span>
										<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="cart-contents header-cart-count count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
									<?php endif; ?>

									<div id="top-search" class="top-search">
										<input type="text" placeholder="<?php _e( 'Search', 'mrcoffee' ); ?>" value="<?php echo get_search_query(); ?>">
										<a href="#" class="fa fa-search search" aria-hidden="true"></a>
									</div>
								</div>
							</div>

						</nav>

					</div>

					<button id="navbar-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
				        <span class="sr-only"><?php _e( 'Toggle navigation', 'mrcoffee' ); ?></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		     	 	</button>

				</div>
			</div>
		</header>
	</div>
	<!-- HEADER END -->

