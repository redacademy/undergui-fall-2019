<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">




		<form class="selector-container">
			<div>
				<h4>Country</h4>
				<select name="country" id=""></select>

			</div>
			<div>
				<h4>Province</h4>
				<select name="province" id=""></select>

			</div>
			<div>
				<h4>City</h4>
				<select name="city" id=""></select>

			</div>

		</form>


		<?php include get_template_directory() . "/template-parts/locations-page-location-cards.php"; ?>


	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>