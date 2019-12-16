(function($) {
  $('.search-submit').on('click', function(event) {
    event.preventDefault();
  });

  $('#filter-classes').on('click', function(event) {
    event.preventDefault();

    let classInput = $('#class-search').val();
    let locationInput = $('#location-search').val();
    let semesterInput = $('#semester ').val();
    let dayInput = $('#day ').val();
    let ageInput = $('#age ').val();
    let timeInput = $('#time ').val();

    console.log(classInput);
    console.log(locationInput);
    console.log(semesterInput);
    console.log(dayInput);
    console.log(ageInput);
    console.log(timeInput);

    $.ajax({
      type: 'GET',
      url: utg_vars.rest_url + '/wp/v2/',
      datatype: 'JSON'
    })
      .done(function(data) {
        $('.classes-container').empty();
        console.log(data);
      })
      .fail(function(error) {
        alert('There has been an error!' + error);
      });
  });
})(jQuery);
