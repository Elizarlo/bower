<?php 

	/*
		Al emplear el metodo get en el formulario html de abajo y al no asignar una pagina diferente por medio de la propiedad action, al enviar  se redirige a esta misma página y todos los valores de los controles del formulario seran 'empaquetados' en un solo arreglo llamado (en este caso) $_GET pues es el metodo que empleamos (si hubieramos usado post el arreglo se llamaria $_POST). LA pagina se recarga
	*/
		//la primera vez que cargamos la pagina al no existir valores lo unico que hce es crear las variables vacias 
		//si la pagina se ha recargado y tenemos asignado ya valores se hace los siguiente
	$nom='';
	if(isset($_GET['nombre'])){ //isset valida que este asignada en el arreglo la variable nombre
								//$_GET es un array asociativo
		$nom=$_GET['nombre'];
	}

	$cd='';
	if(isset($_GET['ciudad'])){
		$cd =$_GET['ciudad'];
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<meta charset="utf-8">
 </head>
 <body>
 		<form method="get">
 			<!--ES IMPORTANTE ASIGNAR LA PROPIEDAD NAME A LOS CONTROLES PUES AL ENVIARSE SE CONVERTIRAN EN VARIABLES
 			CON EL NOMBRE QUE LES HEMOS ASIGNADO -->
 			<p><input type="text" name="nombre" placeholder="Teclea tu nombre" required></p>
 			<p><input type="text" name="ciudad" placeholder="Ciudad de nacimiento" required></p>
 			<p><input type="submit" name="" value="Enviar"></p>
 	
 		</form>
 

 		<div>
 			<h1> <!-- enseguida se abre un bloque de codigo PHP para mostrar los valores de las varibles arriba definidas 
 				Cuando cargamos la primera vez la pagina, esta sección no hace nada pues aun no hemos llenado los campos
 				Al dar click en enviar y recargarse la página entonces ahora si las variables tendran valor y la instruccion echo siguiente se ejecutará
 			-->
 				<?php 
 					if($nom!=''){ //si la variable que definimos arriba tiene valor
 						echo "Hola $nom de $cd, que tengas un bonito dia";
 					}
 			 	?>
 			 </h1>
 		</div>

 </body>
 </html>