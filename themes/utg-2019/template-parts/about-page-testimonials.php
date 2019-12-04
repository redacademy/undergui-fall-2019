<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>



<!-- Custom loop for testimonials -->
	
<!--  product loop -->
<?php
        $args = [
            'post_type' => 'Testimonial',
            'order' => 'ASC',
            'posts_per_page' => 6
        ];
        $utg_testimonials_about_page_loop = new WP_query($args); 
        ?>
        
            <?php while ($utg_testimonials_about_page_loop->have_posts()) : ($utg_testimonials_about_page_loop->the_post()); ?>

						<?php the_title(); ?>
                        <?php the_field('content'); ?>
                        <?php the_field('title'); ?>
                        <img src="<?php the_field('picture'); ?>"/>

                    

               
            <?php endwhile;
            wp_reset_postdata(); ?>
       