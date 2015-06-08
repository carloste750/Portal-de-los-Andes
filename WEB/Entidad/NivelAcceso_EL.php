<?php 
/**
* Code By CJ
*/
class NivelAcceso_EL 
{
	
	//Atributos
	private $_idnivel;
	private $_nombre;
	private $_descripcion;
	

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idnivel(){
		return $this->_idnivel;
	}
	public  function nombre(){
		return $this->_nombre;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}


	public  function idnivel($valor){
		$this->_idnivel=$valor;
	}
	public  function nombre($valor){
		$this->_nombre=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	
	
	
}
 ?>