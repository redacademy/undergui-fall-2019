<?php

/**
 * The template for displaying all single posts.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main location-single" role="main">

		<article>

			<?php while (have_posts()) : the_post(); ?>


				<?php the_field('google_map'); ?>


				<section class="location-learning-space">
					<h2><?= the_field('learning_space_header'); ?></h2>
					<!-- Getting the images for learning space-->

					<div class="location-images-container">
						<?php if (have_rows('learning_space_images')) : ?>
							<?php while (have_rows('learning_space_images')) : the_row(); ?>

								<img src="<?php the_sub_field('learning_space_picture'); ?>">

						<?php endwhile;
							else :
							// no rows found
							endif; ?>

					</div>
					<!-- Getting the paragraph for learning space-->
					<p><?php the_field('learning_space_paragraph'); ?></p>

				</section>

				<section class="location-staff-members">
					<!-- Getting the staff header-->
					<h2><?php the_field('staff_members_and_instructors_header'); ?></h2>
					<!-- Getting all the staff images, names and position -->

					<div class="staff-container">

						<?php if (have_rows('staff')) : ?>
							<?php while (have_rows('staff')) : the_row(); ?>

								<button class="staff-card">
									<div>
										<img src="<?php the_sub_field('staff_image'); ?>">
										<h2><?php the_sub_field('staff_name'); ?></h2>
										<p><?php the_sub_field('staff_position'); ?></p>
									</div>

									<div class="statement">
										<p><?php the_sub_field('staff_statement'); ?></p>
									</div>


								</button>


						<?php endwhile;
							else :
							// no rows found
							endif; ?>

					<?php endwhile ?>
					</div>

				</section>


				<section class="community-container">

					<div class="community-container-header">
						<!-- cummunity header -->
						<h2>Community</h2>

						<!-- see more link -->
						<a href="<?= site_url('/utg/community/') ?>">See More</a>
					</div>
					<!-- Loop for 4 posts -->

					<div class="post-container community-posts">
						<?php
						global $post;

						$myposts = get_posts(array(
							'posts_per_page' => 4,
							'hide_empty'     => 1,
							'order'          => 'DESC',
							'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1,
							'post__not_in' => array(522),

						));

						if ($myposts) {
							foreach ($myposts as $post) :
								setup_postdata($post); ?>
								<!-- website default card -->
								<a class="post-card" href="<?php echo get_post_permalink(); ?>">

									<!-- dynamic post image for card -->

									<div class="image-container" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
									</div>

									<!-- dynamic post title, date, and category -->
									<div class="post-meta">
										<div>
											<p class="post-data"><?php echo get_the_date('F j, Y'); ?></p>
											<h3 class="post-title"><?= the_title(); ?></h3>
										</div>
										<p class="post-category"> <?php $cat_list = get_the_category();
																			echo $cat_list[0]->name; ?>
										</p>
									</div>
								</a>
						<?php
							endforeach;
							wp_reset_postdata();
						} ?>
				</section>

				<div class="button-container">
					<a href="<?= site_url('/utg/programs/') ?>"><button>View Our Programs</button></a>
				</div>

		</article>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>