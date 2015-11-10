$( document ).ready(function() {	
	var i=1;
	var numLi = $('.insideUl li').length;
	var currentLi=0;
	var thisLi=null;
	
	//implemente la fonction doubletap et double tap pour mobile en jquery
			(function($){

				$.event.special.doubletap = {
					bindType: 'touchend',
					delegateType: 'touchend',

					handle: function(event) {
						var handleObj   = event.handleObj,
								targetData  = jQuery.data(event.target),
								now         = new Date().getTime(),
								delta       = targetData.lastTouch ? now - targetData.lastTouch : 0,
								delay       = delay == null ? 300 : delay;

						if (delta < delay && delta > 30) {
							targetData.lastTouch = null;
							event.type = handleObj.origType;
							['clientX', 'clientY', 'pageX', 'pageY'].forEach(function(property) {
								event[property] = event.originalEvent.changedTouches[0][property];
							})

							// let jQuery handle the triggering of "doubletap" event handlers
							handleObj.handler.apply(this, arguments);
						} else {
							targetData.lastTouch = now;
						}
					}
				};

			})(jQuery);
			
			var getPointerEvent = function(event) {
    return event.originalEvent.targetTouches ? event.originalEvent.targetTouches[0] : event;
};
var tapFlag=0;
var $touchArea = $('header .fa'),
    touchStarted = false, // detect if a touch event is sarted
    currX = 0,
    currY = 0,
    cachedX = 0,
    cachedY = 0;

//setting the events listeners
$touchArea.on('touchstart mousedown',function (e){
    e.preventDefault(); 
    var pointer = getPointerEvent(e);
    // caching the current x
    cachedX = currX = pointer.pageX;
    // caching the current y
    cachedY = currY = pointer.pageY;
    // a touch event is detected      
    touchStarted = true;
    // detecting if after 200ms the finger is still in the same position

    setTimeout(function (){
        if ((cachedX === currX) && !touchStarted && (cachedY === currY)) {
					if(tapFlag==1){
						$(".mobileMenu").hide();
						tapFlag=0;
					}
					else{
						tapFlag=1
						$(".mobileMenu").show();
						$(".insideUl").show();
					}

        }
    },200);
});
$touchArea.on('touchend mouseup touchcancel',function (e){
    e.preventDefault();
    // here we can consider finished the touch event
    touchStarted = false;
});
$touchArea.on('touchmove mousemove',function (e){
    e.preventDefault();
    var pointer = getPointerEvent(e);
    currX = pointer.pageX;
    currY = pointer.pageY;
    if(touchStarted) {
         // here you are swiping
    }
   
});

		
		$('#creations').on('focusin mouseover', function(e) {
			i=1;
    	$(".insideUl").show();
			$(".insideUl").addClass("insideMenuShown");
		});
		$('#creations').on('focusout mouseout', function(e) {
			i=1;
			$(".insideUl").hide();
			$(".insideUl").removeClass("insideMenuShown");
			if($(".insideUl li").hasClass("selected")){
				$(".insideUl li").removeClass("selected");
				currentLi=0;
			}
		});
		
		//on tap of #creations prevents default
		
		
		//gestion des keydowns 
		$("nav").keydown(function(e) {
			
    	switch(e.which) {
					
	        case 38: // up
					if(currentLi-1==0){
						currentLi=1;
					}
					else{
						currentLi--;
					}
					$(".insideUl li:nth-of-type("+currentLi+")").find("a").focus();
					
	        break;

	        case 40: // down
					//don't set the counter higher than the number of li elements
						
						if(currentLi+1>numLi){
							currentLi=numLi
						}
						else{
							currentLi++;
						}
						
						$(".insideUl li:nth-of-type("+currentLi+")").find("a").focus();
						//console.log($(document.activeElement));

	        break;
					/*case 13: // ENTER
							if($(".insideUl li").hasClass("selected")){
								e.preventDefault();
								thisA=$(".insideUl").find(".selected a");
								thisAHref=thisA.attr('href');
								window.location = thisAHref;
							}
							else{
								console.log($(':focus'));
							}
					break;*/

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});

if(WURFL.form_factor == "Smartphone"){
	
    var headerContent=$("header nav").html();
		$(".mobileMenu").append(headerContent);
}
else{
	$("header .fa").hide();
}

});
