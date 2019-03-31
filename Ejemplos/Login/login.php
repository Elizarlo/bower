<?php
  $valido = false;
  if(isset($_POST['aceptar'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasenia'];
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location:index.php');
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <link rel="stylesheet" href="estilo.css">
     <meta charset="utf-8">
     <title>Acceso</title>
   </head>
   <body>

     <div class="contenedor">
       <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
         <input type="text" name="usuario" class="form_ctrl" placeholder="Usuario" required>
         <input type="password" name="contrasena" class="form_ctrl" placeholder="Contraseña" required>
         <input type="submit" name="aceptar" value="Ingresar" class="btn">
         <?php
            if(!$valido && isset($_POST['aceptar'])){
              echo "<p> Usuario y/o contraseña no valido</p>";
            }
          ?>
       </form>
     </div>
   </body>
 </html>
