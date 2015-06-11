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
	private $_est;

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
	public  function est(){
		return $this->_est;
	}

	public  function sidtipoempleado($valor){
		$this->_idtipoempleado=$valor;
	}
	public  function sdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function sidnivelacceso($valor){
		$this->_idnivelacceso=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
}
	
}
 ?>