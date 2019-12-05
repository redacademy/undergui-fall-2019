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
$args = array( 
'orderby' => 'title',
'post_type' => 'post_testimonials',
'posts_per_page' => 6
);
$the_testimonials = new WP_Query( $args );
?>
<?php if ( $the_testimonials->have_posts() ) : while ( $the_testimonials->have_posts() ) : $the_testimonials->the_post(); ?>
<div>
<h3><?php the_title() ;?></h3>
<div><?php the_field('title');?></div>
<div><img src="<?php the_field('picture');?>"></div>
<div><?php the_field('content');?></div>

</div>
<?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
<?php wp_reset_query(); ?>
       