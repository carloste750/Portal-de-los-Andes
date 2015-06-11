<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Informacion_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Informacion($valor){
			$entidad="Informacion";

			$campos="nombreempresa,
				iddetalle"
			;
			$atributos="'".$valor->nombre()."',
				'".$valor->iddetalle()."'
				"
			;
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Informacion($valor){
			$entidad="Informacion";
			$condicion="idInformacion='".$valor->idinformacion()."'";
			$campos="nombreempresa='".$valor->nombre()."',".
					"iddetalle='".$valor->apellido()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Informacion($id){
			$entidad="Informacion";
			$campoid="idInformacion";
			$campoest="est_Informacion";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Informacion($Criterio){
			$entidad="Informacion";
			$campos="nombreempresa,
				iddetalle";
			$camposfiltro="nombreempresa,iddetalle";
			return $this->GD->ListarDatosBusquedaNoEstado($entidad,$campos,$camposfiltro,$Criterio);
		}
		public function Obtener_Informacion($id){
			$entidad="Informacion";
			$campoid="idInformacion";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>