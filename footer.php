<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bking
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="darckBlue-color">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
					<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
					</div>
					<div class="col-md-2 col-sm-6">
					<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
					</div>
					<div class="col-md-2 col-sm-6">
					<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
					</div>
					<div class="col-md-4 col-sm-12">
					<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="container pb-0 mb-0 d-flex justify-content-center align-items-center">
	&copy; copyright 2021
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
</body>
</html>
