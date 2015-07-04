<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class PlatoReservacion_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_PlatoReservacion($valor){
			$entidad="Plato_Reservacion";

			$campos="cantidad_PlatoReservacion,
				idplato,
				idreservacion"
			;
			$atributos="'".$valor->cantidad()."',
				'".$valor->idplato()."',
				'".$valor->idreservacion()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_PlatoReservacion($valor){
			$entidad="Plato_Reservacion";
			$condicion="idPlatoReservacion='".$valor->idPlatoReservacion()."'";
			$campos="cantidad_PlatoReservacion='".$valor->cantidad()."',".
					"idplato='".$valor->idplato()."',".
					"idreservacion='".$valor->idreservacion()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_PlatoReservacion($id){
			$entidad="PlatoReservacion";
			$campoid="idPlatoReservacion";
			$campoest="est_PlatoReservacion";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);
		}
		public function Lista_PlatoReservacion($Criterio){
			$entidad="PlatoReservacion";
			$campos="cantidad_PlatoReservacion,
				idplato,
				idreservacion		
				";
			$camposfiltro="id_PlatoReservacion";
			$nestado="est_PlatoReservacion";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_PlatoReservacion($id){
			$entidad="PlatoReservacion";
			$campoid="idPlatoReservacion";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>