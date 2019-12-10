<section class="community-blog-container">

    <h2>From the UTG blog...</h2>
    <div class="category-container">
        <?php
        foreach ((get_categories()) as $category) : ?>
            <a href=" <?= get_category_link($category); ?>">
                <h3><?= $category->name . '<br>'; ?></h3>
            </a>

        <?php endforeach; ?>
    </div>

    <!-- get post loop for 8 posts to be displayed on cummunity and get more to show up with more button -->
    <div class="post-container">
        <?php
        global $post;

        $myposts = get_posts(array(
            'posts_per_page' => 8,
            'hide_empty'     => 1,
            'order'          => 'DESC',
        ));

        if ($myposts) {
            foreach ($myposts as $post) :
                setup_postdata($post); ?>
                <!-- website default card -->
                <a class="site-card" href="<?php echo get_post_permalink(); ?>">

                    <!-- dynamic post image for card -->

                    <div class="image-container" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
                    </div>

                    <?php the_post_thumbnail('full'); ?>
                    <!-- dynamic post title, date, and category -->
                    <div class="post-meta">
                        <div>
                            <h3 class="post-date"><?php echo get_the_date('F j, Y'); ?></h3>

                            <h2 class="post-title"><?= the_title(); ?></h2>
                            <h2 class="post-title-mobile"><?= the_title(); ?></h2>

                        </div>
                        <p> <?php
                                    $cat_list = get_the_category();
                                    echo $cat_list[0]->name;
                                    ?>
                        </p>
                    </div>
                </a>
        <?php
            endforeach;
            wp_reset_postdata();
        } ?>

        <?php utg_numbered_pagination();
        ?>

    </div>

    <div class="button-box">
        <button class="white-btn">SHOW MORE</button>
    </div>

</section>