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
				contrasenia_Empleado,
				idsucursal,
				idtipoempleado
				"
			;
			$atributos="'".$valor->nombre()."',
				'".$valor->apellido()."',
				'".$valor->dni()."',
				'".$valor->direccion()."',
				'".$valor->telefono()."',
				'".$valor->email()."',
				'".$valor->usuario."',
				'".$valor->contraseña()."',
				'".$valor->idsucursal()."',
				'".$valor->idtipoempleado()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Empleado($valor){
			$entidad="Empleado";
			$condicion="idEmpleado='".$valor->idempleado()."'";
			$campos="nombre_Empleado='".$valor->nombre()."',".
					"apellido_Empleado='".$valor->apellido()."',".
					"dni_Empleado='".$valor->dni()."',".
					"direccion_Empleado='".$valor->direccion()."',".
					"telefono_Empleado='".$valor->telefono()."',".
					"email_Empleado='".$valor->email()."',".
					"usuario_Empleado='".$valor->usuario()."',".
					"contrasenia_Empleado='".$valor->contrasenia()."',".
					"idsucursal='".$valor->idsucursal()."',".
					"idtipoempleado='".$valor->idtipoempleado()."'"
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
			$campos="nombre_Empleado,
				apellido_Empleado,
				dni_Empleado,
				direccion_Empleado,
				telefono_Empleado,
				email_Empleado,
				usuario_Empleado,
				contrasenia_Empleado,
				idsucursal,
				idtipoempleado		
				";
			$camposfiltro="dni_Empleado,nombre_Empleado,apellido_Empleado";
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