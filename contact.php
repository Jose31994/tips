<!DOCTYPE HTML>
<?php 
$default=false;
$book=false;
$software=false;
$contacto=true;
$tizimin=false;
$papers=false;
 ?>
<html>
	<head>
	<meta charset="utf-8">
	<title>Tips - Contacto</title>

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
	
	<div id="page">
	

	<?php include_once("cabecera.php");?>


	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/contacto.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contacto</h1>
							<h2>By <a href="https://www.facebook.com/Jose191994" target="_blank">Jose Alberto Noh</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Información de contacto</h3>
						<ul>
							<li class="address">Tizimín, <br> Yucatán</li>
							<li class="phone"><a href="tel://9861016533">+52 1 986 101 65 33</a></li>
							<li class="email"><a href="mailto:jose31994@gmail.com">jose31994@gmail.com</a></li>
							<li class="url"><a href="http://www.cclics.96.lt">Clics</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Formulario de Contacto</h3>
					<form form action="send.php" method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="nombre" name="nombre" class="form-control" placeholder="*Nombre" required="">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" name="email" class="form-control" placeholder="*Correo" required="">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="*Mensaje" required=""></textarea>
							</div>
						</div>
						<div class="form-group">
						    <div class="col-md-6">
						   <input id="submit" name="submit" type="submit" value="Enviar Mensaje" class="btn btn-primary">
						    </div>
                            <div class="col-md-6">
                          <input type="reset" value="Limpiar" class="btn btn-primary" >
                            </div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>

	<?php include_once("foot.php"); ?>
	

	</body>
</html>

