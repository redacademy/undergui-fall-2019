<?php
/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	

 <?php include get_template_directory() . "/template-parts/about-page-navigation.php"; ?>
 <?php include get_template_directory() . "/template-parts/about-page-our-story.php"; ?>
 <?php include get_template_directory() . "/template-parts/about-page-testimonials.php"; ?>
 <?php include get_template_directory() . "/template-parts/about-page-faq.php"; ?>
 <?php include get_template_directory() . "/template-parts/about-page-partners.php"; ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->


	

<?php get_footer(); ?>
