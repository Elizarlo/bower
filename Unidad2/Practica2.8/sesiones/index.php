<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<?php
//session_start();
    $conexion=mysqli_connect('localhost', 'root','','curp');
    $curp = $_SESSION['usuario'];
    $query = "select * from persona where curp='$curp'";
    $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta')  or die('Error al ejecutar la consulta');
    $row = mysqli_fetch_array($resultado);
    if (mysqli_query($conexion,$query)) {
          $nombre = $row['nombre'];
          $paterno = $row['paterno'];
          $materno = $row['materno'];
          $fecha = $row['fecha'];
          $genero = $row['genero'];
          $estado = $row['estado'];
          //$CRUPE = $row['curp'];
          //$paterno = $row['password'];
    } else {
        echo "Error: <br>";
    }
 ?>
<?php
  include 'view/funciones.php';
  	//require 'sesion/abre_sesion.php';
    //require 'basedatos/conexion_bd.php';
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
      substr($estado,0,1);

      if(empty($nombre)){
        $errores = 'Dame tu nombre <br/>';
      }
      if(empty($paterno)){
        $errores .= 'Dame tu Apellido paterno <br/>';
      }
      if(empty($materno)){
        $materno = 'XXXX';
      }
      if(empty($fecha)){
        $errores .= 'Dame tu nacimiento <br/>';
      }
      $Afecha = explode("-", $fecha);
        $errores.='.';
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

      }
      if($errores === '.'){
        $nombre = strtoupper($_POST['nombre']);
        $paterno = strtoupper($_POST['paterno']);
        $materno = strtoupper($_POST['materno']);
        $errores = '';
        for ($i=0; $i < 13; $i++) {
          $errores .= $CURP[$i];
        }
        modificar_registro($_POST['nombre'],$paterno,$materno,$_POST['fecha'],$_POST['genero'],$_POST['estado'],$_POST['password'],$errores);
      }
  }

  require 'view/index_view.php'

?>


<?php
function modificar_registro($nombre,$paterno,$materno,$fecha,$genero,$estado,$password,$curp){
    $curpR = $_SESSION['usuario'];
    $conexion=mysqli_connect('localhost', 'root','','curp');

    $nombre = strtoupper($_POST['nombre']);
    $paterno = strtoupper($_POST['paterno']);
    $materno = strtoupper($_POST['materno']);


    $query = "update persona set nombre='$nombre' , paterno='$paterno', materno ='$materno', fecha= '$fecha', genero= '$genero',
    estado='$estado',curp='$curp', password= MD5('$password') where curp ='$curpR'";
    $_SESSION['usuario'] = $curp;
    echo "Hola" . $query;
    if (mysqli_query($conexion,$query)) {
        echo "Cambiado";
        $curp = $_SESSION['usuario'];
        $query = "select * from persona where curp='$curp'";
        $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta')  or die('Error al ejecutar la consulta');
        $row = mysqli_fetch_array($resultado);
        if (mysqli_query($conexion,$query)) {
              $nombre = $row['nombre'];
              $paterno = $row['paterno'];
              $materno = $row['materno'];
              $fecha = $row['fecha'];
              $genero = $row['genero'];
              $estado = $row['estado'];
              //$CRUPE = $row['curp'];
              //$paterno = $row['password'];
        }
    } else {
        echo "Error: <br>";
    }
}

 ?>
