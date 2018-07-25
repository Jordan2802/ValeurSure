$(document).ready(function(){
  $("#boutonstart").click(function(){
    $(".choixprojet").show(2000);
    $("#boutonstart").hide(500);
  });
})

$(document).ready(function(){
  $("#boutonpro").click(function(){
    $("#propart").show(500);
    $(".choixprojet").hide();
  });
})

$(document).ready(function(){
  $("#boutonimmo").click(function(){
    $("#immopart").show(500);
    $(".choixprojet").hide();
  });
})

$(document).ready(function(){
  $("#boutonassu").click(function(){
    $("#assupart").show(500);
    $(".choixprojet").hide();
  });
})

$(document).ready(function(){
  $("#boutonpresta").click(function(){
    $("#prestapart").show(500);
    $(".choixprojet").hide();
  });
})
