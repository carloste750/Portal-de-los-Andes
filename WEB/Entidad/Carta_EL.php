<?php 
/**
* Code By CJ
*/
class NivelAcceso_EL 
{
	
	//Atributos
	private $_idcarta;
	private $_mensaje;
	private $_fecha;
	private $_idhorario;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idcarta(){
		return $this->_idcarta;
	}
	public  function mensaje(){
		return $this->_mensaje;
	}
	public  function fecha(){
		return $this->_fecha;
	}
	public  function idhorario(){
		return $this->_idhorario;
	}
	public  function est(){
		return $this->_est;
	}


	public  function sidcarta($valor){
		$this->_idcarta=$valor;
	}
	public  function smensaje($valor){
		$this->_mensaje=$valor;
	}
	public  function sfecha($valor){
		$this->_fecha=$valor;
	}
	public  function sidhorario($valor){
		$this->_idhorario=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
	
	
	
}
 ?>