<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<section class="search-section">
			<form action="" method="get">

				<label for="class">
					<h4>Class</h4>
				</label>
				<select name="class" id="class">
					<option selected value="">Select a Class</option>
					<?php $terms = get_terms('language', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<form action="" method="get">

				<label for="location">
					<h4>Location</h4>
				</label>
				<select name="location" id="location">
					<option selected value="">Select a location</option>
					<?php $terms = get_terms('location', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<form action="" method="get">

				<label for="semester">
					<h4>Semester</h4>
				</label>
				<select name="semester" id="semester">
					<option selected value="">Select a semester</option>
					<?php $terms = get_terms('semester', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<form action="" method="get">

				<label for="weekday">
					<h4>Day</h4>
				</label>
				<select name="weekday" id="weekday">
					<option selected value="">Select a weekday</option>

					<?php $terms = get_terms('weekday', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>

						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>

			<form action="" method="get">

				<label for="age">
					<h4>Age</h4>
				</label>
				<select name="age" id="age">
					<option selected value="">Select an age</option>

					<?php $terms = get_terms('age', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>

						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>

			</form>
			<form action="" method="get">

				<label for="time">
					<h4>Time</h4>
				</label>
				<select name="time" id="time">
					<option selected value="">Select a time</option>

					<?php $terms = get_terms('time', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>

						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>

				</select>

			</form>

		</section>
		<div class="button-container">
			<button id="filter-classes">search</button>

		</div>
		<?php include get_template_directory() . "/template-parts/classes-page-classes.php"; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>