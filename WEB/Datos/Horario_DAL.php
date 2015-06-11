<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Horario_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Horario($valor){
			$entidad="Horario";

			$campos="nombre_Horario,
				descripcion_Horario,
				horainicio_Horario,
				horafin_Horario
				"
			;
			$atributos="'".$valor->nombre()."',
				'".$valor->descripcion()."',
				'".$valor->horainicio()."',
				'".$valor->horafin()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Horario($valor){
			$entidad="Horario";
			$condicion="idHorario='".$valor->idhorario()."'";
			$campos="nombre_Horario='".$valor->nombre()."',".
					"descripcion_Horario='".$valor->descripcion()."',".
					"horainicio_Horario='".$valor->horainicio()."',".
					"horafin_Horario='".$valor->horafin()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Horario($id){
			$entidad="Horario";
			$campoid="idHorario";
			$campoest="est_Horario";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Horario($Criterio){
			$entidad="Horario";
			$campos="nombre_Horario,
				descripcion_Horario,
				horainicio_Horario,
				horafin_Horario,
				";
			$camposfiltro="nombre_Horario,descripcion_Horario";
			$nestado="est_Horario";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Horario($id){
			$entidad="Horario";
			$campoid="idHorario";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>