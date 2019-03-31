<?php
  session_start();
  print_r($_SESSION);
  $nombre = '';
  if(isset($_SESSION['nombre'])){
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
     <h1>Hola
     <?php echo $nombre; ?>
     ella no te ama
     </h1>
     <a href="index.php">index</a>
   </body>
 </html>
