<?php

/**
 * Template part for displaying single posts.
 *
 * @package utg_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="class-header">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('', ['class' => 'post-thumbnail attachment-full size-full']); ?>
        <?php endif; ?>



        <div class="class-meta">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

            <div class="class-data-container">

                <span class="class-data bold-data">Ages &nbsp;<?= the_field('ages') ?></span>


                <div class="class-location-contact">
                    <p class="class-data"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Location.svg" alt=""><?= the_field('location') ?></p>
                    <p class="class-data"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt=""><?= the_field('phone_number') ?></p>

                </div>

                <p class="class-data">
                    <!-- <i class="far fa-calendar-alt"></i> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Calendar.svg" alt=""><?= the_field('day') ?>
                    from <?= the_field('start_date') ?> &#45; <?= the_field('end_date') ?>
                </p>

                <?php while (have_rows('time')) : the_row() ?>

                    <p class="class-data"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt=""><?php the_sub_field('start_time') ?> &#45; <?php the_sub_field('end_time') ?></p>

                <?php endwhile; ?>



                <p class="class-data price">&#36; &nbsp;<?= the_field('price') ?>.00</p>
            </div>

        </div>

    </header><!-- .entry-header -->

    <div class="class-content">



        <section class="description">
            <?php      // loop through the rows of data
            while (have_rows('content_box_left')) : the_row(); ?>
                <!-- 
                    // display a sub field value
                    // the_sub_field('sub_field_name'); -->
                <h2 class="class-data"><?= the_sub_field('title') ?></h2>
                <p class="class-data"><?= the_sub_field('paragraph') ?></p>



            <?php endwhile; ?>

        </section>

        <section class="outcomes">
            <?php      // loop through the rows of data
            while (have_rows('content_box_right')) : the_row(); ?>

                <!-- // display a sub field value
                    // the_sub_field('sub_field_name'); -->
                <h2 class="class-data"><?= the_sub_field('title') ?></h2>
                <p class="class-data"><?= the_sub_field('paragraph') ?></p>

            <?php endwhile; ?>

        </section>

        <section class="instructor">
            <div>
                <h2 class="class-data"><?= the_field('the_tile_of_instructor') ?></h2>
                <img class="instructor-image-desktop" src="<?= the_field('image_of_instructor') ?>" alt="image of instructor">

                <p class="class-data"><?= the_field('extra_details') ?></p>

            </div>
            <img class="instructor-image" src="<?= the_field('image_of_instructor') ?>" alt="image of instructor">

        </section>
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html('Pages:'),
            'after'  => '</div>',
        ));
        ?>


    </div><!-- .entry-content -->
    <div class="button-container">
        <a href="<?= site_url('/register/'); ?>"><button class="enroll-button">enroll now</button></a>

    </div>

    <footer class="entry-footer">
        <?php utg_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->