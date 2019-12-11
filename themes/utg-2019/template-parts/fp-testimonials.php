<?php

/**
 * Template part for displaying project testimonies content in front-page.php.
 *
 * @package utg_Theme
 */

?>

<div class="testimonials-container">

	<h2 class="testimonials-header">Testimonials</h2>

	<?php
	$args = array(
		'orderby' => 'title',
		'post_type' => 'post_testimonials',
		'post_per_page' => -1
	);
	$the_testimonials = new WP_Query($args);
	?>
	<?php if ($the_testimonials->have_posts()) : while ($the_testimonials->have_posts()) : $the_testimonials->the_post(); ?>
			<div class="testimonial-item">
				<div class="testimonial-photo" style="background: url(<?php the_field('picture'); ?>); background-size:cover; background-position: center;"></div>
				<div class="testimonial-content"><?php the_content(); ?></div>
			</div>
		<?php endwhile;
		else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</div>

<?php wp_reset_query(); ?>