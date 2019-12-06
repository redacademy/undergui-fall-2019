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
		
		<ul id="nav-tab" class="nav">
			<li><a href="#story"><?php the_sub_field('page_one'); ?></a></li>
			<li><a href="#testimonials"><?php the_sub_field('page_two'); ?></a></li>
			<li><a href="#partners"><?php the_sub_field('page_three'); ?></a></li>
			<li><a href="#faq"><?php the_sub_field('page_four'); ?></a></li>
		</ul>
	<?php endwhile;

	else :

	// no rows found

	endif; ?>