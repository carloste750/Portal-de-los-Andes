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
			$atributos="'".$valor->getnombre()."',
				'".$valor->getdescripcion()."',
				'".$valor->gethorainicio()."',
				'".$valor->gethorafin()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Horario($valor){
			$entidad="Horario";
			$condicion="idHorario='".$valor->getidhorario()."'";
			$campos="nombre_Horario='".$valor->getnombre()."',".
					"descripcion_Horario='".$valor->getdescripcion()."',".
					"horainicio_Horario='".$valor->gethorainicio()."',".
					"horafin_Horario='".$valor->gethorafin()."'"
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
			$campos="idhorario,nombre_Horario,
				descripcion_Horario,
				horainicio_Horario,
				horafin_Horario
				";
			$camposfiltro="nombre_Horario or descripcion_Horario";
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