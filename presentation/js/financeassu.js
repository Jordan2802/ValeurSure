$(document).ready(function(){
  $("#nbassurer").change(function(){
    if ($(this).val() === '1') {
      $("#assurer1").show(500);
      $("#assurer2").hide(500);
    }
    else if ($(this).val() === '2') {
      $("#assurer1, #assurer2").show(500);
    }
    else {
      $("#assurer1, #assurer2").hide(500);
    }
  });
})

$(document).ready(function(){
  $("#etapesuivanteassu").click(function(){
    if ($('#formassupart1').css('display') == 'block'){
    $("#formassupart1").hide();
    $("#formassupart2").show(500);
    }
    else {
      $("#formassupart2").hide();
      $("#formassupart3").show(500);
      $("#etapesuivanteassu").hide();
      $("#finformassu").show(500);
    }
  });
})
