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
	public  function getidplato(){
		return $this->_idplato;
	}
	public  function getnombre(){
		return $this->_nombre;
	}
	public  function getdescripcion(){
		return $this->_descripcion;
	}
	public  function getcosto(){
		return $this->_costo;
	}
	public  function getimagen(){
		return $this->_imagen;
	}
	public  function getidcategoria(){
		return $this->_idcategoria;
	}
	public  function getest(){
		return $this->_est;
	}


	public  function setidplato($valor){
		$this->_idplato=$valor;
	}
	public  function setnombre($valor){
		$this->_nombre=$valor;
	}
	public  function setdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function setcosto($valor){
		$this->_costo=$valor;
	}
	public  function setimagen($valor){
		$this->_imagen=$valor;
	}
	public  function setidcategoria($valor){
		$this->_idcategoria=$valor;
	}
	public  function setest($valor){
		$this->_est=$valor;
	}
}
 ?>