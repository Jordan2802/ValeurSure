$(document).ready(function() {
    var text_max3 = 100;
    $('#compteimmo1').html(text_max3 + ' caractères restants');

    $('#immodescription').keyup(function() {
        var text_length3 = $('#immodescription').val().length;
        var text_remaining3 = text_max3 - text_length3;
        $('#compteimmo1').html(text_remaining3 + ' caractères restants');
    });
});

$(document).ready(function() {
    var text_max4 = 200;
    $('#compteimmo2').html(text_max4 + ' caractères restants');

    $('#immocommentaire').keyup(function() {
        var text_length4 = $('#immocommentaire').val().length;
        var text_remaining4 = text_max4 - text_length4;
        $('#compteimmo2').html(text_remaining4 + ' caractères restants');
    });
});

$(document).ready(function(){
  $("#etapesuivante").click(function(){
    if ($('#formimmopart2').css('display') == 'none'){
    $("#formimmopart1").hide();
    $("#formimmopart2").show(500);
    }
    else {
      $("#formimmopart2").hide();
      $("#formimmopart3").show(500);
      $("#etapesuivante").hide();
      $("#finform").show(500);
    }
  });
})
