<?php 
	/*arreglos asociativos

		en php exiten arreglos asociativos, se diferencian de los arreglos ordinarios en que los elementos del arreglo no los referenciamos por medio de un indice (posicion 0,1,2,3) sino por medio de una clave o llave, algo sí como una tabla de BD que empleamos su llave primaria. Para declarar un arreglo asociativo debemos dar para cada elemento un valor para su 'ID' o llave y el valor del elemento

	*/

	$asociativo =array(
						'173000' =>'Maria' ,
						'173001' => 'Pedro',
						'173002' => 'Luis',
						'173003' => 'Sonia' );

	// si deseamos imprimir a pedro NO DECIMOS $asociativo[1]. Eso lo hariamos si fuese un array ordinario. En este caso usamos su llave

	echo $asociativo['173001'];

	//ahora para imprimir a sonia

	echo '<br/>' .$asociativo['173003'];

	//una form muy comoda de recorrer un array asociativo es empleado un ciclo foreach

	echo '<br/>Todos los elementos del arreglo';

	foreach ($asociativo as $matricula => $nombre) { //los nombres de variable matricula y nombre son a tu gusto, pero siempre el primero hace alusión a la llave y el segundo al elemento en sí; de esta manera foreach recorre todo el arreglo tomando en cada iteración llave y elemento y vaciandolo a las respectivas variables
		echo "<h1>El alumno con matricula $matricula se llama $nombre </h1>";
	}

 ?>