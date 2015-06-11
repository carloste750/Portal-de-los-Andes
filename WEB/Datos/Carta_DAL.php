<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Carta_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Carta($valor){
			$entidad="carta";

			$campos="mensaje_carta,
				fecha_carta,
				idhorario"
			;

			$atributos="'".$valor->mensaje()."',
				'".$valor->fecha()."',
				'".$valor->idhorario()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Carta($valor){
			$entidad="carta";
			$condicion="idcarta='".$valor->idcarta()."'";
			$campos="mensaje_carta='".$valor->mensaje()."',".
					"fecha_carta='".$valor->fecha()."',".
					"idhorario='".$valor->idhorario()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Carta($id){
			$entidad="carta";
			$campoid="idcarta";
			$campoest="est_carta";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Carta($Criterio){
			$entidad="carta";
			$campos="mensaje_carta,
				fecha_carta,
				est_carta,
				idhorario";
			$camposfiltro="idhorario";
			$nestado="est_carta";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Carta($id){
			$entidad="carta";
			$campoid="idcarta";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>