<?php
$args = array(
	'order' => 'ASC',
	'post_type' => 'post_locations',
	'posts_per_page' => 8
);
$the_locations = new WP_Query($args);
?>
<section class="locations-container">
	<?php if ($the_locations->have_posts()) : while ($the_locations->have_posts()) : $the_locations->the_post(); ?>


			<div class="location-card" href="">

				<!-- dynamic post image for card -->

				<div class="image-container" style="background:  url('	<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
				</div>

				<!-- dynamic post title, date, and category -->
				<div class="post-meta">

					<h3 class="post-title"> <?php the_title(); ?></h3>

					<?php the_field('sub_text') ?>

					<div class="button-container">
						<a href="<?php the_permalink() ?>" class="white-btn">more info</a>

					</div>
				</div>
			</div>




		<?php endwhile;
		else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</section>
<?php wp_reset_query(); ?>