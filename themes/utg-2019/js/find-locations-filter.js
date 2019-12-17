(function($) {
  $('#filter-locations').on('click', function(event) {
    event.preventDefault();

    //all selector values
    let countryInput = $('#country').val();
    let provinceInput = $('#province').val();
    let cityInput = $('#city').val();

    console.log(countryInput);
    console.log(provinceInput);
    console.log(cityInput);
    //class card container
    const postContainer = $('.locations-container');
    const ajaxContainer = $('.locations-ajax-container');
    //ajax url
    let filterPostUrl = utg_vars.rest_url + 'wp/v2/post_classes?';

    //checks if user has made any selections for filtering
    if (countryInput === '' && provinceInput === '' && cityInput === '') {
      if ($('.please-make-a-selection').length) {
        return;
      } else {
        ajaxContainer.prepend(
          `<h2 class='please-make-a-selection'>Please make a selection.</h2>`
        );
        return;
      }
    } else {
      postContainer.empty();
      ajaxContainer.append(
        `<img class='loading-gif' src='${utg_vars.stylesheet_url}/assets/location-gif-slow.gif'>`
      );
    }

    //checks every input for a value, then checks if there is an exsisting filter and adds &
    if (countryInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[country]=' + countryInput;
      } else {
        filterPostUrl += 'filter[country]=' + countryInput;
      }
    }
    if (provinceInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[province]=' + provinceInput;
      } else {
        filterPostUrl += 'filter[province]=' + provinceInput;
      }
    }
    if (cityInput.length) {
      if (filterPostUrl.includes('filter')) {
        filterPostUrl += '&filter[city]=' + cityInput;
      } else {
        filterPostUrl += 'filter[city]=' + cityInput;
      }
    }

    //updated url with embedded info and adds up to 99 posts
    filterPostUrl += '&_embed&per_page=99';

    // Grab json data and append data to correct dom elements
    $.ajax({
      type: 'GET',
      url: filterPostUrl,
      datatype: 'JSON'
    })
      .done(function(data) {
        postContainer.empty();
        ajaxContainer.empty();

        $.each(data, function appendContent(data, arrayItem) {
          postContainer.append(`
                  <a class='classes-box' href='${arrayItem.link}'>

                  <div class='class-image' style='background: url('${arrayItem._embedded['wp:featuredmedia']['0'].source_url}'); background-size: cover; background-position: center;'>
                  </div>

              

                  <div class='post-meta'>
                      <h3 class='class-title'>${arrayItem.title.rendered}</h3>
                      <p class='class-age'>Age &nbsp;${arrayItem.acf.ages}</p>
                      <p class='class-location'><img src='${utg_vars.stylesheet_url}/assets/icons/Location.svg' alt='location'> &nbsp;${arrayItem.acf.location}</p>
                      <p class='class-data '><img src='${utg_vars.stylesheet_url}/assets/icons/Calendar.svg' alt=''>
                      From: &nbsp;${arrayItem.acf.start_date} To: &nbsp;${arrayItem.acf.end_date}</p>
                      <p class='class-data'> <img src='${utg_vars.stylesheet_url}/assets/icons/clock.svg' alt=''>${arrayItem.acf.time[0].end_time} &#45; ${arrayItem.acf.time[0].start_time}</p>

                  </div>
                  <div class='class-price'> 
                  <p>$&nbsp;${arrayItem.acf.price}</p>
              </div>
              </a>
          `);
        });
      })
      .fail(function(error) {
        if ($('.error-message').length) {
          return;
        } else {
          postContainer.prepend(
            `<h2 class='error-message'>There seems to have been an error - code ${error.status}<h2>`
          );
          return;
        }
      });
  });
})(jQuery);
