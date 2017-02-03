<?php
// Recibo los datos de la imagen
$nombre_img = $_FILES['image']['name'];
$tipo = $_FILES['image']['type'];
$tamano = $_FILES['image']['size'];

/* echo'<script type="text/javascript">
            alert("'.$_FILES["image"]["error"].'");
            </script>';*/
 //echo "<script>window.location='subirsoft.php';</script>";

 
//Si existe imagen y tiene un tamaño correcto
      if (($nombre_img == !NULL) && ($tamano <= 200000)) 
      {
         //indicamos los formatos que permitimos subir a nuestro servidor
         if (($_FILES["image"]["type"] == "image/gif")
         || ($_FILES["image"]["type"] == "image/jpeg")
         || ($_FILES["image"]["type"] == "image/jpg")
         || ($_FILES["image"]["type"] == "image/png"))
         {
            // Ruta donde se guardarán las imágenes que subamos
            //$directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes';
            $directorio = "mapasimg/" . $nombre_img;
            // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
           /* echo '<script type="text/javascript">
                  alert("'.$directorio.'");
                  </script>';*/

                  $nombre = $_POST['nombre'];
                $url1 = $_POST['url1'];



                if (!file_exists($directorio)){
                    //$resultado = move_uploaded_file($_FILES["image"]["tmp_name"], $rutaEnServidor);
                      $resultado = move_uploaded_file($_FILES['image']['tmp_name'],$directorio);
                    if ($resultado){
                            
                            //$subirInformacion->subirTodo($ruta,$nombre,$autor,$descripcion,$url1,$url2);
                            subir($directorio,$nombre,$url1);

                            }else {
                              echo'<script type="text/javascript">
                             alert("Ocurrió un error al mover archivo");
                             </script>';
                          //  header("location:subirsoft.php");
                              echo "<script>window.location='subirmapa.php';</script>";

                          }
                    
                  }else{
                    
                    echo'<script type="text/javascript">
                        alert("Este archivo ya existe en la BD");
                        </script>';
                   // header("location:subirsoft.php");
                         echo "<script>window.location='subirmapa.php';</script>";
              }




            
          } 
          else 
          {
             //si no cumple con el formato
             echo "No se puede subir una imagen con ese formato ";
              echo "<script>window.location='subirmapa.php';</script>";
          }
      } 
      else 
      {
         //si existe la variable pero se pasa del tamaño permitido
         if($nombre_img == !NULL)
         {
          echo "La imagen es demasiado grande "; 
          echo "<script>window.location='subirmapa.php';</script>";

         } 
      }







function subir($ruta,$nombre,$url1){

include('../conexion.php');

$link=conectar();

if($url1=='')
{
  $url1="No Aplica";
}


/* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen 
el nombre de nuestra imagen */
 $sql = "INSERT INTO mapa(id,ruta,nombre,url1) VALUES (NULL,'$ruta','$nombre','$url1')";


$result = mysqli_query($link,$sql);

 mysqli_close();
 /*echo'<script type="text/javascript">
            alert("'.$sql.','.$result.'");
            </script>';
*/


if($result){ //Si resultado es true, se agregó correctamente
          echo'<script type="text/javascript">
            alert("Agregado Exitosamente a la BD");
            </script>';
            //header("location:subirbook.php");
            echo "<script>window.location='subirmapa.php';</script>";

    }
    else{ //Si hubo error al insertar, se avisa
        echo'<script type="text/javascript">
           alert("Chispas... Algo anda mal ");
           </script>';
            //header("location:subirbook.php");
           echo "<script>window.location='subirmapa.php';</script>";

    }

}





?>