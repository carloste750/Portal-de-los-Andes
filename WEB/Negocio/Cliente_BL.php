<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/Cliente_DAL.php';
	include_once '../Entidad/Cliente_EL.php';
	include_once './Sesion_BL.php';

	$OCliente_BL=new Cliente_BL();

	if(isset($_GET["accion"])){
		if($_GET["accion"]=='Grabar'){
			$OCliente_BL->GuardarCliente();
		}
		if($_GET["accion"]=='Modificar'){
			$OCliente_BL->ModificarCliente($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OCliente_BL->EliminarCliente($_GET["id"]);
		}
		if($_GET["accion"]=='Verificar'){
			$OCliente_BL->VerificarCliente($_POST["txtusuario"],$_POST["txtcontraseña"]);
		}
	}

	class Cliente_BL 
	{
		private $OClienteDAL;
		private $OSesion_BL;
		function __construct()
		{
			$this->OClienteDAL=new Cliente_DAL();
			$this->OSesion_BL=new Sesion_BL();
		}
		public function GuardarCliente(){
			$OClienteEL=new Cliente_EL();
			$OClienteEL->setnombre($_POST["txtnombre"]);
			$OClienteEL->setapellido($_POST["txtapellido"]);
			$OClienteEL->setdni($_POST["txtdni"]);
			$OClienteEL->settelefono($_POST["txttelefono"]);
			$OClienteEL->setemail($_POST["txtemail"]);
			$OClienteEL->setusuario($_POST["txtusuario"]);
			$OClienteEL->setcontrasenia($_POST["txtcontrasenia"]);

			$res=$this->OClienteDAL->Guardar_Cliente($OClienteEL);
			if ($res=1){
				session_start();
				$this->OSesion_BL->insesion();
				$this->EstablecerCliente($OClienteEL->getnombre(),$OClienteEL->getusuario());
				$this->EstablecerEstado(true);
				header ("Location: ../Presentacion/Index.php");
			}else{
				EstablecerEstado(false);
				header ("Location: ../Presentacion/NuevoCliente.php?mensaje=!Error: No pudimos Registrarte¡");
			}
		}
		public function ModificarCliente($id){
			$OClienteEL=new Cliente_EL();
			$OClienteEL->setnombre($_POST["txtnombre"]);
			$OClienteEL->setapellido($_POST["txtapellido"]);
			$OClienteEL->setdni($_POST["txtdni"]);
			$OClienteEL->settelefono($_POST["txttelefono"]);
			$OClienteEL->setemail($_POST["txtemail"]);
			$OClienteEL->setusuario($_POST["txtusuario"]);
			$OClienteEL->setcontrasenia($_POST["txtcontrasenia"]);

			$res=$this->OClienteDAL->Modificar_Cliente($OClienteEL);
			if ($res=1){
				EstablecerCliente($OClienteEL->getnombre(),$OClienteEL->getusuario());
				EstablecerEstado();
				header ("Location: ../Presentacion/Index.php");
			}else{
				EstablecerEstado(false);
			}
			
				
		}
		public function EliminarCliente($id){
			$resp=$this->OClienteDAL->Eliminar_Cliente($id);
			if ($res=1){
				header ("Location: ../Presentacion/ListarCliente.php?accion=all");
			}
		}

		public function VerificarCliente($user,$password){
			/*Entero=Retorna 1 si el cliente existe y 0 si no existe*/
			$res=$this->OClienteDAL->Verificar_Cliente($user,$password);
	
			if($res>=1){
				/*Coleccion=retorna el nombre del cliente dado el nombre de usuario*/
				session_start();
				$valores=$this->OClienteDAL->Obtener_Datos_Cliente($user);
				$fila=mysql_fetch_array($valores);
				$nombre=$fila['nombre_cliente'];

				/*Estable datos de sesion*/
				$this->EstablecerCliente($nombre,$user);
				$this->EstablecerEstado(true);
				header ("Location: ../Presentacion/Index.php");
			}else if($res=0){
				header ("Location: ../Presentacion/LoginCliente.php?mensaje=Usuario o Contraseña Invalidos");
			}
		}

		public function ListaCliente($criterio){
			return $this->OClienteDAL->Lista_Cliente($criterio);
		}

		public function ObtenerCliente($id){
			return $this->OClienteDAL->Obtener_Cliente($id);
		}

		public function EstablecerCliente($Nombre,$Usuario){
			/*Variables de Sesion*/
			$this->OSesion_BL->setsesion("nombre_cliente",$Nombre);
			$this->OSesion_BL->setsesion("usuario_cliente",$Usuario);
		}

		public function EstablecerEstado($value){
			/*Estado de Sesion*/
			$this->OSesion_BL->setsesion("estado",$value);
		}

	}



?>