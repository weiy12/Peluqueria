<?php 

	Class Conn{

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "peluqueria";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}
		
//cita


			// insertar cita
			public function insert(){

			
			if (isset($_POST['submit'])) {
				if (isset($_POST['dia']) && isset($_POST['tiempo']) && isset($_POST['peluquero'])) {
					if (!empty($_POST['dia']) && !empty($_POST['tiempo'])  && !empty($_POST['peluquero']) ) {
						
						$dia = $_POST['dia'];
						$tiempo = $_POST['tiempo'];
						$citado = 1;
						$peluquero = $_POST['peluquero'];
						$certificado=rand();
						
						
						$query = "INSERT INTO peluquero (dia,tiempo,citado,peluquero,certificado) VALUES ('$dia','$tiempo','$citado','$peluquero','$certificado')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('este es numero de idenficación :  '+$certificado);</script>";
							echo "<script>window.location.href = 'cita.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'cita.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'cita.php';</script>";
					}
				}
			}
			
		}
			
				//ver todas las citas

			public function verCita(){
			$data = null;
			$query = "SELECT * FROM peluquero";
			
				if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
				
		}
		
		
	
				//buscar
			public function fetch(){
			$data = null;
			$key=$_POST['key'];
			$query = "SELECT * FROM peluquero where certificado like '$key'";
			
				if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
			
		}

		
		//eliminar cita
			public function delete($id){

			$query = "DELETE FROM peluquero where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
				
		}
		

		
				//eliminar articulo
			public function deleteArticulo($id){

			$query = "DELETE FROM blog where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
				
		}
		//Articulos
				//buscar

			public function verArticulo($id){
			$data = null;
			$query = "SELECT * FROM blog where id = '$id'";
			
				if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
				
		}

		//insertar articulo
			
		
		public function insertArticulo(){

			
			if (isset($_POST['submit'])) {
				if (isset($_POST['titulo']) && isset($_POST['subtitulo']) && isset($_POST['texto'])) {
					if (!empty($_POST['titulo']) && !empty($_POST['subtitulo'])  && !empty($_POST['texto']) ) {
						
						$titulo = $_POST['titulo'];
						$subtitulo = $_POST['subtitulo'];
						$autor = $_POST['autor'];
						$tiempo=date("Y-m-d H:i:s"); 
						$texto = $_POST['texto'];
						
						
						
						$query = "INSERT INTO blog (titulo,subtitulo,autor,tiempo,texto) VALUES ('$titulo','$subtitulo','$autor','$tiempo','$texto')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('articulo subido');</script>";
							echo "<script>window.location.href = 'articulo.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'articulo.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'articulo.php';</script>";
					}
				}
			}
				
		}
	
		
		
		
		public function actualizarArticulo($data){

						
			 $query="update blog set titulo='$data[titulo]', subtitulo='$data[subtitulo]', autor='$data[autor]', tiempo='$data[tiempo]', texto='$data[texto]'  where id='$data[id]'";
			if( $sql=$this->conn->query($query)){
				return true;
			
			}else  {
				return false;
			
			}
				
		}
		
				//ver todo 
		public function articulo(){
			$data = null;

			$query = "SELECT * FROM blog";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
				
			return $data;
			
		}
		
		
		
		//entrar usuario
		
		public function login(){
				$usuario=$_POST['usuario']; //obtener el valor del usuario
				$password=$_POST['pass']; // obtener el valor de la contraseña
				
				if($usuario && $password){ //una prueba de que si es vacio
		$query= "select * from admin where usuario = '$usuario' and password='$password'"; // comprobar que si el usuario y la contraseña es lo mismo que el base de datos
		if ($sql = $this->conn->query($query)) {
						 session_start();// iniciar ssesion
						 $_SESSION['login']=1;
						
						
							echo "<script>window.location.href = 'admin.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'login.php';</script>";
						}

		
	}
	
		
	
	}


		
		
		
		
		
		
		
		
		
		
	
		
		
		
		
		
		
	}


 ?>