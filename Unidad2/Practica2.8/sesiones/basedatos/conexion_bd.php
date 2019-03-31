<?php
	$bd ='curp';
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
		$query = "select * from persona where curp='$usuario' and password=MD5('$contrasena') ";
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
		$row = mysqli_fetch_array($resultado);
		if(mysqli_num_rows($resultado)==0){
			return false;
		}else{
			return true;
		}
	}

	function buscar_curp($usuario, $contrasena,$curp, $conexion){
		$query = "select * from persona where nombre like '%$usuario%' and paterno like '%$contrasena%'  OR curp='$curp'";
		$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
		return $resultado;
	}


	function crear_registro($conexion,$query){
			if (mysqli_query($conexion,$query)) {
    			echo "New record created successfully";
			} else {
			    echo "Error: ";
			}
	}
/*
	function crear_registro($nombre,$paterno,$materno,$fecha,$genero,$estado,$password,$curp){

			$conexion=mysqli_connect('localhost', 'root','','curp');
			$nombre = strtoupper($_POST['nombre']);
			$paterno = strtoupper($_POST['paterno']);
			$materno = strtoupper($_POST['materno']);
			$query = "insert into persona values ('0','$nombre','$paterno','$materno','$fecha','$genero','$estado','$curp',MD5('$password'))";
			echo "Hola" . $query;
			//$resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta')  or die('Error al ejecutar la consulta');
			if (mysqli_query($conexion,$query)) {
					echo "New record created successfully";
			} else {
					echo "Error: <br>";
			}
	}

*/

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
