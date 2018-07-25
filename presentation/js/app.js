$(document).ready(function(){
    $('.slider').slider();
  });

//faire apparaitre le contact rapide + nav scroll
var head = document.getElementById("head");
var tel = document.getElementById("tel");
var nav = document.getElementById("tailleNav");
var logo = document.getElementById("logoNav");
var tailleHead = head.offsetHeight;
var menu = document.getElementById("menuSlide");



window.onscroll = function() {

  if (document.documentElement.scrollTop > tailleHead) {
    tel.style.visibility = 'visible';
    nav.style.top = "0";

    $(nav).addClass('nav--js');
    menu.style.marginTop = "15px";
  } else {
    tel.style.visibility = "hidden";
    nav.style.top = "5%";

    $(nav).removeClass('nav--js');
    menu.style.marginTop = "30px";
  }
};
