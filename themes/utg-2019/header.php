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


			<div class="nav-links">



				<nav id="site-navigation" class="main-navigation" role="navigation">

					<div class="mobile-open-menu">
						<i class="fas fa-chevron-left fa-2x left-arrow"></i>
						<i class="fas fa-chevron-right fa-2x right-arrow"></i>
						<a class="mobile-info-link" href="<?= get_site_url(); ?>/request-info">REQUEST INFO</a>

					</div>

					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu-mobile')); ?>

				</nav><!-- #site-navigation -->

				<a class="mobile-franchise-link" href="<?= get_site_url(); ?>/404">Become a franchise</a>
				<a class="request-info-link" href="<?= get_site_url(); ?>/request-info">REQUEST INFO</a>

			</div>



			<button class="mobile-menu">
				<i class="fas fa-bars fa-4x"></i>
			</button> <!-- mobile only button -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">