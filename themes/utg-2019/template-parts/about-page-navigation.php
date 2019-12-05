<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<h1><?php wp_title('') ?></h1>
<!-- faq loop for about page -->
<?php if( have_rows('about_page_navigation') ): ?>

	<!-- loop through the rows of data -->
	<?php while ( have_rows('about_page_navigation') ) : the_row(); ?>
		<ul>
			<li><?php the_sub_field('page_one'); ?></p>
			<li><?php the_sub_field('page_two'); ?></p>
			<li><?php the_sub_field('page_three'); ?></p>
			<li><?php the_sub_field('page_four'); ?></p>
		</ul>
	<?php endwhile;

	else :

	// no rows found

	endif; ?>