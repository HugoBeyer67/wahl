$( document ).ready(function() {
		$("#creations").focusin(function(){
			console.log("enter");
			$(".insideUl").show();
		});
		$("#creations").focusout(function(){
			console.log("leave");
			$(".insideUl").hide();
		});
		$("#creations").mouseover(function(){
			console.log("enter");
			$(".insideUl").show();
		});
		$("#creations").mouseout(function(){
			console.log("leave");
			$(".insideUl").hide();
		});
});
