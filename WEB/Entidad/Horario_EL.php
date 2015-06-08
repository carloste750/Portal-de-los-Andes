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


	public  function idhorario($valor){
		$this->_idhorario=$valor;
	}
	public  function nombre($valor){
		$this->_nombre=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function horainicio($valor){
		$this->_horainicio=$valor;
	}
	public  function horafin($valor){
		$this->_horafin=$valor;
	}
	
	
	
}
 ?>