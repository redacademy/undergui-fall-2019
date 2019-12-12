<?php

/**
 * Template part for displaying single posts.
 *
 * @package utg_Theme
 */

?>



<?php

$classes = get_field('relationship', get_the_ID());

if ($classes) : ?>
    <?php foreach ($classes as $post) : // variable must be called $post (IMPORTANT) 
            ?>
        <?php setup_postdata($post); ?>

        <!-- website default card -->
        <div class="class-card" href="<?php echo get_post_permalink(); ?>">

            <!-- dynamic post image for card -->

            <div class="image-container" style="background:  url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
            </div>

            <!-- dynamic post title, date, and category -->
            <div class="post-meta">
                <a class="class-description" href="<?= get_post_permalink(); ?>">

                    <h3 class="post-title"><?php the_title(); ?></h3>

                    <div class="content-container">
                        <?php if (have_rows('content_box_left')) : ?>
                            <?php while (have_rows('content_box_left')) : the_row(); ?>
                                <p><?php the_sub_field('paragraph'); ?></p>

                        <?php endwhile;
                                endif; ?>

                    </div>

                    <div class="program-subfields">
                        <p class="post-data">Prerequisites &nbsp;<?= the_field('prerequisite') ?></p>
                        <p class="post-data">Ages &nbsp;<?= the_field('ages') ?></p>

                    </div>

                </a>
                <div class="link-container">
                    <a href="<?= get_site_url(); ?>/classes" class="find-classes-button white-btn">find classes</a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
        ?>
<?php endif; ?>