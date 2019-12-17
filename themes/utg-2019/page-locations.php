<?php

/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">




		<div class="selector-container">


			<form action="" method="get">

				<label for="country">
					<h4>Country</h4>
				</label>
				<select name="country" id="country">
					<option selected value="">Select a country</option>
					<?php $terms = get_terms('country', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<form action="" method="get">

				<label for="province">
					<h4>Province/Region/District</h4>
				</label>
				<select name="province" id="province">
					<option selected value="">Select a province/region/district</option>
					<?php $terms = get_terms('province', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<form action="" method="get">

				<label for="city">
					<h4>City</h4>
				</label>
				<select name="city" id="city">
					<option selected value="">Select a city</option>
					<?php $terms = get_terms('city', array(
						'orderby' => 'id',
						'hide_empty' => false
					));
					foreach ($terms as $term) : ?>
						<option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
					<?php endforeach; ?>
				</select>
			</form>


		</div>

		<div class="locations-button-container">
			<button id="filter-locations">search</button>

		</div>

		<div class="locations-ajax-container">

		</div>

		<?php include get_template_directory() . "/template-parts/locations-page-location-cards.php"; ?>


	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>