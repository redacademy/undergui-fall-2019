<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>
<div class="faq-title">
	<?php if( have_rows('about_page_navigation') ): ?>
		<?php while ( have_rows('about_page_navigation') ) : the_row(); ?>
			<h2 class="about-page-headers"><?php the_sub_field('page_four'); ?></h2>
		<?php endwhile;
		else :
		endif; ?>
</div>

<section class="faq-container">
	<!-- faq loop for about page -->
	<?php if (have_rows('faq')) : ?>

		<!-- loop through the rows of data -->
		<?php while (have_rows('faq')) : the_row(); ?>

			<article class="faq-item">

				<!-- display a sub field value -->

				<button class="faq-question-container">
					<!-- <img src="" alt=""> -->
					<div class="faq-question">
						<h2>q</h2>
						<h3><?php the_sub_field('question'); ?></h3>

					</div>
					<i class="fas fa-chevron-down fa-2x down"></i>
					<i class="fas fa-chevron-up fa-2x up"></i>

				</button>

				<div class="faq-answer-container">
					<!-- <img src="" alt=""> -->
					<h2>a</h2>
					<div class="faq-answer">
						<?php if (have_rows('answer')) : ?>
							<?php while (have_rows('answer')) : the_row(); ?>
								<p><?php the_sub_field('answer_text'); ?></p>
						<?php endwhile;

								else :

								// no rows found

								endif; ?>

					</div>
				</div>

			</article>
	<?php endwhile;

	else :

	// no rows found

	endif; ?>


</section>