<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bking
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bking' ); ?></a>

	<!-- start top menu -->

	<div class="top-menu border-bottom align-items-center">
		<div class="container">
			<div class="row ">
				<div class="col-8">
					<ul class="d-flex m-0 list-unstyled ">
						<li class="me-3 d-flex align-items-center">
							<i class="bi bi-telephone fs-4 text-info me-2"></i>
							<!-- <i class="bi bi-headphones fs-4 text-info"></i> -->
							<a class="text-dark text-decoration-none" href="tel: +212678027575">+212678027575</a>
						</li>
						<li class="d-flex align-items-center">
							<i class="bi bi-envelope fs-4 text-danger me-2"></i>
							<a class="text-dark text-decoration-none" href="mailto :contact@bking.store">contact@bking.store</a>
						</li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="d-flex  justify-content-end list-unstyled">
						<li class="d-flex align-items-center">
							<i class="bi bi-globe text-primary fs-4 me-2"></i>
							<a class="text-dark text-decoration-none" href="#">languages</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- end top menu -->



	<header id="masthead" class="site-header">

	
	<div class="container pt-2 pb-2">
		<div class="row nav-header align-items-center">
			<div class="col site-header__logo ">
				<?php the_custom_logo(); ?>
			</div>

			<div class="col-md-5 rounded-3">
			<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
			</div>

			<div class="col cart d-flex align-items-center justify-content-end">
				<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart fs-3 me-2"></i></a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <span class="fw-bolder"><?php echo WC()->cart->get_cart_total(); ?></span></a>

			</div>
		</div>
	</div>



		<nav id="site-navigation" class="main-navigation">

		<div class="container d-flex justify-content-center">
		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="bi bi-list"></i><?php esc_html_e( 'Primary Menu', 'bking' ); ?></button>
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
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
