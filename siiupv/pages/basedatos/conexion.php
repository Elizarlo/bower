<?php
  $bd ='Hospital';
  $servidor='localhost';
  $usuario='root';
  $contrasena='';

  //creamos una conexión a la base de datos
  $conexion=mysqli_connect($servidor, $usuario,$contrasena,$bd);


  // checamos la conexion
  if(!$conexion){
    die('Conexion a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
  }else{
    //echo "SE logro la conexion chavos";
  }

  //echo "Conectado a la base de datos $bd <br/>";


  function select($conexion,$table){
    $query = "select * from {$table}";
    $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }
  }



  function selectEspecial($conexion,$query){

    $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }
  }

  function borrar_registro($conexion,$id,$table){
  $query = "delete from {$table} WHERE id = {$id}  ;";
     if (mysqli_query($conexion,$query)) {
      return true;
   } else {
      return false;
   }

  }

function obtener_resultado_por_id($conexion,$id,$table){
   $query = "select * from {$table} where id = {$id}  LIMIT 1";
  $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

    if(mysqli_num_rows($resultado)==0){
      return false;
    }else{

      return $resultado;
    }

  }



  function crear_registro($conexion,$query){
      if (mysqli_query($conexion,$query)) {
          return true;
      } else {
          return false;
      }
  }


   function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }

        exit();
    }

 ?>
