<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="banner-404" style="background: url('<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/404jpg-eda.jpg'); background-size: cover; background-position: center;">
					<!-- <h1 class="under-construction-header">404</h1>
					<h3 class="under-construction-text">Oops! We can't find the page you're looking for</h3> -->
					<input type="button" class="home-button" onclick="location.href='<?= get_home_url() ?>';" value="go back home" />
				</header>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
