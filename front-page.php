<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bking
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="container pt-3 pb-3">
				<div id="carouselExampleControls" class="carousel slide overflow-hidden rounded-3" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="<?php echo get_template_directory_uri(); ?>/image/img-1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri(); ?>/image/img-2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri(); ?>/image/img3.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
		</section>

		

		<!-- start Categories -->

		<section class="container categories ">
			<h2 class="text-center">Categories</h2>
			<div class="row">
				<div class="col-md-3 col-sm-6 mb-4">
				<a class="col-md-12 h-100 w-100 d-inline-block position-relative row-cols-4 overflow-hidden" href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/img-cat.png" class="h-100 w-100 " alt="..."></a>
				</div>
				<div class="col-md-3 col-sm-6 mb-4" >
				<a class="col-md-12 h-100 w-100 d-inline-block position-relative row-cols-4 overflow-hidden" href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/img-cat.png" class="h-100 w-100 " alt="..."></a>
				</div>
				<div class="col-md-3 col-sm-6 mb-4">
				<a class="col-md-12 h-100 w-100 d-inline-block position-relative row-cols-4 overflow-hidden" href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/img-cat.png" class="h-100 w-100 " alt="..."></a>
					
				</div>
				<div class="categories-list col-md-3 col-sm-6 mb-4">
					<a class="col-md-12 h-100 w-100 d-inline-block position-relative row-cols-4 overflow-hidden" href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/img-cat.png" class="h-100 w-100 " alt="..."></a>
				</div>

			</div>
		</section>

		<!-- end Categories -->

		<!-- start Popular Products -->

		<section class="container popular-products">
			<h2 class="text-center">Popular Products</h2>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products limit="4" columns="4"]'); ?>
			</div>
		</section>

		<!-- end Popular Products -->


		<!-- start New Products -->

		<section class="container new-products">
			<h2 class="text-center">New Products</h2>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products limit="4" columns="4" order="DESC"]'); ?>
			</div>
		</section>

		<!-- end New Products -->


		<!-- start service -->
			<section class="container service">
			<!-- <div class="row"> -->
				<div class="row">
					<div class="col-md-3 col-sm-6 mb-4 ">
						<div class="d-flex justify-content-center align-items-center rounded-3 sub-service p-3">
							<i class="bi bi-truck me-2 fs-3"></i>
							<p class="fs-5">Lorem Ipsum is simply
							dummy</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 mb-4 " >
						<div class="d-flex justify-content-center align-items-center rounded-3 sub-service p-3">
							<i class="bi bi-arrow-repeat me-2 fs-3"></i>
							<p class="fs-5">Lorem Ipsum is simply
							dummy</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 mb-4">
						<div class="d-flex justify-content-center align-items-center rounded-3 sub-service p-3">
							<i class="bi bi-emoji-smile me-2 fs-3"></i>
							<p class="fs-5">Lorem Ipsum is simply
							dummy</p>
						</div>
					</div>
					<div class="categories-list col-md-3 col-sm-6 mb-4">
						<div class="d-flex justify-content-center align-items-center rounded-3 sub-service p-3">
							<i class="bi bi-percent me-2 fs-3"></i>
							<p class="fs-5">Lorem Ipsum is simply
							dummy</p>
						</div>
					</div>

				</div>
			</section>
		<!-- end service -->

		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
