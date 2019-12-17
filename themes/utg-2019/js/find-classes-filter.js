(function($) {
  //   $('.search-submit').on('click', function(event) {
  //     event.preventDefault();
  //   });

  $('#filter-classes').on('click', function(event) {
    event.preventDefault();

    let classInput = $('#class').val();
    let locationInput = $('#location').val();
    let semesterInput = $('#semester').val();
    let dayInput = $('#day').val();
    let ageInput = $('#age').val();
    let timeInput = $('#time').val();

    const postContainer = $('.classes-container');
    let filterPostUrl = utg_vars.rest_url + 'wp/v2/post_classes?';

    console.log(filterPostUrl.length);

    if (
      classInput === '' &&
      locationInput === '' &&
      semesterInput === '' &&
      dayInput === '' &&
      ageInput === '' &&
      timeInput === ''
    ) {
      if ($('.please-make-a-selection').length) {
        return;
      } else {
        console.log('what the shit');
        postContainer.prepend(
          '<h2 class="please-make-a-selection">Please make a selection.<h2>'
        );
        return;
      }
    }

    postContainer.empty();

    if (classInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[language]=' + classInput;
      } else {
        filterPostUrl += 'filter[language]=' + classInput;
      }
    }
    console.log(filterPostUrl.length);
    if (locationInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[location]=' + locationInput;
      } else {
        filterPostUrl += 'filter[location]=' + locationInput;
      }
    }
    if (semesterInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[semester]=' + semesterInput;
      } else {
        filterPostUrl += 'filter[semester]=' + semesterInput;
      }
    }

    if (dayInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[day]=' + dayInput;
      } else {
        filterPostUrl += 'filter[day]=' + dayInput;
      }
    }

    if (ageInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[age]=' + ageInput;
      } else {
        filterPostUrl += 'filter[age]=' + ageInput;
      }
    }

    if (timeInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[time]=' + timeInput;
      } else {
        filterPostUrl += 'filter[time]=' + timeInput;
      }
    }

    console.log(filterPostUrl);

    console.log(classInput);
    console.log(locationInput);
    console.log(semesterInput);
    console.log(dayInput);
    console.log(ageInput);
    console.log(timeInput);

    $.ajax({
      type: 'GET',
      url: filterPostUrl + '&_embed',
      datatype: 'JSON'
    })
      .done(function(data) {
        console.log(data);

        let counter = 0;
        $.each(data, function appendContent(data, arrayItem) {
          counter++;

          // grabs date from rest API
          let newDate = new Date(arrayItem.date);

          // create an array to use month number as an index
          const months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
          ];

          // grab month from rest API and use as index to grab month name
          let monthIndex = newDate.getMonth();
          let monthName = months[monthIndex];

          let newYear = newDate.getFullYear();
          let newDay = newDate.getDate();

          // reformat date to follow style guide
          let newDateFormat = `${monthName} ${newDay}, ${newYear}`;

          console.log(newDateFormat);
          postContainer.append(`
        <a class="classes-box" href="${arrayItem.link}">

        <!-- dynamic post image for card -->
        <div class="class-image" style="background: url('${arrayItem._embedded['wp:featuredmedia']['0'].source_url}'); background-size: cover; background-position: center;">
        </div>

        <!-- dynamic post title, date, and category -->
        <div class="post-meta">
            <h3 class="class-title">${arrayItem.title.rendered}</h3>
            <p class="class-age">Age &nbsp;<?= the_field('ages') ?></p>
            <p class="class-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Location.svg" alt="location"> &nbsp;<?= the_field('location') ?></p>
            <p class="class-data">From: &nbsp;<?= the_field('start_date') ?></p>
            <p class="class-data">To: &nbsp;<?= the_field('end_date') ?></p>
            <?php while (have_rows('time')) : the_row() ?>

                <p class="class-data"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt=""><?php the_sub_field('start_time') ?> &#45; <?php the_sub_field('end_time') ?></p>

            <?php endwhile; ?>
        </div>

        <div class="class-price">
            <p>$&nbsp;<?= the_field('price') ?></p>
        </div>

    </a>
`);
        });
        if (counter < 2) {
          postContainer.prepend('<h2>' + counter + ' Class</h2>');
        } else {
          postContainer.prepend('<h2>' + counter + ' Classes</h2>');
        }
      })
      .fail(function(error) {
        alert('There has been an error!' + error);
      });
  });
})(jQuery);
