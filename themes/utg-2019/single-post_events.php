<?php
/**
 * The template for displaying all single posts.
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_title(); ?>




		<?php if( get_field('starting_date') ): ?>
			<?php the_field("starting_date"); ?>
		<?php endif; ?>

		<?php if( get_field('end_date') ): ?>
				to <?php the_field("end_date"); ?> 
		<?php endif; ?>	

			<!-- partners loop for loaction for events page -->
		<?php if( have_rows('location') ): ?>
			<!-- loop through the rows of data -->
			<?php while ( have_rows('location') ) : the_row(); ?>

			<?php the_sub_field('location_name'); ?>
			<?php the_sub_field('location_address'); ?>		
			<?php endwhile;

			else :
			// no rows found
		endif; ?>

		<?php the_content(); ?>

		<?php if( have_rows('images') ): ?>
			<!-- loop through the rows of data -->
			<?php while ( have_rows('images') ) : the_row(); ?>

			<img src="<?php the_sub_field('image');?>">
			
				
			<?php endwhile;

			else :
			// no rows found
		endif; ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
