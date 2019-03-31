<?php

include 'view/funciones.php';

$errores = '';
$enviado = '';
$mostrar = '';


if(isset($_POST['submit'])){
    $nombre = strtoupper($_POST['nombre']);
    $nombre = validarNombre($nombre);
    $nombre = eliminar_tildes($nombre);
    $paterno = strtoupper($_POST['paterno']);
    $paterno = eliminar_tildes($paterno);
    $materno = strtoupper($_POST['materno']);
    $materno = eliminar_tildes($materno);
    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];
    $CURP = [1,1,1,1,1,
    1,1,1,1,1,
    1,1,1,1,1,
    1,1,1];
    if($genero == 'HOMBRE'){
      $genero = 'H';
    }else{
      $genero = 'M';
    }
    $estado = strtoupper($_POST['estado']);
    $estado = strtoupper($estado);
    substr($estado,0,1);

    if(empty($nombre)){
      $errores = 'Dame tu nombre <br/>';
      $nombre = 'XXXX';
    }
    if(empty($paterno)){
      $errores .= 'Dame tu Apellido paterno <br/>';
      $paterno = 'XXXX';
    }
    if(empty($materno)){
      $materno = 'XXXX';
    }
    if(empty($fecha)){
      $errores .= 'Dame tu nacimiento <br/>';
      $fecha = '01-01-1998';
    }
    $Afecha = explode("-", $fecha);

    $CURP[0] = substr($paterno,0,1);
    $CURP[1] = vocal(substr($paterno,1,1));
    $CURP[2] = substr($materno,0,1);
    $CURP[3] = substr($nombre,0,1);
    $CURP[4] = substr($Afecha[0],2,2);
    $CURP[5] = $Afecha[1];
    $CURP[6] = $Afecha[2];
    $CURP[7] = $genero;
    $CURP[8] = substr($estado,0,1);
    $CURP[9] = consonante($estado,'1');
    $CURP[10] = consonante(substr($paterno,1,strlen($paterno)),'2');
    $CURP[11] = consonante(substr($materno,1,strlen($materno)),'2');
    $CURP[12] = consonante(substr($nombre,1,strlen($nombre)),'2');
    $CURP = validarN($CURP);
    $CURP = antisonante($CURP);
    if(empty($errores)){
      $enviado = true;
      for ($i=0; $i < 13; $i++) {
        $mostrar .= $CURP[$i];
      }
      crear_registro($nombre,$paterno,$materno,$_POST['fecha'],$_POST['genero'],$_POST['estado'],$_POST['password'],$mostrar);
    }
}


  require 'view/register_view.php';

 ?>

 <?php

 //creamos una conexión a la base de datos

   function crear_registro($nombre,$paterno,$materno,$fecha,$genero,$estado,$password,$curp){

       $conexion=mysqli_connect('localhost', 'root','','curp');
       $nombre = strtoupper($_POST['nombre']);
       $paterno = strtoupper($_POST['paterno']);
       $materno = strtoupper($_POST['materno']);
       $query = "insert into persona values ('0','$nombre','$paterno','$materno','$fecha','$genero','$estado','$curp',MD5('$password'))";
       echo "Hola" . $query;
       //$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta')  or die('Error al ejecutar la consulta');
       if (mysqli_query($conexion,$query)) {
           echo "New record created successfully";
       } else {
           echo "Error: <br>";
       }
   }


  ?>
