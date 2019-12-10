<?php
/**
 * The template for displaying all single posts.
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_title(); ?>
		<?php the_date(); ?>
		<?php the_content(); ?>
		<?php the_post_thumbnail(); ?>
		<?php the_field('image');?>

		<div class="socialmedia-footer">
			<ul>
				<li><a href="https://www.facebook.com/underthegui/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook-logo"></a></li>
				<li><a href="https://www.instagram.com/underthegui/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram-logo"></a></li>
				<li><a href="https://twitter.com/underthegui"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter.svg" alt="twitter-logo"></a></li>
				<li><a href="https://www.youtube.com/channel/UCofp7_k1-lrU1UTkf0UYKMw/videos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube-logo"></a></li>
			</ul>
		</div>

			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
