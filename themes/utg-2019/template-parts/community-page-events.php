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

            <?php

            $rows = get_field('images' ); // get all the rows
            $first_row = $rows[0]; // get the first row
            $first_row_image = $first_row['image']; // get the sub field value 

            ?>

            <img src="<?php echo $first_row_image; ?>" />

            <!-- getting the location name for the loop -->
            <?php

            $rows_location = get_field('location' ); // get all the rows
            $first_row_location = $rows_location[0]; // get the first row
            $first_row_location_name = $first_row_location['location_name']; // get the sub field value 

            echo $first_row_location_name;
            ?>


            <?php if( get_field('starting_date') ): ?>
					<?php the_field("starting_date"); ?>
				<?php endif; ?>

                <?php if( get_field('end_date') ): ?>
					 to <?php the_field("end_date"); ?> 
				<?php endif; ?>
    
    
        </div>
    <?php endwhile;
        else : ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

</section>