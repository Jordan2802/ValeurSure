//menu appBurger

function cacher() {
  $('.navBurger2').toggleClass('cache--burger2');
}

$('#menuSlide2 .menu--ss').click(function() {
  $(this).children('ul').toggleClass('hide-ss-menu');
})
