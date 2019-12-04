const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');
const backgroundShade = document.querySelector('.background-shade');

mobileMenu.addEventListener('click', function(e) {
  e.preventDefault();

  backgroundShade.classList.toggle('toggle-shade');
  navLinks.classList.toggle('toggle-menu');
});
