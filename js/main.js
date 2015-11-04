$( document ).ready(function() {
		$("#creations").mouseenter(function(){
			console.log("enter");
			$(".insideUl").show();
		});
		$("#creations").mouseleave(function(){
			console.log("leave");
			$(".insideUl").hide();
		});
});
