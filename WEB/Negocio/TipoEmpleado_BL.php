<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/TipoEmpleado_DAL.php';
	include_once '../Entidad/TipoEmpleado_EL.php';
	$OTipoEmpleado_BL=new TipoEmpleado_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OTipoEmpleado_BL->GuardarTipoEmpleado();
		}
		if($_GET["accion"]=='Modificar'){
			$OTipoEmpleado_BL->ModificarTipoEmpleado($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OTipoEmpleado_BL->EliminarTipoEmpleado($_GET["id"]);
		}
	}

	 class TipoEmpleado_BL 
	{
		var $OTipoEmpleadoDAL;
		function __construct()
		{
			$this->OTipoEmpleadoDAL=new TipoEmpleado_DAL();
		}
		public function GuardarTipoEmpleado(){
			$OTipoEmpleadoEL=new TipoEmpleado_EL();
			$OTipoEmpleadoEL->setdescripcion($_POST["txtDescripcion"]);
			$res=$this->OTipoEmpleadoDAL->Guardar_TipoEmpleado($OTipoEmpleadoEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoTipoEmpleado.php?mensaje=¡Guardado Correcto!&accion=all");
			}else{
				header ("Location: ../Presentacion/NuevoTipoEmpleado.php?mensaje=!Error: No pudimos guardar¡");
			}
		}
		public function ModificarTipoEmpleado($id){
			$OTipoEmpleadoEL=new TipoEmpleado_EL();
			$OTipoEmpleadoEL->setidtipo($id);
			$OTipoEmpleadoEL->setdescripcion($_POST["txtDescripcion"]);
			$res=$this->OTipoEmpleadoDAL->Modificar_TipoEmpleado($OTipoEmpleadoEL);
			if ($res=1){
				header ("Location: ../Presentacion/ListarTipoEmpleado.php?accion=all");
			}
		}
		public function EliminarTipoEmpleado($id){
			$resp=$this->OTipoEmpleadoDAL->Eliminar_TipoEmpleado($id);
			if ($res=1){
				header ("Location: ../Presentacion/ListarTipoEmpleado.php?accion=all");
			}
			
		}

		public function ListaTipoEmpleado($criterio){
			return $this->OTipoEmpleadoDAL->Lista_TipoEmpleado($criterio);
		}
		public function ObtenerTipoEmpleado($id){
			return $this->OTipoEmpleadoDAL->Obtener_TipoEmpleado($id);
		}
	}



?>