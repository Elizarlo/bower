<?php
	$servidor = 'localhost';
	$root = 'root';
	$contra = '';
	$bd = 'escuela';



	$conexion = new mysqli($servidor,$root,$contra,$bd);
	if($conexion -> connect_erno){
		echo "Error";
	}

	$id = 1;
	$query = "select id,usuario,password as pswd from alumnos";

	if(!$resultado = $conexion-> query($query)){
		echo "Error consulta";
	}
	if($resultado -> num_rows === 0){
		echo "la consulta no tiene";
	}

	while($filas = $resultado -> fetch_assoc()){
		echo 'Usuario' . $filas['id'] . ' es ' . $filas['usuario'] . ' con el password: ' . $filas['pswd'] . ' <br>';
	}

$resultado -> free();
$conexion -> close();
 ?>
