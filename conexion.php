<?php error_reporting(0);
function conectar(){

	include_once ("dbconfig.php");
	$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	/* comprobar la conexión */
	if (mysqli_connect_errno()) {
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	}

	mysqli_set_charset('utf8'); 
	mysqli_query($link,"SET NAMES 'utf8'");



   return $link;
}




?>
