<?php 
	include('Conn.php'); //conectar a base de datos
	$Conn = new Conn();
	$check = $Conn->login();

		 session_start();
?>