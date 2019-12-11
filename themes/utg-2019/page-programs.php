<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php include get_template_directory() . "/template-parts/programs-page-classes.php"; ?>
		<?php include get_template_directory() . "/template-parts/programs-page-program-cards.php"; ?>
		<?php include get_template_directory() . "/template-parts/programs-page-curriculum.php"; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>