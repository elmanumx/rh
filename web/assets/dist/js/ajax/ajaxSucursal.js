function sendForm(formu,id){
	console.log(id);
	var datos = $('#formSucursal').serialize();
	console.log(datos.nombre);
	datos = datos + '&option=agregar';
	//Agregar
	if(id == "" || id == null){
		console.log("Agregar");
		$.ajax({
			url: '../../controllers/sucursal/ajax.php',
			type: 'POST',
			data: datos
		})
		.done(function(data) {
			console.log(data);
		});
	} else { ///////Editar
		console.log("editar");
	}


}
