<!DOCTYPE HTML>
<?php
$default=true;
$book=false;
$software=false;
$contacto=false;
$tizimin=false;
$papers = false;
?>
<html>
	<head>
    <meta property="og:locale" content="es_ES" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow"> <!-- Index/NoIndex o Follow/NoFollow,-->
    <meta name="author" content="Jose Alberto Noh" >
	<title>Tips</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="images/favicon3.png" type="image/png" />
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
	</head>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<?php include_once("cabecera.php"); ?>

<?php 
# Conectamos con MySQL  
include('conexion.php');

$link=conectar();




//$acentos = $db->query("SET NAMES 'utf8'");

$result=mysqli_query($link,"select * FROM frases");


$numero = mysqli_num_rows($result); // obtenemos el número de filas (cantidad de ids), pensando que van en orden 
$ale = rand(1,$numero);

//echo $numero;
//echo $ale;

$query = mysqli_query($link,"SELECT * FROM frases WHERE num = $ale");
$fila = mysqli_fetch_array($query);


$frase = $fila['frase'];
$autorfrase=$fila['autor'];

//**********************************************************Encuentra el libro ma reciente
$buscalibro = mysqli_query($link,"select * from libros order by id DESC limit 1");

$row=mysqli_fetch_array($buscalibro);

    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
   $ruta_img = $row["ruta"]; 
   $nombre=$row["nombre"]; 
   $descripcion=$row["descripcion"];
   $autor=$row["autor"];
   $url1=$row["url1"]; 
   $url2=$row["url2"];   
//**************************************************************************************

$buscalibro = mysqli_query($link,"select * from software order by id DESC limit 1");

$row=mysqli_fetch_array($buscalibro);

    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
   $ruta_img2 = $row["ruta"]; 
   $nombre2=$row["nombre"]; 
   $descripcion2=$row["descripcion"];
   $proveedor=$row["proveedor"];
   $url12=$row["url1"]; 
   $url22=$row["url2"];  
   $url32=$row["url3"]; 









//echo '<script language="javascript">alert("'.$ruta_img.'");</script>';
//echo $frase;
//echo $autor;
				
 mysqli_close();



$semana = date("W");//semana
//echo date("z");//dia del año
$faltan=365-intval(date("z"));
$dia = intval(date("j"));//dia
$mes = date("n");//mes actual
$año = date("Y");//año actual

?>





	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/portada.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $frase; ?></h1>
							<h2><?php echo $autorfrase; ?> </h2><!--<a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							<p><a class="btn btn-primary btn-lg btn-learn" href="#">Take A Course</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-2 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $dia; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Dia</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $mes; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Mes</span>
				</div>
				<div class="col-md-2 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $año; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Año</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $semana; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Semana</span>
				</div>
				<div class="col-md-2 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="365" data-to="<?php echo $faltan; ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Dias Para Fin Año</span>
				</div>
			</div>
		</div>
	</div>




	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Libros</h2>
					<p>Algunos libros son probados, otros devorados, poquísimos masticados y digeridos. </p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="images/books.jpg" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>Obten información de libros</h3>
							<p>En este apartado se presentaran diversos materiales bibliograficos en formato digital, recuperado de diversos sitios, ademas de recomendaciones.<br><br>
							Algunas ventajas de estos materiales son:</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>Siempre disponibles.</li>
								<li><i class="icon-check2"></i>visualizable en dispositivos compatibles.</li>
								<li><i class="icon-check2"></i>Informacion mucho mas veraz a otras fuentes.</li>
							</ul>
							<!--<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="books.php"><i class="icon-play"></i>Ver Galeria</a></p>-->
							<p><a class="btn btn-primary btn-lg btn-video" href="books.php"><i class="icon-play"></i>Ver Galeria</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
<!--</div>



	<div id="fh5co-explore" class="fh5co-bg-section">-->


	<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Ultimo libro agregado</h2>
					<p>En esta seccion se presenta el libro agregado reciente, entre otros datos. </p>
				</div>
			</div>
		</div>
		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-pull-1 animate-box">
						<img class="img-responsive" src="booksf/<?php echo $ruta_img;?>" alt="work">
					</div>
					<div class="col-md-5 animate-box">
						<div class="mt">
							<h3><?php echo $nombre;?></h3>
							<h5><?php echo $autor;?></h5>
							<p><?php echo $descripcion;?></p>

							<p><a class="btn btn-primary btn-lg btn-video" href="<?php echo $url1;?>"><i class="icon-play"></i>Obtener</a></p>
							<br><br>
							<h4>Otras recomendaciones:</h4>
							<div>
								<h4><a href="http://www.elsolucionario.org/"><i class="icon-user"></i>El solucionario</a></h4>
								<p>Web dedicada a la indexacion de material bibliografico en diversas areas tales como: matemáticas, física, química,economía,computación, etc. </p>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Software</h2>
					<p>En esta seccion se presentara software apoyo para el estudio.</p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="images/software.jpg" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>Obten información de libros</h3>
							<p>En este apartado se presentaran diversos materiales bibliograficos en formato digital, recuperado de diversos sitios, ademas de recomendaciones.<br><br>
							Algunas ventajas de estos materiales son:</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>Siempre disponibles.</li>
								<li><i class="icon-check2"></i>visualizable en dispositivos compatibles.</li>
								<li><i class="icon-check2"></i>Informacion mucho mas veraz a otras fuentes.</li>
							</ul>
							<!--<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="books.php"><i class="icon-play"></i>Ver Galeria</a></p>-->
							<p><a class="btn btn-primary btn-lg btn-video" href="software.php"><i class="icon-play"></i>Ver Galeria</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
<!--</div>



	<div id="fh5co-explore" class="fh5co-bg-section">-->
<br><br><br>

	<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Ultimo software agregado</h2>
					<p>En esta seccion se presenta el software agregado a la bases recientemente, entre otros datos. </p>
				</div>
			</div>
		</div>
		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-pull-1 animate-box">
						<img class="img-responsive" src="softwaref/<?php echo $ruta_img2;?>" alt="work">
					</div>
					<div class="col-md-5 animate-box">
						<div class="mt">
							<h3><?php echo $nombre2;?></h3>
							<h5><?php echo $proveedor;?></h5>
							<p><?php echo $descripcion2;?></p>

							<p><a class="btn btn-primary btn-lg btn-video" href="<?php echo $url12;?>"><i class="icon-play"></i>Obtener</a></p>
							<br><br>
							<h4>Otras recomendaciones:</h4>
							<div>
								<h4><a href="http://www.intercambiosvirtuales.org/"><i class="icon-user"></i>IntercambiosVirtuales</a></h4>
								<p>Web dedicada A la difucion de software libre y de paga, se recomienda siempre apoyar los proyectos comprando software, pero siempre es bueno conocer las funciones de las mismas. </p>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<?php include_once("foot.php"); ?>

	
	</body>
</html>

