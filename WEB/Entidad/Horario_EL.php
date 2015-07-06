<?php 
/**
* Code By CJ
*/
class Horario_EL 
{
	
	//Atributos
	private $_idhorario;
	private $_nombre;
	private $_descripcion;
	private $_horainicio;
	private $_horafin;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function getidhorario(){
		return $this->_idhorario;
	}
	public  function getnombre(){
		return $this->_nombre;
	}
	public  function getdescripcion(){
		return $this->_descripcion;
	}
	public  function gethorainicio(){
		return $this->_horainicio;
	}
	public  function gethorafin(){
		return $this->_horafin;
	}
	public  function getest(){
		return $this->_est;
	}
	

	public  function setidhorario($valor){
		$this->_idhorario=$valor;
	}
	public  function setnombre($valor){
		$this->_nombre=$valor;
	}
	public  function setdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function sethorainicio($valor){
		$this->_horainicio=$valor;
	}
	public  function sethorafin($valor){
		$this->_horafin=$valor;
	}
	public  function setest($valor){
		$this->_est=$valor;
	}
	
	
}
 ?>