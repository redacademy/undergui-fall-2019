<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<div class="partners-container">


	<!-- partners loop for about page -->
	<?php if( have_rows('partners') ): ?>

	<!-- loop through the rows of data -->
	<?php while ( have_rows('partners') ) : the_row(); ?>

	<!-- <div class="partners-box"> -->

		<!-- display a sub field value from partners -->
		<h3><?php the_sub_field('name'); ?></h3>

		<?php if( get_sub_field('logo') ): ?>
			<img src="<?php the_sub_field('logo'); ?>" />
		<?php endif; ?>

		<p><?php the_sub_field('content'); ?></p>

		<?php endwhile;

		else :

		// no rows found

		endif; ?>

	<!-- </div> -->
</div>

