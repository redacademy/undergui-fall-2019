document.addEventListener('DOMContentLoaded', function() {
  // path only works on live site, change to /utg/about/ for local
  if (window.location.pathname === '/about/') {
    const element = document.getElementById('nav-tab');
    element.addEventListener('click', onTabClick, false);
  } else {
    return;
  }

  function onTabClick(event) {
    let activeTabs = document.querySelectorAll('.active');
    event.preventDefault();

    // deactivate existing active tab and panel
    activeTabs.forEach(function(tab) {
      if (event.target.className === 'nav') {
        return false;
      }
      tab.className = tab.className.replace('active', '');
    });

    // activate new tab and panel
    event.target.parentElement.className += ' active';
    document.getElementById(event.target.href.split('#')[1]).className +=
      ' active';
  }
});
