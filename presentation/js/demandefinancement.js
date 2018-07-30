$(document).ready(function(){
  $("#boutonstart").click(function(){
    $(".choixprojet").show(200);
    $("#boutonstart").hide(500);
  });



  $("#boutonpro").click(function(){
    $("#propart").show(500);
    $(".choixprojet").hide();
  });



  $("#boutonimmo").click(function(){
    $("#immopart").show(500);
    $(".choixprojet").hide();
  });



  $("#boutonassu").click(function(){
    $("#assupart").show(500);
    $(".choixprojet").hide();
  });



  $("#boutonpresta").click(function(){
    $("#prestapart").show(500);
    $(".choixprojet").hide();
  });
})
