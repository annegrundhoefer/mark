$(document).ready(function(){
	
	var container = $('#container').imagesLoaded( function() {
	  	container.isotope({
		  itemSelector: '.card',
		  layoutMode: 'masonry'
		});
	});	

		


	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 500) {
	        //clearHeader, not clearheader - caps H
	        $(".menu").addClass("active");
	    } else {
	    	$(".menu").removeClass("active");
	    }
	}); 
	
});

function goTo(section) {
	$("html, body").animate({ scrollTop: $('#' + section).offset().top }, 500);
	alert(message);
}