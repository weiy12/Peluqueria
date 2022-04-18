<?php 

	include 'Conn.php';
	$Conn = new Conn();
	$id = $_REQUEST['id'];
	$delete = $Conn->delete($id);

	if ($delete) {
		echo "<script>alert('La cita ya está cancelado');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}

 ?>