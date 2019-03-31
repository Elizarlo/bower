<?php
  function FunctionName($value=''){
    // code...
    echo "Hola mundo";
  }

  function Suma($num1,$num2){
    // code...
    $resultado = $num1 + $num2;
    return $resultado;
  }

  FunctionName();
  echo "La suma es " . Suma(5,5) ."<br>";
  echo substr('-UPV',2,5) ."<br>";
  echo strlen('  hola   ') ."<br>";
  echo htmlspecialchars('string <br>')."<br>";
  echo strtolower('MINUSCULAS')."<br>";
  echo strtoupper('mayusculas')."<br>";
  echo strpos('Hola','l'). "<br>";
  echo round(3.1415,2) . "<br>";
  echo rand(1,10) . "<br>";
  echo ceil(3.1415) . "<br>";
  $arreglo = array('nom' => 'juan', 'apellido' => 'perez' , 'edad' => '18');
  extract($arreglo);
  echo "El apellido es:" . $apellido. "<br>";



  $arreglo2 = [4,8,2,5];
  print_r($arreglo2);
  echo "<br>";
  $arreglo2 = array_reverse($arreglo2);
  echo "<br>";
  print_r($arreglo2);
  sort($arreglo2);
  echo "<br>";
  print_r($arreglo2);
  rsort($arreglo2);
  echo "<br>";
  print_r($arreglo2);
  sort($arreglo2);
  echo "<br>";
  echo join($arreglo2);
 ?>
