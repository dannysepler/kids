var map;
function initialize() {

	/* basic info */
	var Position = new google.maps.LatLng(29.6615709,-82.4096225);
	var mapOptions = {
		zoom: 16,
		center: Position
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
	
	/* info window */
	var contentString = '<div id="content">'+
      '<div id="siteNotice"></div>'+
      '<h4>Kids Doc Pediatrics</h4>'+
      '<p>6440 W Newberry Rd #105,</p>'+
	  '<p>Gainesville, FL 32605</p>'+
      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	      content: contentString
	  });

	  /* marker */
	var marker = new google.maps.Marker({
      position: Position,
      map: map,
      animation: google.maps.Animation.DROP,
      title: 'Kids Doc Pediatrics'
  	});	

  	google.maps.event.addListener(marker, 'click', function() {
    	infowindow.open(map,marker); // open on click
  	});

  	infowindow.open(map,marker); // open automatically
}

google.maps.event.addDomListener(window, 'load', initialize);








/* CONTACT FORM */

(function() {
 
    // Create input element for testing
    var input = document.createElement('input');
     
    // Create the supports object
    var supports = {};
     
    supports.autofocus   = 'autofocus' in input;
    supports.required    = 'required' in input;
    supports.placeholder = 'placeholder' in input;
 
    // Fallback for autofocus attribute
    if(!supports.autofocus) {
         
    }
     
    // Fallback for required attribute
    if(!supports.required) {
         
    }
 
    // Fallback for placeholder attribute
    if(!supports.placeholder) {
         
    }
     
    // Change text inside send button on submit
    var send = document.getElementById('contact-submit');
    if(send) {
        send.onclick = function () {
            this.innerHTML = '...Sending';
        }
    }
 
})();