<div class="classes-container">

	<?php
	$args = array(
		'order' => 'ASC',
		'post_type' => 'post_classes',
		'posts_per_page' => 100
	);
	$classes = new WP_Query($args);
	?>
	<?php if ($classes->have_posts()) : while ($classes->have_posts()) : $classes->the_post(); ?>

        <!-- website default card -->
        <a class="classes-box" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">

            <!-- dynamic post image for card -->
            <div class="class-image" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
            </div>

            <!-- dynamic post title, date, and category -->
            <div class="post-meta">
                <div>
                    <h3 class="post-title"><?= the_title(); ?></h3>
                    <p class="class-data">Location &nbsp;<?= the_field('location') ?></p>
                    <p class="class-data">Age &nbsp;<?= the_field('ages') ?></p>
                    <p class="class-data">Start Date &nbsp;<?= the_field('start_date') ?></p>
                    <p class="class-data">End Date &nbsp;<?= the_field('end_date') ?></p>
                    <p class="class-data">Time &nbsp;<?= the_field('time') ?></p>
                    <p class="class-data">Price &nbsp;<?= the_field('price') ?></p>
                    <!-- <p class="class-data">Phone Number &nbsp;<?= the_field('phone_number') ?></p> -->
                    <!-- <p class="class-data">Prerequisites &nbsp;<?= the_field('prerequisite') ?></p> -->
                    <!-- <p class="class-data">Content Box Left &nbsp;<?= the_sub_field('content_box_left') ?></p> -->
                    <!-- <p class="class-data">Content Box Right &nbsp;<?= the_sub_field('content_box_right') ?></p> -->
                    <!-- <p class="class-data">The Tile of Instructor &nbsp;<?= the_field('the_tile_of_instructor') ?></p> -->
                    <!-- <p class="teacher-image">Image of Instructor &nbsp;<img src="<?= the_field('image_of_instructor') ?>" alt="image of instructor"></p> -->
                    <!-- <p class="class-data">Extr Details &nbsp;<?= the_field('extra_details') ?></p> -->
                    <!-- <div></div> -->
                </div>
            </div>
        </a>
    <?php endwhile;
    else : ?> <p>Sorry, there are no classes to display</p> <?php endif; ?>

	<?php wp_reset_query(); ?>
</div>