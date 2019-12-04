<?php

/**
 * The template for displaying the footer.
 *
 * @package UTG_Theme
 */

?>
</div><!-- #content -->

<footer id="site-footer" class="site-footer">

	<div class="footer-container">

		<div class="logo-container">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img class="footer-logo-img" src="<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/main-logo.png" alt="main logo">
			</a>
			<div id="footer-address" class="footer-sidebar">		
				<?php if(is_active_sidebar('footer-address')){dynamic_sidebar('footer-address');}?>
			</div>
		</div>

		<div class="socialmedia-footer">
			<ul>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter.svg" alt="twitter-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube-logo"></a></li>
			</ul>
		</div>

		<div class="footer-menu">
			<?php wp_nav_menu(array('theme_location' => 'primary-mobile', 'menu_id' => 'primary-mobile-menu')); ?>
		</div>

		<div id="footer-address" class="footer-sidebar">		
			<?php if(is_active_sidebar('footer-address')){dynamic_sidebar('footer-address');}?>
		</div>

		<div class="copyright-info">
			<?php printf(esc_html('© 2020 Under The GUI')); ?>
		</div>

	</div><!-- footer-container -->

</footer><!-- site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>