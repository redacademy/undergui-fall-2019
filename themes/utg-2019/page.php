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

		
		<!-- <?php while (have_posts()) : the_post(); ?> -->

			<p><?php the_content(); ?></p>
		
		<!-- <?php endwhile; // End of the loop. 
		?> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>