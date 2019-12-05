<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>
<!-- approach header -->
<h2 class="approaches-header"><?php the_field('header-label'); ?></h2>

<!-- approaches wrapper -->
<div class="approaches-wrapper">

	<!-- entering loop for our approaches front-page section -->
	<?php if (have_rows('approaches')) : ?>

		<!-- loop through the rows of data -->
		<?php while (have_rows('approaches')) : the_row(); ?>

			<!-- display a sub field value from approaches -->
			<div class="approach-item">
				<!-- image icon -->
				<img src="<?php the_sub_field('approach_img'); ?>" />
				<!-- approach title -->
				<h3><?php the_sub_field('approach_title'); ?></h3>
				<!-- approach content -->
				<p><?php the_sub_field('approach_desc'); ?></p>
			</div>

	<?php endwhile;

	else :

	// no rows found

	endif; ?>
	<!-- exiting loop -->
</div>