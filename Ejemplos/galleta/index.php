<?php
  //$_REQUEST
  if($_COOKIE['contador']){
      setcookie('contador',$_COOKIE['contador']+1,time()+10);
      $mensaje = 'Contador de visitas: ' . $_COOKIE['contador'];
  }else{
      setcookie('contador',1,time()+10);
      $mensaje = 'BIENVENIDO A LA PAGINA';
  }

 ?>

 <!DOCTYPE html>
 <html lang="" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p>
       <h1><?php echo $mensaje ?></h1>
     </p>
   </body>
 </html>
