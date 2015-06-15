<?php 
	/**
	* 
	*/
	include_once '../Datos/Empleado_DAL.php';
	include_once '../Entidad/Empleado_EL.php';
	$OEmpleado_BL=new Empleado_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OEmpleado_BL->GuardarEmpleado();
		}
		if($_GET["accion"]=='Modificar'){
			$OEmpleado_BL->ModificarEmpleado($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OEmpleado_BL->EliminarEmpleado($_GET["id"]);
		}
	}

	/**
	* 
	*/
	 class Empleado_BL 
	{
		var $OEmpleadoDAL;
		function __construct()
		{
			$this->OEmpleadoDAL=new Empleado_DAL();
		}
		public function GuardarEmpleado(){
			$OEmpleadoEL=new Empleado_EL();
			$OEmpleadoEL->snombre($_POST["txtNombre"]);
			$OEmpleadoEL->sapellido($_POST["txtApellidos"]);
			$OEmpleadoEL->sdni($_POST["txtDni"]);
			$OEmpleadoEL->sdireccion($_POST["txtDireccion"]);
			$OEmpleadoEL->stelefono($_POST["txtTelefono"]);
			$OEmpleadoEL->semail($_POST["txtEmail"]);
			$OEmpleadoEL->susuario($_POST["txtUsuario"]);
			$OEmpleadoEL->scontrasenia($_POST["txtContrasenia"]);
			$OEmpleadoEL->sidsucursal($_POST["lstSucursal"]);
			$OEmpleadoEL->sidtipoempleado($_POST["lstTipoempleado"]);

			$res=$this->OEmpleadoDAL->Guardar_Empleado($OEmpleadoEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoEmpleado.php?mensaje=¡Guardado Correcto!&accion=all");
			}else{
				echo "No se pudo Guardar";
			}
		}
		public function ModificarEmpleado($id){
			$OEmpleadoEL=new Empleado_EL();
			$OEmpleadoEL->sidEmpleado($id);
			$OEmpleadoEL->snombre($_POST["txtNombre"]);
			$OEmpleadoEL->sapellido($_POST["txtApellidos"]);
			$OEmpleadoEL->sdni($_POST["txtDni"]);
			$OEmpleadoEL->sdireccion($_POST["txtDireccion"]);
			$OEmpleadoEL->stelefono($_POST["txtTelefono"]);
			$OEmpleadoEL->semail($_POST["txtEmail"]);
			$OEmpleadoEL->susuario($_POST["txtUsuario"]);
			$OEmpleadoEL->scontrasenia($_POST["txtContrasenia"]);
			$OEmpleadoEL->sidsucursal($_POST["lstSucursal"]);
			$OEmpleadoEL->sidtipoempleado($_POST["lstTipoempleado"]);
			if ($res=1){
				header ("Location: ../Presentacion/ListarEmpleado.php?accion=all");
			}else{
				echo "No se pudo Guardar";
			}	
			
				
		}
		public function EliminarEmpleado($id){
			$resp=$this->OEmpleadoDAL->Eliminar_Empleado($id);
			header ("Location: ../Presentacion/ListarEmpleado.php?accion=all");
			
		}

		public function ListaEmpleado($criterio){
			return $this->OEmpleadoDAL->Lista_Empleado($criterio);
		}
		public function ObtenerEmpleado($id){
			return $this->OEmpleadoDAL->Obtener_Empleado($id);
		}
	}



?>