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
	<div>

	<div >
	
	<div id= "caja">
	<form action="" method="POST">
	            <div class="form-group">
              <label for="">Titulo :</label>
              <input type="text" name="titulo" value= "<?php echo $row['titulo']; ?>"class="form-control">
            </div>
			   <div class="form-group">
              <label for="">Subtitulo :</label>
              <input type="text" name="subtitulo" value="<?php echo $row['subtitulo']; ?>" class="form-control">
            </div>
			 <div class="form-group">
              <label for="">Autor :</label>
              <input type="text" name="autor" value="<?php echo $row['autor']; ?> "class="form-control">
            </div>
			
			   <div class="form-group">
              <label for="">Texto :</label>
             
			  <textarea  type="text" name="texto"rows="6"> <?php echo $row['texto']; ?></textarea>
            </div>
  <input type="submit" name="update" value="subir">
</form>
</div>

				
				 <?php 
				 
									if (isset($_POST['update'])) {
				if (isset($_POST['titulo']) && isset($_POST['subtitulo']) && isset($_POST['texto'])) {
					if (!empty($_POST['titulo']) && !empty($_POST['subtitulo'])  && !empty($_POST['texto']) ) {
					
						$data['titulo'] = $_POST['titulo'];
						$data['subtitulo'] = $_POST['subtitulo'];
						$data['autor'] = $_POST['autor'];
						$data['tiempo']=date("Y-m-d H:i:s"); 
						$data['texto'] = $_POST['texto'];
						$data['id']=$_REQUEST['id'];
						$update = $Conn->actualizarArticulo($data);
					if($update){
					echo "<script>window.location.href = 'adminArticulo.php';</script>";
					}
				}
		
			
				}
		 
					  }
					  }
              }else{
                echo "no existe Ningun articulo";
            }
	
				 ?>
				 </div>
				 
				</body>
				</html>