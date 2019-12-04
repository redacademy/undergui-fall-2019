<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>


<!-- faq loop for about page -->
<?php if( have_rows('faq') ): ?>

	<!-- loop through the rows of data -->
	<?php while ( have_rows('faq') ) : the_row(); ?>

	<!-- display a sub field value -->
	<h3><?php the_sub_field('question'); ?></h3>
	<p><?php the_sub_field('awnser'); ?></p>

	<?php endwhile;

	else :

	// no rows found

	endif; ?>


