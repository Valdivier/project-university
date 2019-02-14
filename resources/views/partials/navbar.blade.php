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
								<h2 style="color: white"><font>Huejutla </font><font size="30">Cinema</font></h2>
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
							<li class="">
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
							
						 	<li class="dropdown">
				
								<a class="dropdown-item dropdown-toggle" href="#"><img src="images/{{Auth::user()->img}}"  style="height: 10px; width: 10px; background-color: #EFEFEF" id="nombre"> {{ Auth::user()->name }}</a> 
		                               
								<ul class="dropdown-menu">
			                        <li><a href="{{ url('profile') }}">Perfil</a></li>

			                        @if(Auth::user()->hasRole('Admin'))
		                            <li><a href="{{ url('admin') }}">Administrar</a></li>
									@endif
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
		                            document.getElementById('logout-form').submit()";>Cerrar sesión</a></li>
								</ul>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        	  {{ csrf_field() }}

		                       	</form>	 
		                    </li>
		     			     @endif
							<li>
								<a href="{{ url('contact') }}">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
