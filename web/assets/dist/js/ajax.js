$('#run').click(function(event) {
	 $.ajax({
	 	url: 'Controllers/ajaxController.php',
	 	type: 'POST',
	 	data: {param1: 'value1'},
	 })
	 .done(function(data) {
	 	console.log(data);
	 });	 
});

