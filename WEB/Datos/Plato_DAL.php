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
				idcategoria"
			;
			$atributos="'".$valor->nombre()."',
				'".$valor->descripcion()."',
				'".$valor->costo()."',
				'".$valor->imagen()."',
				'".$valor->idcategoria()."'
				"
			;
			return $this->GD->GrabarDatos($entidad,$campos,$atributos);

		}
		public function Modificar_Plato($valor){
			$entidad="Plato";
			$condicion="idPlato='".$valor->idPlato()."'";
			$campos="nombre_Plato='".$valor->nombre()."',".
					"descripcion_Plato='".$valor->descripcion()."',".
					"costo_Plato='".$valor->costo()."',".
					"imagen_Plato='".$valor->imagen()."',".
					"idcategoria='".$valor->idcategoria()."'"
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
			$campos="nombre_Plato,
				descripcion_Plato,
				costo_Plato,
				imagen_Plato,
				idcategoria";
			$camposfiltro="nombre_Plato,descripcion_Plato,costo_Plato";
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