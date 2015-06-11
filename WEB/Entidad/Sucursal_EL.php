<?php 
/**
* Code By CJ
*/
class Sucursal_EL 
{
	
	//Atributos
	private $_idsucursal;
	private $_imagen;
	private $_direccion;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idsucursal(){
		return $this->_idsucursal;
	}
	public  function imagen(){
		return $this->_imagen;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	public  function est(){
		return $this->_est;
	}


	public  function sidsucursal($valor){
		$this->_idsucursal=$valor;
	}
	public  function simagen($valor){
		$this->_imagen=$valor;
	}
	public  function sdireccion($valor){
		$this->_direccion=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
}
 ?>