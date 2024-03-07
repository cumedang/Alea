function onOff() {
  document.getElementById('navicon').classList.toggle('navicon-on');
  document.body.classList.toggle('right-navbar-on')
}
window.onresize = function(event){
  var innerWidth = window.innerWidth;
  if (innerWidth > 960) {
    document.getElementById('navicon').classList.remove('navicon-on')
    document.body.classList.remove('right-navbar-on');
  }
}