<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>
<div class="partners-title">	
	<?php if( have_rows('about_page_navigation') ): ?>
		<?php while ( have_rows('about_page_navigation') ) : the_row(); ?>
			<h2 class="about-page-headers"><?php the_sub_field('page_three'); ?></h2>
		<?php endwhile;
		else :
		endif; ?>
</div>

<div class="partners-container">


	<!-- partners loop for about page -->
	<?php if( have_rows('partners') ): ?>

	<!-- loop through the rows of data -->
	<?php while ( have_rows('partners') ) : the_row(); ?>

	<div class="partners-box">

		<div class="img-box">
			<?php if( get_sub_field('logo') ): ?>
				<img src="<?php the_sub_field('logo'); ?>" />
			<?php endif; ?>
	</div>

		<div class="partners-info">
			<!-- display a sub field value from partners -->
			<h3><?php the_sub_field('name'); ?></h3>

			<p><?php the_sub_field('content'); ?></p>

		</div>

	</div><!-- end of partners box -->


		<?php endwhile;

		else :

		// no rows found

		endif; ?>

</div>

