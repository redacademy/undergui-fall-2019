(function($) {
  $('.category-link').on('click', function(event) {
    event.preventDefault();

    $('.community-posts').empty();
    let catId = event.target.id;
    let filteredID = catId.replace('cat-', '');

    $.ajax({
      type: 'GET',
      // url: //url here, php get_category_link()
      url: utg_vars.rest_url + '/wp/v2/posts?categories=' + filteredID

      //   data: {
      //     //data here
      //   }
    })
      .done(function(data) {
        // console.log(data);
        // let utgPost = data.shift();
        // console.log(utgPost);

        data.forEach(() => {
          console.log(data);
          // a $('.post-card')
          // div $('.image-container').
          // img
          // div $('.post-meta')
          $('.post-data')
            .append()
            .html(data.date);
          $('.post-title')
            .append()
            .html(data.title);
          $('.post-title-mobile')
            .append()
            .html(data.title);
          //  p $('.post-category')
          //   data[0].link;
        });
      })
      .fail(function() {});
  });
})(jQuery);
