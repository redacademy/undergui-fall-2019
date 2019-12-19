(function($) {
  $('#filter-locations').on('click', function(event) {
    event.preventDefault();

    //all selector values
    let countryInput = $('#country').val();
    let provinceInput = $('#province').val();
    let cityInput = $('#city').val();

    //class card and ajax container
    const postContainer = $('.locations-container');
    const ajaxContainer = $('.locations-ajax-container');
    //ajax url
    let filterPostUrl = utg_vars.rest_url + 'wp/v2/post_locations?';

    //checks if user has made any selections for filtering
    if (countryInput === '' && provinceInput === '' && cityInput === '') {
      if ($('.please-make-a-selection').length) {
        return;
      } else {
        ajaxContainer.prepend(
          '<h2 class="please-make-a-selection">Please make a selection.</h2>'
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

        if (data.length === 0) {
          postContainer.append(
            '<h2>Sorry, there are no schools at this location.</h2>'
          );
        } else {
          $.each(data, function appendContent(data, arrayItem) {
            postContainer.append(`
          <div class="location-card" >

          <!-- dynamic post image for card -->
  
          <div class="image-container" style="background:  url('${arrayItem._embedded['wp:featuredmedia']['0'].source_url}'); background-size: cover; background-position: center;">
          </div>
  
          <!-- dynamic post title, date, and category -->
          <div class="post-meta">
  
            <h3 class="post-title">${arrayItem.title.rendered}</h3>
  
           <p>${arrayItem.acf.sub_text}</p>
  
            <div class="button-container">
              <a href="${arrayItem.link}" class="white-btn">more info</a>
  
            </div>
          </div>
        </div>
          `);
          });
        }
      })
      .fail(function(error) {
        if ($('.error-message').length) {
          return;
        } else {
          ajaxContainer.empty();

          postContainer.prepend(
            `<h2 class='error-message'>There seems to have been an error - code ${error.status}<h2>`
          );
          return;
        }
      });
  });
})(jQuery);
