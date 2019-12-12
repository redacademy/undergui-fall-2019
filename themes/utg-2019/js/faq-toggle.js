// Waits for page to load
document.addEventListener('DOMContentLoaded', function() {
  // Checks if user is on about page

  // path only works on live site, change to /utg/about/ for local
  if (document.querySelector('.page-about') !== null) {
    // Grabs all the faq containers
    const faqContainer = document.querySelectorAll('.faq-item');

    // Loops through array container, grabs elements that will be changed, adds event listener to all array items
    faqContainer.forEach(el => {
      const answer = el.getElementsByClassName('faq-answer-container')[0];
      const question = el.getElementsByClassName('faq-question-container')[0];
      const faqDown = el.getElementsByClassName('down')[0];
      const faqUp = el.getElementsByClassName('up')[0];

      // On click on any of the array items toggle scss rules to animate elements
      question.addEventListener('click', () => {
        answer.classList.toggle('animate');
        question.classList.toggle('focus');
        faqDown.classList.toggle('toggle-down');
        faqUp.classList.toggle('toggle-up');
      });
    });
  } // When not on About page, stops function
  else {
    return;
  }
});
