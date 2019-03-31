<?php

	/*
		Al emplear el metodo get en el formulario html de abajo y al no asignar una pagina diferente por medio de la propiedad action, al enviar  se redirige a esta misma página y todos los valores de los controles del formulario seran 'empaquetados' en un solo arreglo llamado (en este caso) $_GET pues es el metodo que empleamos (si hubieramos usado post el arreglo se llamaria $_POST). LA pagina se recarga
	*/
		//la primera vez que cargamos la pagina al no existir valores lo unico que hce es crear las variables vacias
		//si la pagina se ha recargado y tenemos asignado ya valores se hace los siguiente
	$peso='';
	if(isset($_GET['arreglo'])){ //isset valida que este asignada en el arreglo la variable nombre
								//$_GET es un array asociativo
		$peso=$_GET['arreglo'];
	}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<meta charset="utf-8">
 </head>
 <body>
	 <h1>Hola mundo! Práctica</h1>
	 <div class="" align="center">

		 <fieldset><legend>Introduzca elementos por coma</legend>

 		<form method="get">
 			Elementos: <p><input type="text" name="arreglo" placeholder="Ingresa tus elementos" required></p>
 			<p><input type="submit" name="" value="Enviar"></p>
 		</form>
		</fieldset>
	</div>

 		<div>
 			<h1>
				<?php
				function Media($array){
			    // code..
					$media = 0;
					for($i=0;$i<count($array);$i++){
						$media+=$array[$i];
					}
			    return $media/count($array);;
			  }

			  function Varianza($array,$media){
			    // code...
					$sum=0;
					for($i=0;$i<count($array);$i++){
						$sum+=($array[$i]-$media)*($array[$i]-$media);
					}
					return $sum/count($array);
			  }
 					if($peso!=''){
						$array = explode(",", $peso);
						print_r($array);
						//echo join($peso);
						$media = Media($array);
						$varianza = Varianza($array,$media);
						$desv = sqrt($varianza);
						echo  "<br>";
						echo "La media es: $media <br>";
						echo "La varianza es: $varianza <br>";
						echo "La desviacion estandar es: ". $desv ;
 					}

 			 	?>
 			 </h1>
 		</div>


 </body>
 </html>
