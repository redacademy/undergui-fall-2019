(function($) {
  $('.enroll-button').on('click', function(event) {
    event.preventDefault();
    let $postId = $('.enroll-button')
      .closest('article')
      .attr('id');

    window.location.href = utg_vars.site_url + '/register/?pc=' + $postId;
  });
})(jQuery);
