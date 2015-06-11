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

			$campos="descripcion_TipoEmpleado
				"
			;
			$atributos="'".$valor->descripcion()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_TipoEmpleado($valor){
			$entidad="Tipo_Empleado";
			$condicion="idTipoEmpleado='".$valor->idTipoEmpleado()."'";
			$campos="descripcion='".$valor->descripcion()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idTipoEmpleado";
			$campoest="est_Tipo";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_TipoEmpleado($Criterio){
			$entidad="Tipo_Empleado";
			$campos="descripcion	
				";
			$camposfiltro="descripcion";
			$nestado="est_Tipo";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idTipoEmpleado";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>