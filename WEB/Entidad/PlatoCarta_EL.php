<?php 
/**
* Code By CJ
*/
class Informacion_EL 
{
	
	//Atributos
	private $_idplato;
	private $_idcarta;
	

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idplato(){
		return $this->_idplato;
	}
	public  function idcarta(){
		return $this->_idcarta;
	}
	

	public  function sidplato($valor){
		$this->_idplato=$valor;
	}
	public  function sidcarta($valor){
		$this->_idcarta=$valor;
	}

}
 ?>