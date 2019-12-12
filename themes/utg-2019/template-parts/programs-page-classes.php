<article class="program-classes">

    <div class="classes">
        <h2><?php the_field('top_paragraph_header'); ?></h2>
        <?php the_field('top_paragraph'); ?>

    </div>

    <div class="chat-bubble">
        <?php the_field('chat_bubble_text'); ?>
        <img class="block-man-chat" src="<?php the_field('chat_bubble_image'); ?>" alt="">
        <img class="block-man-chat-mobile" src="<?php the_field('chat_bubble_image_mobile'); ?>" alt="">
    </div>


</article>