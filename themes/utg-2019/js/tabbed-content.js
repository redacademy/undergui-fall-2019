document.addEventListener('DOMContentLoaded', function() {
  // path only works on live site, change to /utg/about/ for local
  if (document.querySelector('.page-about') !== null) {
    const element = document.getElementById('nav-tab');
    element.addEventListener('click', onTabClick, false);
  } else {
    return;
  }

  function onTabClick(event) {
    let activeTabs = document.querySelectorAll('.active');

    // deactivate existing active tab and panel
    activeTabs.forEach(function(tab) {
      if (event.target.className === 'nav') {
        return false;
      }
      tab.className = tab.className.replace('active', '');
    });

    // activate new tab and panel
    event.target.parentElement.className += ' active';
    if (event.target.href !== undefined) {
      document.getElementById(event.target.href.split('#')[1]).className +=
        ' active';
    }
  }

  function onLoad() {
    let urlTag = window.location.hash;
    let loadTabs = document.querySelectorAll('.active');

    if (urlTag.length > 0) {
      loadTabs.forEach(function(tab) {
        // deactivate existing active tab and panel
        tab.className = tab.className.replace('active', '');
      });

      document.getElementById(urlTag.split('#')[1]).className += ' active';
    }
  }

  window.onload = onLoad;
});
