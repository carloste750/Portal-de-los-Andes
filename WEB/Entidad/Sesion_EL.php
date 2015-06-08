<?php 
/**
* Code By CJ
*/
class Informacion_EL 
{
	
	//Atributos
	private $_idsesion;
	private $_fechainicio;
	private $_horainicio;
	private $_fechafin;
	private $_horafin;
	

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idsesion(){
		return $this->_idsesion;
	}
	public  function fechainicio(){
		return $this->_fechainicio;
	}
	public  function horainicio(){
		return $this->_horainicio;
	}
	public  function fechafin(){
		return $this->_fechafin;
	}
	public  function horafin(){
		return $this->_horafin;
	}
	

	public  function idsesion($valor){
		$this->_idsesion=$valor;
	}
	public  function fechainicio($valor){
		$this->_fechainicio=$valor;
	}
	public  function horainicio($valor){
		$this->_horainicio=$valor;
	}
	public  function fechafin($valor){
		$this->_fechafin=$valor;
	}
	public  function horafin($valor){
		$this->_horafin=$valor;
	}
}
 ?>