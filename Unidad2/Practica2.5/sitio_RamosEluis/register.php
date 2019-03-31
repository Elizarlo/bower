<!DOCTYPE html>
<html>
<head>
	<title>Roux Conference</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>



	<div id="contenedor">
		<?php include 'include/header.php' ?>
		<?php include 'include/nav.php' ?>
		<main class="clearfix" >

      <article class="articulo">
        <h1>Register</h1>
        <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
        <h2>Personal Info</h2>
        <fieldset>

          <div class="" align="left">
        <p>

          <label for="txtNombre"> Nombre:</label>
          <input type="text" id="txtNombre" name="Nombre Usuario" value=""
          placeholder="Escribe Nombre usuario" required size="25" autocomplete="off">
          <br>
          <label for="txtcom"> Nombre Compania:</label>
          <input type="text" id="textcom" name="Nombre compania" value=""
          placeholder="Escribe Compania" required size="25" autocomplete="off">
          <br>
          <label for="txtCorreo"> Correo:</label>
          <input type="email" id="txtCorreo" name="Correo" value=""
          placeholder="Escribe usuario@dominio" required size="25" autocomplete="off">
          <br>



          <p>
            <label for="op1">Request type: </label>
            <input type="radio" name="Genero" value="op1" id="op1">Question
            <input type="radio" name="Genero" value="op2" id="op1">Comment

          </p>

          <p>
            <label for="text1">Comment:</label> <br>
            <textarea rows="4" cols="50" placeholder="Escriba aquí" id="text1"></textarea>
          </p>
          <p>
            <input type="checkbox" name="pasa" value="pasa1" id="pasa1">Subscribe to our mailing list?
          </p>
          How did you hear about us?
          <select>
            <option value="choose">Choose..</option>
            <option value="frien">A friend</option>
            <option value="dace">Facebook</option>
            <option value="twi">Twitter</option>
          </select>
          </div>
          <p align-items="center">
            <input type="submit" name="" value="Send">
          </p>
        </fieldset>



      </article>

		</main>
		<aside id="lateral">
        <h1>Schedule</h1>
        <div class="">
          <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
        </div>
        <div class="" align="center">
  			<img class="avatar" src="img/artists/Barot_Bellingham_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Constance_Smith_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Hassum_Harrod_tn.jpg" alt="">
  			<br>
  			<img class="avatar" src="img/artists/Hillary_Goldwynn_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Jennifer_Jerome_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Jonathan_Ferrar_tn.jpg" alt="">
  			<br>
  			<img class="avatar" src="img/artists/LaVonne_LaRue_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Riley_Rewington_tn.jpg" alt="">
  			<img class="avatar" src="img/artists/Xhou_Ta_tn.jpg" alt="">
  			</div>
  			<p align="right"> <br><a href="#" >View Artist info >> </a></p>

        <br>
		</aside>
</div>
<?php include 'include/footer.php' ?>
</body>
</html>
