<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>


<!-- partners loop for about page -->
<?php if (have_rows('approaches')) : ?>

	<!-- loop through the rows of data -->
	<?php while (have_rows('approaches')) : the_row(); ?>

		<!-- display a sub field value from approaches -->
		<div class="approach-item">
			<img src="<?php the_sub_field('approach_img'); ?>" />

			<h3><?php the_sub_field('approach_title'); ?></h3>

			<p><?php the_sub_field('approach_desc'); ?></p>
		</div>
<?php endwhile;

else :

// no rows found

endif; ?>