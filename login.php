	
<?php session_start();?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZHONGZHOU</title>
	<!-- introducir estilo !-->
 <?php include("css/style.css");?>
<?php include("head.php");?>
<?php include("js/script.js");?>
</head>
<body >
<div>
	<form id="textoMedio" action="check.php" method="post" class="formulario column column--50">
		<label for="" class="formulario__label"> Usuario: </label>
		<input type="text" class="formulario__input-text" name="usuario">
		<label for="" class="formulario__label"> Contraseña: </label>
		<input type="password" class="formulario__input-text" name="pass">
		<input type="submit" class"btn formulario__btn" value="Entrar">
		</form>
</div>
	

	
	
	
	
</body>






<?php include("footer.php");?>

</html>