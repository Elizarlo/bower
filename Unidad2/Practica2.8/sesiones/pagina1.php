<?php
	require 'sesion/abre_sesion.php';
	require 'basedatos/conexion_bd.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Alumno</title>
 	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
 </head>
 <body>
 	<div class="contenedor">
		<?php require 'menu.php'; ?>
	 	<p>
	 		<h1>Informacion Alumno</h1>
	 	</p>
	 	<section>
	 		<p>
	 			Aqui encontraras tu Información personal mostrada en la siguiente tabla
	 		</p>
			<div class="" align="center">
					<br>
					<?php mostrar_informacion($conexion);  ?>
			</div>

	 	</section>

 	</div>

 </body>
 </html>
