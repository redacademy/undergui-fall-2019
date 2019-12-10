(function($) {
  $('.category-link').on('click', function(event) {
    event.preventDefault();

    $('.community-posts').empty();
    let catId = event.target.id;
    let filteredID = catId.replace('cat-', '');

    $.ajax({
      type: 'GET',
      // url: //url here, php get_category_link()
      url: utg_vars.rest_url + '/wp/v2/posts?categories=' + filteredID,
      datatype: 'JSON'
      //   data: {
      //     //data here
      //   }
    })
      .done(function(data) {
        // console.log(data[0].date);
        // let utgPost = data.shift();
        // console.log(utgPost);

        $.each(data, function appendContent(data, arrayItem) {
          console.log(arrayItem);
          //   $('.post-card')  a -> div(img) img(mobile img) div(meta)-> div( p(date) h3(title) h3(title mobile) ) p(post location)
          // div $('.image-container').
          // img
          // div $('.post-meta')

          $('.post-data').append(arrayItem.date);
          $('.post-title').append(arrayItem.title);
          $('.post-title-mobile').append(arrayItem.title);
          //  p $('.post-category')
          //   data[0].link;
        });
      })
      .fail(function() {});
  });
})(jQuery);
