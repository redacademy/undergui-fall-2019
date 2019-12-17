<?php
/**
 * The template for displaying under construction page (not found).
 *
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="under-contstruction">

				<header class="banner-under-construction">
					
					<img src="<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/404-background-image.png"/>
					
					<!-- <a class="home-btn-404" href="#">Go Back Home</a> -->

				</header>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>