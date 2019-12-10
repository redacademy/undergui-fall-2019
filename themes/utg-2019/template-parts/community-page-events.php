<section class="community-event-container">

    <h2>Events and important dates you don’t want to miss!.</h2>


    <!-- get post loop for 8 posts to be displayed on cummunity and get more to show up with more button -->
    <?php
    $args = array(
        'orderby' => 'title',
        'post_type' => 'post_events',
        'posts_per_page' => 4
    );
    $the_events = new WP_Query($args);
    ?>

    <div class="post-container">

        <?php if ($the_events->have_posts()) : while ($the_events->have_posts()) : $the_events->the_post(); ?>
                <a class="site-card">

                    <!-- get the image for the event post -->
                    <?php $eventImage = get_field('images')[0]['image']; // get the event post image 
                            ?>
                    <div class="image-container" style="background:url(<?= $eventImage; ?>); background-position: center; background-size:cover;">
                    </div>

                    <div class="post-meta">
                        <div>
                            <!-- check if there's an end date and appends date -->
                            <p class="post-data"><?php (get_field('end_date')) ? the_field("starting_date") && the_field("end_date") : the_field("starting_date"); ?></p>
                            <h3 class="post-title"><?php the_title(); ?></h3>

                        </div>

                        <!-- get the location for the event post -->
                        <p class="post-data"><?= $rows_location = get_field('location')[0]['location_name'];
                                                        ?></p>

                    </div>






<<<<<<< HEAD
                </a>
            <?php endwhile; ?>
=======
                <?php if( get_field('starting_date') ): ?>
					<?php the_field("starting_date"); ?>
				<?php endif; ?>
>>>>>>> 57a2568c2bb6093a120cf6df1a9e726e8712903c

    </div>
<?php
else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</section>