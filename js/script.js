$( document ).ready(function() {

	function enablePopups(){

        // Popup Overlay
    	$('[data-popup-open]').click(function(){
    		var targeted_popup_class = $(this).attr('data-popup-open');
    		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','flex');
    	});
    	$('[data-popup-close]').click(function(){
    		$(".mobile-menu-wrapper").fadeOut();
    		var targeted_popup_class = $(this).attr('data-popup-close');
    		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
    	});
    };

    enablePopups();

	// Region icon hover effect
	$('.region').hover(function(){
		$('.region').addClass('transparent');
		$(this).removeClass('transparent');
	}, function(){
		$('.region').removeClass('transparent');
	});

	// Scroll to top
	$("#top-btn").click(function(){
		$("html").animate({scrollTop: 0}, 900);
	});

	$('.contact-form').submit(function(){
		$(this).fadeOut(200);
		setTimeout(function(){
			$('#contact-form-container').html(
				"<div><h4 class='primary-text mb-2'>Your message has been sent.</h4></div>"+
				"<div>Thank You!</div>"
			);
		}, 400);
	});

	// Scroll to element
	// $(".scroll-icon").click(function(){
	// 	$("html, body").animate({
	// 		scrollTop: $("#what").offset().top
	// 	}, 500);
	// });

});
