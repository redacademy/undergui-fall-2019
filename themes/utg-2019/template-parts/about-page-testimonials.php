<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<!-- Custom loop for testimonials -->

<!--  product loop -->

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
            <div class="testemonial-box">
                <div class="testimonial-photo" style=" background: url(<?php the_field('picture'); ?>); background-size:cover; background-position: center;"></div>
                <div class="testimonial-content"><?php the_field('content'); ?></div>
                <h3 class="testimonial-name"><?php the_title(); ?></h3>
                <div class="testimonial-title"><?php the_field('title'); ?></div>
            </div>
        <?php endwhile;
        else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</div>

<?php wp_reset_query(); ?>