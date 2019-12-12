<?php

/**
 * Template part for displaying project showcase content in front-page.php.
 *
 * @package utg_Theme
 */

?>

<h2> The latest from our community</h2>

<div class="latest-events-container">

	<!-- get post loop for 3 posts to be displayed on cummunity and get more to show up with more button -->
	<div class="event-container">
		<?php
		$args = array(
			'orderby' => 'title',
			'post_type' => 'post_events',
			'posts_per_page' => 3
		);
		$the_events = new WP_Query($args);
		?>


		<?php if ($the_events->have_posts()) : while ($the_events->have_posts()) : $the_events->the_post(); ?>
				<a href="<?php echo get_post_permalink(); ?>" class="event-card">

					<!-- get the image for the event post -->
					<?php $eventImage = get_field('images')[0]['image']; // get the event post image 
							?>
					<div class="image-container" style="background:url(<?= $eventImage; ?>); background-position: center; background-size:cover;">
					</div>

					<div class="post-meta">
						<div>
							<!-- check if there's an end date and appends date -->
							<p class="post-data"><?php (get_field('end_date')) ? the_field("starting_date") && the_field("end_date") : the_field("starting_date"); ?></p>
							<h3 class="post-title"><?php the_title(); ?></h3>

						</div>

						<!-- get the location for the event post -->
						<p class="post-data"><?= $rows_location = get_field('location')[0]['location_name']; ?></p>
					</div>
				</a>
			<?php endwhile; ?>

	</div>
<?php
else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
</div>

<input type="button" onclick="location.href='<?= get_home_url() . '/community' ?>';" value="more" />