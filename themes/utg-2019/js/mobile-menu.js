const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');
const siteHeader = document.querySelector('.site-header');

mobileMenu.addEventListener('click', function(e) {
  e.preventDefault();

  siteHeader.classList.toggle('toggle-menu');
  navLinks.classList.toggle('toggle-menu');
});
