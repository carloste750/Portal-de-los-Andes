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
			$entidad="Nivel_Acceso";

			$campos="nombre_Nivel,
				descripcion_Nivel"
			;

			$atributos="'".$valor->nombre()."',
				'".$valor->descripcion()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_NivelAcceso($valor){
			$entidad="Nivel_Acceso";
			$condicion="idNivel='".$valor->idNivel()."'";
			$campos="nombre_Nivel='".$valor->nombre()."',".
					"descripcion_Nivel='".$valor->descripcion()."'";
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_NivelAcceso($id){
			$entidad="Nivel_Acceso";
			$campoid="idNivel";
			$campoest="est_Nivel";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_NivelAcceso($Criterio){
			$entidad="Nivel_Acceso";
			$campos="idNivel,nombre_Nivel,descripcion_Nivel";
			$camposfiltro="nombre_Nivel";
			$nestado="est_Nivel";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_NivelAcceso($id){
			$entidad="Nivel_Acceso";
			$campoid="idNivel";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>