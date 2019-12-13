<?php

/**
 * The template for displaying all single posts.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Grabing the post title -->
	<?php the_title(); ?>
	<!--grabing the post address in content box -->
	<?php the_content(); ?>
	<!-- Getting the map-->
	<?php the_field('google_map'); ?>
	<!-- header for learning space-->
	<?php the_field('learning_space_header'); ?>
	<!-- Getting the images for learning space-->

	<?php if( have_rows('learning_space_images') ): ?>
	<?php while ( have_rows('learning_space_images') ) : the_row(); ?>

	<img src="<?php the_sub_field('learning_space_picture'); ?>">

	<?php endwhile;
	else :
	// no rows found
	endif; ?>
	<!-- Getting the paragraph for learning space-->
	<?php the_field('learning_space_paragraph'); ?>
	<!-- Getting the staff header-->
	<?php the_field('staff_members_and_instructors_header'); ?>
	<!-- Getting all the staff images, names and position -->


	<?php if( have_rows('staff') ): ?>
	<?php while ( have_rows('staff') ) : the_row(); ?>

	<img src="<?php the_sub_field('staff_image'); ?>">
	<?php the_sub_field('staff_name'); ?>
	<?php the_sub_field('staff_position'); ?>
	<?php the_sub_field('staff_statement'); ?>

	<?php endwhile;
	else :
	// no rows found
	endif; ?>

<?php endwhile ?>



<!-- cummunity header -->
<h2>Community</h2>

<!-- see more link -->
<p>See More</p>
<!-- Loop for 4 posts -->

<div class="post-container community-posts">
        <?php
        global $post;

        $myposts = get_posts(array(
            'posts_per_page' => 4,
            'hide_empty'     => 1,
            'order'          => 'DESC',
            'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1,
        ));

        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <!-- website default card -->
                <a class="post-card" href="<?php echo get_post_permalink(); ?>">

                    <!-- dynamic post image for card -->

                    <div class="image-container" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
                    </div>

                    <!-- dynamic post title, date, and category -->
                    <div class="post-meta">
                        <div>
                            <p class="post-data"><?php echo get_the_date('F j, Y'); ?></p>
                            <h3 class="post-title"><?= the_title(); ?></h3>
                        </div>
                        <p class="post-category"> <?php $cat_list = get_the_category();
                                                            echo $cat_list[0]->name; ?>
                        </p>
                    </div>
                </a>
        <?php
            endforeach;
            wp_reset_postdata();
        } ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>