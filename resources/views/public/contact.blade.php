@section('tittle','Crear cuenta')
@extends('layouts.master')
@section('content')
		<div class="wrapper">

			<div id="content_hero" style="background-image: url(../images/hero-single-movie.jpg)">
				
					<div class="container">
					
						<div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
							<div class="col-md-9">		            
								<span class="title">Inicio/</span>
								<h1>Ubicación</h1> 
							</div>
						</div>
					</div>
			</div>

	        <div class="container section negative-margin">
				<div class="row">
					<div class="col-sm-12">
			          	<div class="map">
			            	<div class="map-part">
			            		<div id="map" class="map-inner-part"></div>
			      		        	<!--<style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">themecircle</a>-->
			      		    </div>
			           		
			           		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC_G1wZMKrwyHHOteMdVwCy82Qm4Pp7vyI&amp;callback=initMap">		  
			           		</script> 
			          		<script type="text/javascript">
			               	// When the window has finished loading create our google map below
			               	google.maps.event.addDomListener(window, 'load', init);
			            
			                function init() {
			                // Basic options for a simple Google Map
			                 // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
			                  
			               	var mapOptions = {
			                // How zoomed in you want the map to start at (always required)
			                zoom: 14,
			                scrollwheel:false,

			                // The latitude and longitude to center the map (always required)
			                center: new google.maps.LatLng(25.6750700, -100.3184700), // Huejutla
			                // How you would like to style the map. 
			                // This is where you would paste any style found on Snazzy Maps.
			                styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#666666"},{"lightness":100},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			                 };

			                // Get the HTML DOM element that will contain your map 
			                // We are using a div with id="map" seen below in the <body>
			                var mapElement = document.getElementById('map');

			               	// Create the Google Map using our element and options defined above
			                var map = new google.maps.Map(mapElement, mapOptions);

			                // Let's also add a marker while we're at it
			                
			              	var marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.6750700, -100.3184700)});infowindow = new google.maps.InfoWindow({content:"<b>Express Cinema</b><br/>144 , Nuevo León<br/> Monterrey" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			            	</script> 
	         			 </div>
	         		</div>
	         		<br>
	         		<H1>Monterrey</H1>
	            </div>
	        </div>

		</div>
@endsection