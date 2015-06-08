<?php 
/**
* Code By CJ
*/
class TipoEmpleado_EL 
{
	
	//Atributos
	private $_idtipoempleado;
	private $_descripcion;
	private $_idnivelacceso;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idtipoempleado(){
		return $this->_idtipoempleado;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	public  function idnivelacceso(){
		return $this->_idnivelacceso;
	}
	
	




	public  function idtipoempleado($valor){
		$this->_idtipoempleado=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function idnivelacceso($valor){
		$this->_idnivelacceso=$valor;
	}
	
	
}
 ?>