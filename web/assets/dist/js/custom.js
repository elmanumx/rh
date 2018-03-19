$('.cleanForm').click(function(event) {
	$("form").find(':input').each(function(){
		this.value="";
	});
});
