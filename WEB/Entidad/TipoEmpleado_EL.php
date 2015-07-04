<?php 
/**
* Code By CJ
*/
class TipoEmpleado_EL 
{
	
	//Atributos
	private $_idtipo;
	private $_descripcion;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function getidtipo(){
		return $this->_idtipo;
	}
	public  function getdescripcion(){
		return $this->_descripcion;
	}
	public  function getest(){
		return $this->_est;
	}

	public  function setidtipo($valor){
		$this->_idtipo=$valor;
	}
	public  function setdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function setest($valor){
		$this->_est=$valor;
	}
}
	
?>