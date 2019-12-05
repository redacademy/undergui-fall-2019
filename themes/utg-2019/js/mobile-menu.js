const hamburgerMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');
const siteHeader = document.querySelector('.site-header');
const closeMenuButton = document.querySelector('.left-arrow');
const switchArrowDireciton = document.querySelector('.right-arrow');

//on click hamburger icon, opens mobile menu
hamburgerMenu.addEventListener('click', function(e) {
  e.preventDefault();
  closeMenuButton.classList.remove('close-menu');
  switchArrowDireciton.classList.remove('switch');
  siteHeader.classList.add('toggle-menu');
  navLinks.classList.add('toggle-menu');
});

//on click arrow button, switches arrow direction and closes menu
closeMenuButton.addEventListener('click', function(e) {
  e.preventDefault();
  siteHeader.classList.remove('toggle-menu');
  navLinks.classList.remove('toggle-menu');
  closeMenuButton.classList.add('close-menu');
  switchArrowDireciton.classList.add('switch');
});
