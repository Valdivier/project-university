@extends('layouts.master')
@section('tittle','Cinema Huejutla')
@section('content')

		<div class="wrapper">

			<div id="hero" class="carousel slide carousel-fade" data-ride="carousel">
				<img src="images/scroll-arrow.svg" alt="Scroll down" class="scroll" />

				<div class="container">
					<ol class="carousel-indicators">
						<li data-target="#hero" data-slide-to="0" class="active"></li>
						<li data-target="#hero" data-slide-to="1"></li>
						<li data-target="#hero" data-slide-to="2"></li>
					</ol>
				</div>

				<div class="carousel-inner">
					<div class="item active" style="background-image: url(images/home/home-1.jpg)">
						<div class="container">
							<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
								<div class="col-md-9">
									<span class="title">Drama, Comedia</span>
									<h1>La favorita</h1>
									<p>Principios del siglo XVIII. Inglaterra está en guerra con los franceses. Una reina debilitada, Anne (Olivia Colman), ocupa el trono, mientras que su amiga Lady Sarah (Rachel Weisz) gobierna el país en su lugar, debido al precario estado de salud y al carácter inestable de la monarca.</p>
									<div class="buttons">
										<span class="certificate">
										PG
										</span>
										<a href="https://youtu.be/aH68nk9oJDU;autoplay=1" data-vbtype="video" class="venobox btn btn-default">
											<i class="material-icons">play_arrow</i>
											<span>Ver trailer</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="item" style="background-image: url(images/home/home-2.jpg)">
						<div class="container">
							<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
								<div class="col-md-9">
								<span class="title">Animación, Aventura, Fantasía</span>
								<h1>Cómo entrenar a tu dragón 3</h1>
								<p>Hipo y Desdentao descubrirán finalmente su verdadero destino: para uno, gobernar Isla Mema junto a Astrid; para el otro, ser el líder de su especie. Pero, por el camino, deberán poner a prueba los lazos que los unen, plantando cara a la mayor amenaza que jamás hayan afrontado... y a la aparición de una Furia Nocturna hembra.</p>
									<div class="buttons">
									<span class="certificate">
									15
									</span>
									<a href="https://www.youtube.com/watch?v=4_0PtQmw5q8" data-vbtype="video" class="venobox btn btn-default">
									<i class="material-icons">play_arrow</i>
									<span>Ver trailer</span>
									</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item" style="background-image: url(images/home/home-3.jpg)">
						<div class="container">
							<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
								<div class="col-md-9">
									<span class="title">Acción, Fantasía</span>
									<h1>Capitana Marvel</h1>
									<p>La Comandante Carol Danvers posee fuerza, resistencia y durabilidad sobrehumanas, puede volar a unas seis veces la velocidad del sonido y tiene la capacidad de absorber otras formas de energía para ampliar aún más su poder. Tendrá que usar todas estas habilidades para enfrentarse a los Skrulls y los Kree, dos peligrosas y destructivas razas alienígenas que se convertirán en una amenaza directa cuando inicien una guerra en la que se ve atrapada la Tierra.</p>
									<div class="buttons">
										<span class="certificate">
											PG
										</span>
										<a href="https://www.youtube.com/watch?v=j-WojK3iUwQ" data-vbtype="video" class="venobox btn btn-default">
										<i class="material-icons">play_arrow</i>
										<span>Ver trailer</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container section">
				<div class="row">
					<div class="col-sm-12">
						<h2>Películas</h2>

						
						<div class="slick-carousel" id="newIn">

							@foreach ($peliculas as $movies)
							<div class="movie-slide">
								<div class="movie-poster">
									<aside>
										<div>
											<a href="{{$movies->url}}" data-vbtype="video" class="venobox play">
											<i class="material-icons">play_arrow</i>
											</a>
											<a href="/viewdetail/{{$movies->id}}" class="read-more">Más información</a>
											<span class="date">{{$movies->fecha}}</span>
										</div>
									</aside>

									<a href="#">
										<img src="images/movies/{{$movies->img}}" alt="{{$movies->pelicula}}" />
									</a>
								</div>

								<h4 class="no-underline">{{$movies->pelicula}}</h4>
								<div class="star-rating">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
							</div>
							@endforeach
						</div>
						
					</div>
				</div>
			</div>

			<section class="dark">
				<div class="container section remove-bottom-padding">
					<div class="row comingSoon-slides">
						<div class="col-sm-12">
							<h2>Mas vistos</h2>
				
							@foreach ($peliculas as $movies)
							<div class="row slideOne">
								<div class="bg" style="background: url(images/slide-2.png);"></div>
									<div class="col-sm-5 col-xs-12 slide-content">
										<span class="title">{{$movies->categoria}}</span>
										<h3 class="no-underline">{{$movies->pelicula}}</h3>
										<div class="star-rating">
											<i class="material-icons">star_rate</i>
											<i class="material-icons">star_rate</i>
											<i class="material-icons">star_rate</i>
											<i class="material-icons">star_rate</i>
											<i class="material-icons">star_rate</i>
										</div>
										<div class="date">
											<i class="material-icons">date_range</i>{{$movies->fecha}}
										</div>
											<p>{{$movies->descripcion}}</p>
											<!--<p><a href="#" class="arrow-button">More info</a></p> -->
									</div>
									<div class="col-sm-6 col-xs-12 col-sm-push-1 slide-video">
										<a href="{{$movies->url}}" data-vbtype="video" class="venobox video">
										<i class="material-icons">play_arrow</i>
										<img src="images/movies/{{$movies->img}}" alt="{{$movies->pelicula}}" />
										</a>
									</div>
							</div>


							<br>
							<br>
							@endforeach
						</div>
					</div>
				</div>
			</section>	 
		</div>
@endsection