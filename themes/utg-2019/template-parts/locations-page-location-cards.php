
<?php
	$args = array(
		'order' => 'ASC',
		'post_type' => 'post_locations',
		'posts_per_page' => 8
	);
	$the_locations = new WP_Query($args);
	?>
	<?php if ($the_locations->have_posts()) : while ($the_locations->have_posts()) : $the_locations->the_post(); ?>

		<?php the_post_thumbnail();?>
        <?php the_title(); ?>
        <?php the_content(); ?>


		<?php endwhile;
		else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

	<?php wp_reset_query(); ?>