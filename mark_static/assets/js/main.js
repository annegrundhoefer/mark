$(document).ready(function(){
	
	var container = $('#container').imagesLoaded( function() {
	  	container.isotope({
		  itemSelector: '.card',
		  layoutMode: 'masonry'
		});
	});	

		
});