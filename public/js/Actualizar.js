$(document).ready(function(){
		$("#actualizar").click(function(event) {
		event.preventDefault();
		
		var actualizacion = $('#actualizar').val();
		var pelicula = $('#update_producto').val();
		var categoria = $('#update_categoria').val();
		var descripcion = $('#update_descripcion').val();
	    var director = $('#update_director').val();
		var token = $('#token').val();
		var fecha_update = $('#update_fecha').val();;
		var route = "admin/update";
		
		$("#modal").hide();
		if(pelicula != "" && categoria != "" && descripcion != "" && director != "" && fecha_update != ""){
				$.ajax({
				method: 'post',
				dataType: 'json',
				data: {actualizacion,pelicula,categoria,descripcion,director,fecha_update,_token:token},
				url: route,
				success:function(response) {  
                $('#movies').dataTable()._fnAjaxUpdate();
            	}
			});
		}else {}

	});
});