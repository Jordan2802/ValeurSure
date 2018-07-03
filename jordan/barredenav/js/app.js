//faire apparaitre le form contact rapide au clic.

function slideTel(){
  if ($('.text').hasClass('cache')) {
    $('.text').removeClass('cache');
  }else {
    $('.text').addClass('cache');
  }
}


//faire apparaitre le contact rapide
window.onscroll = function() {
	var head = document.getElementById("head");
  var tel = document.getElementById("tel");
  var nav = document.getElementById("tailleNav");
  var logo = document.getElementById("logoNav");
  var tailleHead = head.offsetHeight;
  var a = document.getElementsByTagName("a");

	if ( document.documentElement.scrollTop > tailleHead ) {
    tel.style.display = 'block';
    nav.style.width = '100%';
    nav.style.backgroundColor = 'white';
    nav.style.top = "0";
    nav.style.left = "0";
    nav.style.height = "60px";
    nav.style.border = "1px solid black";
    logo.style.fontSize ="0px";
    for(var i= 0; i < a.length; i++)
    {
         a[i].style.backgroundColor = "white";
    }
	} else {
		tel.style.display = "none";
    nav.style.width = '80%';
    nav.style.backgroundColor = 'rgba(255,255,255,0.6)';
    nav.style.top = "5%";
    nav.style.left = "10%";
    nav.style.height = "110px";
    logo.style.fontSize = "5vw";
    nav.style.border = "0px";
    for(var i= 0; i < a.length; i++)
    {
         a[i].style.backgroundColor = "inherit";
    }
	}
};
