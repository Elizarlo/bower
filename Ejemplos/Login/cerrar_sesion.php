<?php
  require 'abre_sesion.php';
  $_SESSION = array();
  session_destroy();
  if(isset($_COOKIE[session_name()])){{
    setcookie(session_name(),'',time()-100,'/');
  }

  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="estilo.css">
   </head>
   <body>
     <h1>Cerraste sesion</h1>
     <a href="index.php">index</a>
   </body>
 </html>
