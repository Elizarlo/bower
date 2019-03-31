<?php
	require 'basedatos/conexion_bd.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body background="img/mountain.jpg">

  <div class="contenedor">

    <form  method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <p>
        Nombre: <input type="text" name="nombre" placeholder="Nombre"  onKeyUp="this.value=this.value.toUpperCase();"
        value="<?php if(!$enviado && isset($nombre)){echo $nombre;} ?>">
      </p>
      <p>
        Apellido Paterno:<input type="text" name="paterno" placeholder="Paterno"  onKeyUp="this.value=this.value.toUpperCase();"
        value="<?php if(!$enviado && isset($paterno)){echo $paterno;} ?>">
      </p>
      <p>
        Apellido Materno:<input type="text" name="materno" placeholder="Materno"  onKeyUp="this.value=this.value.toUpperCase();"
        value="<?php if(!$enviado && isset($materno)){echo $materno;} ?>">
      </p>
      <p>
        Fecha: <br> <input type="date" name="fecha" style="width:420px; height: 50px"
        value="<?php if(!$enviado && isset($fecha)){echo $fecha;} ?>"> <br>
      </p> <br>

        Genero: <br>
      <div class="" align="center">
        <select name="genero" style="width:420px; height: 50px">
          <option value="HOMBRE">HOMBRE</option>
          <option value="MUJER">MUJER</option>
        </select>
      </div> <br>

        Estado: <br>
      <div class="" align="center">
        <select name="estado" style="width:420px; height: 50px">
					<option value="Aguascalientes">Aguascalientes</option>
					<option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Campeche">Campeche</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Coahuila">Coahuila</option>
          <option value="Colima">Colima</option>
          <option value="Durango">Durango</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="Jalisco">Jalisco</option>
          <option value="Michoacan">Michoacán</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Queretaro">Querétaro</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz">Veracruz</option>
          <option value="Yucatan">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>

        </select>
      </div><br>

      Password <br>
			<input type="password"  class="" name="password" placeholder="Contraseña" required
			value='ELUIS123' style="width:420px; height: 50px">



      <input type="submit" name="submit" value="Registrar">
      <div class="" align="rigth">
          <a class="btn" href="login.php">Regresar</a>
      </div>

    </form>
    <?php
      if(!empty($errores)){
     ?>
      <div class="errores">
          <h1><?php echo $errores; ?></h1>
      </div>
      <?php
    }elseif($enviado == true){
      ?>
        <div class="exito">
          <h1><?php echo $mostrar ?></h1>
        </div>
      <?php
    }
       ?>
  </div>
  </body>
</html>
