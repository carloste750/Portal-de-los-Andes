<?php 
	/**
	* Code by CJ
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
	 class Empleado_BL 
	{
		var $OEmpleadoDAL;
		function __construct()
		{
			$this->OEmpleadoDAL=new Empleado_DAL();
		}
		public function GuardarEmpleado(){
			$OEmpleadoEL=new Empleado_EL();
			$OEmpleadoEL->setnombre($_POST["txtNombre"]);
			$OEmpleadoEL->setapellido($_POST["txtApellidos"]);
			$OEmpleadoEL->setdni($_POST["txtDni"]);
			$OEmpleadoEL->setdireccion($_POST["txtDireccion"]);
			$OEmpleadoEL->settelefono($_POST["txtTelefono"]);
			$OEmpleadoEL->setemail($_POST["txtEmail"]);
			$OEmpleadoEL->setusuario($_POST["txtUsuario"]);
			$OEmpleadoEL->setcontrasenia($_POST["txtContrasenia"]);
			$OEmpleadoEL->setidtipoempleado($_POST["lstTipoempleado"]);

			$res=$this->OEmpleadoDAL->Guardar_Empleado($OEmpleadoEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoEmpleado.php?mensaje=¡Guardado Correcto!&accion=all");
			}else{
				echo "No se pudo Guardar";
			}
		}
		public function ModificarEmpleado($id){
			$OEmpleadoEL=new Empleado_EL();
			$OEmpleadoEL->setidEmpleado($id);
			$OEmpleadoEL->setnombre($_POST["txtNombre"]);
			$OEmpleadoEL->setapellido($_POST["txtApellidos"]);
			$OEmpleadoEL->setdni($_POST["txtDni"]);
			$OEmpleadoEL->setdireccion($_POST["txtDireccion"]);
			$OEmpleadoEL->settelefono($_POST["txtTelefono"]);
			$OEmpleadoEL->setemail($_POST["txtEmail"]);
			$OEmpleadoEL->setusuario($_POST["txtUsuario"]);
			$OEmpleadoEL->setcontrasenia($_POST["txtContrasenia"]);
			$OEmpleadoEL->setidtipoempleado($_POST["lstTipoempleado"]);

			$res=$this->OEmpleadoDAL->Modificar_Empleado($OEmpleadoEL);
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