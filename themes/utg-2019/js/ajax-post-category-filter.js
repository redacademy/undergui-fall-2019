(function($) {
  const $category = $('.category-link');
  const $showMore = $('.show-more-posts');
  const postContainer = $('.community-posts');
  const gifContainer = $('.gif-container');
  const noMorePostContainer = $('.no-more-posts-container');

  let ajaxURL = '';
  let postCount = 4;
  let showMoreCondition = 1;

  // filters posts by categories
  $category.on('click', function(event) {
    event.preventDefault();
    noMorePostContainer.removeClass('no-more-posts');

    // always starts a new category with max post count of 4
    postCount = 4;

    // grabs categeory ID and removes cat- to use ID in ajax url query
    let catId = event.target.id;
    let filteredID = catId.replace('cat-', '');

    ajaxURL = utg_vars.rest_url + 'wp/v2/posts?';

    if (filteredID.length) {
      ajaxURL += 'categories=' + filteredID;
    }

    postContainer.empty();
    gifContainer.append(
      `<img class="loading-gif" src="${utg_vars.stylesheet_url}/assets/location-gif-slow.gif">`
    );
    appendAjax(ajaxURL);
  });

  // show more pagination
  $showMore.on('click', function(e) {
    e.preventDefault();
    postCount += 4;

    // if user doesn't choose a category, uses a default ajax url, else uses the current category ajax url
    if (ajaxURL === '') {
      gifContainer.append(
        `<img class="loading-gif" src="${utg_vars.stylesheet_url}/assets/location-gif-slow.gif">`
      );
      appendAjax();
    } else {
      gifContainer.append(
        `<img class="loading-gif" src="${utg_vars.stylesheet_url}/assets/location-gif-slow.gif">`
      );
      appendAjax(ajaxURL);
    }
  });

  // function that performs ajax method and appends elements to DOM
  function appendAjax(
    ajaxURL = utg_vars.rest_url +
      'wp/v2/posts?&_embed&per_page=' +
      postCount +
      '&exclude=522'
  ) {
    //either default or category ajax url plus post count
    ajaxURL += '&_embed&exclude=522&per_page=' + postCount;

    $.ajax({
      type: 'GET',
      url: ajaxURL,
      datatype: 'JSON'
    })

      .done(function(data) {
        postContainer.empty();
        gifContainer.empty();
        if (showMoreCondition === 0) {
          $showMore.removeClass('hide');
          showMoreCondition = 1;
        }

        // counts how many posts get appended
        let numPostsFetched = data.length;

        $.each(data, function appendContent(data, arrayItem) {
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

          // append json date to html elements
          $('.community-posts').append(` 
              <a href='${arrayItem.link}' class='post-card'>
    
                <div class='image-container' style='background: url(${arrayItem._embedded['wp:featuredmedia']['0'].source_url}); background-size: cover; background-position: center;'></div>
                    <div class='post-meta'>
                        <div>
                        <p class='post-data'> ${newDateFormat}</p>  
                        <h3 class='post-title'>${arrayItem.title.rendered}</h3> 
                        </div>
                        <p class='post-category'>${arrayItem._embedded['wp:term']['0']['0'].name}</p>
                    </div>
            </a>`);
        });

        // checks how many community posts in total and subtracts 1 for the banner post
        if (
          numPostsFetched === utg_vars.max_num - 1 ||
          numPostsFetched % 2 ||
          numPostsFetched < 4 ||
          numPostsFetched < postCount
        ) {
          $showMore.addClass('hide');
          showMoreCondition = 0;
          noMorePostContainer.addClass('no-more-posts');
        }
      })
      .fail(function() {
        $('.community-posts').append(
          `
                <h3>Opps! There seems to be an issue grabbing that category! </h3>`
        );
      });
  }
})(jQuery);
