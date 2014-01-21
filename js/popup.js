jQuery(function($) {
	
	// ---------------
	// --- Actions ---
	// ---------------
	$("a.topopup").click(function() {
		loadPopup(1);
		return false;
	});
	
	$("a.mapspopup").click(function() {
		loadPopup(2);
		return false;
	});

	$("div.close").click(function() {
		disablePopup();
	});
	
	$("div#backgroundPopup").click(function() {
		disablePopup();
	});
	
	// -----------------
	// --- Functions ---
	// -----------------
	
	var popupOnScreen = 0;
	var map; // Pointer to the google map.
	
	function loadPopup(number) { 
		if(popupOnScreen == 0) {
			switch (number) {
				case 1:
					$("#toPopup").fadeIn(0500);
					break;
				case 2:
					$("#mapsPopup").fadeIn(0500);
					loadGoogleMap();
					break;	
			}

			$("#backgroundPopup").css("opacity", "0.7");
			$("#backgroundPopup").fadeIn(0001); 
			popupOnScreen = number;
		}	
	}
		
	function disablePopup() {
		if(popupOnScreen) {
			switch (popupOnScreen) {
				case 1:
					$("#toPopup").fadeOut("normal");
					break;
				case 2:
					$("#mapsPopup").fadeOut("normal");
					delete map;
					break;
			}  
			$("#backgroundPopup").fadeOut("normal");  
			popupOnScreen = 0;
		}
	}
	
	function loadGoogleMap() {

		// Create an instance of the map.
		var map_options = {
			center: new google.maps.LatLng(52.080042,4.319639),
			zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById('map_canvas'), map_options);

		// Add a marker at Daniel's.
		//var image = 'images/Tooth.gif';
  		var myLatLng = new google.maps.LatLng(52.080042,4.319639);
  		var beachMarker = new google.maps.Marker({
      		position: myLatLng,
     		map: map,
      		/*icon: image*/
		});

	}

});