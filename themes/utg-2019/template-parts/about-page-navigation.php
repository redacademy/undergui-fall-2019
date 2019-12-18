<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<!-- faq loop for about page -->
<?php if (have_rows('about_page_navigation')) : ?>

	<!-- loop through the rows of data -->
	<?php while (have_rows('about_page_navigation')) : the_row(); ?>

		<ul id="nav-tab" class="nav">
			<li>
				<h2><a href="#story"><?php the_sub_field('page_one'); ?></a></h2>
			</li>
			<li>
				<h2><a href="#testimonials"><?php the_sub_field('page_two'); ?></a></h2>
			</li>
			<li>
				<h2><a href="#partners"><?php the_sub_field('page_three'); ?></a></h2>
			</li>
			<li>
				<h2><a href="#faq"><?php the_sub_field('page_four'); ?></a></h2>
			</li>
		</ul>
<?php endwhile;

else :

// no rows found

endif; ?>