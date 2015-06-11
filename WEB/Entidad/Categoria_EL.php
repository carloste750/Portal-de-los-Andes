<?php 
/**
* 
*/
class Categoria_EL 
{
	//Atributos
	private $_idcategoria="";
	private $_nombre="";
	private $_descripcion="";

	//Constructor
	function __construct()
	{
		
	}

	//Metodos GET y SET
	public function idcategoria(){
		return $this->_idcategoria;
	}
	public function nombre(){
		return $this->_nombre;
	}
	public function descripcion(){
		return $this->_descripcion;
	}


	
	public function sidcategoria($valor){
		$this->_idcategoria=$valor;
	}
	public function snombre($valor){
		$this->_nombre=$valor;
	}
	public function sdescripcion($valor){
		$this->_descripcion=$valor;
	}

}

 ?>