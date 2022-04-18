
<html lang="en">
  <head>
<?php include("css/style.css");?>
<?php include("head.php");?>
<?php include("js/script.js");?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
    <title>Resultado</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">administración de la Cita</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                
                <th>dia</th>
                <th>tiempo</th>
                <th>peluquero</th>
                <th>certificado</th>
                <th>Operación</th>
				
              </tr>
            </thead>
            <tbody>
              <?php
                include 'Conn.php';
                $Conn = new Conn();
                $rows = $Conn->verCita();
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
               
                <td><?php echo $row['dia']; ?></td>
                <td><?php echo $row['tiempo']; ?></td>
                <td><?php echo $row['peluquero']; ?></td>
                <td><?php echo $row['certificado']; ?></td>
                <td>
                  <a href="borrarCitaAdmin.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">cancelar</a>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no existe esta cita";
            }

              ?>
            </tbody>
          </table>
        </div>
		
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>