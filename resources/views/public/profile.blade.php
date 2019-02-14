@extends('layouts.master')
@section('tittle','Mi perfil')
@section('content')
		<div class="wrapper">

			<div id="content_hero" style="background-image: url(../images/hero-whats-on.jpg)">
				<img src="../images/scroll-arrow.svg" alt="Scroll down" class="scroll" />
		<div class="container">
					
						<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
							<div class="col-md-9">		            
								<span class="title">Inicio/</span>
								<h1>Mi perfil</h1> 
							</div>
						</div>
					</div>
			</div>

			<div class="container section single-movie">
				<div class="row">
					<div class="col-sm-7">
						<h2>Mis datos</h2>
							<div class="row">
								<div class="col-sm-5">
									<img src="../images/profiles/{{ Auth::user()->img }}" alt="Transformers: The Last Knight" class="poster">
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
									<h3 class="no-underline">{{ Auth::user()->name }}</h3>
									<p>{{ Auth::user()->lastname }}</p>
					
									<ul class="movie-info">
										<li><i>Correo</i>{{ Auth::user()->email }}</li>							
									</ul>
								</div>
							</div>
					</div>
                  <!--

					<div class="col-sm-4 col-sm-push-1">
						<h2></h2>
						<ul class="show-times">
							<li><i>Lunes</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Martes</i> <span class="time past">13:00</span> <span class="time">15:30</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li class="today"><i>Today</i> <span class="time past">12:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Jueves</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">20:15</span> <span class="time">22:00</span></li>
							<li><i>Viernes</i> <span class="time past">13:00</span> <span class="time">14:45</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Sabado</i> <span class="time past">14:15</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:00</span></li>
							<li><i>Domingo</i> <span class="time past">13:00</span> <span class="time">16:00</span> <span class="time">19:30</span> <span class="time">22:20</span></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
@endsection