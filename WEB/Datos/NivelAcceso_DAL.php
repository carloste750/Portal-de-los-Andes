<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class NivelAcceso_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_NivelAcceso($valor){
			$entidad="NivelAcceso";

			$campos="nombre_NivelAcceso,
				descripcion_NivelAcceso"
			;

			$atributos="'".$valor->nombre()."',
				'".$valor->descripcion()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_NivelAcceso($valor){
			$entidad="NivelAcceso";
			$condicion="idNivelAcceso='".$valor->idNivelAcceso()."'";
			$campos="nombre_NivelAcceso='".$valor->nombre()."',".
					"descripcion_NivelAcceso='".$valor->descripcion()."'";
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_NivelAcceso($id){
			$entidad="NivelAcceso";
			$campoid="idNivelAcceso";
			$campoest="est_NivelAcceso";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_NivelAcceso($Criterio){
			$entidad="NivelAcceso";
			$campos="idNivelAcceso,nombre_NivelAcceso,descripcion_NivelAcceso";
			$camposfiltro="nombre_NivelAcceso";
			$nestado="est_NivelAcceso";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_NivelAcceso($id){
			$entidad="NivelAcceso";
			$campoid="idNivelAcceso";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>