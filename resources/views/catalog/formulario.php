	<div class="row">
					<div class="col-sm-12">
						<h2>Ingrese los datos correspondientes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
							<form method="POST" action="{{route('register')}}"  enctype="multipart/form-data">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('pelicula') ? ' has-error' : '' }}"">
									<label for="pelicula">Nombre de la película*</label>

									<input  id="pelicula" type="text" class="form-control" name="pelicula" value="{{ old('pelicula') }}" required autofocus required placeholder="Ingrese el nombre">

									 @if ($errors->has('pelicula'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('pelicula') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}"">
									<label for="categoria">Categoria*</label>

									<input  id="categoria" type="text" class="form-control" name="categoria" value="{{ old('categoria') }}" required autofocus required placeholder="Ingrese el nombre de la categoria">

									 @if ($errors->has('categoria'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('categoria') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}"">
									<label for="descripcion">Descripción*</label>

									<input id="descripcion" type="text" style="width:555px; height:70px;" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus required placeholder="Ingrese la descripción de la película">

									 @if ($errors->has('descripcion'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('descripcion') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group{{ $errors->has('director') ? ' has-error' : '' }}"">
									<label for="director">Director de la película*</label>

									<input  id="director" type="text" class="form-control" name="director" value="{{ old('director') }}" required autofocus required placeholder="Ingrese el nombre del director de la película">

									 @if ($errors->has('director'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('director') }}</strong>
		                                    </span>
		                                @endif
								</div>

									<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}"">
									<label for="fecha">Fecha de estreno de la película*</label>

									<input  id="fecha" type="text" class="form-control" name="fecha" value="{{ old('fecha') }}" required autofocus required placeholder="Ingrese la fecha de estreno">

									 @if ($errors->has('fecha'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('fecha') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}"">
									<label for="url">URL del video de la ´película*</label>

									<input  id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" required autofocus required placeholder="Ingrese el enlace del video">

									 @if ($errors->has('url'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('url') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group">
		                                                            
		                            <label class="text-dark">Portada de la película</label>
		                            <input type="file" accept=".png, .jpg, .jpeg" name="avatar">
		                        </div>
							
								<div class="form-group" align="center">
									<button class="btn btn-ghost" type="submit">Registrar</button>
								</div>

								<div class="message">
		                           
		                                <p>
		                                    <h3>Datos guardados correctamente</h3>
		                                </p>
		                        </div>
		 

							</form>
					</div>

					<div class="col-sm-5 col-sm-push-1" align="center">
						<div class="icon-row">
							<div class="col">
								<span class="circle">
								<img src="images/iconos/movie.png">
								</span>
							</div>
							<div class="col">
									<h4 class="no-underline">Portada</h4>
									<p>Mejora la experiencia visual</p>
							</div>
						</div>
					</div>
				</div>