<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">


	<main id="main" class="site-main" role="main">

		<!-- entering approaches loop  -->
		<section class="approaches-container">
			<?php include get_template_directory() . "/template-parts/fp-approaches.php"; ?>
		</section>
		<!-- exiting approaches loop -->

		<!-- project showcase flickity -->
		<section class="project-showcase">
			<?php include get_template_directory() . "/template-parts/fp-project-showcase.php" ?>
		</section>
		<!-- exit flickity -->

		<!-- latest commuinty posts -->
		<section class="latest-community-events">
			<?php include get_template_directory() . "/template-parts/fp-latest-comm.php" ?>
		</section>

		<!-- testimonials -->
		<section class="testimonials-container">
			<?php include get_template_directory() . "/template-parts/fp-testimonials.php" ?>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>