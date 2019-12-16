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


			<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
				<fieldset>
					<label for="class-search">
						<h4>Class</h4>
					</label>
					<div class="search-container">
						<input type="search" class="search-field" id="class-search" placeholder="SEARCH ..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
						<button class="search-submit">
							<span class="icon-search" aria-hidden="true">
								<i class="fa fa-search fa-2x"></i>
							</span>
							<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
						</button>

					</div>
				</fieldset>
			</form>

			<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
				<fieldset>
					<label for="location-search">
						<h4>Location</h4>
					</label>
					<div class="search-container">
						<input type="search" class="search-field" id="location-search" placeholder="SEARCH ..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
						<button class="search-submit">
							<span class="icon-search" aria-hidden="true">
								<i class="fa fa-search fa-2x"></i>
							</span>
							<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
						</button>

					</div>
				</fieldset>
			</form>

			<form action="" method="get">

				<label for="semester">
					<h4>Semester</h4>
				</label>
				<select name="semester" id="semester">
					<option disabled selected value="today">Select a semester</option>
					<option value="today">summer</option>
					<option value="today">yesterday</option>


				</select>
			</form>
			<form action="" method="get">

				<label for="day">
					<h4>Day</h4>
				</label>
				<select name="day" id="day">
					<option disabled selected value="today">Select a day</option>
					<option value="today">today</option>
					<option value="today">yesterday</option>


				</select>
			</form>

			<form action="" method="get">

				<label for="age">
					<h4>Age</h4>
				</label>
				<select name="age" id="age">
					<option disabled selected value="today">Select an age</option>
					<option value="69">69</option>
					<option value="69">420</option>

				</select>

			</form>
			<form action="" method="get">

				<label for="time">
					<h4>Time</h4>
				</label>
				<select name="time" id="time">
					<option disabled selected value="today">Select a time</option>
					<option value="69">noon</option>
					<option value="69">420</option>

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