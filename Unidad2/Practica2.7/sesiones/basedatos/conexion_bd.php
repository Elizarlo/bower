<?php
	$bd ='escuela';
	$servidor='localhost';
	$usuario='root';
	$contrasena='';
	//creamos una conexión a la base de datos
	$conexion=mysqli_connect($servidor, $usuario,$contrasena,$bd);


	// checamos la conexion
	if(!$conexion){
		die('Conexion a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
	}


	function valida_usuario_bd($usuario, $contrasena, $conexion){
		$query = "select * from alumnos where usuario='$usuario' and password=MD5('$contrasena') ";
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
		$row = mysqli_fetch_array($resultado);
		$_SESSION['matricula'] = $row["matricula"];
		if(mysqli_num_rows($resultado)==0){
			return false;
		}else{
			return true;
		}
	}

	function mostrar_informacion($conexion){
		$usuario = $_SESSION['usuario'];
		$contrasena = $_SESSION['contrasena'];
		$query = "select * from alumnos where usuario='$usuario' and password=MD5('$contrasena') ";
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
		$row = mysqli_fetch_array($resultado);
		echo "<table border = '1'> \n";
		echo "<tr> \n";
		echo "<td><b>Matricula</b></td> \n";
		echo "<td><b>Nombre</b></td> \n";
		echo "<td><b>Carrera</b></td> \n";
		echo "<td><b>Promedio</b></td> \n";
		echo "<td><b>Domicilio</b></td> \n";
		echo "</tr> \n";
		echo "<tr> \n";
		echo "<td>".$row["matricula"]."</td> \n";
		echo "<td>".$row["nombre"]."</td>\n";
		echo "<td>".$row["carrera"]."</td>\n";
		echo "<td>".$row["promedio"]."</td>\n";
		echo "<td>".$row["domicilio"]."</td>\n";
		echo "</tr> \n";
		echo "</table> \n";
	}

	function mostrar_informacion_academica($conexion){
		$matricula = $_SESSION['matricula'];
		$query = "select * from calificaciones where matricula='$matricula'";
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');

		echo "<h1>Materias de $matricula</h1>";
		echo "<table border = '1'> \n";
		echo "<tr> \n";
		echo "<td><b>Materia</b></td> \n";
		echo "<td><b>Calificacion</b></td> \n";
		echo "</tr> \n";
		echo "<tr> \n";

		while ($row = mysqli_fetch_array($resultado)) {
			echo "<td>".$row["materia"]."</td> \n";
			echo "<td>".$row["calificacion"]."</td>\n";
			echo "</tr> \n";
		}
		echo "</table> \n";
	}





 ?>
