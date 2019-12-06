// Waits for page to load
document.addEventListener('DOMContentLoaded', function() {
<<<<<<< HEAD
  // Checks if user is on about page
  if (window.location.pathname === '/utg/about/') {
    // Grabs all the faq containers
    const faqContainer = document.querySelectorAll('.faq-item');
=======
  if (window.location.pathname === '/utg/about/') {
    // const faqContainer = document.querySelector('.faq-answer-container')
    const faqSlideDown = document.querySelector('.faq-slide-down');
    // const faqSlideUp = document.querySelector('.faq-slide-up');
>>>>>>> e2a5d5de2a0f8e03ee1a86965ad3e50f6de3e87e

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
