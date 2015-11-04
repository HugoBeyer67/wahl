$( document ).ready(function() {
		$("#megaTab td").dblclick(function(){
			console.log("clic !");
			var old_content = $(this).text();
			$(this).text("");
			$(this).html("<input type='text' value='"+old_content+"' id='edit-tab-value'/>");
			$("#edit-tab-value").select();
			$("#edit-tab-value").keypress(function(e){
				if(e.which == 13) {
			        var new_content = $(this).val();
			        $(this).parent().html("").text(new_content);
			    }
			});
		});
});