<?php 
/**
* Code By CJ
*/
class Plato_EL 
{
	
	//Atributos
	private $_idplato;
	private $_nombre;
	private $_descripcion;
	private $_costo;
	private $_imagen;
	private $_idcategoria;


	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idplato(){
		return $this->_idplato;
	}
	public  function nombre(){
		return $this->_nombre;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	public  function costo(){
		return $this->_costo;
	}
	public  function imagen(){
		return $this->_imagen;
	}
	public  function idcategoria(){
		return $this->_idcategoria;
	}


	public  function idplato($valor){
		$this->_idplato=$valor;
	}
	public  function nombre($valor){
		$this->_nombre=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function costo($valor){
		$this->_costo=$valor;
	}
	public  function imagen($valor){
		$this->_imagen=$valor;
	}
	public  function idcategoria($valor){
		$this->_idcategoria=$valor;
	}
}
 ?>