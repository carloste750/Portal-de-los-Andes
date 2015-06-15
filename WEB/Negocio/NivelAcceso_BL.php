<?php 
	/**
	* 
	*/
	include_once '../Datos/NivelAcceso_DAL.php';
	include_once '../Entidad/NivelAcceso_EL.php';
	$ONivelAcceso_BL=new NivelAcceso_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$ONivelAcceso_BL->GuardarNivelAcceso();
		}
		if($_GET["accion"]=='Modificar'){
			$ONivelAcceso_BL->ModificarNivelAcceso($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$ONivelAcceso_BL->EliminarNivelAcceso($_GET["id"]);
		}
	}

	 class NivelAcceso_BL 
	{
		var $ONivelAccesoDAL;
		function __construct()
		{
			$this->ONivelAccesoDAL=new NivelAcceso_DAL();
		}
		public function GuardarNivelAcceso(){
			$ONivelAccesoEL=new NivelAcceso_EL();
			$ONivelAccesoEL->snombre($_POST["txtNombre"]);
			$ONivelAccesoEL->sdescripcion($_POST["txtDescripcion"]);

			$res=$this->ONivelAccesoDAL->Guardar_NivelAcceso($ONivelAccesoEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoNivelAcceso.php?mensaje=¡Guardado Correcto!");
			}else{
				header ("Location: ../Presentacion/NuevoNivelAcceso.php?mensaje=!Error: No pudimos guardar¡");
			}	
		}
		public function ModificarNivelAcceso($id){
			$ONivelAccesoEL=new NivelAcceso_EL();
			$ONivelAccesoEL->sidNivel($id);
			$ONivelAccesoEL->snombre($_POST["txtNombre"]);
			$ONivelAccesoEL->sdescripcion($_POST["txtDescripcion"]);
			$res=$this->ONivelAccesoDAL->Modificar_NivelAcceso($ONivelAccesoEL);
			if ($res=1){
				header ("Location: ../Presentacion/ListarNivelAcceso.php?accion=all");
			}else{
				header ("Location: ../Presentacion/ListarNivelAcceso.php?accion=all");
			}	
			
				
		}
		public function EliminarNivelAcceso($id){
			$resp=$this->ONivelAccesoDAL->Eliminar_NivelAcceso($id);
			header ("Location: ../Presentacion/ListarNivelAcceso.php?accion=all");
		}

		public function ListaNivelAcceso($criterio){
			return $this->ONivelAccesoDAL->Lista_NivelAcceso($criterio);
		}
		public function ObtenerNivelAcceso($id){
			return $this->ONivelAccesoDAL->Obtener_NivelAcceso($id);
		}
	}



?>