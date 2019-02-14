@extends('layouts.master')

@section('content')
		<div class="wrapper">

			<div class="navbar" role="navigation">
				<div class="heading">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="search">
									Lunes - Viernes
								</div>
								<div class="tel">
									<a href="tel:0000000000">
									<i class="material-icons">phone in talk</i> 0000 000 000
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="navbar-header">
						<a href="/" class="logo" title="Craft beer landing page">
							<div class="col-md-9">
								<h2 style="color: white"><font>Express </font><font size="30">Cinema</font></h2>
							</div>
							<!--<img src="images/logo.svg">-->
						</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar top-bar"></span>
							<span class="icon-bar middle-bar"></span>
							<span class="icon-bar bottom-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse">
						<ul id="menu-primary" class="nav navbar-nav">
							<li class="active">
								<a href="/">Inicio</a>
							</li>
							 
							 @if (Auth::guest())
								
							<li class="dropdown">
								<a href="#">Mi cuenta</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('login')}}">Iniciar sesión</a></li>
									<li><a href="register">Crear cuenta</a></li>
								</ul>
							</li>
							
							 @else
							
						 	<li class="dropdown active">
									<!--<a href="#">{{ Auth::user()->name }}</a> -->
								<a class="dropdown-item dropdown-toggle" href="#"><img src="../images/{{Auth::user()->img}}"  style="height: 10px; width: 10px; background-color: #EFEFEF" id="nombre"> {{ Auth::user()->name }}</a> 
		                               
								<ul class="dropdown-menu">
			                        <li><a href="#">Perfil</a></li>
		                            <li><a href="{{ url('movie_add') }}">Administrar</a></li>
		                           
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
		                            document.getElementById('logout-form').submit()";>Cerrar sesión</a></li>
								</ul>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        	  {{ csrf_field() }}
		                       	</form>	 
		                    </li>
		     			     @endif
							<li>
								<a href="#">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</div>


			<div id="content_hero" style="background-image: url(../images/hero-single-movie.jpg)">
				<img src="../images/scroll-arrow.svg" alt="Scroll down" class="scroll" />
		<div class="container">
					<
						<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
							<div class="col-md-9">		            
								<span class="title">Película/</span>
								<h1>Detalles</h1> 
							</div>
						</div>
					</div>
			</div>


            @foreach ($peliculas as $movies)

			<div class="container section single-movie">
				<div class="row">
					<div class="col-sm-7">
						<h2>Sinopsis</h2>
							<div class="row">
								<div class="col-sm-5">
									<img src="../images/movies/{{$movies->img}}" alt="Transformers: The Last Knight" class="poster">
									<div class="share">
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fa fa-pinterest"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
								</div>
								
								<div class="col-sm-7">
									<h3 class="no-underline">{{$movies->pelicula}}</h3>
									<p>{{$movies->descripcion}}</p>
					
									<ul class="movie-info">
										<li><i>Director</i> {{$movies->categoria}}y</li>
								        <li><i>Género</i>{{$movies->fecha}}</li>
										<li><i>Release date</i>{{$movies->fecha}}</li>
							
									</ul>
								</div>
							</div>
					</div>
					<div class="col-sm-4 col-sm-push-1">
						<h2>HOrarios de la función</h2>
						<ul class="show-times">
							<li><i>Lunes</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Martes</i> <span class="time past">13:00</span> <span class="time">15:30</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li class="today"><i>Today</i> <span class="time past">12:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Jueves</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">20:15</span> <span class="time">22:00</span></li>
							<li><i>Viernes</i> <span class="time past">13:00</span> <span class="time">14:45</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Sabado</i> <span class="time past">14:15</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Domingo</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:20</span></li>
						</ul>
					</div>
				</div>
			</div>

			@endforeach

			<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<h6>Siguenos en</h6>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h6>&nbsp;</h6>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h6>&nbsp;</h6>
							<ul>
								<li><a href="#"><i class="fa fa-google-plus"></i> Google +</a></li>
							</ul>
						</div>

						<div class="col-sm-3">
							<h6>&nbsp;</h6>
							<ul>
								<li><p>2019 &copy; Express Cinema / <a href="#">Web design</a></p></li>
							</ul>
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
				</div>
			</footer>
		</div>
@endsection