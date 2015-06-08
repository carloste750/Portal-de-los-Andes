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



	public  function idsucursal($valor){
		$this->_idsucursal=$valor;
	}
	public  function imagen($valor){
		$this->_imagen=$valor;
	}
	public  function direccion($valor){
		$this->_direccion=$valor;
	}
}
 ?>