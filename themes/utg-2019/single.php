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

				<header class="under-construction-banner" style="background: url('<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/404-background-image.png'); background-size: cover; background-position: center;">
					<h1 class="under-construction-text">under construction</h1>
					<input type="button" class="home-button" onclick="location.href='<?= get_home_url() ?>';" value="go back home" />
				</header>
				<!-- </header> -->

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>