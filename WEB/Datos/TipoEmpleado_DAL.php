<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class TipoEmpleado_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_TipoEmpleado($valor){
			$entidad="Tipo_Empleado";

			$campos="descripcion_tipo
				"
			;
			$atributos="'".$valor->getdescripcion()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_TipoEmpleado($valor){
			$entidad="Tipo_Empleado";
			$condicion="idtipoempleado='".$valor->getidtipo()."'";
			$campos="descripcion_tipo='".$valor->getdescripcion()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idtipoempleado";
			$campoest="est_Tipo";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_TipoEmpleado($Criterio){
			$entidad="Tipo_Empleado";
			$campos="idtipoempleado,descripcion_tipo";
			$camposfiltro="descripcion_tipo";
			$nestado="est_Tipo";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idtipoempleado";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>