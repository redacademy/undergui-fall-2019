<?php
/**
 * The main template file.
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php include get_template_directory() . "/template-parts/community-page-events.php"; ?>
		<?php include get_template_directory() . "/template-parts/community-page-posts.php"; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
