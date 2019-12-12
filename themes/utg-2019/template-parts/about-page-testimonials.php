<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<!-- Custom loop for testimonials -->

<!--  product loop -->

<div class="testimonial-header-title">
    <?php if( have_rows('about_page_navigation') ): ?>
            <?php while ( have_rows('about_page_navigation') ) : the_row(); ?>
                <h2 class="about-page-headers"><?php the_sub_field('page_two'); ?></h2>
            <?php endwhile;
            else :
            endif; ?>        
</div>

<div class="testimonial-container">

    <?php
    $args = array(
        'orderby' => 'title',
        'post_type' => 'post_testimonials',
        'posts_per_page' => 6
    );
    $the_testimonials = new WP_Query($args);
    ?>
    <?php if ($the_testimonials->have_posts()) : while ($the_testimonials->have_posts()) : $the_testimonials->the_post(); ?>
            
            <div class="testimonial-box">
                <div class="testimonial-photo" style="background: url(<?php the_field('picture'); ?>); background-size:cover; background-position: center;"></div>
                <div class="testimonial-content"><?php the_content(); ?></div>
                <h3 class="testimonial-name"><?php the_title(); ?></h3>
                <div class="testimonial-title"><?php the_field('title'); ?></div>
            </div>

        <?php endwhile;
        else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</div>

<div class="testimonials-slider" data-flickity='{}'>
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
                <div class="testimonial-box">
                    <div class="testimonial-photo" style="background: url(<?php the_field('picture'); ?>); background-size:cover; background-position: center;"></div>
                    <div class="testimonial-content"><?php the_content(); ?></div>
                    <h3 class="testimonial-name"><?php the_title(); ?></h3>
                    <div class="testimonial-title"><?php the_field('title'); ?></div>
                </div>
			</div>
		<?php endwhile;
		else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</div>


<?php wp_reset_query(); ?>