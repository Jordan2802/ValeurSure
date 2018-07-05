
		$(function() {
		    $(document).ready( function() {

				$('#ville').attr('disabled','disabled');

			});
			$('#ville').focus( function() {

				$(this).autocomplete( "search", "" );

			});

			// OnKeyDown Function
			$("#postal").keyup(function() {
				var zip_in = $(this);
				var zip_box = $('#zipbox');

				if (zip_in.val().length<5)
				{
					zip_box.removeClass('error success');
				}
				else if ( zip_in.val().length>5)
				{
					zip_box.addClass('error').removeClass('success');
				}
				else if ((zip_in.val().length == 5) )
				{

					// Make HTTP Request
					$.ajax({
						url: "http://api.zippopotam.us/fr/" + zip_in.val(),
						cache: false,
						dataType: "json",
						type: "GET",
					  success: function(result, success) {

							// Enable the city box
							$('#ville').removeAttr('disabled');

							// FR Post Code Returns multiple location
							suggestions = [];
							for ( ii in result['places']){
								suggestions.push(result['places'][ii]['place name']);
							}
							$("#ville").autocomplete({ source : suggestions , delay:50, disabled: false, minLength:0 });
							if ( suggestions.length > 0){
								$('#ville').placeholder = suggestions[0];
							}
							zip_box.addClass('success').removeClass('error');
						},
						error: function(result, success) {
							zip_box.removeClass('success').addClass('error');
						}
					});
				}
	});

		});
