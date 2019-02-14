<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.klevermedia.co.uk/html_templates/movie_star_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 18:01:41 GMT -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('tittle')</title>
		<link rel="icon" type="image/png" href="../images/favicon.png" />
		
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link src="../css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/datatables/dataTables.bootstrap4.min.css">
		<!-- Se tiene que descargar-->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- requerimientos para el datatable-->
		<script src="../js/datatables/jquery-3.3.1.js"></script>
		<script src="../js/datatables/jquery.dataTables.min.js"></script>
		<script src="../js/datatables/dataTables.bootstrap4.min.js"></script>
		<!-- termina -->

	</head>
		
	<body>
		@include('partials.navbar')	 
		@yield('content')
	    @include('partials.footer')
	    <script src="../js/bootstrap.min.js"></script>
		<script src="../js/datatables/sweetalert.min.js"></script>
		<script src="../js/Agregar.js"></script>
		<script src="../js/Actualizar.js"></script>
	</body>
</html>