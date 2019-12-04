<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div class="home-hero-banner">
		<?php the_post_thumbnail(); ?>
		<div class="home-hero-text">
			<h1>Coders will be the wizards of tomorrow</h1>
			<button class="white-btn">view our programs</button>
		</div>
	</div>
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>