$(document).ready(function(){
    $('.slider').slider();
    $('.sidenav').sidenav();
  });

//faire apparaitre le contact rapide + nav scroll
var head = document.getElementById("carou");
var tel = document.getElementById("tel");
var tailleHead = head.offsetHeight;

window.onscroll = function() {

  if (document.documentElement.scrollTop > tailleHead) {
    tel.style.visibility = 'visible';
  } else {
    tel.style.visibility = "hidden";
  }
};
