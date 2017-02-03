<?php
error_reporting(0);
//include_once('myDBC.php');

//$objeto = new myDBC();
//$imagenes = $objeto->seleccionar_images();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>SUBIR Info mapa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
    <link href="../css/style2.css" rel="stylesheet">  
    <link href="../css/bootstrap.css" rel="stylesheet">
     
	</head>
	<body>
    
    <?php
  include("Navigation.php");
  ?>


        <div class="wrap">
            <div class="col-md-12 centro">
                Subir Información mapa
            </div>
            
            <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

            
			<section >
				<form id="formulario" action="subeinfomapa.php" method="POST" enctype="multipart/form-data">						
						<label for="nombre">Nombre Mapa:</label>  <br>
							<input type="text" autofocus spellcheck="true" name="nombre" id="nombre" maxlength="665" required></input>
					  <br><label for="url1">URL 1:</label><br>
							<input type="text" spellcheck="false" name="url1" id="url1" maxlength="765"></input>

					
					<div class="campos">
						<label for="image">Imagen:</label>
						<input type="file" name="image" id="image" required/>
						<input type="submit" name="subir" value="Subir"/>
					</div>
				</form>
				
			</section> 
            <br>
           <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

            <br>
			<section >
				<?php
					/*foreach($imagenes as  $imagen){
						echo '<div class="todas">';
						echo '<img src="'.$imagen['ruta'].'"/>';
						echo '</div>';
					}*/			 
				?> 
			</section>
		</div>
	</body>
</html>
