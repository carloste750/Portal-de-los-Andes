<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Reservacion_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Reservacion($valor){
			$entidad="Reservacion";

			$campos="estado_Reservacion,
				fecha_Reservacion,
				hora_Reservacion,
				costototal_Reservacion,
				fechaconsumo_Reservacion,
				horaconsumo_Reservacion,
				descripcion_Reservacion,
				idcliente,
				idsucursal
				"
			;
			$atributos="'".$valor->estado()."',
				'".$valor->fecha()."',
				'".$valor->hora()."',
				'".$valor->costototal()."',
				'".$valor->fechaconsumo()."',
				'".$valor->horaconsumo()."',
				'".$valor->descripcion."',
				'".$valor->idcliente()."',
				'".$valor->idsucursal()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Reservacion($valor){
			$entidad="Reservacion";
			$condicion="idReservacion='".$valor->idReservacion()."'";
			$campos="estado_Reservacion='".$valor->nombre()."',".
					"fecha_Reservacion='".$valor->apellido()."',".
					"hora_Reservacion='".$valor->dni()."',".
					"costototal_Reservacion='".$valor->direccion()."',".
					"fechaconsumo_Reservacion='".$valor->telefono()."',".
					"horaconsumo_Reservacion='".$valor->email()."',".
					"descripcion_Reservacion='".$valor->usuario()."',".
					"idcliente='".$valor->contrasenia()."',".
					"idsucursal='".$valor->idsucursal()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Reservacion($id){
			$entidad="Reservacion";
			$campoid="idReservacion";
			$campoest="est_Reservacion";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Reservacion($Criterio){
			$entidad="Reservacion";
			$campos="estado_Reservacion,
				fecha_Reservacion,
				hora_Reservacion,
				costototal_Reservacion,
				fechaconsumo_Reservacion,
				horaconsumo_Reservacion,
				descripcion_Reservacion,
				idcliente,
				idsucursal,
				";
			$camposfiltro="fecha_Reservacion";
			$nestado="est_Reservacion";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Reservacion($id){
			$entidad="Reservacion";
			$campoid="idReservacion";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>