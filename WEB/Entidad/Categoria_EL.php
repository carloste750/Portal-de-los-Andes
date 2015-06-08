<?php 
/**
* 
*/
class CategoriaEL 
{
	//Atributos
	private $_idcategoria;
	private $_nombre;
	private $_descripcion;

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


	
	public function idcategoria($valor){
		$this->_idcategoria=$valor;
	}
	public function nombre($valor){
		$this->_nombre=$valor;
	}
	public function descripcion($valor){
		$this->_descripcion=$valor;
	}

}

 ?>