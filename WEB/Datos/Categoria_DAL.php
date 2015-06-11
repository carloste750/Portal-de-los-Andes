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
			$entidad="categoria";

			$campos="nombre_categoria,
				descripcion_categoria"
			;

			$atributos="'".$valor->nombre()."',
				'".$valor->descripcion()."'"
			;
			
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Categoria($valor){
			$entidad="categoria";
			$condicion="idcategoria='".$valor->idcategoria()."'";
			$campos="nombre_categoria='".$valor->nombre()."',".
					"descripcion_categoria='".$valor->descripcion()."'";
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Categoria($id){
			$entidad="categoria";
			$campoid="idcategoria";
			$campoest="est_categoria";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Categoria($Criterio){
			$entidad="categoria";
			$campos="idcategoria,nombre_categoria,descripcion_categoria";
			$camposfiltro="nombre_categoria";
			$nestado="est_categoria";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Categoria($id){
			return $this->GD->Obtener("categoria","idcategoria",$id);
		}
	}
 ?>