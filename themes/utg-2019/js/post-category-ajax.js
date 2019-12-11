(function($) {
  const $category = $('.category-link');

  $category.on('click', function(event) {
    event.preventDefault();

    console.log($('.category-link'));
    $('.community-posts').empty();
    let catId = event.target.id;
    let filteredID = catId.replace('cat-', '');

    $.ajax({
      type: 'GET',
      url:
        utg_vars.rest_url + '/wp/v2/posts?categories=' + filteredID + '&_embed',
      datatype: 'JSON'
    })
      .done(function(data) {
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
          $('.community-posts').append(` <a class='post-card'>

          <div class='image-container' style='background: url(${arrayItem._embedded['wp:featuredmedia']['0'].source_url}); background-size: cover; background-position: center;'></div>
          <img src='${arrayItem._embedded['wp:featuredmedia']['0'].source_url}'>
            <div class='post-meta'>
                <div>
                <p class='post-data'> ${newDateFormat}</p>  
                <h3 class='post-title'>${arrayItem.title.rendered}</h3> 
                <h3 class='post-title-mobile'>${arrayItem.title.rendered}</h3> 
                </div>
                <p class='post-category'>${$category[0].text}</p>
            </div>
        </a>`);
        });
      })
      .fail(function(error) {
        $('.community-posts').append(
          `<h3>${error}</h3>
            <p>Opps! There seems to be an issue grabbing that category! </p>`
        );
      });
  });
})(jQuery);
