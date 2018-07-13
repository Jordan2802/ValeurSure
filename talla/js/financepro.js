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
