<?php
/**
 * The template for displaying the footer.
 *
 * @package UTG_Theme
 */

?>
		</div><!-- #content -->

		<footer id="site-footer" class="site-footer">
			
			<div class="copyright-info">
				<?php printf( esc_html('© 2020 Under The GUI')); ?></a>
			</div>

			<div class="socialmedia-footer">
				<ul>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook-logo"></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram-logo"></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter.svg" alt="twitter-logo"></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube-logo"></a></li>
				</ul>
			</div>

		</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
