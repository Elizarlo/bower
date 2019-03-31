<?php

	/*
		Al emplear el metodo get en el formulario html de abajo y al no asignar una pagina diferente por medio de la propiedad action, al enviar  se redirige a esta misma página y todos los valores de los controles del formulario seran 'empaquetados' en un solo arreglo llamado (en este caso) $_GET pues es el metodo que empleamos (si hubieramos usado post el arreglo se llamaria $_POST). LA pagina se recarga
	*/
		//la primera vez que cargamos la pagina al no existir valores lo unico que hce es crear las variables vacias
		//si la pagina se ha recargado y tenemos asignado ya valores se hace los siguiente
	$peso='';
	if(isset($_GET['peso'])){ //isset valida que este asignada en el arreglo la variable nombre
								//$_GET es un array asociativo
		$peso=$_GET['peso'];
	}

	$alt ='';
	if(isset($_GET['altura'])){
		$alt =$_GET['altura'];
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<meta charset="utf-8">
 </head>
 <body>
	 <h1>Hola mundo! Práctica 2.2</h1>
	 <div class="" align="center">

		 <fieldset><legend>Tabla IMC</legend>
	 	 		<table border="2">
					<tr>
						<th>Peso</th>
						<th>Rango</th>
					</tr>
					<tr>
						<td>Por debajo de 18.5</td>
						<td>Por debajo del peso</td>
					</tr>
					<tr>
						<td>18.5 a 24.9</td>
						<td>Saludable</td>
					</tr>
					<tr>
						<td>25.0 a 29.9</td>
						<td>Con sobrepeso</td>
					</tr>
					<tr>
						<td>30.0 a 39.9</td>
						<td>Obeso</td>
					</tr>
					<tr>
						<td>Más de 40</td>
						<td>Obesidad extrema o de alto riesgo</td>
					</tr>
	 	 		</table>
	 	 </fieldset>

	 <fieldset><legend>Calculando tu IMC</legend>
 		<form method="get">
 			Peso: <p><input type="text" name="peso" placeholder="Ingresa tu peso" required></p>
 			Altura:<p><input type="text" name="altura" placeholder="Ingresa tu altura" required></p>
 			<p><input type="submit" name="" value="Calcular"></p>
 		</form>
		</fieldset>
	</div>

 		<div>
 			<h1>
				<?php
 					if($peso!=''){
						$IMC = $peso / ($alt*$alt);
						$IMC = round($IMC,2);
						if($IMC < 18.5){
								echo "Tu IMC es de :" . $IMC . " que tengas un bonito dia estas por debajo del peso";
						}elseif($IMC <25){
								echo "Tu IMC es de :" . $IMC . " que tengas un bonito dia estas Saludable";
						}elseif($IMC < 30){
								echo "Tu IMC es de :" . $IMC . " que tengas un bonito dia estas Sobrepeso";
						}elseif ($IMC < 40){
								echo "Tu IMC es de :" . $IMC . " que tengas un bonito dia estas Obeso";
						}else{
								echo "Tu IMC es de :" . $IMC . " que tengas un bonito dia estas con Obesidad extrema";
						}

 					}
 			 	?>
 			 </h1>
 		</div>


 </body>
 </html>
