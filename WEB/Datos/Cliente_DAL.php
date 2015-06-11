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
				contrasenia_Cliente"
			;
			$atributos="'".$valor->nombre()."',
				'".$valor->apellido()."',
				'".$valor->dni()."',
				'".$valor->telefono()."',
				'".$valor->email()."',
				'".$valor->usuario."',
				'".$valor->contraseña()."'
				"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Cliente($valor){
			$entidad="Cliente";
			$condicion="idcliente='".$valor->idcliente()."'";
			$campos="nombre_Cliente='".$valor->nombre()."',".
					"apellido_Cliente='".$valor->apellido()."',".
					"dni_Cliente='".$valor->dni()."',".
					"telefono_Cliente='".$valor->dni()."',".
					"email_Cliente='".$valor->dni()."',".
					"usuario_Cliente='".$valor->dni()."',".
					"contrasenia_Cliente='".$valor->dni()."'"
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
				contrasenia_Cliente";
			$camposfiltro="dni_Cliente,nombre_Cliente,apellido_Cliente";
			$nestado="est_Cliente";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Cliente($id){
			$entidad="Cliente";
			$campoid="idCliente";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>