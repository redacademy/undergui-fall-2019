const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');

mobileMenu.addEventListener('click', function(e) {
  e.preventDefault();

  if (window.innerWidth < 900) {
    console.log('width');
    navLinks.classList.toggle('toggle-menu');
  } else {
    navLinks.classList.remove('toggle-menu');
  }
});
