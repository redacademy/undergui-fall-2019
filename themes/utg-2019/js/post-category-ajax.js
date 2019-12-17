(function($) {
  const $category = $('.category-link');

  $category.on('click', function(event) {
    event.preventDefault();

    const postContainer = $('.community-posts');
    const gifContainer = $('.gif-container');

    postContainer.empty();
    gifContainer.append(
      `<img class="loading-gif" src="${utg_vars.stylesheet_url}/assets/location-gif-slow.gif">`
    );
    let catId = event.target.id;
    let filteredID = catId.replace('cat-', '');

    $.ajax({
      type: 'GET',
      url:
        utg_vars.rest_url + '/wp/v2/posts?categories=' + filteredID + '&_embed',
      datatype: 'JSON'
    })
      .done(function(data) {
        postContainer.empty();
        gifContainer.empty();

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

        if (data.length < 8) {
          $('.show-more-posts').remove();
        } else {
          if ($('.show-more-posts').length) {
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
  });
})(jQuery);
