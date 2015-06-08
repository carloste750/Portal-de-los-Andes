<?php 
	
	abstract class Conexion 
	{

		private $hostname="127.0.0.1";
		private $base="´pandes";
		private $usuario="root";
		private $contraseña="";

		function __construct()
		{
			
		}
		public function open_Conexion(){
			$conexion=mysql_connect($this->hostname, $this->usuario, $this->contraseña);
			mysql_select_db($this->base);
			if(!$conexion)
			{
				echo "No se pudo conectar".mysql_error();
			}
			mysql_select_db($this->base);
		}
		public function get_Conexion(){
			$this->open_Conexion();
			
		} 
		public  function MostrarConexion(){
			if($this->_Conexion){
				echo "Conexion Realizada";
			}else{
				echo "No se realizo la Conexion";
			}
		}
	}
 ?>