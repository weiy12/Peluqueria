<?php 

	include 'Conn.php';
	$Conn = new Conn();
	$id = $_REQUEST['id'];
	$delete = $Conn->deleteArticulo($id);

	if ($delete) {
		echo "<script>alert('El articulo ya está cancelado');</script>";
		echo "<script>window.location.href = 'adminArticulo.php';</script>";
	}

 ?>