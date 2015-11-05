$( document ).ready(function() {
	var input_content=null;
	var content_id=null;
	var number_of_input=null;
		$("#megaTab td").dblclick(function(){
			number_of_input=$("#edit-tab-value").length
			if(number_of_input<1){
				content_id = $(this).attr('id');
				var old_content = $(this).text();
				$(this).text("");
				$(this).html("<input type='text' value='"+old_content+"' id='edit-tab-value'/>");
				$("#edit-tab-value").select();
				$("#edit-tab-value").keypress(function(e){
					if(e.which == 13) {
								input_content = $(this).val();
								$(this).parent().html("").text(input_content);
								$.ajax({
									type: "POST",
									url: "action/change_form_values.php",
									data: {content_id: content_id, input_content: input_content },
		
									success:function(donnee) {
									}
									});
						}
				});	
				
			}

		});
});
