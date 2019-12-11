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

		<div class="single-post-container">

			<div class="post-info">

				<div class="title"><h2><?php the_title(); ?></h2></div>
				<div class="date"><?php the_date(); ?></div>
				<div class="content"><?php the_content(); ?></div>

			</div>

			<div class="image-container">
				<div class="image"><?php the_post_thumbnail(); ?></div>
				<div class="image"><img src="<?php the_field('image');?>"></div>
			</div>
			</div>			


			<div class="social-tags">

				<div class="socialmedia">
					<h3>Share with Friends</h3>
					<ul>
						<li><a href="https://www.facebook.com/underthegui/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook-logo"></a></li>
						<li><a href="https://www.instagram.com/underthegui/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram-logo"></a></li>
						<li><a href="https://twitter.com/underthegui"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter.svg" alt="twitter-logo"></a></li>
						<li><a href="https://www.youtube.com/channel/UCofp7_k1-lrU1UTkf0UYKMw/videos"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube-logo"></a></li>
					</ul>
				</div>
				
				<div class="post-category">
					<h3>TAGS</h3>
					<a><p class="category"><?php $cat_list = get_the_category(); echo $cat_list[0]->name; ?></p></a>
				</div>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
