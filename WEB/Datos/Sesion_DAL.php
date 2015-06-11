<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Sesion_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Sesion($valor){
			$entidad="Sesion";

			$campos="fechainicio_Sesion,
				horainicio_Sesion,
				fechafin_Sesion,
				horafin_Sesion,
				"
			;
			$atributos="'".$valor->fechainicio()."',
				'".$valor->horainicio()."',
				'".$valor->fechafin()."',
				'".$valor->horafin()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Sesion($valor){
			$entidad="Sesion";
			$condicion="idSesion='".$valor->idSesion()."'";
			$campos="fechainicio_Sesion='".$valor->fechainicio()."',".
					"horainicio_Sesion='".$valor->horainicio()."',".
					"fechafin='".$valor->fechafin()."',".
					"horafin_Sesion='".$valor->horafin()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Sesion($id){
			$entidad="Sesion";
			$campoid="idSesion";
			$campoest="est_Sesion";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Sesion($Criterio){
			
		}
		public function Obtener_Sesion($id){
			$entidad="Sesion";
			$campoid="idSesion";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>