const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');
const siteHeader = document.querySelector('.site-header');
const closeMenuButton = document.querySelector('.left-arrow');
const switchArrowDireciton = document.querySelector('.right-arrow');

mobileMenu.addEventListener('click', function(e) {
  e.preventDefault();

  switchArrowDireciton.classList.remove('switch');
  siteHeader.classList.toggle('toggle-menu');
  navLinks.classList.toggle('toggle-menu');
  navLinks.classList.toggle('open-menu');
});

closeMenuButton.addEventListener('click', function(e) {
  e.preventDefault();
  //   if (switchArrowDireciton) {

  //   }
  closeMenuButton.classList.toggle('close-menu');
  switchArrowDireciton.classList.add('switch');
});
