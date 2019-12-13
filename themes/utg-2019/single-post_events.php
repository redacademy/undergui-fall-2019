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

	<section class="event-info">
		<div class="header-content-container">
			<div class="events-header">
				<h2><?php the_title(); ?></h2>
			</div>

			<div class="content-container">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="meta-container">
			<div class="date-container">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Clock.svg" alt="time"> &nbsp;
				<?php if( get_field('starting_date') ): ?>
					<?php the_field("starting_date"); ?>
				<?php endif; ?>

				<?php if( get_field('end_date') ): ?>
					to <?php the_field("end_date"); ?> 
				<?php endif; ?>	
				<?php endwhile; // End of the loop. ?>
			</div>

			<div class="location-container">
				<!-- partners loop for loaction for events page -->
				<?php if( have_rows('location') ): ?>
					<!-- loop through the rows of data -->
					<?php while ( have_rows('location') ) : the_row(); ?>
					
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Location.svg" alt="location"> &nbsp;
								
				<div class="location-address">
					<?php the_sub_field('location_name'); ?>
					<?php the_sub_field('location_address'); ?>
				</div>	
				
				<?php endwhile;
				else :
				// no rows found
				endif; ?>
			</div>
		</div>
	</section>

		<div class="events-pics-container">
			<?php if( have_rows('images') ): ?>
			<!-- loop through the rows of data -->
			<?php while ( have_rows('images') ) : the_row(); ?>
			
			<img src="<?php the_sub_field('image');?>">
				
			<?php endwhile;
			else :
				// no rows found
			endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
