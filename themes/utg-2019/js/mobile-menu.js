document.addEventListener('DOMContentLoaded', function() {
  const hamburgerMenu = document.querySelector('.mobile-menu');
  const navLinks = document.querySelector('.nav-links');
  const siteHeader = document.querySelector('.site-header');
  const closeMenuButton = document.querySelector('.left-arrow');
  const blockMan = document.querySelector('.block-man-chat-mobile')

  //on click hamburger icon, opens mobile menu
  hamburgerMenu.addEventListener('click', function(e) {
    e.preventDefault();
    siteHeader.classList.add('toggle-menu');
    navLinks.classList.add('toggle-menu');
    blockMan.classList.add('hide-block-man')
  });

  //on click arrow button, switches arrow direction and closes menu
  closeMenuButton.addEventListener('click', function(e) {
    e.preventDefault();
    siteHeader.classList.remove('toggle-menu');
    navLinks.classList.remove('toggle-menu');
    setTimeout(function() {
      blockMan.classList.remove('hide-block-man')
    }, 400)

  });
});
