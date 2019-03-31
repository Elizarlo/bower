<?php
  require 'bd.php';
  

  $nomEstado = $_GET['nomEstado'];

  $query = "SELECT m.id,m.nombre from estados e inner join municipios m on e.id=m.id_estado
  where upper (e.nombre) = upper('$nomEstado')";

  try {
    $resultados = $conn->query($query);
    $respuesta = array();
    while($fila = $resultados-> fetch_assoc()){
        $respuesta[] = array(
          'id' => $fila['id'],
          'nombre' => $fila['nombre']
        );
    }
  } catch (Exception $e) {
    $respuesta = array ( 'query' => $e.getMessage);
  }

  echo json_encode($respuesta);
 ?>
