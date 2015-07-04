<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/Plato_DAL.php';
	include_once '../Entidad/Plato_EL.php';
	$OPlato_BL=new Plato_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OPlato_BL->GuardarPlato();
		}
		if($_GET["accion"]=='Modificar'){
			$OPlato_BL->ModificarPlato($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OPlato_BL->EliminarPlato($_GET["id"]);
		}
	}

	 class Plato_BL 
	{
		var $OPlatoDAL;
		function __construct()
		{
			$this->OPlatoDAL=new Plato_DAL();
		}
		public function GuardarPlato(){
			$OPlatoEL=new Plato_EL();
			$OPlatoEL->setnombre($_POST["txtnombre"]);
			$OPlatoEL->setdescripcion($_POST["txtdescripcion"]);
			$OPlatoEL->setcosto($_POST["txtcosto"]);
			$OPlatoEL->setimagen($_POST["txtimagen"]);
			$OPlatoEL->setidcategoria($_POST["lstidcategoria"]);

			$res=$this->OPlatoDAL->Guardar_Plato($OPlatoEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoPlato.php?mensaje=¡Guardado Correcto!&accion=all");
			}else{
				echo "No se pudo Guardar";
			}
		}
		public function ModificarPlato($id){
			$OPlatoEL=new Plato_EL();
			$OPlatoEL->setidPlato($id);
			$OPlatoEL->setnombre($_POST["txtnombre"]);
			$OPlatoEL->setdescripcion($_POST["txtdescripcion"]);
			$OPlatoEL->setcosto($_POST["txtcosto"]);
			$OPlatoEL->setimagen($_POST["txtimagen"]);
			$OPlatoEL->setidcategoria($_POST["lstidcategoria"]);

			$res=$this->OPlatoDAL->Modificar_Plato($OPlatoEL);
			if ($res=1){
				header ("Location: ../Presentacion/ListarPlato.php?accion=all");
			}else{
				echo "No se pudo Guardar";
			}	
			
				
		}
		public function EliminarPlato($id){
			$resp=$this->OPlatoDAL->Eliminar_Plato($id);
			header ("Location: ../Presentacion/ListarPlato.php?accion=all");
		}

		public function ListaPlato($criterio){
			return $this->OPlatoDAL->Lista_Plato($criterio);
		}
		public function ObtenerPlato($id){
			return $this->OPlatoDAL->Obtener_Plato($id);
		}
	}



?>