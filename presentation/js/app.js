

//faire apparaitre le contact rapide + nav scroll
var head = document.getElementById("head");
var tel = document.getElementById("tel");
var nav = document.getElementById("tailleNav");
var logo = document.getElementById("logoNav");
var tailleHead = head.offsetHeight;
var a = document.getElementsByClassName("nav-lien");


window.onscroll = function() {

  if (document.documentElement.scrollTop > tailleHead) {
    tel.style.visibility = 'visible';
    nav.style.top = "0";
    nav.style.left = "0";
    $(nav).addClass('nav--js');

    for (var i = 0; i < a.length; i++) {
      a[i].className = "backup backup:hover";
    }
  } else {
    tel.style.visibility = "hidden";
    nav.style.top = "5%";
    nav.style.left = "5%";
    $(nav).removeClass('nav--js');
    
    for (var i = 0; i < a.length; i++) {
      a[i].className = "#menuSlide li li:hover";
    }
  }

};
