<?php 
/**
* Code By CJ
*/
class Informacion_EL 
{
	
	//Atributos
	private $_idinformacion;
	private $_nombreempresa;
	

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
	

	public  function idinformacion($valor){
		$this->_idinformacion=$valor;
	}
	public  function nombreempresa($valor){
		$this->_nombreempresa=$valor;
	}

}
 ?>