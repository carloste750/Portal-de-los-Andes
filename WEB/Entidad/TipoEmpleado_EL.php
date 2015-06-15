<?php 
/**
* Code By CJ
*/
class TipoEmpleado_EL 
{
	
	//Atributos
	private $_idtipo;
	private $_descripcion;
	private $_idnivelacceso;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idtipo(){
		return $this->_idtipo;
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

	public  function sidtipo($valor){
		$this->_idtipo=$valor;
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
	
?>