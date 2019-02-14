@extends('layouts.master-movies-admin')
@section('tittle','Cinema Huejutla')
@section('content')

<!-- Datatable -->
	<script>
			    $(document).ready(function(){
			        listar();
			        
			    });
			    var listar = function()
			    {
			        var tabla=$("#movies").DataTable({
			            "processing": true,
			            "serverSide": true,
			            "destroy": true,
			            "select": true,
			            "ajax":"{{url('admin/get')}}",
			            "columns":[
			                { data: 'clave'},
			                {data: 'img',
			                  "render": function(data){
			                        return '<img height="100" width="100" src="images/movies/' + data + '"/>';
			                  } 
			                },
			                {data: 'pelicula',
			                    "render": function(data){
			                        return '<br><br><label class="h6">' + data + '<label/>';
			                  } 
			                },
			                {data: 'categoria',
			                    "render": function(data){
			                        return '<br><br><label class="h6">' + data + '<label/>';
			                  } 
			                },
			                {data: 'descripcion',
			                    "render": function(data){
			                        return '<br><br><label class="h6"> ' + data + '<label/>';
			                  } 
			                },
			                {data: 'director',
			                    "render": function(data){
			                        return '<br><br><label class="h6">' + data + '<label/>';
			                  } 
			                },
			                {data: 'fecha',
			                    "render": function(data){
			                        return '<br><br><label class="h6"> ' + data + '<label/>';
			                  } 
			                },
			      
			                {"defaultContent": "<button type='button' class='editar btn btn btn-primary' style='width:80px; height:30px;' title='Ver detalle de películas'><img src='/images/iconos/eye.png'></button><button type='button' class='eliminar btn btn-danger' id='elimini' style='width:80px; height:30px; margin-top:7px;'  title='Eliminar'><img src='/images/iconos/delete.png'></button>"}
			            ],
			            "columnDefs": [
			                {
			                    "targets": [ 0 ],
			                    "visible": false,
			                    "searchable": false,
			                }
			            ],

			            "language": {
			                "sProcessing": "Procesando la información...",
			                "sLengthMenu": "Mostrar _MENU_ registros",
			                "sZeroRecords": "No se encontraron resultados",
			                "sEmptyTable": "Ningún dato disponible en esta tabla",
			                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			                "sInfoEmpty": "Mostrando películas del 0 al 0 de un total de 0 películas",
			                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
			                "sInfoPostFix": "",
			                "sSearch": "Buscar:",
			                "sUrl": "",
			                "sInfoThousands": ",",
			                "sLoadingRecords": "Cargando...",
			                "oPaginate": {
			                    "sFirst": "Primero",
			                    "sLast": "Último",
			                    "sNext": "Siguiente",
			                    "sPrevious": "Anterior"
			                },
			                "oAria": 
			                {
			                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
			                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			                }
			            }
			        });

			        
			        $('#movies').on("click", "button.editar", function() 
			        {
			            var data = tabla.row($(this).parents("tr")).data();
			            document.getElementById("image_pro").src= 'images/movies/'+data.img+'';
			            $("#update_producto").val(data.pelicula);
			            $("#update_categoria").val(data.categoria);
			            $("#update_descripcion").val(data.descripcion);
			            $("#update_director").val(data.director);
			            $("#update_fecha").val(data.fecha);			   
			            $('#actualizar').val(data.clave);
			            $('#Modal_productos').modal('show');
			        });
			        

			         $('#movies').on("click", "button.eliminar", function() {
			            var data = tabla.row($(this).parents("tr")).data();
			            var intIdMovie = (data.clave);
			            SwalDelete(intIdMovie);
			        });
			       
			    }  

			    function SwalDelete(intIdMovie) {
			        var token = $("#token").val();
			        var route = "admin/delete";

			        swal({
			            title: "¿Realmente se requiere eliminar?",
			            text: "Eliminar registro",
			            icon: "warning",
			            buttons: true,
			            dangerMode: true,
			        }).then((willDelete)=>{
			            if (willDelete) {
			                $.ajax({
			                    method:'post',
			                    dataType:'json',
			                    data:{intIdMovie,_token:token},
			                    url: route,
			                    success:function(response) {  
			                    $(response.total);
			                    $(response.pro);
			                    }
			                }).done(function() {
			            swal({
			                title: "Express Cinema:",
			                text: "El registro se a eliminado correctamente",
			                icon: "success",
			                button: "Aceptar",
			            });
			            var tabla = $('#movies').DataTable();
			            tabla.ajax.reload();
			            intIdMovie = null;
			        }).fail(function(){
			            alert( "error" );
			        }).always(function(){});
			            } else {
			            	swal({
			            		title: "Eliminación cancelada",
			            		text: ":D",                                 
			            		})
			            	;}
			        });  
			    } 
	</script>
	<!--Termina -->

		<div class="wrapper">
			<div id="content_hero" style="background-image: url(images/hero-news.jpg)">
				<img src="images/scroll-arrow.svg" alt="Scroll down" class="scroll" />

				<div class="container">
				
					<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
						<div class="col-md-9">
				            
							<span class="title">Inicio/</span>
							<h1>Administración de películas</h1> 
						</div>
					</div>
				</div>
			</div>
	        <br>
	        <br>
	        <br>
	        <br>
	        <br>
			
			<!-- Formulario -->
			<div class="container">
                	   
					<h1>Dar click para: 
						<span class="circle">
							<img src="images/iconos/peli.png">
						</span>
					</h1>

				  	<button type="button" class="btn btn-primary" style="border-radius: 30px;" data-toggle="modal" data-target="#addMovies">
				    Agregar una nueva película
				 	</button> 
	              	<br>
		      		<br>
		       		<br>
		        	<br>
					<table class="table table-striped table-bordered hover text-dark text-center" id="movies" style="width:100%">
					      <thead>
					          <tr style="background-color: #F8E0E6">
					              <th> 

					              </th>
					              <th>
					                  Imagen
					              </th>
					              <th>
					                  Nombre
					              </th>
					              <th>
					                  Categoria
					              </th>
					              <th>
					                  Descripcion
					              </th>
					              <th>
					                  Director
					              </th>
					              <th>
					                  Fecha
					              </th>
					              <th>
					                  Opciones
					              </th>
					          </tr>
					      </thead>
					</table>
			</div>
	    </div>

	    <!-- formulario modal agregar --> 
		<div class="modal fade" id="addMovies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background: rgba(0,0,0,0.5);">
				    	<h3 class="modal-title" id="exampleModalLabel">Registro</h3>
				    </div>

				    <div class="modal-body">			         
				        <form id="contactForm" name="contactForm" role="form" method="POST"  enctype="multipart/form-data">   	
				         	<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
				            			
							<div class="form-row">
							    <div class="form-group col">
									<label class="text-dark">Nombre de la película *</label>
									<input type="text" height="150" width="20" style="border-radius: 10px" id="pelicula" required required placeholder="Ingrese el nombre">
									<br>
									    <br>
									<label class="text-dark">Categoria *</label>
									<input type="text" height="100" width="20" style="border-radius: 10px" id="categoria" required required placeholder="Ejemplo: Acción, Drama, Terror">
									<br>
							     	<br>
							        <div class="form-row">
									    <div class="form-group col">
									    	<label class="text-dark">Descripción *</label>
									     	<textarea maxlength="2000" data-msg-required="Escribe tú mensaje." rows="2" class="form-control" name="message" id="descripcion" style="border-radius: 10px" equired required placeholder="Sinopsis de la película"></textarea>
									    </div>
									</div> 
									<label class="text-dark">Director de la película *</label>
									<input type="text" height="100" width="20" style="border-radius: 10px" id="director" required required placeholder="Ingrese el nombrer">
									<br>
							 		<br>               			    									           
									<label class="text-dark">Fecha de estreno *</label>
									<input type="date" name="" id="fecha" style="border-radius: 10px">
									<br>
									<br>
									<label class="text-dark">URL de video *</label>
									<input type="text" height="100" width="20" style="border-radius: 10px" id="url" required required placeholder="Ingresar un enlace de video del trailer de la película">
								</div>

								<div class="form-group">
									<label class="text-dark">Foto de portada *</label>
									<input type="file" style="border-radius: 10px" accept=".png, .jpg, .jpeg" name="avatar" id="avatar">
								</div>
							</div>
						    <br>

							<div class="modal-footer">
							   	<button type="submit" class="btn btn-info" data-dismiss="modal" id="agregar_peli">Agregar</button>
							    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
							</div>
				        </form>
				    </div>
				</div>
			</div>
		</div> 

		 <!-- formulario modal actualizar-->
<!--
		<div class="modal fade" id="Modal_productos" role="dialog">
		    <div class="modal-dialog">
		        <div class="modal-content">
					<div class="modal-header" style="background: rgba(0,0,0,0.5);">
			          	<h3 class="modal-title" id="exampleModalLabel">Actualizar registro</h3>
			        </div>
                    <div class="modal-body">  		                	
		               	<form id="formulario_productos" name="formulario_productos" role="form" method="post">		             
		                
		                <div class="form-row">
		                    	<div class="form-group col"> 
			                    	<img class="rounded-circle" style="height: 165px; width: 665px; background: #AEAEAE border-radius:20px;" id="image_pro">
			                        <br>
			                        <br>

			                        <label class="text-dark">Nombre de la película *</label>
			                        <input type="text" height="150" width="20" style="border-radius: 10px" name="update_producto" id="update_producto">
                                    
                                    <br>
			                        <br>

			                        <label class="text-dark">Categoria *</label>
			                        <input type="text" height="150" width="20" style="border-radius: 10px" name="update_categoria" id="update_categoria">
                                
                                    <br>
			                        <br>

			                        <div class="form-row">
									    <div class="form-group col">
									    	<label class="text-dark">Descripción *</label>
									       			<textarea maxlength="2000" data-msg-required="Escribe tú mensaje." rows="2" class="form-control" name="update_descripcion" id="update_descripcion" style="border-radius: 10px"></textarea>
									    </div>
				         			</div> 
                                    <label class="text-dark">Director de la película *</label>
								    <input type="text" height="100" width="20" style="border-radius: 10px" name="update_director" id="update_director">
								    
								    <br>
							        <br> 

									<label class="text-dark">Fecha de estreno *</label>
									<input type="date" name="" id="update_fecha" style="border-radius: 10px">							                             	
		                    	</div>
		                    <br>

		                    <div class="modal-footer">
		                    	<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
		                        <input type="hidden" name="val" value="" id="val"> 
		                        <button class="btn btn-info" id="actualizar" name="actualizar" value="" type="button">
		                                Actualizar
		                        </button>
		                        
		                        <button class="btn btn-danger" data-dismiss="modal" type="button">
		                            Cancelar
		                        </button>
		                    </div>		                    
		               	</form>  
		            </div>     
		        </div>
		    </div>
		</div> -->


@endsection