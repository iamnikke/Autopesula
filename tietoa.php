<!DOCTYPE html>
<html>
<head>
	<title>Autopesu Nikke Marttila - Tietoa</title>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="src/styles.css">
	<!-- MaterializeCSS -->
	<link type="text/css" rel="stylesheet" href="src/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Optimized for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Anton|Montserrat" rel="stylesheet">
	<!-- UTF-8 METATAG -->
	<meta charset="utf-8">
</head>
<body>

<?php include 'header.html'; ?>

<div class="container">

	<div class="row">
		<div class="col s12 m12 l12">
			<h3>Tietoa</h3>
			<p>
				Olemme täyden palvelun autopesula ihanteellisella sijainnilla. Yritys alkoi kun Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.
				<br/>
				Liikkeemme sijaitsee Esimerkkikadulla Esimerkkikaupungissa. Tervetuloa käymään!
			</p>
		</div>    
		<div class="col s12 m6 l4">
			<ul class="collection">
		    	<li class="collection-item active">Autopesula Oy</li>
		    	<li class="collection-item"><i class="material-icons tiny">location_on</i>Esimerkkikatu 4, 20100 Turku</li>
		    	<li class="collection-item"><i class="material-icons tiny">call</i>puh. 050 123 1234</li>
		    	<li class="collection-item"><i class="material-icons tiny">email</i>asiakaspalvelu@autopesu.fi</li>
		    	<li class="collection-item"><i class="material-icons tiny">info</i>Avoinna arkisin klo 9.00 - 17.00</li>
		    </ul>
		</div>

		<div id="kartta" class="col s12 m5 l8" style="height: 250px;"></div>

	</div>

</div>

<?php include 'footer.html'; ?>

	<!-- Kartta -->
	<script>
	function kartta() {
	var mapOptions = {
	    center: new google.maps.LatLng(60.454510, 22.264824),
	    zoom: 12,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById("kartta"), mapOptions);
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyQBK97YEojUxQ2upQbdUJ1VXAemRpTj0&callback=kartta"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- MaterializeJS -->
	<script type="text/javascript" src="src/materialize.min.js"></script>

	<script>
		$(document).ready(function(){
    		$('.sidenav').sidenav();
  		});

  		$(document).ready(function(){
    		$('.parallax').parallax();
  		});
	</script>

</body>
</html>