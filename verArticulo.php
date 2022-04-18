<!doctype html>
<html lang="en">
 <head>
  </head>

   <?php include("css/style.css");?>
<?php include("head.php");?>
<?php include("js/script.js");?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Articulo</title>


   <body>
   <?php  

include 'Conn.php';
	$Conn = new Conn();
	$id = $_REQUEST['id'];
	$rows = $Conn->verArticulo($id);
	
	if(!empty($rows)){
		 foreach($rows as $row){ 
 ?>
	<div class="card">

	<div class="card-header">
		
				<h1 id="letraM">Titulo:</h1>
				<h1 id="letraM"> <?php echo $row['titulo']; ?></h1>
                <h1 id="letraM">Subtitulo: </h1>
           <h1 id="letraM"><?php echo $row['subtitulo']; ?></h1>
                <h1 id="letraM">Autor : <h1>

				  <h1 id="letraM"><?php echo $row['autor']; ?></h1>
                <p id="letraM">Fecha: <?php echo $row['tiempo']; ?></p>
		
				  </div>
				 <p id="letraM"> <?php echo $row['texto']; ?></p>
					 </div>
				 <div>
				 <?php 
					  }
              }else{
                echo "no existe Ningun articulo";
            }

				 ?>
				 </div>
				 
				</body>
				</html>