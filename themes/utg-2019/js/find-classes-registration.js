(function($) {
  $('.enroll-button').on('click', function(event) {
    event.preventDefault();
    let $postId = $('.enroll-button')
      .closest('article')
      .attr('id');
    let filteredID = $postId.replace('post-', '');

    console.log(filteredID);
    // console.log(utg_vars.site_url + '/register');
    window.location.href = utg_vars.site_url + '/register/?pc=' + $postId;

    $.ajax({
      type: 'GET',
      url: utg_vars.rest_url + '/wp/v2/post_classes/' + filteredID,
      datatype: 'JSON'
    })
      .done(function(data) {
        console.log(data);
      })
      .fail(function(error) {
        alert(error);
      });
  });
})(jQuery);
