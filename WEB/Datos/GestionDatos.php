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

		public function GrabarDatos($entidad,$campos,$atributos){
			$res=mysql_query("insert into $entidad($campos) values ($atributos)");
			print("insert into $entidad($campos) values ($atributos)");
			if ($res=1){
				echo "Guardado Correctamente";
			}else{
				echo "No se pudo Guardar";
			}
		}
		public function ModificarDatos($entidad,$campos,$condicion){
			$res=mysql_query("update  $entidad set $campos where $condicion");
			print("update  $entidad set $campos where $condicion");
			if ($res=1){
				echo "Actualizado Correctamente";
			}else{
				echo "No se pudo Actualizar";
			}
		}
		public function EliminarDatos($entidad,$campoid,$campoest,$id){
			$res=mysql_query("update  $entidad set $campoest=0 where $campoid='$id'");
			print("update  $entidad set $campoest='0' where $campoid='$id'");
			if ($res=1){
				echo "Eliminado Correctamente";
			}else{
				echo "No se pudo Eliminar";
			}
		}
		/*la siguiente funcion permite realizar un eliminado con codigo personalizado*/
		public function EliminarDatosPers($entidad,$campoid,$campoest,$condicion){
			$res=mysql_query("update  $entidad set $campoest=0 where $condicion");
			print("update  $entidad set $campoest='0' where $campoid='$id'");
			if ($res=1){
				echo "Eliminado Correctamente";
			}else{
				echo "No se pudo Eliminar";
			}
		}
		public function ListarDatosBusqueda($entidad,$campos,$camposfiltro,$criterio,$nestado){
			echo "select $campos from $entidad where $camposfiltro like '%$criterio%'";
			return mysql_query("select $campos from $entidad where $camposfiltro like '%$criterio%' and $nestado='1'");
		}
		public function ListarDatosBusquedaNoEstado($entidad,$campos,$camposfiltro,$criterio){
			return mysql_query("select $campos from $entidad where $camposfiltro like '%$criterio%'");
		}
		public function Obtener($tabla,$campo,$id){
			echo "select * from $tabla   where $campo =$id";
			return mysql_query("select *  from $tabla  where $campo =$id ");

		}
	}
 ?>