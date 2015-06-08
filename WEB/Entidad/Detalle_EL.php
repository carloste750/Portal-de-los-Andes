<?php 
/**
* Code By CJ
*/
class Detalle_EL 
{
	
	//Atributos
	private $_iddetalle;
	private $_nombre;
	private $_descripcion;
	

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function iddetalle(){
		return $this->_iddetalle;
	}
	public  function nombre(){
		return $this->_nombre;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	


	public  function iddetalle($valor){
		$this->_iddetalle=$valor;
	}
	public  function nombre($valor){
		$this->_nombre=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	
	
}
 ?>