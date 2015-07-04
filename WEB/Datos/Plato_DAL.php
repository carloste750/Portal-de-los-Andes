<?php 
	/**
	*Code by CJ
	*/
	include_once 'GestionDatos.php';

	class Plato_DAL 
	{
		public $GD;
		function __construct()
		{
			$this->GD=new GestionDatos();
		}
		public function Guardar_Plato($valor){
			$entidad="Plato";

			$campos="nombre_Plato,
				descripcion_Plato,
				costo_Plato,
				imagen_Plato,
				categoria_idcategoria"
			;
			$atributos="'".$valor->getnombre()."',
				'".$valor->getdescripcion()."',
				'".$valor->getcosto()."',
				'".$valor->getimagen()."',
				'".$valor->getidcategoria()."'
				"
			;
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Plato($valor){
			$entidad="Plato";
			$condicion="idPlato='".$valor->getidPlato()."'";
			$campos="nombre_Plato='".$valor->getnombre()."',".
					"descripcion_Plato='".$valor->getdescripcion()."',".
					"costo_Plato='".$valor->getcosto()."',".
					"imagen_Plato='".$valor->getimagen()."',".
					"categoria_idcategoria='".$valor->getidcategoria()."'"
			;
			return $this->GD->ModificarDatos($entidad,$campos,$condicion);

		}
		public function Eliminar_Plato($id){
			$entidad="Plato";
			$campoid="idPlato";
			$campoest="est_Plato";
			return $this->GD->EliminarDatos($entidad,$campoid,$campoest,$id);

		}
		public function Lista_Plato($Criterio){
			$entidad="Plato";
			$campos="idplato,nombre_Plato,
				descripcion_Plato,
				costo_Plato,
				imagen_Plato,
				categoria_idcategoria";
			$camposfiltro="nombre_Plato or descripcion_Plato or costo_Plato";
			$nestado="est_Plato";
			return $this->GD->ListarDatosBusqueda($entidad,$campos,$camposfiltro,$Criterio,$nestado);
		}
		public function Obtener_Plato($id){
			$entidad="Plato";
			$campoid="idPlato";
			return $this->GD->Obtener($entidad,$campoid,$id);
		}
	}
 ?>