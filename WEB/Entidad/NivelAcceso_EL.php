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
	private $_est;

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
	public  function est(){
		return $this->_est;
	}



	public  function sidnivel($valor){
		$this->_idnivel=$valor;
	}
	public  function snombre($valor){
		$this->_nombre=$valor;
	}
	public  function sdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
	
	
	
}
 ?>