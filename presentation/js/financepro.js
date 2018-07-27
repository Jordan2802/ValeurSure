$(document).ready(function() {
    var text_max = 100;
    $('#comptepro1').html(text_max + ' caractères restants');

    $('#prodescription').keyup(function() {
        var text_length = $('#prodescription').val().length;
        var text_remaining = text_max - text_length;
        $('#comptepro1').html(text_remaining + ' caractères restants');
    });
});

$(document).ready(function() {
    var text_max2 = 200;
    $('#comptepro2').html(text_max2 + ' caractères restants');

    $('#procommentaire').keyup(function() {
        var text_length2 = $('#procommentaire').val().length;
        var text_remaining2 = text_max2 - text_length2;
        $('#comptepro2').html(text_remaining2 + ' caractères restants');
    });
});

$(document).ready(function(){
  $("#etapesuivante").click(function(){
    if($('#formpropart1').css('display') == 'block'){
      $("#formpropart1").hide();
      $("#formpropart2").show(500);
    }
    else if ($('#formpropart2').css('display') == 'block'){
      $("#formpropart2").hide();
      $("#formpropart3").show(500);
      }
    else if ($('#formpropart3').css('display') == 'block'){
      $("#formpropart3").hide();
      $("#formpropart4").show(500);
      }
    else {
      $("#formpropart4").hide();
      $("#formpropart5").show(500);
      $("#cappro").show(500);
      $("#finform").show(500);
      $("#etapesuivante").hide();
      }
  });
})
