var count=0;

document.getElementById('toggleButton').addEventListener('click', function() {
    document.getElementById('sideMenu').classList.toggle('show-menu');
count=1;
  });
  
  document.addEventListener('click', function(event) {
    var sideMenu = document.getElementById('sideMenu');
    var toggleButton = document.getElementById('toggleButton');
    
    if (!sideMenu.contains(event.target) && event.target !== toggleButton) {
      sideMenu.classList.remove('show-menu');
    }
  });