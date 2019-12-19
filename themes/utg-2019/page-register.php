<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main enroll-page" role="main">


		<!-- Consider refactor from query string to restful by changing param $pc to inline ID -->
		<?php
		if (isset($_GET['pc'])) {
			$pc = $_GET['pc'];
			$pcClean = substr($pc, 5);
		} else {
			return;
		}

		?>


		<?php
		$args = array(
			'post_type' => 'post_classes',
			'p' => $pcClean,

		);
		$the_class = new WP_Query($args);
		?>

		<div class=form-wrapper>
			<div class="progress">

				<div class="progress-track"></div>

				<div id="step1" class="progress-step">
					Step One
				</div>

				<div id="step2" class="progress-step">
					Step Two
				</div>

				<div id="step3" class="progress-step">
					Complete
				</div>
			</div>

			<section class="class-card-container">
				<?php if ($the_class->have_posts()) : while ($the_class->have_posts()) : $the_class->the_post(); ?>

						<div class="classes-box" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">


							<div class="class-header">
								<!-- dynamic post title, date, and category -->
								<?php the_post_thumbnail('full', array('class' => 'class-img')); ?>
								<!-- dynamic post image for card -->
							</div>

							<div class="post-meta">


								<div class="post-data-header">
									<h3 class="class-title"><?= the_title(); ?></h3>
									<h4 class="class-age">Age &nbsp;<?= the_field('ages') ?></h4>
									<h4>$&nbsp;<?= the_field('price') ?></h4>

								</div>



								<div class="post-data">

									<p class="class-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Location.svg" alt="location"><?= the_field('location') ?></p>
									<p class="class-data">
										<!-- <i class="far fa-calendar-alt"></i> -->
										<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Calendar.svg" alt=""><?= the_field('day') ?>
										from <?= the_field('start_date') ?> &#45; <?= the_field('end_date') ?>
									</p>
									<p class="class-day"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Clock.svg" alt="time"><?= the_field('time') ?></p>
								</div>
							</div>
						</div>

					<?php endwhile; // End of the loop. 
					?>
				<?php endif ?>
				<?php wp_reset_query(); ?>
			</section>
			<?php gravity_form(2); ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>