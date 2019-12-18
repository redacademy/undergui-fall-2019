<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="about-page-container">


			<!-- story -->
			<div class="tab-pane active" id="story">
				<?php include get_template_directory() . "/template-parts/about-page-our-story.php"; ?>
			</div>

			<!-- testimonials -->
			<div class="tab-pane" id="testimonials">
				<?php include get_template_directory() . "/template-parts/about-page-testimonials.php"; ?>
			</div>

			<!-- faq -->
			<div class="tab-pane" id="faq">
				<?php include get_template_directory() . "/template-parts/about-page-faq.php"; ?>
			</div>

			<!-- partners -->
			<div class="tab-pane" id="partners">
				<?php include get_template_directory() . "/template-parts/about-page-partners.php"; ?>
			</div>

		</div>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>