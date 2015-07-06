$(document).ready(function($){
	$('.menu-toggle').click(function(){
		// do something
		$('.sub-menu').slideToggle();
	});

	$('.sub-menu li a').click(function(){
		$('.sub-menu').hide();
	});

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
	$('.playlist').html('<iframe width="100%" height="275" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/114378749&amp;color=bb444a&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>');
});

function goTo(section) {
	$("html, body").animate({ scrollTop: $('#' + section).offset().top }, 500);
	alert(message);
}

