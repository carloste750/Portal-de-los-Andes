<?php 
/**
* Code By CJ
*/
class PlatoPedido_EL 
{
	
	//Atributos
	private $_idplatopedido;
	private $_cantidad;
	private $_idplato;
	private $_idpedido;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idplatopedido(){
		return $this->_idplatopedido;
	}
	public  function cantidad(){
		return $this->_cantidad;
	}
	public  function idplato(){
		return $this->_idplato;
	}
	public  function idpedido(){
		return $this->_idpedido;
	}
	


	public  function idplatopedido($valor){
		$this->_idplatopedido=$valor;
	}
	public  function cantidad($valor){
		$this->_cantidad=$valor;
	}
	public  function idplato($valor){
		$this->_idplato=$valor;
	}
	public  function idpedido($valor){
		$this->_idpedido=$valor;
	}
}
 ?>