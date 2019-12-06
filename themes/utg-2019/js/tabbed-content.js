document.addEventListener('DOMContentLoaded', function() {

function onTabClick(event) {
    let activeTabs = document.querySelectorAll('.active');
    
    // deactivate existing active tab and panel    
    activeTabs.forEach(function(tab) {
      tab.className = tab.className.replace('active', '');
    //   if(event.target.tagName === "ul") return false;
    });
    
    // activate new tab and panel
    event.target.parentElement.className += ' active';
    document.getElementById(event.target.href.split('#')[1]).className += ' active';
  }
  
  const element = document.getElementById('nav-tab');
  
  element.addEventListener('click', onTabClick, false);

});
