<!DOCTYPE html>
<html>
<head>
	<title>Autopesu Nikke Marttila</title>
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
	    <div class="col s6 m6 l3">
		    <div class="card">

		        <div class="card-image">
		        	<img src="src/imagee.jpg">
		        	<span class="card-title">Pesupaketti</span>
		        </div>

		        <div class="card-content">
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.</p>
		        </div>

		    </div>
	    </div>
	    <div class="col s6 m6 l3">
		    <div class="card">

		        <div class="card-image">
		        	<img src="src/imagee.jpg">
		        	<span class="card-title">Pesupaketti</span>
		        </div>

		        <div class="card-content">
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.</p>
		        </div>

		    </div>
	    </div>
	    <div class="col s6 m6 l3">
		    <div class="card">

		        <div class="card-image">
		        	<img src="src/imagee.jpg">
		        	<span class="card-title">Pesupaketti</span>
		        </div>

		        <div class="card-content">
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.</p>
		        </div>

		    </div>
	    </div>
	    <div class="col s6 m6 l3">
		    <div class="card">

		        <div class="card-image">
		        	<img src="src/imagee.jpg">
		        	<span class="card-title">Pesupaketti</span>
		        </div>

		        <div class="card-content">
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.</p>
		        </div>

		    </div>
	    </div>

	    <a href="hinnasto.php"><h5 class="col s12 m12 l12 center-align">Katso lisää...</h5></a>

	</div>

	</div>

	<div class="container">
	  	<div class="row">
	      	<div class="col s12 m12 l12">
	      		<h2>Laadukasta autopesua vuodesta -95</h2>
	      		<p>
	      			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lectus sapien, placerat id dolor eget, gravida euismod urna.
				</p>
	      	</div>
	    </div>
	</div>

	<div class="parallax-container">
		<div class="parallax s12 m12 l12 valign-wrapper">
		    <img src="src/imagee.jpg" id="image">
		</div>
	</div>

<?php include 'footer.html'; ?>

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