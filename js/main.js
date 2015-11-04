$( document ).ready(function() {	
	var i=1;
	var numLi = $('.insideUl li').length;
	var currentLi=0;
	var thisLi=null;
		
		$('#creations').on('focusin mouseover', function(e) {
			i=1;
    	$(".insideUl").show();
			$(".insideUl").addClass("insideMenuShown");
		});
		$('#creations').on('focusout mouseout', function(e) {
			i=1;
			$(".insideUl").hide();
			$(".insideUl").removeClass("insideMenuShown");
		});
		
		//gestion des keydowns 
		$(document).keydown(function(e) {
			
    	switch(e.which) {

	        case 38: // up
					if(currentLi-1==0){
						currentLi=1;
					}
					else{
						currentLi--;
					}
					$(".insideUl li").removeClass("selected");
					$(".insideUl li:nth-of-type("+currentLi+")").addClass("selected");
					
	        break;

	        case 40: // down
					//don't set the counter higher than the number of li elements
						
						if(currentLi+1>numLi){
							currentLi=numLi
						}
						else{
							currentLi++;
						}
						$(".insideUl li").removeClass("selected");
						$(".insideUl li:nth-of-type("+currentLi+")").addClass("selected");

	        break;
					case 13: // ENTER
						e.preventDefault();
						thisA=$(".insideUl").find(".selected a");
						thisAHref=thisA.attr('href');
						console.log(thisAHref);
						window.location = thisAHref;

					break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});
});
