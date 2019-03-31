<?php 

// ciclos ++++++++++++++++++++++++++++++++++++++++++++++++++


	$arreglo = [1,2,3,4,5];

	//ciclo for
	echo "<h1>FOR</h1>";
	for($i=0;$i<count($arreglo);$i++){
		echo "<h2>$arreglo[$i]</h2>"; //observen que se empleó comilla doble
	}

	//ciclo while
	echo "<h1>WHILE</h1>";
	$i =0;
	while($i<count($arreglo)){
		echo "<h2>$arreglo[$i]</h2>"; //observen que se empleó comilla doble
		$i++;		
	}


	//ciclo DO-whILE
	echo "<h1>DO-WHILE</h1>";
	$i =0;
	do{
		echo "<h2>$arreglo[$i]</h2>"; //observen que se empleó comilla doble
		$i++;		
	}while($i<count($arreglo));



	//una manera mas simple de recorrer un arreglo es mediante un ciclo foreach dado que automaticamente
	//toma uno por uno cada elemento del arreglo
	//ciclo foreach
	echo "<h1>FOR-EACH</h1>";
	foreach ($arreglo as  $value) {
		echo "<h2>$value</h2>"; //observen que se empleó comilla doble
	}


	//IF THEN
	echo "<h1>IF THEN</h1>";
	$num =17;
	if($num%2==0){
		echo "El numero $num es par";
	}else{
		echo "El numero $num es impar";
	}


	//SWITCH
	echo "<h1>SWITCH</h1>";
	$op=3;
	switch ($op) {
		case 1:
			echo 'Lunes';
			break;
		
		case 2:
			echo 'Martes';
			break;
		case 3:
			echo 'Miercoles';
			break;	
		case 4:
			echo 'Jueves';
			break;
		case 5:
			echo 'Viernes';
			break;
		default:
			echo 'Fin de semana';
			break;
	}

	$op=3;
	echo "<br/>";
	switch ($op) {//cuando deseamos que para varias opciones realice la misma acción ponemos casos en blanco.1,2,3,4 haran lo mismo que el caso 5
		case 1:		
		case 2:
		case 3:
		case 4:
		case 5:
			echo 'Dia laboral';
			break;
		default:
			echo 'Fin de semana';
			break;
	}

 ?>