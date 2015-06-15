
<?php 
	/**
	* 
	*/
	include_once '../Datos/Sucursal_DAL.php';
	include_once '../Entidad/Sucursal_EL.php';
	$OSucursal_BL=new Sucursal_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OSucursal_BL->GuardarSucursal();
		}
		if($_GET["accion"]=='Modificar'){
			$OSucursal_BL->ModificarSucursal($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OSucursal_BL->EliminarSucursal($_GET["id"]);
		}
	}

	/**
	* 
	*/
	 class Sucursal_BL 
	{
		var $OSucursalDAL;
		function __construct()
		{
			$this->OSucursalDAL=new Sucursal_DAL();
		}
		public function GuardarSucursal(){
			$OSucursalEL=new Sucursal_EL();
			$OSucursalEL->simagen($_POST["txtImagen"]);
			$OSucursalEL->sdireccion($_POST["txtDireccion"]);

			$res=$this->OSucursalDAL->Guardar_Sucursal($OSucursalEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoSucursal.php?mensaje=¡Guardado Correcto!");
			}else{
				header ("Location: ../Presentacion/NuevoSucursal.php?mensaje=!Error: No pudimos guardar¡");
			}	
		}
		public function ModificarSucursal($id){
			$OSucursalEL=new Sucursal_EL();
			$OSucursalEL->sidsucursal($id);
			$OSucursalEL->simagen($_POST["txtImagen"]);
			$OSucursalEL->sdireccion($_POST["txtDireccion"]);
			$res=$this->OSucursalDAL->Modificar_Sucursal($OSucursalEL);
			if ($res=1){
				header ("Location: ../Presentacion/ListarSucursal.php?accion=all");
			}
			
				
		}
		public function EliminarSucursal($id){
			$resp=$this->OSucursalDAL->Eliminar_Sucursal($id);
			if ($res=1){
				header ("Location: ../Presentacion/ListarSucursal.php?accion=all");
			}
			
		}

		public function ListaSucursal($criterio){
			return $this->OSucursalDAL->Lista_Sucursal($criterio);
		}
		public function ObtenerSucursal($id){
			return $this->OSucursalDAL->Obtener_Sucursal($id);
		}
	}



?>