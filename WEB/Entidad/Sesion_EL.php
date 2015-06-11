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
	private $_est;

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
	public  function est(){
		return $this->_est;
	}


	public  function sidsesion($valor){
		$this->_idsesion=$valor;
	}
	public  function sfechainicio($valor){
		$this->_fechainicio=$valor;
	}
	public  function shorainicio($valor){
		$this->_horainicio=$valor;
	}
	public  function sfechafin($valor){
		$this->_fechafin=$valor;
	}
	public  function shorafin($valor){
		$this->_horafin=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
}
 ?>