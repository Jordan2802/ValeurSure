

var butUn = document.getElementById('but1');
var butDeux = document.getElementById('but2');

function slideDroite(){
  butUn.style.width = '58%';
  butUn.style.transition = '0.5s';
  butDeux.style.width = '40%';
  butDeux.style.transition = '0.5s';
}

function slideGauche(){
  butUn.style.width = '40%';
  butUn.style.transition = '0.5s';
  butDeux.style.width = '58%';
  butDeux.style.transition = '0.5s';
}

function slideReset(){
  butUn.style.width = '49%';
  butUn.style.transition = '0.5s';
  butDeux.style.width = '49%';
  butDeux.style.transition = '0.5s';
}





function slideTel(){
  if ($('.text').hasClass('cache')) {
    $('.text').removeClass('cache');
  }else {
    $('.text').addClass('cache');
  }
}
