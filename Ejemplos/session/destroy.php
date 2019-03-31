<?php

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
   </head>
   <body>
     <h1>Destuir</h1>
     <a href="pagina2.php">pagina2</a>
     <a href="index.php">index</a>
   </body>
 </html>
