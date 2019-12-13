<div class="programs-container">

	<?php
	$args = array(
		'order' => 'ASC',
		'post_type' => 'post_programs',
		'posts_per_page' => 8
	);
	$the_programs = new WP_Query($args);
	?>
	<?php if ($the_programs->have_posts()) : while ($the_programs->have_posts()) : $the_programs->the_post(); ?>

			<!-- website default card -->
			<a class="program-card" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">

				<!-- dynamic post image for card -->

				<div class="image-container" style="background:  url('<?php the_field('card_image') ?>'), <?= the_field('background_color'); ?>  ; background-size: cover; background-position: center;">
				</div>

				<!-- dynamic post title, date, and category -->
				<div class="post-meta">

					<p class="post-data">level &nbsp;<?= the_field('level') ?></p>
					<h3 class="post-title"><?= the_title(); ?></h3>
					<!-- <div></div> -->


					<div class="program-subfields">
						<p class="post-data">Ages &nbsp;<?= the_field('age') ?></p>
						<p class="post-data">Prerequisites &nbsp;<?= the_field('prerequisites') ?></p>

					</div>
				</div>
			</a>
		<?php endwhile;
		else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

	<?php wp_reset_query(); ?>
</div>