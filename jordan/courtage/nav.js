jQuery(document).ready(function($){
	slideClass = 'slide-gallery';						// Classe des sliders
	itemClass = 'item';							// Classe des items
	slideWidth = 1000;							// Largeur totale des sliders en px, bordures incluses
	brd = 6;								// Largeur border en px
	minWidth = 60;								// Largeur mini d'1 image en px
	minOp = .3;								// Opacité des onglets

	var maxWidth = new Array;						// Largeur max d'1 image par slider
	var nbrimg = new Array;							// Nombre d'images par slider
	var lastBlock = new Array;						// Block actif par slider
	$('.'+slideClass).each(function(i){
		nbrimg[i] = 0;
		$(this).addClass('slide-'+i)
			.children('img')
			.each(function(){nbrimg[i]++;});			// Nombre d'images
		maxWidth[i] = slideWidth-(2*brd)-((minWidth+brd)*(nbrimg[i]-1));// Largeur max d'1 image
		var bg = new Array;
		var ht = new Array;
		$(this).children('img').each(function(index){
			bg[index] = $(this).attr('src');
			ht[index] = $(this).height();
			$(this).wrap('<div class="'+itemClass+'" />')
				.parent('.'+itemClass)
				.css({'background-image': 'url('+bg[index]+')', 'height': ''+ht[index]+'px', 'opacity': minOp})
				.html('')
				.width(minWidth)
				.parent('.'+slideClass)
				.height(ht[0]);
		});
		lastBlock[i] = $(this).children('.'+itemClass+':first');
		$(lastBlock[i]).css({'width': maxWidth[i],'opacity': 1});
		$(this).children('.'+itemClass).hover( function(){
			$(lastBlock[i]).stop(true,false).animate({'width': minWidth+"px", 'opacity': minOp}, { queue:false, duration:500 });
			$(this).stop(true,false).animate({'width': maxWidth[i]+"px", 'opacity': 1}, { queue:false, duration:500});
			lastBlock[i] = this;
		});
	});
});
