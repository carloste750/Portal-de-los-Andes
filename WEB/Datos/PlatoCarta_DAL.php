<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class PlatoCarta_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_PlatoCarta($valor){
			$entidad="Plato_Carta";

			$campos="idcarta,
				idplato
				"
			;
			$atributos="'".$valor->idcarta()."',
				'".$valor->idplato()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}

		public function Eliminar_PlatoCartaPers($idplato,$idcarta){
			$entidad="Plato_Carta";
			$condicion="idplato='$idplato' and idcarta='$idcarta'";
			$campoest="est_Plato_Carta";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$condicion);

		}
		public function Lista_PlatoCarta($Criterio){
			
		}
		public function Obtener_PlatoCarta($id){
			$entidad="PlatoCarta";
			$campoid="idPlatoCarta";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>