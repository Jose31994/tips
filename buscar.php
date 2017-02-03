<html>
<head>
    <!-- Main -->
	<script src="js/main.js"></script>
</head>


  <body>
    <div class="fh5co-loader"></div>



<?php

$consultaBusqueda = $_POST['valorBusqueda'];
$tipo = $_POST['tipo'];


 	include('conexion.php');
    $link=conectar();

     if($tipo=="book" and $consultaBusqueda !=""){
         echo("Se encontraron los siguientes resultados para: ".$consultaBusqueda);
?>

        <div class="row" id="full">


            	<?php


            	/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso
                el campo ruta_imagen se encuentra en la tabla usuarios */
                $result = mysqli_query($link,"SELECT * FROM libros where nombre LIKE '%$consultaBusqueda%' or autor LIKE '%$consultaBusqueda%' ORDER BY id DESC");
                  $cant = mysqli_num_rows($result);
                  if($cant==0)
                  {
                      echo("No se encontraron resultados para la búsqueda actual");
                  }

                while ($row=mysqli_fetch_array($result))
                {
                    /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                   $ruta_img = $row["ruta"];
                   $nombre=$row["nombre"];
                   $descripcion=$row["descripcion"];
                   $autor=$row["autor"];
                   $url1=$row["url1"];
                   $url2=$row["url2"];


                    ?>

            				<div class="col-lg-4 col-md-4 row-eq-height">
            					<div class="fh5co-blog animate-box">
            						<a href="booksf/<?php echo $ruta_img;?>" target="_blank"><img class="img-responsive zoom" src="booksf/<?php echo $ruta_img;?>" alt="<?php echo $nombre;?>"></a>
            						<div class="blog-text">
            							<h3><?php echo $nombre;?></h3>
            							<span class="posted_on"><?php echo $autor;?></span>
            							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
            							<p><?php echo $descripcion;?></p><br>
            							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
            						</div>
            					</div>
            				</div>


                    <?php

                      // echo '<img src="books/'.$ruta_img.'"/>';  class="btn btn-primary btn-lg popup-vimeo btn-video"
                       //echo $ruta_img;
                    }



            	  ?>

            </div>

 <?php
 }

if($tipo=="book" and $consultaBusqueda ==""){
         echo("Se Presentan todos los archivos registrados");
?>

        <div class="row" id="full">


            	<?php


            	/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso
                el campo ruta_imagen se encuentra en la tabla usuarios */
                $result = mysqli_query($link,"SELECT * FROM libros ORDER BY id DESC");

                while ($row=mysqli_fetch_array($result))
                {
                    /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                   $ruta_img = $row["ruta"];
                   $nombre=$row["nombre"];
                   $descripcion=$row["descripcion"];
                   $autor=$row["autor"];
                   $url1=$row["url1"];
                   $url2=$row["url2"];


                    ?>

            				<div class="col-lg-4 col-md-4 row-eq-height">
            					<div class="fh5co-blog animate-box">
            						<a href="booksf/<?php echo $ruta_img;?>" target="_blank"><img class="img-responsive zoom" src="booksf/<?php echo $ruta_img;?>" alt="<?php echo $nombre;?>"></a>
            						<div class="blog-text">
            							<h3><?php echo $nombre;?></h3>
            							<span class="posted_on"><?php echo $autor;?></span>
            							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
            							<p><?php echo $descripcion;?></p><br>
            							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
            						</div>
            					</div>
            				</div>


                    <?php
                    }
            	  ?>

            </div>

 <?php
 }

 ?>


  <!--SOFTWARE-->

  <?php
if($tipo=="software" and $consultaBusqueda !=""){
         echo("Se encontraron los siguientes resultados para: ".$consultaBusqueda);
?>
                <div class="row">


                	<?php

                	/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso
                el campo ruta_imagen se encuentra en la tabla usuarios */
                $result = mysqli_query($link,"SELECT * FROM software where nombre LIKE '%$consultaBusqueda%' or descripcion LIKE '%$consultaBusqueda%' ORDER BY id DESC");
                  $cant = mysqli_num_rows($result);
                  if($cant==0)
                  {
                      echo("No se encontraron resultados para la búsqueda actual");
                  }

                while ($row=mysqli_fetch_array($result))
                {
                    /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                   $ruta_img = $row["ruta"];
                   $nombre=$row["nombre"];
                   $descripcion=$row["descripcion"];
                   $url1=$row["url1"];
                   $url2=$row["url2"];
                   $url3=$row["url3"];


                ?>

                				<div class="col-lg-4 col-md-4">
                					<div class="fh5co-blog animate-box">
                						<a href="softwaref/<?php echo $ruta_img;?>" ><img class="img-responsive" src="softwaref/<?php echo $ruta_img;?>" alt=""></a>
                						<div class="blog-text">
                							<h3><?php echo $nombre;?></h3>
                							<span class="posted_on"><?php echo $descripcion; ?></span>
                							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->
                							
                							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
                						</div>
                					</div>
                				</div>


                <?php

                }

        	  ?>

			</div>

   <?php
   }
   ?>




<?php
if($tipo=="software" and $consultaBusqueda ==""){
         echo("Se Presentan todos los archivos registrados");
?>
                <div class="row">


                	<?php

                	/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso
                el campo ruta_imagen se encuentra en la tabla usuarios */
                $result = mysqli_query($link,"SELECT * FROM software ORDER BY id DESC");

                while ($row=mysqli_fetch_array($result))
                {
                    /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                   $ruta_img = $row["ruta"];
                   $nombre=$row["nombre"];
                   $descripcion=$row["descripcion"];
                   $url1=$row["url1"];
                   $url2=$row["url2"];
                   $url3=$row["url3"];


                ?>

                				<div class="col-lg-4 col-md-4">
                					<div class="fh5co-blog animate-box">
                						<a href="softwaref/<?php echo $ruta_img;?>" ><img class="img-responsive" src="softwaref/<?php echo $ruta_img;?>" alt=""></a>
                						<div class="blog-text">
                							<h3><?php echo $nombre;?></h3>
                							<span class="posted_on"><?php echo $descripcion; ?></span>
                							<!--<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>-->

                							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
                						</div>
                					</div>
                				</div>


                <?php

                }

        	  ?>

			</div>

   <?php
   }
   ?>




















   <?php  mysqli_close();    ?>
 </body>
 </html>