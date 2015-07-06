<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/Horario_DAL.php';
	include_once '../Entidad/Horario_EL.php';
	$OHorario_BL=new Horario_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OHorario_BL->GuardarHorario();
		}
		if($_GET["accion"]=='Modificar'){
			$OHorario_BL->ModificarHorario($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OHorario_BL->EliminarHorario($_GET["id"]);
		}
	}
	 class Horario_BL 
	{
		var $OHorarioDAL;
		function __construct()
		{
			$this->OHorarioDAL=new Horario_DAL();
		}
		public function ListaHorario($criterio){
			return $this->OHorarioDAL->Lista_Horario($criterio);
		}
		public function ObtenerHorario($id){
			return $this->OHorarioDAL->Obtener_Horario($id);
		}
	}



?>