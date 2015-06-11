<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Detalle_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Detalle($valor){
			$entidad="Detalle";

			$campos="nombre_Detalle,
				descripcion_Detalle
				"
			;
			$atributos="'".$valor->nombre_Detalle()."',
				'".$valor->descripcion_Detalle()."'
				"
			;
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Detalle($valor){
			$entidad="Detalle";
			$condicion="idDetalle='".$valor->idDetalle()."'";
			$campos="nombre_Detalle='".$valor->nombre()."',".
					"descripcion_Detalle='".$valor->descripcion()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);
		}
		public function Eliminar_Detalle($id){
			$entidad="Detalle";
			$campoid="idDetalle";
			$campoest="est_Detalle";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Detalle($Criterio){
			$entidad="Detalle";
			$campos="nombre_Detalle,
				descripcion_Detalle";
			$camposfiltro="nombre_Detalle,descripcion_Detalle";
			$nestado="est_Detalle";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Detalle($id){
			$entidad="Detalle";
			$campoid="idDetalle";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>