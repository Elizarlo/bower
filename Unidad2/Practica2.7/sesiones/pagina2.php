<?php
	require 'sesion/abre_sesion.php';
	require 'basedatos/conexion_bd.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Información Academica</title>
 	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/estilo.css">
 </head>
 <body>
 	<div class="contenedor">
		<?php require 'menu.php'; ?>
	 	<p>
	 		<h1>Información Academica</h1>
	 	</p>
	 	<section>
	 		<p>
				<p>
		 			Aqui encontraras tu Información academica.
		 		</p>
				<div class="" align="center">
						<br>
						<?php mostrar_informacion_academica($conexion);  ?>
				</div>
	 		</p>
	 	</section>

 	</div>

 </body>
 </html>
