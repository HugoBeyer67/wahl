$( document ).ready(function() {
	
	var winUrl = window.location.href;
	var goodUrl = winUrl.replace('galerie.php', '');

	//Détection du racourcis pour quitter la galerie
	$("#feed").attr("tabindex","79");
	var map = {16: false, 65: false};
	$(document).keydown(function(e) {
	    if (e.keyCode in map) {
	        map[e.keyCode] = true;
	        if (map[16] && map[65]) {
	            $("#feed").focus();
	        }
	    }
	}).keyup(function(e) {
	    if (e.keyCode in map) {
	        map[e.keyCode] = false;
	    }
	});



	$("#galerie article input").keypress(function(e){
		if(e.which == 13) {
			$(this).keyup(function(){
				window.location = goodUrl + $(this).attr("src");
			});
		}
	});	
	$("#galerie article input").click(function(){
		window.location = goodUrl + $(this).attr("src");
	});


});
