(function($) {
  const $category = $('.category-link');
  const $showMore = $('.show-more-posts');

  let ajaxURL = '';
  let postCount = 4;

  // filters posts by categories
  $category.on('click', function(event) {
    event.preventDefault();

    postCount = 4;

    const postContainer = $('.community-posts');
    const gifContainer = $('.gif-container');

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
    // // console.log(ajaxURL);
    // if (ajaxURL === '') {

    //   // console.log('default ajax url' + ajaxURL);
    //   console.log(postCount);
    //   appendAjax(ajaxURL);
    // } else {
    //   ajaxURL +=
    //   appendAjax(ajaxURL);
    //   console.log(postCount);
    //   console.log(ajaxURL);
    // }

    if (ajaxURL === '') {
      appendAjax();
    } else {
      console.log(ajaxURL);
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
    ajaxURL += '&_embed&exclude=522&per_page=' + postCount;

    const postContainer = $('.community-posts');
    const gifContainer = $('.gif-container');
    $.ajax({
      type: 'GET',
      url: ajaxURL,
      datatype: 'JSON'
    })

      .done(function(data) {
        postContainer.empty();
        gifContainer.empty();

        // counts how many posts get appended
        let numPostsFetched = data.length;
        console.log('num of posts' + numPostsFetched);

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

        // console.log(utg_vars.max_num);

        // checks how many community posts in total and subtracts 1 for the banner post
        if (
          numPostsFetched === utg_vars.max_num - 1 ||
          numPostsFetched % 2 ||
          numPostsFetched < 4
        ) {
          $showMore.remove();
        } else {
          if ($showMore.length) {
            return;
          } else {
            $('.button-box').append(
              '<button class="white-btn show-more-posts">SHOW MORE</button>'
            );
          }
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
