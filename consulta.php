<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZHONGZHOU</title>
	<!-- introducir estilo !-->
 <?php
 include("css/style.css");
 include("head.php");
include("js/script.js");
  
   include 'Conn.php';
            
?>
</head>
	<body id="primer">
	
	

	<h1 id="letraM">Consulta la cita</h1>
	<div id="caja">
	<p >Indroduce el numero de certificado </p>
<form action="resultado.php" method="POST">
  <input type="text" name="key">
  <input type="submit" name="submit" value="entrega">
</form>
	</div>
	
	</body>






<?php include("footer.php");?>

</html>