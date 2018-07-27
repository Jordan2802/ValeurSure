$(document).ready(function(){
  $("#etapesuivantepresta").click(function(){
    $("#formprestapart1").hide();
    $("#formprestapart2").show(500);
    $("#etapesuivantepresta").hide();
    $("#finformpresta").show(500);
    $("#cappresta").show(500);
  });
})

$(document).ready(function(){
  $('select').formSelect();
});
