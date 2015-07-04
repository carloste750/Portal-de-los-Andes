<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Empleado_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Empleado($valor){
			$entidad="Empleado";

			$campos="nombre_Empleado,
				apellido_Empleado,
				dni_Empleado,
				direccion_Empleado,
				telefono_Empleado,
				email_Empleado,
				usuario_Empleado,
				contraseña_Empleado,
				tipo_empleado_idtipoempleado
				"
			;
			$atributos="'".$valor->getnombre()."',
				'".$valor->getapellido()."',
				'".$valor->getdni()."',
				'".$valor->getdireccion()."',
				'".$valor->gettelefono()."',
				'".$valor->getemail()."',
				'".$valor->getusuario()."',
				'".$valor->getcontrasenia()."',
				'".$valor->getidtipoempleado()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Empleado($valor){
			$entidad="Empleado";
			$condicion="idEmpleado='".$valor->getidempleado()."'";
			$campos="nombre_Empleado='".$valor->getnombre()."',".
					"apellido_Empleado='".$valor->getapellido()."',".
					"dni_Empleado='".$valor->getdni()."',".
					"direccion_Empleado='".$valor->getdireccion()."',".
					"telefono_Empleado='".$valor->gettelefono()."',".
					"email_Empleado='".$valor->getemail()."',".
					"usuario_Empleado='".$valor->getusuario()."',".
					"contraseña_Empleado='".$valor->getcontrasenia()."',".
					"tipo_empleado_idtipoempleado='".$valor->getidtipoempleado()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Empleado($id){
			$entidad="Empleado";
			$campoid="idEmpleado";
			$campoest="est_Empleado";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Empleado($Criterio){
			$entidad="Empleado";
			$campos="idEmpleado,nombre_Empleado,
				apellido_Empleado,
				dni_Empleado,
				direccion_Empleado,
				telefono_Empleado,
				email_Empleado,
				usuario_Empleado,
				tipo_empleado_idtipoempleado		
				";
			$camposfiltro="dni_Empleado or nombre_Empleado or apellido_Empleado";
			/*Condicion de Or para comparacion de mas de 1*/
			$nestado="est_Empleado";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Empleado($id){
			$entidad="Empleado";
			$campoid="idEmpleado";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>