<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Sucursal_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Sucursal($valor){
			$entidad="Sucursal";

			$campos="imagen_Sucursal,
				direccion_Sucursal
				"
			;
			$atributos="'".$valor->imagen()."',
				'".$valor->direccion()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Sucursal($valor){
			$entidad="Sucursal";
			$condicion="idSucursal='".$valor->idSucursal()."'";
			$campos="imagen_Sucursal='".$valor->imagen()."',".
					"direccion_Sucursal='".$valor->direccion()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Sucursal($id){
			$entidad="Sucursal";
			$campoid="idSucursal";
			$campoest="est_Sucursal";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Sucursal($Criterio){
			$entidad="Sucursal";
			$campos="imagen_Sucursal,
				direccion_Sucursal		
				";
			$camposfiltro="direccion_Sucursal";
			$nestado="est_Sucursal";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Sucursal($id){
			$entidad="Sucursal";
			$campoid="idSucursal";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>