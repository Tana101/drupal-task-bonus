////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////
//////////     Main JS Script
//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

jQuery(document).ready(function($){

	// adding smooth scrolling to all links
	$('.content-scroll-btn').on('click', function(event) {

		if (this.hash !== "") {
			// preventing default anchor click behavior
			event.preventDefault();

			// storing hash
			var hash = this.hash;

			// using jQuery's animate() method to add smooth page scroll
			// the optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({scrollTop: $(hash).offset().top}, 800, function(){

				// adding hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;

			});
		}

	});

});