<?php 
	/**
	* Code by CJ
	*/
	include_once '../Datos/Categoria_DAL.php';
	include_once '../Entidad/Categoria_EL.php';
	$OCategoria_BL=new Categoria_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OCategoria_BL->GuardarCategoria();
		}
		if($_GET["accion"]=='Modificar'){
			$OCategoria_BL->ModificarCategoria($_GET["id"]);
		}
		if($_GET["accion"]=='Eliminar'){
			$OCategoria_BL->EliminarCategoria($_GET["id"]);
		}
	}

	 class Categoria_BL 
	{
		var $OCategoriaDAL;
		function __construct()
		{
			$this->OCategoriaDAL=new Categoria_DAL();
		}
		public function GuardarCategoria(){
			$OCategoriaEL=new Categoria_EL();
			$OCategoriaEL->snombre($_POST["txtNombre"]);
			$OCategoriaEL->sdescripcion($_POST["txtDescripcion"]);

			$res=$this->OCategoriaDAL->Guardar_Categoria($OCategoriaEL);
			if ($res=1){
				header ("Location: ../Presentacion/NuevoCategoria.php?mensaje=¡Guardado Correcto!");
			}else{
				header ("Location: ../Presentacion/NuevoCategoria.php?mensaje=!Error: No pudimos guardar¡");
			}	
		}
		public function ModificarCategoria($id){
			$OCategoriaEL=new Categoria_EL();
			$OCategoriaEL->sidcategoria($id);
			$OCategoriaEL->snombre($_POST["txtNombre"]);
			$OCategoriaEL->sdescripcion($_POST["txtDescripcion"]);
			$res=$this->OCategoriaDAL->Modificar_Categoria($OCategoriaEL);
			if ($res=1){
				header ("Location: ../Presentacion/ListarCategoria.php?accion=all");
			}
			
				
		}
		public function EliminarCategoria($id){
			$resp=$this->OCategoriaDAL->Eliminar_Categoria($id);
			if ($res=1){
				header ("Location: ../Presentacion/ListarCategoria.php?accion=all");
			}
			
		}

		public function ListaCategoria($criterio){
			return $this->OCategoriaDAL->Lista_Categoria($criterio);
		}
		public function ObtenerCategoria($id){
			return $this->OCategoriaDAL->Obtener_Categoria($id);
		}
	}



?>