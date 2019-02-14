@section('tittle','Iniciar sesión')
@extends('layouts.master')
@section('content')

			<div class="wrapper">

				<div id="content_hero" style="background-image: url(images/hero-contact.jpg)">
					<img src="images/scroll-arrow.svg" alt="Scroll down" class="scroll" />

					<div class="container">
					<
						<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
							<div class="col-md-9">		            
								<span class="title"><a href="/" title="Regresar a la página de inicio">Inicio/</a></span>
								<h1>Inicio de sesión</h1> 
							</div>
						</div>
					</div>
				</div>

		        <br>
		        <br>
		        <br>
		        <br>
		        <br>

				<div class="container section negative-margin contact">
					<div class="row">
						<div class="col-sm-12">
							<h2>Ingrese los datos correspondientes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<form method="POST" action="{{route('login')}}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
									<label for="email">Correo *</label>

									<input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required required placeholder="Ingrese su correo electrónico">

									 @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password">Contraseña *</label>
									<input id="password" type="password" class="form-control" name="password" required required placeholder="Ingrese su contraseña">
		                             
		                            @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                            @endif     
								</div>

								<div class="form-group">
									<div class="checkbox">
										<label>
											  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar contraseña
										</label>
								    </div>
								</div>
							
								<div class="form-group" align="center">
									<button class="btn btn-ghost" type="submit">Iniciar sesión</button>
								</div>
							</form>
						</div>
						<div class="col-sm-5 col-sm-push-1" align="center">


							<div class="icon-row">
								<div class="col">
									<span class="circle">
									<img src="images/iconos/user-icono.png">
								</span>
								</div>
								<div class="col">
									<h4 class="no-underline">Accede a tu perfil</h4>
									<p>¡Inicia ya!</p>
								</div>
							</div>

								<div class="icon-row">
								<div class="col">
									<span class="circle">
									<img src="images/iconos/user-mujer.png">
								</span>
								</div>
								<div class="col">
									<h4 class="no-underline">Siempre actualizado</h4>
									<p>¡Te mantenemos al día!</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
@endsection