<?php error_reporting(0);


include('myDBC.php'); 
//Definir Tamaño de archivo 5MB
define('LIMITE', 2000); 
//Definir arreglo con extensiones permitidas usar serialize
define('ARREGLO', serialize( array('image/jpg', 'image/jpeg', 'image/gif','image/png')));
		
$PERMITIDOS = unserialize(ARREGLO); //Usar unserialize para obtener el arreglo

$subirInformacion = new myDBC(); //Objeto para conexión a BD



	if ($_FILES["image"]["error"] > 0){
			echo'<script type="text/javascript">
						alert("Error de FILE Selecciona un Archivo");
						</script>';
		header("location:subirsoft.php");
	}
	else {
			
		if (in_array($_FILES['image']['type'], $PERMITIDOS) && $_FILES['image']['size'] <= LIMITE * 1024){
			
			//Desde subir.php a la carpeta imagenes hay que salir un directorio
			//../imagenes/nombreDeArchivo
			$rutaEnServidor = "imagenes/" . $_FILES['image']['name'];
			
			//Desde index.php, la carpeta imagenes está en imagenes/nombreDeArchivo 
			$ruta = "imagenes/" . $_FILES['image']['name'];
			
			if (!file_exists($ruta)){
				$resultado = move_uploaded_file($_FILES["image"]["tmp_name"], $rutaEnServidor);
				if ($resultado){
					$nombre = $_POST['nombre'];
					$proveedor = $_POST['proveedor'];
					$descripcion = $_POST['descripcion'];
					$url1 = $_POST['url1'];
					$url2 = $_POST['url2'];
					$url3 = $_POST['url3'];
					$subirInformacion->subirTodo($ruta,$nombre,$proveedor,$descripcion,$url1,$url2,$url3);
				
				}else {
					echo'<script type="text/javascript">
						alert("Ocurrió un error al mover archivo");
						</script>';
					header("location:subirsoft.php");

				}
				
			}else{
				
				echo'<script type="text/javascript">
						alert("Este archivo ya existe en la BD");
						</script>';
				header("location:subirsoft.php");
			}
		
		}else {
			echo'<script type="text/javascript">
						alert("Tipo de archivo no permitido o excede tamaño");
						</script>';
			header("location:subirsoft.php");
		}
	}

?>
