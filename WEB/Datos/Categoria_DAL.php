<?php 
	/**
	* 
	*/
	include_once 'GestionDatos.php';

	class Categoria_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Categoria($valor){
			
			$campos="nombre_categoria,descripcion_categoria";
			$entidad="categoria";
			return $this->GD->GrabarDatos($entidad,$campos,$valor);

		}
		public function Lista_Categoria($Criterio){
			$campos="idcategoria,nombre_categoria,descripcion_categoria";
			$camposfiltro="nombre_categoria";
			return $this->GD->ListarDatosBusqueda("categoria",$campos,$camposfiltro,$Criterio);
		}
		public function Obtener_Categoria($id){
			return $this->GD->Obtener("idcategoria",$id);
		}
	}
 ?>