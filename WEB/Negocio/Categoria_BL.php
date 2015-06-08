<?php 
	/**
	* 
	*/
	include_once '../Datos/Categoria_DAL.php';
	$OCategoria_BL=new Categoria_BL();

	if($_GET["accion"]!=null){
		if($_GET["accion"]=='Grabar'){
			$OCategoria_BL->GuardarCategoria();
		}
		if($_GET["accion"]=='Modificar'){
			
		}
	}

	/**
	* 
	*/
	 class Categoria_BL 
	{
		var $OCategoriaDAL;
		function __construct()
		{
			$this->OCategoriaDAL=new Categoria_DAL();
		}
		public function GuardarCategoria(){
			$this->OCategoriaDAL->Guardar_Categoria("'".$_POST["txtNombre"]."','".$_POST["txtDescripcion"]."'");
				
		}

		public function ListaCategoria($criterio){
			return $this->OCategoriaDAL->Lista_Categoria($criterio);
		}
		public function Obtener($id){
			return $this->OCategoriaDAL->Obtener($id);
		}
	}



?>