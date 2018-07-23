$(document).ready(function(){
  $("#etapesuivante").click(function(){
    $("#formprestapart1").hide();
    $("#formprestapart2").show(500);
    $("#etapesuivante").hide();
    $("#finform").show(500);
  });
})
