$(document).ready(function(){
		$("#agregar_peli").click(function(event) {
		event.preventDefault();
		
		var pelicula = $('#pelicula').val();
	    var categoria = $('#categoria').val();
		var descripcion = $('#descripcion').val();
		var director = $('#director').val();
		var token = $('#token').val();
		var fecha_update = $('#fecha').val();
		var url_video = $('#url').val();

		var route = "admin/create";
		$("#modal").hide();
 		if(pelicula != "" && categoria != "" && descripcion != "" && director != "" && fecha_update != "" && url_video != ""){
				$.ajax({
				method: 'post',
				dataType: 'json',
				data: {pelicula,categoria,descripcion,director,fecha_update,url_video,_token:token},
				url: route,
				success:function(response) { 

                $('#movies').dataTable()._fnAjaxUpdate();
            	}
			});
		}else {} 

	});
});