// A $( document ).ready() block.
$( document ).ready(function() {
	$(".se-pre-con").fadeIn("fast");
	$(window).load(function() {
	$(".se-pre-con").fadeOut("slow");
	$('.main_content .article_content img').each(function() {
			var imageWidth=$(this).width();
			console.log(imageWidth);
			if(imageWidth>=578){
				$(this).removeAttr("style");
				$(this).addClass("adaptedImgArticle");
			}

		});
	});


/*$('.main_content .article_content').find('img').each(function() {
	// Get on screen image
	var image = new Image();
	image.src = $(this).attr("src");
	console.log(image.src);
	console.log('width: ' + image.naturalWidth + ' and height: ' + image.naturalHeight);
		if(imageWidth>=578){
			$(this).css("width","100%");
			$(this).css("height","auto");
		}
})*/


});
