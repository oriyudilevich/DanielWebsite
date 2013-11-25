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
	
	function loadPopup(number) { 
		if(popupOnScreen == 0) {
			switch (number) {
				case 1:
					$("#toPopup").fadeIn(0500);
					break;
				case 2:
					$("#mapsPopup").fadeIn(0500);
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
					break;
			}  
			$("#backgroundPopup").fadeOut("normal");  
			popupOnScreen = 0;
		}
	}

});