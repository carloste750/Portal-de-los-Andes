<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';
	

	class Cliente_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Cliente($valor){
			$entidad="Cliente";

			$campos="nombre_Cliente,
				apellido_Cliente,
				dni_Cliente,
				telefono_Cliente,
				email_Cliente,
				usuario_Cliente,
				contraseña_Cliente"
			;
			$atributos="'".$valor->getnombre()."',
				'".$valor->getapellido()."',
				'".$valor->getdni()."',
				'".$valor->gettelefono()."',
				'".$valor->getemail()."',
				'".$valor->getusuario()."',
				'".$valor->getcontrasenia()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Cliente($valor){
			$entidad="Cliente";
			$condicion="idcliente='".$valor->getidcliente()."'";
			$campos="nombre_Cliente='".$valor->getnombre()."',".
					"apellido_Cliente='".$valor->getapellido()."',".
					"dni_Cliente='".$valor->getdni()."',".
					"telefono_Cliente='".$valor->gettelefono()."',".
					"email_Cliente='".$valor->getemail()."',".
					"usuario_Cliente='".$valor->getusuario()."',".
					"contraseña_Cliente='".$valor->getcontrasenia()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Cliente($id){
			$entidad="Cliente";
			$campoid="idCliente";
			$campoest="est_Cliente";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Cliente($Criterio){
			$entidad="Cliente";
			$campos="nombre_Cliente,
				apellido_Cliente,
				dni_Cliente,
				telefono_Cliente,
				email_Cliente,
				usuario_Cliente,
				contraseña_Cliente";
			$camposfiltro="dni_Cliente,nombre_Cliente,apellido_Cliente";
			$nestado="est_Cliente";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Cliente($id){
			$entidad="Cliente";
			$campos="idCliente";
			return $this->GD->Obtener($entidad,$campos,$id);
		}
		public function Obtener_Datos_Cliente($user){
			$entidad="Cliente";
			$campos="nombre_cliente";
			$nameuser="usuario_cliente";
			return $this->GD->Obtener($entidad,$campos,$nameuser,$user);
		}
		public function Verificar_Cliente($valueuser,$valuepassword){
			$entidad="cliente";
			$nameuser="usuario_cliente";
			$namepassword="contraseña_cliente";
			return $this->GD->Verificar($entidad,$nameuser,$namepassword,$valueuser,$valuepassword);
		}
	}
 ?>