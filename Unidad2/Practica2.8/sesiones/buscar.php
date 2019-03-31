<?php
	session_start();
	require 'basedatos/conexion_bd.php';
	$valido=false;
	if (isset($_POST['aceptar'])) {
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$curp = $_POST['curp'];
		if(empty($usuario) ){
			$usuario = '1111';
		}
		if(empty($contrasena) ){
			$contrasena = '1111';
		}
    $resultado = buscar_curp($usuario,$contrasena,$curp, $conexion);
		if(mysqli_num_rows($resultado)==0){
			$valido=false;
		}else{
			$valido=true;
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Acceso</title>
	<meta charset="utf-8">
</head>
<body background="img/mountain.jpg">
	<div class="contenedor2" >

		<header class="clearfix">
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="buscar.php">Buscar</a></li>
				</ul>
			</nav>
		</header>




		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="" align="center">
					<h1>Login</h1>
					<br>
			</div>
			<h2>Nombre</h2>
			<input type="text"  class="form_ctrl" name="usuario" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();">
			<h2>Apellido Paterno</h2>
			<input type="text"  class="form_ctrl" name="contrasena" placeholder="Paterno" onKeyUp="this.value=this.value.toUpperCase();">
			<h2>Curp</h2>
			<input type="text"  class="form_ctrl" name="curp" placeholder="Curp" onKeyUp="this.value=this.value.toUpperCase();">
      <input type="submit"  class="btn" name="aceptar" value="Buscar">

			<?php
				if (!$valido && isset($_POST['aceptar'])) {
					echo '<p class="alerta">Ingrese Nombre y apellido o CURP</p>';
				}else{
          if($valido){
            echo "<h1>Curps</h1>";
        		echo "<table border = '1'> \n";
        		echo "<tr> \n";
						echo "<td><b>Nombre</b></td> \n";
						echo "<td><b>Paterno</b></td> \n";
						echo "<td><b>Materno</b></td> \n";
						echo "<td><b>Fecha</b></td> \n";
						echo "<td><b>Genero</b></td> \n";
						echo "<td><b>Estado</b></td> \n";
        		echo "<td><b>Curp</b></td> \n";
        		echo "</tr> \n";
        		echo "<tr> \n";

        		while ($row = mysqli_fetch_array($resultado)) {
							echo "<td>".$row["nombre"]."</td> \n";
							echo "<td>".$row["paterno"]."</td> \n";
							echo "<td>".$row["materno"]."</td> \n";
							echo "<td>".$row["fecha"]."</td> \n";
							echo "<td>".$row["genero"]."</td> \n";
							echo "<td>".$row["estado"]."</td> \n";
        			echo "<td>".$row["curp"]."</td> \n";
        			echo "</tr> \n";
        		}
        		echo "</table> \n";
          }
        }

			 ?>

		</form>

	</div>

</body>
</html>
