(function($) {
  $('#filter-classes').on('click', function(event) {
    event.preventDefault();

    //all selector values
    let classInput = $('#class').val();
    let locationInput = $('#location').val();
    let semesterInput = $('#semester').val();
    let dayInput = $('#day').val();
    let ageInput = $('#age').val();
    let timeInput = $('#time').val();

    //class card container
    const postContainer = $('.classes-container');

    //ajax url
    let filterPostUrl = utg_vars.rest_url + 'wp/v2/post_classes?';

    //checks if user has made any selections for filtering
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
        postContainer.prepend(
          '<h2 class="please-make-a-selection">Please make a selection.<h2>'
        );
        return;
      }
    }

    //checks every input for a value, then checks if there is an exsisting filter and adds &
    if (classInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[language]=' + classInput;
      } else {
        filterPostUrl += 'filter[language]=' + classInput;
      }
    }
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

    // Grab json data and append data to correct dom elements
    $.ajax({
      type: 'GET',
      url: filterPostUrl + '&_embed',
      datatype: 'JSON'
    })
      .done(function(data) {
        postContainer.empty();

        let counter = 0;
        $.each(data, function appendContent(data, arrayItem) {
          counter++;

          postContainer.append(`
                  <a class="classes-box" href="${arrayItem.link}">

                  <div class="class-image" style="background: url('${arrayItem._embedded['wp:featuredmedia']['0'].source_url}'); background-size: cover; background-position: center;">
                  </div>

              

                  <div class="post-meta">
                      <h3 class="class-title">${arrayItem.title.rendered}</h3>
                      <p class="class-age">Age &nbsp;${arrayItem.acf.ages}</p>
                      <p class="class-location"><img src="${utg_vars.stylesheet_url}/assets/icons/Location.svg" alt="location"> &nbsp;${arrayItem.acf.locations}</p>
                      <p class="class-data "><img src="${utg_vars.stylesheet_url}/assets/icons/Calendar.svg" alt="">
                      From: &nbsp;${arrayItem.acf.start_date} To: &nbsp;${arrayItem.acf.end_date}</p>
                      <p class="class-data"> <img src="${utg_vars.stylesheet_url}/assets/icons/clock.svg" alt="">${arrayItem.acf.time[0].end_time} &#45; ${arrayItem.acf.time[0].start_time}</p>

                  </div>
                  <div class="class-price"> 
                  <p>$&nbsp;${arrayItem.acf.price}</p>
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
