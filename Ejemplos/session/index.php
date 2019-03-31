<?php
  session_start();
  $nombre = '';
  if(!isset($_SESSION['nombre'])){
    $_SESSION['nombre'] = 'alfredo';
    $nombre = $_SESSION['nombre'];
  }else{
    $nombre = $_SESSION['nombre'];
  }


 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Pagina</h1>
     <h1>hola <?php echo $nombre; ?></h1>
     <a href="pagina2.php">pagina2</a>
     <a href="destroy.php">destruir</a>
   </body>
 </html>
