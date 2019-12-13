<?php

/**
 * Template part for displaying project showcase content in front-page.php.
 *
 * @package utg_Theme
 */

?>

<div class="project-showcase-container">

	<h2 class="showcase-header">Project showcase</h2>

	<div class="projects-wrapper" data-flickity='{}'>

		<!-- entering loop -->
		<?php if (have_rows('showcases')) : ?>

			<?php while (have_rows('showcases')) : the_row(); ?>

				<!-- display sub field of showcase -->
				<div class="single-project-container">
					<!-- image url -->
					<div class="project-media"><?php the_sub_field('showcase_media'); ?></div>
					<!-- project description -->
					<p class="project-desc"><?php the_sub_field('showcase_paragraph'); ?></p>
				</div>

		<?php endwhile;

		else :

		// no rows found

		endif; ?>
		<!-- exit loop -->
	</div>
</div>