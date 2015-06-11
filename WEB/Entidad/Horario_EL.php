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
	private $_est

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idhorario(){
		return $this->_idhorario;
	}
	public  function nombre(){
		return $this->_nombre;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	public  function horainicio(){
		return $this->_horainicio;
	}
	public  function horafin(){
		return $this->_horafin;
	}
	public  function est(){
		return $this->_est;
	}
	

	public  function sidhorario($valor){
		$this->_idhorario=$valor;
	}
	public  function snombre($valor){
		$this->_nombre=$valor;
	}
	public  function sdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function shorainicio($valor){
		$this->_horainicio=$valor;
	}
	public  function shorafin($valor){
		$this->_horafin=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
	
	
}
 ?>