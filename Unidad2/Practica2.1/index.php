<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hola mundo! Práctica 2.1</h1>
 	 <div class="" align="center">

 		 <fieldset><legend>Tabla de carácteres</legend>
       <?php
         $arreglo = ['#','$','%','&','*','^'];
         define('FILAS',6);
         define('COLUMNAS',6);
         $cont = 0;
         $tabla = "<table border=\"2\">";
         for ($i=0; $i < FILAS; $i++) {
           // code...
           $tabla .= "<tr>";
           for ($j=0; $j < COLUMNAS; $j++) {
             if ($cont == $j) {
               break;
             }
             $tabla .= "<td>{$arreglo[$i]}</td>";
           }
           $cont = $cont + 1;
           $tabla .= "</tr>";
         }
         $tabla .= "</table>";
         echo $tabla;
        ?>

 	 	 </fieldset>

  </body>
</html>
