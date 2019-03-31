<?php
	session_start();
	require 'basedatos/conexion_bd.php';
	$valido=false;
	if (isset($_POST['aceptar'])) {
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];

		if(!valida_usuario_bd($usuario,$contrasena, $conexion)){
			$valido=false;
		}else{

			$valido=true;
			$_SESSION['usuario']=$usuario;
			$_SESSION['contrasena']=$contrasena;
			header('Location:index.php');
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
<body>
	<div class="contenedor_login" >

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="" align="center">
					<h1>Login</h1>
					<br>
			</div>

			<input type="text"  class="form_ctrl" name="usuario" placeholder="Usuario" required="Introduce el nombre de usuario"
			value='user1'>
			<input type="password"  class="form_ctrl" name="contrasena" placeholder="Contraseña" required
			value='123456'>
			<input type="submit"  class="btn" name="aceptar" value="Ingresar">
			<?php
				if (!$valido && isset($_POST['aceptar'])) {
					echo '<p class="alerta">Usuario y/o contraseña no valido</p>';
				}
			 ?>
		</form>
	</div>

</body>
</html>
