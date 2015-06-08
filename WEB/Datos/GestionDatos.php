<?php 
	/**
	* 
	*/
	class GestionDatos 
	{
		var $hostname;
		var $base;
		var $usuario;
		var $contraseña;

		function __construct()
		{
			$this->hostname="127.0.0.1";
			$this->usuario="root";
			$this->contraseña="";
			$this->base="pandes";

			$conexion=mysql_connect($this->hostname, $this->usuario, $this->contraseña);
			mysql_select_db($this->base);
			if(!$conexion){
				echo "No se pudo conectar".mysql_error();
			}
		}

		public function GrabarDatos($entidad,$campos,$valores){
			$res=mysql_query("insert into ".$entidad."(".$campos.") values (".$valores.")");
			print("insert into ".$entidad."(".$campos.") values (".$valores.")");
			if ($res=1){
				echo "Guardado Correctamente";
			}else{
				echo "No se pudo Guardar";
			}
		}
		public function ListarDatosBusqueda($entidad,$campos,$camposfiltro,$criterio){
			echo "select $campos from $entidad where $camposfiltro like '%$criterio%'";
			return mysql_query("select $campos from $entidad where $camposfiltro like '%$criterio%'");
		}
		public function Obtener($campo,$id){
			return mysql_query("select * from  where $campo =$id");
		}
	}
 ?>