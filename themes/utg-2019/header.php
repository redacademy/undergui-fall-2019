<?php

/**
 * The header for our theme.
 *
 * @package utg_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
		<div class="site-branding">
			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<p class="site-description screen-reader-text"><?php bloginfo('description'); ?></p>
		</div><!-- .site-branding -->

		<div class="franchise-link">
			<a href="<?= get_site_url(); ?>/404">Become a franchise</a>
		</div>
		<header id="masthead" class="site-header" role="banner">

			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/main-logo.png" alt="main logo">

			</a>

			<div class="nav-links" id="nav-links">

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<div class="mobile-open-menu">
						<button>
							<i class="fas fa-chevron-left fa-2x left-arrow "></i>
						</button>
						<a class="mobile-info-link" href="<?= get_site_url(); ?>/request-info">REQUEST INFO</a>
					</div>

					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>

					<?php wp_nav_menu(array('theme_location' => 'primary-mobile', 'menu_id' => 'primary-mobile-menu')); ?>

				</nav><!-- #site-navigation -->

				<a class="mobile-franchise-link" href="<?= get_site_url(); ?>/404">Become a franchise</a>
				<a class="request-info-link" href="<?= get_site_url(); ?>/request-info">REQUEST INFO</a>

			</div>

			<button class="mobile-menu">
				<i class="fas fa-bars fa-4x"></i>
			</button> <!-- mobile only button -->

		</header><!-- #masthead -->

		<!-- Check if on these single post types or error page -->
		<?php
		if (is_singular('post_events') || is_singular('post') || is_singular('post_classes') || is_404()) {
			return;
			// check if the page has a page Thumbnail assigned to it.
		} elseif (has_post_thumbnail()) { ?>

			<?php if (is_page('home')) { ?>

				<div class=" home-hero-banner" style="background: linear-gradient(rgba(22, 27, 56,0.5),rgba(22, 27, 56,0.5)),url(<?= get_the_post_thumbnail_url(); ?>) ; background-size: cover; background-position: center;">
					<div class="home-hero-text">
						<p><?php the_field('sub_text'); ?></p>
						<input type="button" onclick="location.href='<?= get_site_url() . '/programs' ?>';" value="view our programs" />
					</div>
				</div>

			<?php } elseif (is_page('request-info')) { ?>

				<div class="page-banner" style="background:  url(<?= get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">
					<div class="banner-text">

						<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
						<p><?php the_field('sub_text'); ?></p>

						<input type="button" class="faq-button" onclick="location.href='<?= get_home_url() . '/about/#faq' ?>';" value="check out faq" />
					</div>
				</div>



			<?php } elseif (is_page() ||  is_singular('post_programs')) { ?>

				<div class="page-banner" style="background:  url(<?= get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">
					<div class="banner-text">

						<p class="slug"><?= $post->post_name ?></p>
						<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
						<p><?php the_field('sub_text'); ?></p>
					</div>
				</div>

			<?php } elseif (is_singular('post_locations')) { ?>

				<div class="page-banner-locations">
					<div class="banner-text">
						<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
						<p><?php the_field('sub_text'); ?></p>
						<div class="button-container">
							<button class="white-btn" onclick="location.href='<?= get_site_url() . '/programs' ?>';"> view our programs </button>

						</div>

					</div>
					<?php the_field('google_map'); ?>
				</div>

			<?php } elseif (has_post_thumbnail(522)) { ?>
				<div class="post-banner">
					<div class="banner-text">
						<h1 class="post-feature-image-title"><?= get_the_title(522) ?></h1>
						<h3><?= get_the_excerpt(522); ?></h3>

					</div>
					<?= get_the_post_thumbnail(522); ?>
				</div>





			<?php }
			} elseif (is_page('about')) { ?>



			<div class="page-banner-about">
				<div class="banner-text">
					<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
					<?php include get_template_directory() . "/template-parts/about-page-navigation.php"; ?>

				</div>
			</div>

		<?php } else { ?>



			<div class="page-banner-no-image">
				<div class="banner-text">
					<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
					<p><?php the_field('sub_text'); ?></p>
				</div>
			</div>

		<?php } ?>
		<div id="content" class="site-content">