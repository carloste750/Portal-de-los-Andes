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

			$campos="descripcion_tipo,idnivel
				"
			;
			$atributos="'".$valor->descripcion()."','".
			$valor->idnivelacceso()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_TipoEmpleado($valor){
			$entidad="Tipo_Empleado";
			$condicion="idTipo='".$valor->idtipo()."'";
			$campos="descripcion_tipo='".$valor->descripcion()."',
				idnivel='".$valor->idnivelacceso()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idTipo";
			$campoest="est_Tipo";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_TipoEmpleado($Criterio){
			$entidad="Tipo_Empleado";
			$campos="idtipo,descripcion_tipo,idnivel	
				";
			$camposfiltro="descripcion_tipo";
			$nestado="est_Tipo";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_TipoEmpleado($id){
			$entidad="Tipo_Empleado";
			$campoid="idTipo";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>