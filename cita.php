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
              $Conn = new Conn();
              $insert = $Conn->insert();

         
?>
</head>
	<body id="primer">
	
	

	<h1 id="letraM">Solicitar la cita</h1>
	<div id="cita">
	<p > seleccionar un fecha </p>
<form action="" method="POST">
  <input  type="date" name="dia">
  <p >seleccionar un tiempo</p>
    <select    type="option" name="tiempo">
	<option> seleccionar </option>
  <option value="9:00-10:00">9:00-10:00</option>
    <option value="10:00-11:00">10:00-11:00</option>
	  <option value="11:00-12:00">11:00-12:00</option>
	  </select>
    <p >seleccionar un peleuquero</p>
  <select    type="option" name="peluquero">

  <option value="Jose">Jose</option>
    <option value="Juan">Juan</option>
	  <option value="Luna">Luna</option>
	  </select>
	 

  <input type="submit" name="submit" value="aceptar">
 
</form>
	</div>
	
	</body>






<?php include("footer.php");?>

</html>