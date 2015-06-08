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


	public  function idcarta($valor){
		$this->_idcarta=$valor;
	}
	public  function mensaje($valor){
		$this->_mensaje=$valor;
	}
	public  function fecha($valor){
		$this->_fecha=$valor;
	}
	public  function idhorario(){
		return $this->_idhorario;
	}
	
	
	
}
 ?>