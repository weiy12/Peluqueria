<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZHONGZHOU</title>
	<!-- introducir estilo !-->
 <?php include("css/style.css");?>
<?php include("head.php");?>
<?php include("js/script.js");?>

</head>
	<body id="primer">
	
	<p id="letraM"> Localización : </p>
	<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12142.673983227727!2d-3.7069597629634763!3d40.46047361975916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422971a1779f7f%3A0xde36225316a5b914!2sPeluquer%C3%ADa%20ZHONGZHOU!5e0!3m2!1szh-CN!2ses!4v1607024983153!5m2!1szh-CN!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
	<div id="letraM">
	<form action="enviar.php" method="post" class="formulario column column--50">
		<label for="" class="formulario__label"> Nombre: </label>
		<input type="text" class="formulario__input-text" name="nombre">
		<label for="" class="formulario__label"> Correro: </label>
		<input type="text" class="formulario__input-text" name="correo">
		<label for="" class="formulario__label"> Teléfono: </label>
		<input type="text" class="formulario__input-text" name="telefono">
		<label for="" class="formulario__label"> Mensaje: </label>
		<textarea name="mensaje" id="" cols="30" rows="10" class ="formulario__textarea"> </textarea>
		<input type="submit" class"btn formulario__btn" value="Enviar">
		</form>
	</div>

	
	</body>






<?php include("footer.php");?>

</html>