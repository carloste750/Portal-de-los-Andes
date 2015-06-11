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
	private $_est;

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
	public  function est(){
		return $this->_est;
	}


	public  function sidplato($valor){
		$this->_idplato=$valor;
	}
	public  function snombre($valor){
		$this->_nombre=$valor;
	}
	public  function sdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function scosto($valor){
		$this->_costo=$valor;
	}
	public  function simagen($valor){
		$this->_imagen=$valor;
	}
	public  function sidcategoria($valor){
		$this->_idcategoria=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
}
 ?>