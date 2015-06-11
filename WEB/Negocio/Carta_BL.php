<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/Carta_DAL.php';
	include_once '../Entidad/Carta_EL.php';
	$OCarta_BL=new Carta_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OCarta_BL->GuardarCarta();
		}
		if($_GET["accion"]=='Modificar'){
			$OCarta_BL->ModificarCarta($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OCarta_BL->EliminarCarta($_GET["id"]);
			
		}
	}

	/**
	* 
	*/
	 class Carta_BL 
	{
		var $OCartaDAL;
		function __construct()
		{
			$this->OCartaDAL=new Carta_DAL();
		}
		public function GuardarCarta(){
			$OCartaEL=new Carta_EL();
			$OCartaEL->snombre($_POST["txtNombre"]);
			$OCartaEL->sdescripcion($_POST["txtDescripcion"]);

			$this->OCartaDAL->Guardar_Carta($OCartaEL);
				
		}
		public function ModificarCarta($id){
			$OCartaEL=new Carta_EL();
			$OCartaEL->sidcarta($id);
			$OCartaEL->snombre($_POST["txtNombre"]);
			$OCartaEL->sdescripcion($_POST["txtDescripcion"]);

			$this->OCartaDAL->Modificar_Carta($OCartaEL);
				
		}
		public function EliminarCarta($id){
			$this->OCartaDAL->Eliminar_Carta($id);
				
		}

		public function ListaCarta($criterio){
			return $this->OCartaDAL->Lista_Carta($criterio);
		}
		public function ObtenerCarta($id){
			return $this->OCartaDAL->Obtener_Carta($id);
		}
	}



?>