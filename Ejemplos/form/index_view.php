<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
  <div class="contenedor" id="contenedor">
    <form  method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="nombre" placeholder="Nombre"
      value="<?php if(!$enviado && isset($nombre)){echo $nombre;} ?>">
      <input type="text" name="correo" placeholder="Correo"
      value="<?php if(!$enviado &&  isset($correo)){echo $correo;} ?>">
      <textarea name="mensaje" placeholder="Mensaje"><?php if(!$enviado &&  isset($mensaje)){echo $mensaje;} ?></textarea>
      <input type="submit" name="submit" value="Enviar Correo">

      <?php
        if(!empty($errores)){
       ?>
        <div class="errores">
            <h1><?php echo $errores; ?></h1>
        </div>
        <?php
      }elseif($enviado == true){
        ?>
          <div class="exito">
            <h1>Correo enviado</h1>
          </div>
        <?php
      }
         ?>
    </form>
  </div>
  </body>
</html>
