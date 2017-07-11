////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////
//////////     Main JS Script
//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// adding google map to find us section
function initMap() {
	var latlng = {lat: 51.5241098, lng: -0.0738972};

	var mapWithOptions = new google.maps.Map(document.getElementById('map'), {
		styles: subtleGrayscaleThemeArray,
		scrollwheel: false,
		zoom: 16,
		center: latlng
	});

	var marker = new google.maps.Marker({
		position: latlng,
		map: mapWithOptions,
		icon: 'sites/all/themes/geek_label/images/map-icon.png'
	});

	var addressString = '<div id="content" style="text-align: left;">'+
				'Geek Label <br>'+
				'4th Floor <br>'+
				'27 - 33 Bethnal Green Road <br>'+
				'Shoreditch <br>'+
				'London <br>'+
				'E1 6LA <br>'+
			'</div>';

	var infowindow = new google.maps.InfoWindow({
		content: addressString
	});

	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});
}


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


var subtleGrayscaleThemeArray = [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": "50"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
]; 