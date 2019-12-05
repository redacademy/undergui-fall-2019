<?php
/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>
<!-- getting the statement content and statement image -->

<p><?php the_field('statement_content'); ?></p>

<?php if( get_field('statement_image') ): ?>
			<img src="<?php the_field('statement_image'); ?>" />
		<?php endif; ?>
<!-- our_goals loop for about page -->
<?php if( have_rows('our_goals') ): ?>
	<!-- loop through the rows of data -->
	<?php while ( have_rows('our_goals') ) : the_row(); ?>
		<!-- display a sub field value from our_goals -->
		<!-- getting the image from our goals -->
		<?php if( get_sub_field('goals_feature_image') ): ?>
			<img src="<?php the_sub_field('goals_feature_image'); ?>" />
		<?php endif; ?>
		<h3><?php the_sub_field('goals_title'); ?></h3>
		<p><?php the_sub_field('goals_content'); ?></p>

<?php endwhile;

else :

// no rows found

endif; ?>


<!-- getting the closing image and statement -->

<?php if( get_field('closing_statement_image') ): ?>
			<img src="<?php the_field('closing_statement_image'); ?>" />
		<?php endif; ?>

<p><?php the_field('closing_statement_content'); ?></p>