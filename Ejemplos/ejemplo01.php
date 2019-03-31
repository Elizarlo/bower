<?php
  $cadena = 'Práctica 2.1';
  $arreglo = ['#','$','%','&','*','^'];
  define('FILAS',6);
  define('COLUMNAS',6);
  $cont = 0;

  $tabla = "<table>";
  for ($i=0; $i < FILAS; $i++) {
    // code...
    $tabla .= "<tr>";
    for ($j=0; $j < COLUMNAS; $j++) {
      // code...
      $tabla .= "<td>";
      $tabla .= $arreglo[i];
      $tabla .= "</td>";
    }
    $tabla .= "</tr>";
  }
  $tabla .= "</table>";
  echo $tabla;

  echo "<h1> Hola mundo! $cadena </h1> ";

 ?>
