<?php
	$tab='';
	if(isset($_GET['tabla'])){
		$tab=$_GET['tabla'];
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulario </title>
 	<meta charset="utf-8">

	<style media="screen">
	tr:nth-child(odd){
	background: #123123;
	color: #FFFFFF;
}

tr:nth-child(even){
	background: #159159;
	color: #000000;
}
	</style>
 </head>
 <body>
	 <h1>Hola mundo! Práctica 2.3</h1>
	 <div class="" align="center">

	 <fieldset><legend>Tabla de multiplicar</legend>
 		<form method="get">
      Inserte valor:
      <select name="tabla">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
				<option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
				<option value="9">9</option>
        <option value="10">10</option>
      </select>
      <p><input type="submit" name="" value="Calcular"></p>
 		</form>
		</fieldset>
	</div>

 		<div class="" align="center">
 			<h1>
				<?php
 					if($tab!=''){
						$tabla = "<table border=\"2\">";
						$tabla .= "<tr>";
						$tabla .= "<th> Numero </th>";
						$tabla .= "<th> Tabla </th>";
						$tabla .= "<th> Resultado </th>";
						$tabla .= "</tr>";
	          for ($i=1; $i <= 10; $i++) {
	            // code...
	            $tabla .= "<tr>";
	            $tabla .= "<td>{$i}</td>";
							$tabla .= "<td>{$tab}</td>";
							$resul = $tab * $i;
							$tabla .= "<td>{$resul}</td>";
	            $tabla .= "</tr>";
	          }
	          $tabla .= "</table>";
	          echo $tabla;
 					}
 			 	?>
 			 </h1>
 		</div>


 </body>
 </html>
