<!DOCTYPE HTML>
<html>
    <?php
     $date = $_POST['date'];
     if($date=="")
     {
                 $date="2017-01-01";
     }
     ?>
    <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tips - Especial Expo Tizimin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/tizimin.css">
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



       	<div id="fh5co-blog">


             <div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Especial - ExpoFeria Tizim&iacute;n 2017</h2>
                <!-- <p><a class="btn btn-primary btn-lg btn-video" href="books.php"><i class="icon-play"></i>Ver Eventos</a></p>-->
					<p>A continuaci&oacute;n se presenta algunos eventos catalogados por fecha, que formaran parte de la expoferia Tizimin 2017. </p>
				</div>
			</div>
		</div>
            <p style="text-align:center"><a class="btn btn-primary btn-lg btn-video"  href="tizimin/imagenes/expo1.jpg" target="_blank"><i class="icon-image"></i>Programa General 28 Dic-6 Enero</a>
            <a class="btn btn-primary btn-lg btn-video"  href="tizimin/imagenes/expo2.jpg" target="_blank"><i class="icon-image"></i>Programa General 6-12 Enero</a>
            <a class="btn btn-primary btn-lg btn-video"  href="tizimin/imagenes/expo3.jpg" target="_blank"><i class="icon-image"></i>Programa General 12-22 Enero</a>
            </p>

	<?php

	include('conexion.php');
	$link=conectar();
     $fechas=mysqli_query($link,"SELECT DISTINCT fecha FROM tizimin ORDER BY fecha");
     //$result = mysqli_query($link,"SELECT * FROM tizimin ORDER BY fecha");
     echo "<form method='post' action='eventos.php'>";
     echo "<div class='caja'>";
   // <!-- <select name='select1' id='select1' onchange="from(document.getElementById('select1').value,'nombredel div','pagina de destino.php')">       -->
     echo "<select name='date' id='date' onchange='this.form.submit()'>";
      echo "<option value='Seleccione algun dia'>Seleccione algun dia</option>";
    while($filaF=mysqli_fetch_array($fechas))
    {
      ?>
    <option value="<?php echo $filaF['fecha'];?>"><?php echo $filaF['fecha'];?></option>;
    <?php
    }
    echo "</select>";
    echo "</div>";
    echo "</form>";
    mysqli_close();

                        $result = mysqli_query($link,"SELECT * FROM tizimin where fecha='$date' ORDER BY fecha");

                        while ($row=mysqli_fetch_array($result))
                        {
                            /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                           $ruta_img = $row["ruta"];
                           $nombre=$row["nombre"];
                           $fecha=$row["fecha"];
                           $lugar=$row["lugar"];
                           $url1=$row["url1"];


                        ?>

                        				<div class="col-lg-4 col-md-4">
                        					<div class="fh5co-blog animate-box">
                        						<a href="tiziminf/<?php echo $ruta_img;?>" ><img class="img-responsive" src="tiziminf/<?php echo $ruta_img;?>" alt=""></a>
                        						<div class="blog-text">
                        							<h3><a href=""#><?php echo $nombre;?></a></h3>
                        							<span class="posted_on"><?php echo $fecha; ?></span>  <br>
                                                    <span class="posted_on"><?php echo $lugar; ?></span>
                        							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
                        						   <!--	<p><?php echo $descripcion;?></p><br>-->
                                                    <br>

                                                    <?php
                                                    if($url1!="No Aplica")
                                                    {
                                                      ?>
                                                       <a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank"><i class="icon-shop"></i>Comprar Pase</a>
                                                     <?php
                                                    }

                                                    ?>



                        						</div>
                        					</div>
                        				</div>


                        <?php

                          // echo '<img src="books/'.$ruta_img.'"/>';  class="btn btn-primary btn-lg popup-vimeo btn-video"
                           //echo $ruta_img;
                        }
                            mysqli_close();
                   // }


                ?>


			</div>



</body>

</html>