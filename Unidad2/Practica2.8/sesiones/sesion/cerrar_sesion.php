<?php
	require 'abre_sesion.php';
	$_SESSION=array();
	session_destroy();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Información Academica</title>
 	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
 </head>
 <body>
 	<div class="contenedor">
	 	<section>
	 		<h1>Sesión cerrada</h1>
			<br>
			<div class="" align="center">
					<a href="../login.php">Acceder</a>
			</div>
	 	</section>

 	</div>

 </body>
 </html>
