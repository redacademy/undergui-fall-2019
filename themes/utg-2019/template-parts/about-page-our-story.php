<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>
<!-- getting the statement content and statement image -->

<div class="our-story">

	<div class="statement">
	
		<?php if( have_rows('about_page_navigation') ): ?>
		<?php while ( have_rows('about_page_navigation') ) : the_row(); ?>
			<h2><?php the_sub_field('page_one'); ?></h2>
		<?php endwhile;
		else :
		endif; ?>

		<p class="statement-p"><?php the_field('statement_content'); ?></p>

		<?php if( get_field('statement_image') ): ?>
			<img class="statement-img" src="<?php the_field('statement_image'); ?>" />
		<?php endif; ?>
	</div> <!-- our_goals loop for about page -->


	<div class="goals">
		<?php if( have_rows('our_goals') ): ?>
		<!-- loop through the rows of data -->
		<?php while ( have_rows('our_goals') ) : the_row(); ?>
			<!-- display a sub field value from our_goals -->
			<!-- getting the image from our goals -->
		<?php if( get_sub_field('goals_feature_image') ): ?>
			<div class="goals-box">
				<img class="goals-feat-img" src="<?php the_sub_field('goals_feature_image'); ?>" />
			<?php endif; ?>
				<div class="goals-content">
					<h3><?php the_sub_field('goals_title'); ?></h3>
					<p><?php the_sub_field('goals_content'); ?></p>
				</div>
			</div>

		<?php endwhile;

		else :
		// no rows found

		endif; ?>

	</div>

	<!-- getting the closing image and statement -->

	<div class="closing">
		<?php if( get_field('closing_statement_image') ): ?>
					<img src="<?php the_field('closing_statement_image'); ?>" />
				<?php endif; ?>

		<p><?php the_field('closing_statement_content'); ?></p>
	</div>

</div> <!-- end of our story -->