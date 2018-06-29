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
  var tailleHead = head.offsetHeight;


	if ( document.documentElement.scrollTop > tailleHead ) {
    tel.style.display = 'block';
	} else {
		tel.style.display = "none";
	}
};
