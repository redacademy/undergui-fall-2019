<section class="community-blog-container">

    <h2>From the UTG blog...</h2>
    <div class="category-container">
        <a href="#" class="category-link">All</a>
        <?php
        foreach ((get_categories()) as $category) : ?>
            <a class="category-link" id="cat-<?= $category->term_id ?>" href=" <?= get_category_link($category); ?>">
                <?= $category->name . '<br>'; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- get post loop for 8 posts to be displayed on cummunity and get more to show up with more button -->
    <div class="post-container community-posts">
        <?php
        global $post;

        $myposts = get_posts(array(
            'posts_per_page' => 4,
            'hide_empty'     => 1,
            'order'          => 'DESC',
            'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1,
            'post__not_in' => array(522),
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

        <?php utg_numbered_pagination();
        ?>

    </div>

    <div class="gif-container">
    </div>
    <div class="no-more-posts-container">
        <h2>Sorry, there are no more posts!</h2>
    </div>
    <div class="button-box">
        <button class="white-btn show-more-posts">SHOW MORE</button>
    </div>

</section>