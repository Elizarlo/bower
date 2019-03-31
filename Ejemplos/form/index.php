<?php
  $errores = '';
  $enviado = '';

  if(isset($_POST['submit'])){
      $nombre = $_POST['nombre'];
      $coreo = $_POST['correo'];
      $mensaje = $_POST['mensaje'];


      if(empty($nombre)){
        $errores = 'Dame tu nombre <br/>';
      }

      if(empty($coreo)){
        $errores .= 'Dame tu correo <br/>';
      }elseif (!filter_var($coreo,FILTER_VALIDATE_EMAIL)) {
        // code...
        $errores .= 'Dame tu correo enviado <br/>';
      }

      if(empty($mensaje)){
        $errores .= 'Dame tu mensaje <br/>';
      }

      if(empty($errores)){
        $enviado = true;
        $destinatario = '1630261@upv.edu.mx';
        $asunto = 'Correo enviado desde mi formulario';
        $mensaje_final = "De: $nombre \n"
                        . "Correo: $correo \n"
                          . "Mensaje: $mensaje";
        //mail($destinatario,$asunto,$mensaje);
      }
  }

  require 'index_view.php'

?>
