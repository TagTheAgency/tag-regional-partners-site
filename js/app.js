$(function() {
    // Get the form.
    var contactForm = $('#contact-me');
    var regionForm = $('#region-form');

    // Get the messages div.
	$(contactForm).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

    	var contactFormData = $(contactForm).serialize();

    	$.ajax({
    	    type: 'POST',
    	    url: $(contactForm).attr('action'),
    	    data: contactFormData
    	});
	});

	$(regionForm).submit(function(event) {
        event.preventDefault();

    	var regionFormData = $(regionForm).serialize();

    	$.ajax({
    	    type: 'POST',
    	    url: $(regionForm).attr('action'),
    	    data: regionFormData
    	});
	});
});
