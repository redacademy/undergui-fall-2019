<section class="community-blog-container">

    <h2>From the UTG blog...</h2>
    <div class="category-container">
        <?php
        foreach ((get_categories()) as $category) : ?>
            <h3><?= $category->name . '<br>'; ?></h3>

        <?php endforeach; ?>
    </div>

    <!-- get post loop for 8 posts to be displayed on cummunity and get more to show up with more button -->
    <div class="post-container">
        <?php
        global $post;

        $myposts = get_posts(array(
            'posts_per_page' => -1,
            'hide_empty'     => 1,
        ));

        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <a class="site-card" href="<?php echo get_post_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="post-meta">
                        <div>
                            <h3 class="post-date"><?php echo get_the_date('F j, Y'); ?></h3>
                            <h2 class="post-title"><?= get_the_title(); ?></h2>

                        </div>
                        <p class="post-category"><?= get_sub_field($category) ?></p>
                    </div>
                </a>
        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>

    </div>

</section>