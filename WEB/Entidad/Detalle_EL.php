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
	private $_est;

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
	public  function est(){
		return $this->_est;
	}
	


	public  function siddetalle($valor){
		$this->_iddetalle=$valor;
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