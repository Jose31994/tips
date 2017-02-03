<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>Tips - Libros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
        $default=false;
        $book=false;
        $software=false;
        $contacto=false;
        $tizimin=false;
        $papers=true;
    ?>
       <script src="js/jquery.min.js"></script>
      <script src="js/scripts.js"></script>
	<link href="css/goocss.css" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>

	<body>
	<div class="fh5co-loader"></div>

	<?php include("cabecera.php");?>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/papers.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Papers</h1>
						    <h2>Artículos - Revistas</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



	<div id="fh5co-blog">
		<div class="container">
                                  <div class="form-group navbar-form centr" role="search">
                                    <input type="text" id="busqueda" name="book" class="form-control" placeholder="Busqueda - [Pres. ENTER]">
                                  </div>
                                 <br><br><br>
           <div id="resultadoBusqueda"></div>
		</div>
	</div>
	
	

	<?php include("foot.php"); ?>

	</body>
</html>

