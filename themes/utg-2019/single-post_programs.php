<?php

/**
 * The template for displaying all single posts.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="courses-container">
			<h2>Courses</h2>
			<?php include get_template_directory() . "/template-parts/programs-single-post.php"; ?>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>