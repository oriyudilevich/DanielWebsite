jQuery(function($) {
	
	// ---------------
	// --- Actions ---
	// ---------------
	$("a.topopup").click(function() {
		loadPopup();
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
	
	function loadPopup() { 
		if(popupOnScreen == 0) {
			$("#toPopup").fadeIn(0500);
			$("#backgroundPopup").css("opacity", "0.7");
			$("#backgroundPopup").fadeIn(0001); 
			popupOnScreen = 1;
		}	
	}
		
	function disablePopup() {
		if(popupOnScreen == 1) {
			$("#toPopup").fadeOut("normal");  
			$("#backgroundPopup").fadeOut("normal");  
			popupOnScreen = 0;
		}
	}

});