$(function() {

    function getContactForm(element){

        // Get the messages div.
    	$(element).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

        	var contactFormData = $(element).serialize();

        	$.ajax({
        	    type: 'POST',
        	    url: $(element).attr('action'),
        	    data: contactFormData
        	});
    	});
    }
    getContactForm('#contact-me');
    getContactForm('#region-form');
    getContactForm('#footer-region-form');
});
