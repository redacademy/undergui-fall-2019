<div class="classes-container">

	<?php
	$args = array(
		'order' => 'ASC',
		'post_type' => 'post_classes',
		'posts_per_page' => 100
	);
	$classes = new WP_Query($args);
	?>
	<?php if ($classes->have_posts()) : while ($classes->have_posts()) : $classes->the_post(); ?>

			<!-- website default card -->
			<a class="classes-card" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">

				<!-- dynamic post image for card -->
				<div class="class-container" style="background:  url('<?php the_post_thumbnail_url('full'); ?>'), <?= the_field('background_color'); ?>  ; background-size: cover; background-position: center;">
                </div>

                <!-- dynamic post title, date, and category -->
				<div class="post-meta">
					<div>
						<p class="post-data">level &nbsp;<?= the_field('level') ?></p>
						<h3 class="post-title"><?= the_title(); ?></h3>
						<!-- <div></div> -->
					</div>

					<div class="classes-subfields">
						<p class="post-data">Ages &nbsp;<?= the_field('age') ?></p>
						<p class="post-data">Prerequisites &nbsp;<?= the_field('prerequisites') ?></p>

					</div>
				</div>
                
			</a>
		<?php endwhile;
		else : ?> <p>Sorry, there are no classes to display</p> <?php endif; ?>

	<?php wp_reset_query(); ?>
</div>