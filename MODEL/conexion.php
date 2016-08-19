<?php

	class conexion{

/*		private $conexion;
		private $server = "us-cdbr-iron-east-04.cleardb.net";
		private $username = "be53035c41706e";
		private $password = "9467bfd68022bd8";
		private $dbname = "heroku_b09fc9ff7592b1e";
		*/
		private $server = "localhost";
		private $username = "root";
		private $password = "kobyjzt";
		private $dbname = "LXM";
		private $user;
		private $pass;


		public function __construct(){
			// Create connection
			$this->conexion = new mysqli($this->server, $this->username, $this->password, $this->dbname );
			// Check connection
			if ($this->conexion->connect_error) {
				die("Connección fallida: Lo sentimos estamos teniendo problemas".$this->conexion->connect_error);
			}
		}

		public function cerrar(){
			
			$this->conexion->close();

		}

		public function login($user, $pass){
			
			$this->user = $user;
			$this->pass = $pass;

			$query = "SELECT usuario, contrasena, nombre
					  FROM administrador 
					  WHERE usuario= '".$this->user."' and contrasena='".$this->pass."'";

			$consulta = $this->conexion->query($query);
			if($row = mysqli_fetch_array($consulta)){
					session_start(); 

					$_SESSION['validacion'] = 1 ; 
					$_SESSION['usuario']= $row['usuario'];
					$_SESSION['nombre']= $row['nombre'];
					echo "index.php";


			} else {
				session_start();
				$_SESSION['validacion']=0;
				echo "1";
			}
		}
		public function logout(){
			session_destroy();
		}
	}
?>
