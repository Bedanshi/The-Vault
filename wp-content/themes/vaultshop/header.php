<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaultshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="css/bootstrap/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vaultshop' ); ?></a>


	<div class="announcement-bar pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="announcement-bar__list">
						<li>
						<i class="bi bi-telephone rounded-circle"></i>
						<a href="tel: 9862180588" class="text-decoration-none">9862180588</a>
						</li>

						<li>
						<i class="bi bi-envelope rounded-circle"></i>
						<a href="mailto:subedibedanshi@gmail.com" class="text-decoration-none">subedibedanshi@gmail.com</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8 d-flex justify-content-end">
				<ul class="announcement-bar__list">
						<li>
						<i class="bi bi-truck rounded-circle"></i>
							FREE SHIPPING
						</li>

						<li>
						<i class="bi bi-clock-history rounded-circle"></i>
							30 DAY MONEYBACK GUARANTEE
						</li>

						
						<li>
						<i class="bi bi-person rounded-circle"></i>
							24/7 CUSTOMER SUPPORT
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>








	<header id="masthead" class="site-header">

		<div class="container pt-2 pb-2">
			
			<div class="row align-items-center">


				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start pb-2">
					<?php the_custom_logo(); ?>

				</div>

				<div class="col-sm-12 col-md-5">
				<?php aws_get_search_form( true ); ?>
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end pt-2" style="color: aliceblue">
					<a href="<?php echo wc_get_cart_url(); ?>" ><i class="bi bi-bag-dash pd-2"></i></a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>



		</div>
		
		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container d-flex justify-content-center">


			<div class="row ">

			<div class="col-12 d-flex justify-content-center">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<i class="bi bi-list"></i>
				<?php esc_html_e( 'Primary Menu', 'vaultshop' ); ?></button>
			
			</div>

			<div class="col-12 text-center">
			  <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			  ?>

			</div>
		</div>
		</div>
			
		</nav>





	</header>