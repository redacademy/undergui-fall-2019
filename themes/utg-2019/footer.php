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

		<div class="logo-copyright-container">

			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img class="footer-logo-img" src="<?= get_stylesheet_directory_uri(); ?>/assets/illustrations/main-logo.png" alt="main logo">
			</a>

			<div class="copyright-info">
				<?php printf(esc_html('© 2020 Under The GUI')); ?>
			</div>

		</div>

		<div class="filler-text-container">
			<div class="filler-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio inventore modi dignissimos eius beatae quod fuga deserunt a tenetur debitis obcaecati amet eveniet quis facere labore dolorum ipsam, nemo earum.</p></div>
			<div class="filler-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio inventore modi dignissimos eius beatae quod fuga deserunt a tenetur debitis obcaecati amet eveniet quis facere labore dolorum ipsam, nemo earum.</p></div>
			<div class="filler-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio inventore modi dignissimos eius beatae quod fuga deserunt a tenetur debitis obcaecati amet eveniet quis facere labore dolorum ipsam, nemo earum.</p></div>
		</div>

		<div class="socialmedia-footer">
			<ul>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter.svg" alt="twitter-logo"></a></li>
				<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube-logo"></a></li>
			</ul>
		</div>

	</div><!-- footer-container -->

</footer><!-- site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>