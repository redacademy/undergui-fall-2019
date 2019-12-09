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
    <?php if ($the_events->have_posts()) : while ($the_events->have_posts()) : $the_events->the_post(); ?>
        <div class="eventg-box">
            <h3 class="event-name"><?php the_title(); ?></h3>
            <?php the_field('location'); ?>
    
    
        </div>
    <?php endwhile;
        else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</section>