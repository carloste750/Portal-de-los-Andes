<?php 
/**
* Code By CJ
*/
class PlatoReservacion_EL 
{
	
	//Atributos
	private $_idplatoreservacion;
	private $_cantidad;
	private $_idplato;
	private $_idreservacion;
	private $_est;
	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idplatoreservacion(){
		return $this->_idplatoreservacion;
	}
	public  function cantidad(){
		return $this->_cantidad;
	}
	public  function idplato(){
		return $this->_idplato;
	}
	public  function idreservacion(){
		return $this->_idreservacion;
	}
	public  function est(){
		return $this->_est;
	}



	public  function sidplatoreservacion($valor){
		$this->_idplatoreservacion=$valor;
	}
	public  function scantidad($valor){
		$this->_cantidad=$valor;
	}
	public  function sidplato($valor){
		$this->_idplato=$valor;
	}
	public  function sidreservacion($valor){
		$this->_idreservacion=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
}
 ?>