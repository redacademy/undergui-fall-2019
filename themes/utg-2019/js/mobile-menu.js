const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');

mobileMenu.addEventListener('click', function(e) {
  e.preventDefault();

  navLinks.classList.toggle('toggle-menu');
});
