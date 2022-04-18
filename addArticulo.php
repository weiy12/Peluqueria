

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
$insertArticulo = $Conn->insertArticulo();

         
?>
</head>
	<body id="primer">
	
	

	<h1 id="letraM">Agregar un articulo</h1>
	<div id="cita">
<form action="" method="POST">
	            <div class="form-group">
              <label for="">Titulo</label>
              <input type="text" name="titulo" class="form-control">
            </div>
			   <div class="form-group">
              <label for="">Subtitulo</label>
              <input type="text" name="subtitulo" class="form-control">
            </div>
			 <div class="form-group">
              <label for="">Autor</label>
              <input type="text" name="autor" class="form-control">
            </div>
			
			   <div class="form-group">
              <label for="">Texto</label>
             
			  <textarea  type="text" name="texto" rows="6"></textarea>
            </div>
  <input type="submit" name="submit" value="subir">
</form>
	</div>
	
	

	</body>








</html>