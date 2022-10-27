var position = { lat: 10.397000 , lng: -75.472203 }	

// Map style


// Set google map options
var options = {
	center: position,
	zoom: 14,
	mapTypeControl: false,
	streetViewControl: true,
	scrollwheel: false,
	styles: style
}

// Init Map
var map = new google.maps.Map( document.getElementById('contact-map') , options);

// Set map marker
var marker = new google.maps.Marker({
    position: position,
    map: map,
});

