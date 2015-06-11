<?php 
/**
* Code By CJ
*/
class Informacion_EL 
{
	
	//Atributos
	private $_idinformacion;
	private $_nombreempresa;
	private $_iddetalle;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idinformacion(){
		return $this->_idinformacion;
	}
	public  function nombreempresa(){
		return $this->_nombreempresa;
	}
	public  function iddetalle(){
		return $this->_iddetalle;
	}
	

	public  function sidinformacion($valor){
		$this->_idinformacion=$valor;
	}
	public  function snombreempresa($valor){
		$this->_nombreempresa=$valor;
	}
	public  function siddetalle($valor){
		$this->_iddetalle=$valor;
	}

}
 ?>