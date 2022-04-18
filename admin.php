
<?php session_start(); 
if($_SESSION['login'] !=1){
		echo "<script>window.location.href = 'index.php';</script>";
		
}
echo $_SESSION['login'];
?>
<html lang="en">
  <head>
   <?php include("css/style.css");?>
<?php include("head.php");?>
<?php include("js/script.js");?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
  		<div id="admin">
			<H1>Administración de la cita </H1>
	
			<input id="botonAdmin" type ="button" value="administrar" Onclick="adminCita();">
	</div>
 		<div id="admin">
			<H1>Administración del articulo </H1>
	
			<input id="botonAdmin" type ="button" value="administrar" Onclick="adminArticulo();">
	</div>
 

	<div id="admin">
	<H1>Para salir de admin </H1>
	<input id="botonAdmin" type ="button" value="cerrar sesion" Onclick="cancelarSesion();">
	</div>
	
  </body>

</html>